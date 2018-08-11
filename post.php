<?php 
	include'config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container " >
	<form action='insert.php'  method='post'>
		<table>
				<input type='hidden' name='id' value='<?php echo $row['id'];?>'/>
				<h2 style="color:white;">Add your blog title and content</h2>
			<tr>
				<td>Post Title :</td>
				<td><input class="form-control"  type='text' id='posttitle' name='title'/></td>
			</tr>
		

			<tr>
				<td>Content :</td>
				<td><textarea class="form-control" rows="7" cols="50" id='content' name='description'></textarea></td>
			</tr>

	<td></td>

	<br>
		<tr>
			<td align="center">
				

			</td>

			<td class="text-center">
			<button type="button" class="btn btn-info btn-m" ><a href="./">Back</a></button> 
			<input  class="btn btn-primary" id='submit' type='submit' value='Save' name="save"/>
			
			</td>
		
		</tr>
			
		</table>
	</form>

</div>

</body>
</html>


