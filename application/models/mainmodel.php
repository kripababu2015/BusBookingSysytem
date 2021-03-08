<?php
class mainmodel extends CI_model
{
	public function addbus($a)
	{
		$this->db->insert("busdetails",$a);
	}
	public function encpswd($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}

	public function details($a,$b)
	{	$this->db->insert("login",$b);
		$loginid=$this->db->insert_id();
		$a['loginid']=$loginid;
		$this->db->insert("register",$a);
		

	}
	//admin register

	public function encpswdl($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}
	public function admindetails($b)
	{
		$this->db->insert("login",$b);
	}
	public function deletedate($d)
	{
		$this->db->where('cdate <',$d);
		$this->db->delete("busdetails");
	}

	public function view()
{
$this->db->select('*');

$qry=$this->db->get("busdetails");
return $qry;
}
public function singleselect()
{
$qry=$this->db->get("busdetails");
return $qry;
}
public function singledata($id)
	{
		$this->db->select('*');
		$this->db->where("bid",$id);
		$qry=$this->db->get("busdetails");
		return $qry;
	}
public function updatedetails($a,$id)
{
$this->db->select('*');
$qry=$this->db->where("bid",$id);
$qry=$this->db->update("busdetails",$a);
return $qry;
}
public function deletedetails($id)
{
$this->db->where('bid',$id);
$this->db->delete("busdetails");
}

/*login*/
		//fetching password
		public function selectpass($email,$pass)
		{
		$this->db->select('password');
		$this->db->from("login");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		return $this->verifyuserpass($pass,$qry);
		}

		//verifying password
		public function verifyuserpass($pass,$qry)
		{
			return password_verify($pass,$qry);
		}

		//get user id
		public function getuserid($email)
		{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
		}
		//get user info
		public function getuser($id)
		{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	
		}
		public function viewprofile($id)
	{
		$this->db->select('*');
		$qry=$this->db->join('login','register.loginid=login.id','inner');
		$qry=$this->db->where("register.loginid",$id);
		$qry=$this->db->get("register");
		return $qry;

	}

		public function update($a,$b,$id)
	{
		$this->db->select('*');
		$qry=$this->db->where("loginid",$id);
		$this->db->join('login','login.id=register.loginid','inner');
		$qry=$this->db->update("register",$a);
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("login",$b);
		
		return $qry;
	}
		public function uploadfile($a)
{
$this->db->insert("file",$a);
}

//VIEW file

public function protocolview()
{
$this->db->select('*');
$qry=$this->db->get("file");
return $qry;
}

/***notification starts***/
		
		//fn to fetch bus-names into notification 

		public function busname()
		{
			$this->db->select('*');
			$qry=$this->db->get("busdetails");
			return $qry;

		}

		public function notifymodel($n)
		{
		$this->db->insert("notification",$n);
			
		}
		//ends

		//admin view :notification


		public function  admin_notify()
		{
		$this->db->select('*');
		$this->db->join('busdetails','busdetails.bid=notification.bid','inner');
		$qry=$this->db->get("notification");
		return $qry;
	
		}

		//admin delete:notification
		public function admin_delete($id)
		{
		$this->db->where("id",$id);
		$this->db->delete("notification");
		
		}

		//admin update:notification

		public function singledatan($id)
		{
			$this->db->select('*');
			$this->db->where("id",$id);
			$qry=$this->db->get("notification");
			return $qry;

		}
		public function singleselectn()
		{
		$qry=$this->db->get("notification");
		return $qry;
		}

		public function updatedetailsn($a,$id)
		{
		$this->db->select('*');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("notification",$a);
		return $qry;
	}
	public function  notiuser()
		{
		$this->db->select('*');
		$this->db->join('busdetails','busdetails.bid=notification.bid','inner');
		$qry=$this->db->get("notification");
		return $qry;
	
		}


//Notificatrion Ends

	//bus Booking starts Revathy


public function bookformview($a,$sid)
{
$this->db->insert("booking",$a);
}


public function busview($id)
{
$this->db->select('*');
$this->db->where("bid",$id);
$qry=$this->db->get("busdetails");
return $qry;
}
public function viewticket($splace,$destination)
{
	$this->db->select('*');
	$this->db->where("startingplace",$splace);
	$this->db->where("destination",$destination);

	$qry=$this->db->get("ticket");
	return $qry;
}


	//bus Booking Ends
//view bus booking details by admin
public function viewbooking()
{
	$this->db->select('*');
		$this->db->join('busdetails','booking.bid=busdetails.bid','inner');
		$this->db->join('register','booking.uid=register.uid','inner');
		$qry=$this->db->get("booking");
		return $qry;

}


//end

public function uviewbooking($id)
{
	$this->db->select('*');
		$this->db->where("booking.uid",$id);
		$this->db->join('busdetails','booking.bid=busdetails.bid','inner');
		$this->db->join('register','booking.uid=register.uid','inner');

		$qry=$this->db->get("booking");
		return $qry;
	
}
public function cancel($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("booking");
	}





}
?>