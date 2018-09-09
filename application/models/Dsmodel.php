<?php
/**
 * Created by PhpStorm.
 * User: Talash
 * Date: 3/31/2018
 * Time: 3:54 PM
 */

class Dsmodel extends CI_Model{
    public function insert_tag($data){
        $this->db->where('t_name',$data['t_name']);
        $query = $this->db->get("tags");
        $rows=$query->num_rows();
        if($rows==0){
            $this->db->insert('tags', $data);
        }

    }
    public function insert_org($data){
        // Inserting in Table(students) of Database(college)
        $this->db->insert('orgs', $data);
    }
    public function list_org($limit=null, $id=null,$searchtxt=null){
        if(!empty($limit)||!empty($id)){
            $this->db->limit($limit,($id-1)*$limit);
        }
        if(!empty($searchtxt)){
            $this->db->where("o_name like '%$searchtxt%' OR o_desc like '%$searchtxt%'");
        }
        $query = $this->db->get('orgs');
        return $query->result();
    }

    public function count_orgs($searchtxt){
        if(!empty($searchtxt)){
            $this->db->where("o_name like '%$searchtxt%' OR o_desc like '%$searchtxt%'");
        }
        $query = $this->db->get("orgs");
        return $query->num_rows();
    }

    public function insert_dataset($data){
        $this->db->insert('datasets', $data);
    }

    public function edit_dataset($data,$id){
        $this->db->where("d_id",$id);
        $this->db->update('datasets',$data);
    }
    public function edit_org($data,$id){
        $this->db->where("o_id",$id);
        $this->db->update('orgs',$data);
    }
    public function list_ds($limit=null, $id=null,$searchtxt=null){
        if(!empty($limit)||!empty($id)){
            $this->db->limit($limit,($id-1)*$limit);
        }
        if(!empty($searchtxt)){
            $this->db->where("d_name like '%$searchtxt%' OR d_desc like '%$searchtxt%'");
        }
        $query = $this->db->get('datasets');
        return $query->result();

    }
    public function count_ds($searchtxt){
        if(!empty($searchtxt)){
            $this->db->where("d_name like '%$searchtxt%' OR d_desc like '%$searchtxt%'");
        }
        $query = $this->db->get("datasets");
        return $query->num_rows();
    }

    public function get_ds($id){
        $this->db->where('d_id',$id);
        $query = $this->db->get('datasets');
        return $query->row();
    }

    public function register($data) {
        // Query to check whether username already exist or not
        $condition = "u_email =" . "'" . $data['u_email'] . "'";
        $this->db->select('u_id');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            // Query to insert data in database
            $this->db->insert('users', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    public function login($data) {
        $condition = "u_email =" . "'" . $data['u_email'] . "' AND " . "u_pass =" . "'" . $data['u_pass'] . "'";
        $this->db->select('u_id,u_name,u_email');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function read_user($email) {
        $condition = "u_email = '$email'";
        $this->db->select('u_id,u_name,u_email,u_role');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function read_byid($id) {
        $condition = "u_id = $id";
        $this->db->select('u_id,u_name,u_email,u_role');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function get_org($id){
        $this->db->where('o_id',$id);
        $query = $this->db->get('orgs');
        return $query->row();
    }
    public function org_dss($id){
        $this->db->where("d_oid",$id);
        $query = $this->db->get('datasets');
        return $query->result();
    }
    public function ten_org(){
        $this->db->limit(10);
        $query = $this->db->get('orgs');
        return $query->result();
    }


}