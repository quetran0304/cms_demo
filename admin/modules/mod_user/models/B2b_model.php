<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class B2b_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function get_all_data($num=NULL,$offset=NULL,$search=NULL){
        $this->db->select('*');
        $this->db->from('user_b2b');
        if($search['name']){
            $where = "name LIKE '%".$search['name']."%' OR id LIKE '%".$search['name']."%'";
            $this->db->where($where);
        }
    	$this->db->order_by('user_b2b.id','DESC');
        if($num || $offset){
            $this->db->limit($num,$offset);
        }
    	$query = $this->db->get()->result();
	    return $query;
    }
    function get_num_data($search=NULL){
    	$this->db->select('*');
        $this->db->from('user_b2b');
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
            $this->db->update('user_b2b',$data);
            return $id;
        }else{
            if($this->db->insert('user_b2b',$data)){
                return $this->db->insert_id();
            }else{
                return false;
            }
        }
    }
    function delete_data($id=NULL){
        $this->db->where('id',$id);
        if($this->db->delete('user_b2b')){
            return true;
        }else{
            return false;
        }
    }
    function get_item_data($id=NULL){
        $query = $this->db->select('*')
                ->from('user_b2b')
                ->where('user_b2b.id',$id)
                ->get()->row();
	    return $query;
    }
    function export_data($from=NULL,$to=NULL){
        if($from && $to){
            $this->db->where('dt_create >=', $from);
            $this->db->where('dt_create <=', $to);
        }
        $this->db->order_by('dt_create','DESC');
        $query = $this->db->get('user_b2b')->result();
        return $query;
    }
}
?>