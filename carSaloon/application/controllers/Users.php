<?php
	class Users extends CI_Controller{
		public function register(){
			$data['title'] = 'Sign Up';


			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if ($this->form_validation->run() === FALSE) {
				# code...
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			}else{
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);
				$this->session->set_flashdata('user_registered', 'You are now registered');
				redirect('posts');
			}
		}


		public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {
				
				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$user_id = $this->user_model->login($username, $password);

				if($user_id){
					// Create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('posts');
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('users/login');
				}		
			}
		}

		public function logout(){
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('users/login');
		}

		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'The username is taken, choose another username!');
			if ($this->user_model->check_username_exists($username)) {
				# code...
				return true;
			}else{
				return false;
			}
		}

		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'The email is taken, choose another email address!');
			if ($this->user_model->check_email_exists($email)) {
				# code...
				return true;
			}else{
				return false;
			}
		}

	}


















