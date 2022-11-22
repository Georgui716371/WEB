<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){

			include "con_db.php";
			
			$user_id=null;
			$sql1= "select * from user where  email=\"$_POST[username]\" and password=\"$_POST[password]\" ";
		
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				break;
			}

			$sqlNombre= " select  username  from user WHERE id='$user_id'";

			$query = $con->query($sqlNombre);
			while ($r=$query->fetch_array()) {
				$user_name=$r["username"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Email o Usuario Incorrectos.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["username"]=$user_name;

				$insertValue='';
				print "<script> window.location='../index.php';</script>";

			}
		}
	}
}
?>