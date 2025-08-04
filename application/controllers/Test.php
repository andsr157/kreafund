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

    public function model_test()
    {
        echo "<h2>Testing Model Loading with Aliases</h2>";
        
        // Test dengan property lowercase
        if (isset($this->project_m)) {
            echo "<p style='color: green;'>✅ project_m model loaded successfully!</p>";
            
            // Test methods
            try {
                echo "<p>Testing getFeatured(): ";
                $featured = $this->project_m->getFeatured();
                echo "Success ✅</p>";
                
                echo "<p>Testing getFresh(): ";
                $fresh = $this->project_m->getFresh();
                echo "Success ✅</p>";
                
            } catch (Exception $e) {
                echo "<p style='color: red;'>Error calling methods: " . $e->getMessage() . "</p>";
            }
        } else {
            echo "<p style='color: red;'>❌ project_m model NOT loaded!</p>";
        }
        
        // Test user_m
        if (isset($this->user_m)) {
            echo "<p style='color: green;'>✅ user_m model loaded successfully!</p>";
        } else {
            echo "<p style='color: red;'>❌ user_m model NOT loaded!</p>";
        }
        
        echo "<h3>All Loaded Properties:</h3>";
        $properties = get_object_vars($this);
        foreach ($properties as $name => $value) {
            if (is_object($value)) {
                echo "<p><strong>$name:</strong> " . get_class($value) . "</p>";
            }
        }
    }

    public function base_url_test()
    {
        echo "<h2>Testing Base URL Configuration</h2>";
        
        echo "<p><strong>Current base_url():</strong> " . base_url() . "</p>";
        echo "<p><strong>APP_BASE_URL env:</strong> " . ($_ENV['APP_BASE_URL'] ?? 'NOT SET') . "</p>";
        echo "<p><strong>getenv APP_BASE_URL:</strong> " . (getenv('APP_BASE_URL') ?: 'NOT SET') . "</p>";
        
        echo "<h3>Testing Asset URLs:</h3>";
        echo "<p><strong>CSS URL:</strong> " . base_url('assets/css/style.css') . "</p>";
        echo "<p><strong>JS URL:</strong> " . base_url('assets/js/jquery/jquery.min.js') . "</p>";
        echo "<p><strong>Image URL:</strong> " . base_url('assets/img/logo.png') . "</p>";
        
        echo "<h3>Environment Info:</h3>";
        echo "<p><strong>CI_ENV:</strong> " . (defined('ENVIRONMENT') ? ENVIRONMENT : 'NOT SET') . "</p>";
        echo "<p><strong>Server Name:</strong> " . ($_SERVER['SERVER_NAME'] ?? 'NOT SET') . "</p>";
        echo "<p><strong>Request URI:</strong> " . ($_SERVER['REQUEST_URI'] ?? 'NOT SET') . "</p>";
        echo "<p><strong>Document Root:</strong> " . ($_SERVER['DOCUMENT_ROOT'] ?? 'NOT SET') . "</p>";
        
        echo "<h3>Test Asset Access:</h3>";
        $assets_to_test = [
            'assets/css/bootstrap/bootstrap.css',
            'assets/css/style.css',
            'assets/fonts/stylesheet.css'
        ];
        
        foreach ($assets_to_test as $asset) {
            $full_path = FCPATH . $asset;
            $url = base_url($asset);
            $exists = file_exists($full_path);
            $color = $exists ? 'green' : 'red';
            $status = $exists ? '✅ EXISTS' : '❌ NOT FOUND';
            
            echo "<p style='color: $color;'><strong>$asset:</strong> $status</p>";
            echo "<p style='margin-left: 20px; font-size: 0.9em;'>Path: $full_path</p>";
            echo "<p style='margin-left: 20px; font-size: 0.9em;'>URL: $url</p>";
        }
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
