<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_Model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function checkLogin(){
        $username = $this->input->post('username');
		$password = md5($this->input->post('password'));
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('admin');
        if($query->row()){
             $row = $query->row_array();
             //UPDATE
             $DB['dt_login'] = time();
             $this->updateLogin($DB,$row['id']);
             $this->session->set_userdata($row);
             $this->session->set_userdata(array('isAdmin' => true)); 
             return true;
        }else{
             return false;
        }          
    }
    function updateLogin($data=NULL, $id=NULL){
        if($id){
            $this->db->where('id',$id);
            $this->db->update('admin',$data);
            return $id;
        }else{
            if($this->db->insert('admin',$data)){
                return $this->db->insert_id();
            }else{
                return false;
            }
        }
    }
}