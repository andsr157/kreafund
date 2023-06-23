<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Story extends CI_Controller
{

    public function uploadImage()
    {
        if (isset($_FILES['upload']['tmp_name'])) {
            $file = $_FILES['upload']['tmp_name'];
            $filename = $_FILES['upload']['name'];
            $fileNameArray = explode('.', $filename);
            $extension = end($fileNameArray);
            $newImageName = rand() . "." . $extension;
            $allowedExtension = array("jpg", "jpeg", "png", "JPG", "JPEG", "PNG");

            if (in_array($extension, $allowedExtension)) {
                move_uploaded_file($file, "./assets/img/story/" . $newImageName);
                $functionNumber = $_GET['CKEditorFuncNum'];
                $url = base_url() . "assets/img/story/" . $newImageName;
                $message = "";
                echo "<script type='text/javascript'>
                window.parent.CKEDITOR.tools.callFunction($functionNumber, '$url', '$message');
                </script>";
            }
        }
    }


    public function save_data()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('content', 'Content', 'callback_validate_ckeditor');
        $this->form_validation->set_rules('risk', 'Risk', 'required');

        // Custom validation rule for CKEditor content


        if ($this->form_validation->run() == FALSE) {
            $response = array(
                'status' => 'fail',
                'message' => validation_errors()
            );
        } else {
            $content = $this->input->post('content');
            $project_id = $this->input->post('project_id');
            $risk = $this->input->post('risk');

            $data = array(
                'content' => $content,
                'project_id' => $project_id,
                'risk' => $risk,
            );

            $this->db->insert('story', $data);

            if ($this->db->affected_rows() > 0) {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data berhasil disimpan',
                );
            } else {
                $response = array(
                    'status' => 'fail',
                    'message' => 'Data gagal disimpan'
                );
            }
        }

        echo json_encode($response);
    }


    public function update_data()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('content', 'Content', 'callback_validate_ckeditor');
        $this->form_validation->set_rules('risk', 'Risk', 'required');
        $this->form_validation->set_rules('story_id', 'Story ID', 'required');

        // Custom validation rule for CKEditor content

        if ($this->form_validation->run() == FALSE) {
            $response = array(
                'status' => 'fail',
                'message' => validation_errors()
            );
        } else {
            $content = $this->input->post('content');
            $project_id = $this->input->post('project_id');
            $risk = $this->input->post('risk');
            $story_id = $this->input->post('story_id');

            $data = array(
                'content' => $content,
                'project_id' => $project_id,
                'risk' => $risk,
            );

            $this->db->where('story_id', $story_id);
            $this->db->update('story', $data);

            if ($this->db->affected_rows() > 0) {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data berhasil diperbarui',
                );
            } else {
                $response = array(
                    'status' => 'fail',
                    'message' => 'Data gagal diperbarui'
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

    public function getData()
    {
        $id = $this->input->post('id'); // Ambil ID dari data yang dikirimkan melalui POST


        $data = $this->story_m->getDataById($id);

        if ($data) {
            $response['status'] = 'success';
            $response['data'] = $data;
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Data not found';
        }

        echo json_encode($response);
    }
}
