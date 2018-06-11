<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends CI_Controller{
    protected $adminid;
	function __construct(){
        parent::__construct();
        $this->adminid = $this->session->userdata('id');
        $this->load->model('ajax_model','ajax');
	}
	function index(){
		//No think
	}
	function publish(){
         $table = $this->input->post('table');
		 $field = $this->input->post('field');
		 $id = $this->input->post('id');
         $status = $this->input->post('status');
         if($status==0){
			  $publish = 1;
		 }else{
			  $publish = 0;
		 }
         $this->db->set('bl_active',$publish);
		 $this->db->where($field,$id);
		 $this->db->update($table);
		 echo icon_active("'$table'","'$field'",$id,$publish);
         return;
	}
    function publishPopup(){
         $table = $this->input->post('table');
		 $field = $this->input->post('field');
		 $id = $this->input->post('id');
         $status = $this->input->post('status');
         if($status==0){
			  $publish = 1;
		 }else{
			  $publish = 0;
		 }
         $this->db->set('bl_active',$publish);
		 $this->db->where($field,$id);
		 $this->db->update($table);
		 echo icon_active_popup("'$table'","'$field'",$id,$publish);
         return;
	}
    function sortOrderAjax(){
        $idArr = array_keys($this->input->post('ordering'));
        $orderArr = array_values($this->input->post('ordering'));
        $where = $this->input->post('where');
        $table = $this->input->post('table');
        if($idArr){
            for($i=0; $i<count($idArr); $i++){
                $this->db->set('ordering', $orderArr[$i]);
                $this->db->where($where, $idArr[$i]);
                $this->db->update($table);
            }
        }
        $data['status'] = true;
        $data['message'] = 'All items have sorted';
        header('Content-Type: application/json');
        echo json_encode($data);
        return;
    }
    function deleteimage(){
         $table = $this->input->post('table');
		 $field = $this->input->post('field');
		 $id = $this->input->post('id');
         $fielddelete = $this->input->post('fielddelete');
         $this->db->set($fielddelete,"");
		 $this->db->where($field,$id);
		 $this->db->update($table);
		 echo true;
         return;
	}
    function deletedata(){
        $table = $this->input->post('table');
        $id = $this->input->post('id');
        $query = $this->db->where('id',$id)->delete($table);
        echo true;
        return;
	}
	
    /** THE END*/
}
?>