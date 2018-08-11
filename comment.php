<?php 
	require_once'config.php';
	//include'viewpost.php';


 if (isset($_POST['comment'])) {

 	$sql="INSERT into comment (Description,postid,created_at,updated_at) values('".$_POST['Description']."' , '".$_POST['postid']."' ,now(),now())";



	$result = mysqli_query($conn,$sql) ;
	//var_dump($result); die();
}

header('Location: viewpost.php');

?>
