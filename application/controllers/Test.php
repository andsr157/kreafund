<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{
		$own = $this->validasi->check_own_project(4,1);
        if($own == true){
            redirect('home');
        }else{
            redirect('auth_user/login');
        }
	}

    public function itemdata(){
        $this->db->select('reward_item.*, reward_detail.qty');
        $this->db->from('reward_detail');
        $this->db->join('reward_item', 'reward_detail.reward_item_id = reward_item.reward_item_id');
        $this->db->where('reward_detail.reward_id', 15);
        $query = $this->db->get();
        var_dump($query->result()).die();
    }

    public function env_test()
    {
        echo "<h2>Testing Environment Variables</h2>";
        echo "<p><strong>DB_HOST:</strong> " . env('DB_HOST', 'NOT SET') . "</p>";
        echo "<p><strong>DB_USER:</strong> " . env('DB_USER', 'NOT SET') . "</p>";
        echo "<p><strong>DB_NAME:</strong> " . env('DB_NAME', 'NOT SET') . "</p>";
        echo "<p><strong>APP_BASE_URL:</strong> " . env('APP_BASE_URL', 'NOT SET') . "</p>";
        
        echo "<h3>Environment Sources:</h3>";
        echo "<p><strong>$_ENV availability:</strong> " . (empty($_ENV) ? 'Empty' : 'Available') . "</p>";
        echo "<p><strong>getenv() test:</strong> " . (getenv('DB_HOST') !== false ? getenv('DB_HOST') : 'NOT AVAILABLE') . "</p>";
        
        echo "<h3>Database Connection Test:</h3>";
        try {
            $this->load->database();
            echo "<p style='color: green;'>✅ Database connection successful!</p>";
            echo "<p>Connected to: " . $this->db->hostname . " / " . $this->db->database . "</p>";
        } catch (Exception $e) {
            echo "<p style='color: red;'>❌ Database connection failed: " . $e->getMessage() . "</p>";
        }
    }

	
	
}
