<?php

	class Members_m extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function getmembers()
		{
			$sql = "SELECT * FROM members";
			$data['query'] = $this->db->query($sql)->result();
			return $data['query'];
		}

		function findmember($id)
		{
			$sql = "SELECT * FROM members Where ID = '".$id."' ";
			$data['query'] = $this->db->query($sql)->result();
			return $data['query'];
		}

		function savemember($member)
		{	
			$this->db->insert('members',$member);    
			//print_r($member['name']);
		}

		function deletemember($ID_Member)
		{	
			$this->db->delete('members',$ID_Member);    
			//print_r($member['name']);
		}

		function editmember($id,$member)
		{	
			   $this->db->where('ID', $id);
   			   $this->db->update('members', $member); 
		}

	}

?>