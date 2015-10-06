<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Co_user extends CI_Controller {

	public function __construct() {
	   parent::__construct();
	}
	/*
	||-------------------------------------------------
	||=================  PAGE   =======================
	||-------------------------------------------------
	*/
	public function index(){
		$pageinfo = array(
			'title' => 'Login',
			'icon' => base_url().'assets/images/login.png',
		);

		$toview = array(
			'msg' => '',
			'msg_disable' => ''
		);

		$this->load->model('mo_user');
		$this->load->view('components/headtag', $pageinfo);
		$this->form_validation->set_rules('txt_username', 'Username', 'required');
		$this->form_validation->set_rules('txt_password', 'Password', 'required');
		if($this->form_validation->run() == false){
			$this->load->view('vi_login', $toview);
		}
		else{
			$username = $this->input->post('txt_username');
			$password = $this->input->post('txt_password');
			$success = $this->mo_user->login($username, $password);
			if($success == true){
				redirect(base_url().'dashboard');
			}
			else{
				$toview['msg'] = "Login unsuccessfully";
			}
			$this->load->view('components/notices', $toview);
			$this->load->view('vi_login');
		}
		$this->load->view('components/script-end');
	}

	public function signup(){
		$pageinfo = array(
			'title' => 'Signup',
			'icon' => base_url().'assets/images/signup.png',
		);

		$toview = array(
			'msg' => '',
			'msg_disable' => ''
		);

		$this->load->model('mo_user');
		$this->load->view('components/headtag', $pageinfo);
		$this->form_validation->set_rules('txt_username', 'Username', 'required');
		$this->form_validation->set_rules('txt_password', 'Password', 'required');
		$this->form_validation->set_rules('txt_repassword', 'Repeat password', 'required');
		$this->form_validation->set_rules('txt_fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('txt_email', 'Email', 'required|valid_email');
		if($this->form_validation->run() == false){
			$this->load->view('vi_signup', $toview);
		}
		else{
			$username = $this->input->post('txt_username');
			$password = $this->input->post('txt_repassword');
			$fullname = $this->input->post('txt_fullname');
			$email = $this->input->post('txt_email');
			if($this->mo_user->check_user($username) ==  true){
				$success = $this->mo_user->addnew($username, $password, $fullname, $email);
				if($success == true){
					if(!is_dir('users/'.$username)){
						mkdir('users/'.$username, 0777, true);
						mkdir('users/'.$username.'/photos', 0777, true);
					}

					$config = array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.googlemail.com',
						'smtp_port' => 465,
						'smtp_user' => 'mens.formen@gmail.com',
						'smtp_pass' => '0924065089',
						'mailtype' => 'html',
						'charset'   => 'iso-8859-1'
					);
					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");

					$this->email->from('mens.formen@gmail.com', 'DemCI');
					$this->email->to($email);
					
					$this->email->subject('Signup at DemCI is successfully');
					$this->email->message('Thank you for your register. Now you can login to view other functions');
					if($this->email->send()){
						$toview['msg'] = 'Signup successfully. Please check your email';
					}
					else{
						$toview['msg'] = 'Not able to send mail';
					}
				}
				else{
					$toview['msg'] = 'Signup unsuccessfully. Please check again!';
				}
			}
			else{
				$toview['msg'] = 'Username is exists. Please try another username';
			}
			$this->load->view('components/notices', $toview);
			$this->load->view('vi_signup');
		}
		$this->load->view('components/script-end');
	}

	public function dashboard()
	{
		if($this->session->userdata('isLogin') == true){
			$pageinfo = array(
				'title' => 'Dashboad',
				'logoname' => 'DemCI',
				'icon' => base_url().'assets/images/signup.png',
			);

			$toview = array(
				'msg' => '',
				'msg_disable' => ''
			);

			$this->load->view('components/headtag', $pageinfo);
			$toview['msg_disable'] = 'none';
			$this->load->view('components/notices', $toview);
			$this->load->view('components/topbar');
			$this->load->view('vi_dashboard');
			$this->load->view('components/script-end');
		}
		else{
			redirect(base_url().'login');
		}
	}

	public function lists()
	{
		if($this->session->userdata('isLogin') == true){
			$pageinfo = array(
				'title' => 'Manage List',
				'icon' => base_url().'assets/images/signup.png',
			);

			$toview = array(
				'msg' => '',
				'logoname' => 'Manage List',
				'msg_disable' => ''

				
			);

			$this->load->model('mo_motor');
			$this->load->view('components/headtag', $pageinfo);
			$this->load->view('components/topbar', $toview);
			$this->form_validation->set_rules('txt_name', 'Name', 'required');
			$this->form_validation->set_rules('txt_price', 'Price', 'required|numeric');
			if($this->form_validation->run() == false){
				$this->load->view('vi_list');
			}
			else{
				$name = $this->input->post('txt_name');
				$type = $this->input->post('cbo_type');
				$producer = $this->input->post('cbo_producer');
				$price = $this->input->post('txt_price');

				$success = $this->mo_motor->addnew($name, $type, $producer, $price);
				if($success == true){
					$toview['msg'] = "Add a new record successfully";
				}
				else{
					$toview['msg'] = "Not able to add a new record";
				}	
				$this->load->view('components/notices', $toview);
				$this->load->view('vi_list');
			}
			$this->load->view('components/script-end');
		}
		else{
			redirect(base_url().'login');
		}
	}

	public function email()
	{
		if($this->session->userdata('isLogin') == true){
			$pageinfo = array(
				'title' => 'Email',
				'icon' => base_url().'assets/images/signup.png',
			);

			$toview = array(
				'msg' => '',
				'logoname' => 'Email',
				'msg_disable' => ''
			);

			$this->load->view('components/headtag', $pageinfo);
			$this->load->view('components/topbar', $toview);
			$this->form_validation->set_rules('txt_emailfrom', 'Email From', 'required|valid_email');
			$this->form_validation->set_rules('txt_passwordfrom', 'Password From', 'required');
			$this->form_validation->set_rules('txt_emailto', 'Email To', 'required|valid_email');
			$this->form_validation->set_rules('txt_subject', 'Subject', 'required');
			$this->form_validation->set_rules('txt_message', 'Message', 'required');
			if($this->form_validation->run() == false){
				$this->load->view('vi_email');
			}
			else{
				$emailfrom = $this->input->post('txt_emailfrom');
				$passwordfrom = $this->input->post('txt_passwordfrom');
				$emailto = $this->input->post('txt_emailto');
				$subject = $this->input->post('txt_subject');
				$message = $this->input->post('txt_message');
				//$file = $this->input->post('ful_attach');

				$config = array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.googlemail.com',
						'smtp_port' => 465,
						'smtp_user' => $emailfrom,
						'smtp_pass' => $passwordfrom,
						'mailtype' => 'html',
						'charset'   => 'iso-8859-1'
				);
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");

				$this->email->from($emailfrom, 'DemCI Email Sender');
				$this->email->to($emailto);
				
				$this->email->subject($subject);
				$this->email->message($message);
				//$this->email->attach($file);
				if($this->email->send()){
					$toview['msg'] = 'Sending successfully';
					echo $attach;
				}
				else{
					$toview['msg'] = 'Not able to send mail';
					echo $this->email->print_debugger();
				}
				$this->load->view('components/notices', $toview);
				$this->load->view('vi_email');
			}
			$this->load->view('components/script-end');
		}
		else{
			redirect(base_url().'login');
		}
	}
	/*
	||-------------------------------------------------
	||===============  FUNCTION   =====================
	||-------------------------------------------------
	*/
	public function logout()
	{
		$this->load->model('mo_user');
		$this->mo_user->logout();
		redirect(base_url().'login');
	}
}