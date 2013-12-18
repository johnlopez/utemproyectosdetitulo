<?php

class Registro_usuarios extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('usuarios_model');
		
	}

	public function index()
	{
		$this->load->view('registro_usuarios_view');
	}

	public function registro_very()
	{
		if($this->input->post('submit_reg'))
		{
			$this->form_validation->set_rules('user','Usuario','required|callback_very_user');
			$this->form_validation->set_rules('pass','Contraseña','required|min_length[4]');
			$this->form_validation->set_rules('pass2','Confirmar Contraseña','required|matches[pass]');
			//+++++++++VALIDACIONES+++++++++
			$this->form_validation->set_message('required','El Campo %s es Obligatorio');
			$this->form_validation->set_message('very_user','El %s Ya Esta Registrado');
			$this->form_validation->set_message('matches','El Campo %s no es igual al Campo %s');
			$this->form_validation->set_message('min_length','El Campo %s debe tener al menos 4 caracteres');

			if ($this->form_validation->run()!= FALSE) 
			{
				$this->usuarios_model->add_user();
				$data = array('mensaje' => 'el usuario fue registrado' );
				$this->load->view('registro_usuarios_view',$data);

			}
			else
			{
				$this->load->view('registro_usuarios_view');
			}
		}
		else
		{
			redirect(base_url().'registro_usuarios_view');
		}
	}

	function very_user($user)
	{
		$variable = $this->usuarios_model->very_user($user);
		if ($variable == true) 
		{
			return false;
			
		}
		else
		{
			return true;
		}
	}

}