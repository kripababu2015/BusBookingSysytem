<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function register()
	{
		$this->load->view('registration');
	}
	public function adhome()
	{
		$this->load->view('adminhome');
	}
	public function uhome()
	{
		$this->load->view('userhome');
	}
	public function regist()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("name","username",'required');
		$this->form_validation->set_rules("add","user_address",'required');
		$this->form_validation->set_rules("age","user_age",'required');
		$this->form_validation->set_rules("gen","gender",'required');
		$this->form_validation->set_rules("dis","district",'required');
		$this->form_validation->set_rules("phno","phoneno",'required');
		$this->form_validation->set_rules("mail","email",'required');
		$this->form_validation->set_rules("pass","password",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');	
		$pass=$this->input->post("pass");
		$encpass=$this->mainmodel->encpswd($pass);
		$a=array("name"=>$this->input->post("name"),
				"address"=>$this->input->post("add"),
				"age"=>$this->input->post("age"),
				"gender"=>$this->input->post("gen"),
				"district"=>$this->input->post("dis"),
				"phno"=>$this->input->post("phno"));
		$b=array("email"=>$this->input->post("mail"),
			"password"=>$encpass,'utype'=>'0'); 
		$this->mainmodel->details($a,$b);
	
		redirect(base_url().'main/register');
		}
	}

	public function loginreg()
	{
		$this->load->view('loginreg');
	}
	public function loginregist()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("pass","password",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');	
		$pass=$this->input->post("pass");
		$encpass=$this->mainmodel->encpswdl($pass);
		$b=array("email"=>$this->input->post("email"),
			"password"=>$encpass,'utype'=>'1'); 
		$this->mainmodel->admindetails($b);
	
		redirect(base_url().'main/loginreg');
		}

	}
	
	public function addbusdetails()
	{
		$this->load->view('addbusdetails');
	}
	public function addbus()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("bno","busnumber",'required');
		$this->form_validation->set_rules("bname","bus_name",'required');
		$this->form_validation->set_rules("splace","starting_place",'required');
		$this->form_validation->set_rules("destination","destination",'required');
		$this->form_validation->set_rules("stime","start_time",'required');
		$this->form_validation->set_rules("rtime","reach_time",'required');
		$this->form_validation->set_rules("stops","stops",'required');
		$this->form_validation->set_rules("savail","seat_availability",'required');
		$this->form_validation->set_rules("date","date",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');	
		$a=array("bno"=>$this->input->post("bno"),
				"bname"=>$this->input->post("bname"),
				"splace"=>$this->input->post("splace"),
				"dplace"=>$this->input->post("destination"),
				"stime"=>$this->input->post("stime"),
				"dtime"=>$this->input->post("rtime"),
				"stops"=>$this->input->post("stops"),
				"seatavailability"=>$this->input->post("savail"),
				"cdate"=>$this->input->post("date"));
		$this->mainmodel->addbus($a);
		//$this->mainmodel->logdetails($b);
		redirect(base_url().'main/addbusdetails');
	}
}
public function viewbusdetails()
{ 
$this->load->model('mainmodel');
$d=date('y-m-d');
$this->mainmodel->deletedate($d);
$data['n']=$this->mainmodel->view();
$this->load->view('viewbusdetails',$data);
}
public function updatedetails()

{
$a=array("bno"=>$this->input->post("bno"),
"bname"=>$this->input->post("bname"),
"splace"=>$this->input->post("splace"),
"stime"=>$this->input->post("stime"),
"dplace"=>$this->input->post("destination"),
"dtime"=>$this->input->post("rtime"),
"stops"=>$this->input->post("stops"),
"seatavailability"=>$this->input->post("savail"),
"cdate"=>$this->input->post("date"));
$this->load->model('mainmodel');
$id=$this->uri->segment(3);
$data['user_data']=$this->mainmodel->singledata($id);
$this->mainmodel->singleselect();
$this->load->view('viewbusdetails',$data);
if($this->input->post("update"))
{
$this->mainmodel->updatedetails($a,$this->input->post("id"));
redirect('main/viewbusdetails','refresh');
}
}
public function deletedetails()
{

$this->load->model('mainmodel');
$id=$this->uri->segment(3);
$this->mainmodel->deletedetails($id);
redirect('main/viewbusdetails','refresh');
}

//user home fn
	public function userhome()
	{
		$this->load->view('userhome');
	}

//admin home fn
public function adminhome()
	{
		$this->load->view('adminhome');
	}	


//login of user
	public function login()
	{
		$this->load->view('login_view');
	}
