<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function get_all_data($num=NULL,$offset=NULL,$search=NULL){
        $this->db->select('*');
        $this->db->from('user');
        if($search['name']){
            $where = "name LIKE '%".$search['name']."%' OR id LIKE '%".$search['name']."%'";
            $this->db->where($where);
        }
    	$this->db->order_by('user.id','DESC');
        if($num || $offset){
            $this->db->limit($num,$offset);
        }
    	$query = $this->db->get()->result();
	    return $query;
    }

    function get_num_data($search=NULL){
        $this->db->select('*');
        $this->db->from('user');
        if($search['name']){
            $where = "name LIKE '%".$search['name']."%' OR id LIKE '%".$search['name']."%'";
            $this->db->where($where);
        }
    	$query = $this->db->get()->num_rows();
	    return $query;
    }
    function save_data($data=NULL,$id=NULL){
        if($id){
            $this->db->where('id',$id);
            $this->db->update('user',$data);
            return $id;
        }else{
            if($this->db->insert('user',$data)){
                return $this->db->insert_id();
            }else{
                return false;
            }
        }
    }
    function delete_data($id=NULL){
        $this->db->where('id',$id);
        if($this->db->delete('user')){
            return true;
        }else{
            return false;
        }
    }
    function get_item_data($id=NULL){
        $query = $this->db->select('*')
                ->from('user')
                ->where('user.id',$id)
                ->get()->row();
	    return $query;
    }

    function export_user($from=NULL,$to=NULL){
        if($from && $to){
            $this->db->where('dt_create >=', $from);
            $this->db->where('dt_create <=', $to);
        }
        $this->db->order_by('dt_create','DESC');
        $query = $this->db->get('user')->result();
        return $query;
    }
}
?>