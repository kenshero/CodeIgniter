<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function index()
	{
		$data['query']=$this->members_m->getmembers();
		$this->load->view('admin/admin_page',$data);
	}

	public function addmember()
	{
		$this->load->view('admin/addmember');
	}

	public function savemember()
	{
		$member = array(
              'userName'  => $this->input->post('user'),
              'Phone' => $this->input->post('phone')
            );
		$this->members_m->savemember($member);
		redirect('admin');
	}

	public 	function deletemember($id)
	{	
		$ID_Member = array(
				'ID' => $id
			);
		$this->members_m->deletemember($ID_Member);
		redirect('admin');
	}

	public 	function editmember($id)
	{	
		$member['query']=$this->members_m->findmember($id);
		$this->load->view('admin/editmember',$member);
	}

	public function saveeditmember($id)
	{
		$member = array(
              'userName'  => $this->input->post('user'),
              'Phone' => $this->input->post('phone')
            );
		$this->members_m->editmember($id,$member);
		redirect('admin');
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */