<?php
require_once'config.php';
//include'post.php';


  //$db1 = new Db();
  //$con=$db1->connect();

//var_dump($_POST['description']); die();

 if (isset($_POST['save'])) {

 	$sql="INSERT into post (title,description,created_at,updated_at) values('".$_POST['title']."',  '".$_POST['description']."' ,now(),now())";


	$result = mysqli_query($conn,$sql) ;



}


//header("Location: post.php");

?>