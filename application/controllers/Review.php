<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review extends CI_Controller
{


    public function preview()
    {
        $data['story'] = $this->story_m->getDataById($this->uri->segment(3));
        $data['project'] = $this->project_m->get($this->uri->segment(3));
        $data['rewards']  = $this->reward_m->getRewardWithPid($this->uri->segment(3));
        $this->template->load('template/template_clean', 'projects/project_admin_review', $data);
    }

    public function userPreview()
    {
        $data['story'] = $this->story_m->getDataById($this->uri->segment(3));
        $data['project'] = $this->project_m->get($this->uri->segment(3));
        $data['rewards']  = $this->reward_m->getRewardWithPid($this->uri->segment(3));
        $this->template->load('template/template_clean', 'projects/project_user_review', $data);
    }

    public function process()
    {
        $projectId = $this->uri->segment(4);
        $data['project'] = $this->project_m->get($projectId)->row();
        $this->template->load('template/template_admin', 'admin/project/verification', $data);
    }


    public function saveReviewDetail()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('content', 'Content', 'callback_validate_ckeditor');

        // Custom validation rule for CKEditor content


        if ($this->form_validation->run() == FALSE) {
            $response = array(
                'status' => 'fail',
                'message' => validation_errors()
            );
        } else {
            $content = $this->input->post('content');
            $project_id = $this->input->post('project_id');
            $type = $this->input->post('type');

            $data = array(
                'verification_desc' => $content,
                'project_id' => $project_id,
                'type' => $type,
            );

            $this->db->trans_start();
            $this->db->set('status', $type);
            $this->db->where('project_id', $project_id);
            $this->db->update('project');

            $this->db->insert('verification', $data);

            $this->db->trans_complete();


            if ($this->db->trans_status() === true) {
                $response = array(
                    'status' => 'success',
                    'message' => 'Review telah dikirimkan',
                );
            } else {
                $response = array(
                    'status' => 'fail',
                    'message' => 'Proses Review Gagal'
                );
            }
        }

        echo json_encode($response);
    }


    public function validate_ckeditor($value)
    {
        if (empty($value) || trim($value) == '') {
            $this->form_validation->set_message('validate_ckeditor', 'The {field} field is required.');
            return false;
        } else {
            return true;
        }
    }


    public function submit(){
        $check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->uri->segment(3));
		if ($check == true) {
            $status = $this->project_m->get_all($this->uri->segment(3))->row()->status;
            if ($status === 'rejected'){
                echo "<script>alert('maaf anda tidak dapat mensubmit<br>kembali karena project anda rejected')</script>";
                echo "<script>window.location='" . base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/launch') . "'</script>";
            }else{
                $this->db->set('status', 'pending');
                $this->db->where('project_id',$this->uri->segment(3));
                $this->db->update('project');

                if($this->db->affected_rows() > 0){
                    echo "<script>alert('project berhasil disubmit')</script>";
			        echo "<script>window.location='" . base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/launch') . "'</script>";
                }else{
                    echo "<script>alert('gagal mensubmit')</script>";
			        echo "<script>window.location='" . base_url('project/' . $this->session->userdata('username') . '/' . $this->uri->segment(3) . '/launch') . "'</script>";
                }
            }
        }else{
            redirect('home');
        }
    }

    public function acc(){
        $duration = intval($this->project_m->getDuration($this->uri->segment(3))->duration);
        $finish = calculate_datetime(date('Y-m-d H:i:s'),$duration);
        $this->db->set('status', 'accepted');
        $this->db->set('updated', date('Y-m-d H:i:s'));
        $this->db->set('finish', $finish);
        $this->db->where('project_id',$this->uri->segment(3));
        $this->db->update('project');
        if($this->db->affected_rows() > 0){
            echo "<script>alert('project berhasil di acc')</script>";
            echo "<script>window.location='" . base_url('projects/verification') . "'</script>";
        }else{
            echo "<script>alert('gagal mensubmit')</script>";
            echo "<script>window.location='" . base_url('projects/verification') . "'</script>";
        }
    }
}
