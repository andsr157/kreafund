<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-jENvGInSWXiZDTVeoXPvqlrx', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}


	public function donate()
	{
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->input->post('projectId'));
		if ($check == false) {
			$data['rewardId'] = $this->input->post('rewardId');
			$data['projectId'] = $this->input->post('projectId');
			$data['rewardTitle'] = $this->input->post('rewardTitle');
			$data['rewardAmount'] = $this->input->post('rewardAmount');
			$data['rewardImage'] = $this->input->post('rewardImage');
			$this->template->load('template/template_clean', 'donate/donate_detail', $data);
		} else {
			echo "<script>alert('Tidak bisa donate pada project sendiri')</script>";
			echo "<script>window.location='" . base_url('discovery') . "'</script>";
		}
	}

	public function specDonate()
	{
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->input->post('projectId'));
		if ($check == false) {
			$data['projectId'] = $this->input->post('projectId');
			$data['rewardId'] = $this->input->post('rewardId');
			$data['rewardTitle'] = $this->input->post('rewardTitle');
			$data['rewardAmount'] = $this->input->post('rewardAmount');
			$data['rewardImage'] = $this->input->post('rewardImage');
			$this->template->load('template/template_clean', 'donate/donate_detail', $data);
		} else {
			echo "<script>alert('Tidak bisa donate pada project sendiri')</script>";
			echo "<script>window.location='" . base_url('discovery') . "'</script>";
		}
	}

	public function pureDonate()
	{
		$check = $this->validasi->check_own_project($this->session->userdata('user_id'), $this->input->post('projectId'));
		if ($check == false) {
			$data['projectId'] = $this->input->post('projectId');
			$data['DonateAmount'] = $this->input->post('noReward');

			$this->template->load('template/template_clean', 'donate/puredonate', $data);
		}else{
			echo "<script>alert('Tidak bisa donate pada project sendiri')</script>";
			echo "<script>window.location='" . base_url('discovery') . "'</script>";
		}
	}

	public function token()
	{


		$projectId = $this->input->post('projectId');
		$rewardId = $this->input->post('rewardId');
		$backer = $this->input->post('backer');
		$amount = $this->input->post('amount');
		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $amount, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
			'id' => 'a1',
			'price' => $amount,
			'quantity' => 1,
			'name' => "Donate"
		);



		// Optional
		$item_details = array($item1_details);

		// Optional
		// $billing_address = array(
		//   'first_name'    => "Andri",
		//   'last_name'     => "Litani",
		//   'address'       => "Mangga 20",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16602",
		//   'phone'         => "081122334455",
		//   'country_code'  => 'IDN'
		// );

		// // Optional
		// $shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
			'first_name'    => $backer
			//   'last_name'     => "Litani",
			//   'email'         => "andri@litani.com",
			//   'phone'         => "081122334455",
			//   'billing_address'  => $billing_address,
			//   'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'day',
			'duration'  => 1
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function finish()
	{
		$result = json_decode($this->input->post('result_data'), true);
		$project_id = $this->input->post('project_id');
		$user_id = $this->input->post('backer_id');
		$rewardId = $this->input->post('reward_id');
		$data = [
			'order_id' => $result['order_id'],
			'amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result['va_numbers'][0]['bank'],
			'va_number' => $result['va_numbers'][0]['va_number'],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['status_code'],
			'project_id' => $project_id,
			'user_id' => $user_id,
			'reward_id' => $rewardId
		];

		$save = $this->db->insert('transaction', $data);

		if ($save) {
			echo '<script>alert("Pembayaran sukses");</script>';
			echo "<script>window.location='" . base_url('profile/backed') . "'</script>";
		} else {
			echo '<script>alert("fail");</script>';
		}
	}
}
