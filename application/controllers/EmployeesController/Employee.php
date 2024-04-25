<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    //colum names: emp_id  emp_name  designation  email  mobile  avatar

     
     function __construct() {
        parent::__construct();
        $this->load->model('employeeModel/Emp_m');
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

    function add(){
        //logic- on clicking submit.details should be inserted in db
        if($this->input->post('add')){
            $item['emp_name']=$this->input->post('employee-name') ;
            $item['designation']=$this->input->post('designation') ;
            $item['email']=$this->input->post('employee-id') ;
            $item['mobile']=$this->input->post('mob-number') ;
            $item['avatar']=$this->input->post('avatar') ;
            $result=$this->Emp_m->insert($item);
            if($result==true){
                echo "Records saved";
            }else{
                echo "Insertion error";
            }

               }

        $this->load->view('EmployeesView/add');
    }

    function list(){

        //logic : list the employees inserted in db.
        $data['item']=$this->Emp_m->list_items();
        // print_r($data);
        $this->load->view('EmployeesView/list',$data);
    }

    
    function edit(){
        $id=$this->input->get('id');
        $res['item']=$this->Emp_m->edit_item($id);
        // print_r($res['item']);
        $this->load->view('EmployeesView/edit',$res);
    }

    function delete(){
        $id=$this->input->get('id');
        $res=$this->Emp_m->delete_item($id);
        if($res==true){
            echo "Data deleted successfully !";
            header("location:list");
        }
          else{
            echo "Error !";
          }

    }

    
}
