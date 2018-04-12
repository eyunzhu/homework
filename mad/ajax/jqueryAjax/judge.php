<?php
	if(isset($_POST['username'])){
		$username=$_POST['username'];
	}
	else if(isset($_GET['username'])){
		$username=$_GET['username'];
	}else $username='';
	
	if($username=='admin'){
		echo "不可用";
	}else echo "可用";
	

?>