//login action function
	public function login_action()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","emailid",'required');
		$this->form_validation->set_rules("pass","password",'required');

	

	if($this->form_validation->run())
		{
			$this->load->model('mainmodel');
			$email=$this->input->post("email");
			$pass=$this->input->post("pass");
			$rslt=$this->mainmodel->selectpass($email,$pass);

				if($rslt)
				{
					$id=$this->mainmodel->getuserid($email);
					$user=$this	->mainmodel->getuser($id);
					$this->load->library(array('session'));
					$this->session->set_userdata(array('id'=>(int)$user->id,'usertype'=>$user->utype));

					if($_SESSION['usertype']=='1')
					{
						redirect(base_url().'main/adminhome');
					}
					else
					{
						redirect(base_url().'main/userhome');
					}
				}
				else
				{
					echo "ivalid user";	
				}
	}
			
		else
		{
		redirect('main/login','refresh');
		}		


		
	}
	
	public function viewprofile()
	{
		$this->load->model('mainmodel');
		$id=$this->session->id;
		$data['user_data']=$this->mainmodel->viewprofile($id);
		$this->load->view('updateprofile',$data);

	}
	public function update()
	{

		$a=array("name"=>$this->input->post("name"),
			    "address"=>$this->input->post("add"),
				"age"=>$this->input->post("age"),
				"gender"=>$this->input->post("gen"),
				"district"=>$this->input->post("dis"),
				"phno"=>$this->input->post("phno"));
		$b=array("email"=>$this->input->post("mail"),'utype'=>'0');
	
		$this->load->model('mainmodel');
		//$id=$this->uri->segment(3);
		//$data['user_data']=$this->mainmodel->singledatast($id);
		//$this->mainmodel->singleselectst();
		//$this->load->view('supdate',$data);
		if($this->input->post("update"))
		{
			$id=$this->session->id;
			$this->mainmodel->update($a,$b,$id);
			redirect('main/viewprofile','refresh');
		}
	}
	public function bookingview()
{
 $this->load->model('mainmodel');
 $this->load->model('mainmodel');
$d=date('y-m-d');
$data['n']=$this->mainmodel->view();
$this->load->view('bookingview',$data);
}

//revathi booking bus

public function booking()
{ $this->load->model('mainmodel');
$id=$this->uri->segment(3);
$sid=$this->session->id;
$data['user_data']=$this->mainmodel->busview($id);
$this->load->view('booking',$data);
}

public function bookform()
{
$this->load->model('mainmodel');
$sid=$this->session->id;
$a=array(
"startingplace"=>$this->input->post("splace"),
"destination"=>$this->input->post("destination"),
"bid"=>$this->input->post("id"),
"uid"=>$sid

);

// $data['user_data']=$this->mainmodel->singledata($id);
// $this->mainmodel->singleselect();
// $this->load->view('booking',$data);


if($this->input->post("book"))
{
	
	$this->mainmodel->bookformview($a,$sid);
	$bno=$this->input->post("bno");
	$bname=$this->input->post("bname");
	$splace=$this->input->post("splace");
	$destination=$this->input->post("destination");
	$data['n']=$this->mainmodel->viewticket($splace,$destination);
	echo "<table border='1'>";
	echo "<tr><td>BusNo</td><td>".$bno."</td></tr>";
	echo "<tr><td>Bus Name</td><td>".$bname."</td></tr>";
	echo "<tr><td>Starting Place</td><td>".$splace."</td></tr>";
	echo "<tr><td>Destination</td><td>".$destination."</td></tr>";
	$this->load->view('ticket',$data);
	echo "</table>";
	
// redirect('main/taction','refresh');
}
}



//ends revathi bus booking

//bus booking view by admin
public function viewbooking()
	{
		
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->viewbooking();
		$this->load->view('viewbooking',$data);

	}
//ends
	//bus booking view by admin
public function uviewbooking()
	{
		$id=$this->session->id;
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->uviewbooking($id);
		$this->load->view('uviewbooking',$data);

	}
	public function cancel()
	{		

			$this->load->model('mainmodel');
			$id=$this->uri->segment(3);
			$this->mainmodel->cancel($id);
			redirect('main/uviewbooking','refresh');
	}
//ends
//file upload starts

public function upload()
{
$this->load->view('fileupload');
}
public function fileupload()
{ $this->load->model('mainmodel');
$config['upload_path']='./files/';
$config['allowed_types']='gif|jpg|png|pdf|doc';
$config['max_size']=1000;
$config['max_height']=1024;
$config['max_width']=750;
$this->load->library('upload',$config);
if(!$this->upload->do_upload('pic'))
{
$error=array('error'=>$this->upload->display_errors());
//print_r($error);
}
else{

$data=array('pic'=>$this->upload->data());
$img=$data['pic']['file_name'];
}
$a=array('pic'=>$img);
$this->mainmodel->uploadfile($a);

}

//file view
public function pdf()
{ $this->load->model('mainmodel');
$data['n']=$this->mainmodel->protocolview();
$this->load->view('pdfview',$data);
}

//Notification Kavya starts

public function busname()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->busname();
		$this->load->view('notify_view',$data);  //loading view

	}

	public function notify_action()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("noti","notification",'required')
		;

		if($this->form_validation->run())
		{

			
			$this->load->model('mainmodel');

			$n=array("notification"=>$this->input->post("noti"),"bid"=>$this->input->post("bus"));

			$this->mainmodel->notifymodel($n);
			redirect('main/busname','refresh');
		}	
	}
	/*notification insertion ends*/

	/*notification: admin view*/

	public function notiadmin()
	{
		
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->admin_notify();
		$this->load->view('admin_notify_view',$data);

	}
	/*notification:admin delete*/
	public function notify_delete()
	{
		$id=$this->uri->segment(3);
		$this->load->model('mainmodel');
		$this->mainmodel->admin_delete($id);
		redirect('main/notiadmin','refresh');
	}

	/*notification :admin update*/

	public function admin_update()
	{
		
		$a=array("notification"=>$this->input->post("noti"));
		$this->load->model('mainmodel');
		$id=$this->uri->segment(3);

		$data['user_data']=$this->mainmodel->singledatan($id);
		$this->mainmodel->singleselectn();
		$this->load->view('update_noti_view',$data);
		if($this->input->post("update"))
		{
			$this->mainmodel->updatedetailsn($a,$this->input->post("id"));
			redirect('main/notiadmin','refresh');
		}
	}
	
public function usernoti()
	{
		
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->notiuser();
		$this->load->view('user_viewnoti',$data);

	}

//notification ends



}
