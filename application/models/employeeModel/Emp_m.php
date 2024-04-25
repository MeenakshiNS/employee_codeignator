<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    //colum names: emp_id  emp_name  designation  email  mobile  avatar
//table name:employees
class Emp_m extends CI_Model {

    // function insert_data($data){
    //      $this->db->insert('user', $data);
    //      return true;

    // }

    function insert($item){
        $this->db->insert('employees',$item);
        return true;


    }
    function list_items(){
        $query = $this->db->get('employees');
        // echo $this->db->last_query(); // Print the executed SQL query
        // print_r($query); // Print the query result object
        return $query->result();
    }

    function edit_item($id){ 
        $query=$this->db->query("select * from employees where emp_id= '$id'");
        // print_r($query->result());
        return $query->result();


    }

    function delete_item($id){
        $this->db->where("emp_id",$id);
        $this->db->delete("employees");
        return true;

    }
    

}

    ?>