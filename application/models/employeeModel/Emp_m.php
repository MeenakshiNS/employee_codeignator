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

    function update_records($item,$id){
        $this->db->where('emp_id', $id);
        $this->db->update('employees',array(

            'emp_name'=> $item['emp_name'],
              'designation'=> $item['designation'],
              'email'=> $item['email'],
              'mobile'=> $item['mobile'],
              'avatar'=> $item['avatar'],


        ));
        if ($this->db->affected_rows() > 0) {
            echo "Success";
            header('Location:list');
        } else {
            echo "No records were updated";
            // print_r($item);
            echo $id;
        }


    }

    function delete_item($id){
        $this->db->where("emp_id",$id);
        $this->db->delete("employees");
        return true;

    }
    

}

    ?>