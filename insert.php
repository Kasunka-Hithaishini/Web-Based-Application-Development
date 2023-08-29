<?php

$server="localhost";
$username="root";
$password="";
$dbname="insert";

$conn= mysqli_connect($server , $username , $password , $dbname);

if(isset($_POST['submit'])){

	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['messege'])){

       $fname =$_POST['fname'] ;
       $lname =$_POST['lname'] ;
       $email =$_POST['email'] ;
       $messege =$_POST['messege'];

       $query = "insert into form(fname,lname,email,messege) values('$fname' , '$lname' , '$email' , '$messege')" ;

       $run = mysqli_query($conn,$query) or die(mysqli_error());

       if($run){
      echo ("<script LANGUAGE='JavaScript'>
      window.alert('Succesfully Send Messge || Click OK to go to HomePage');
      window.location.href='index.html';
      </script>");
       }     
       else{
       	echo "Form not Submitted" ;
       }
	}
	else{
		echo " all fieldss required";
	}
}

?>