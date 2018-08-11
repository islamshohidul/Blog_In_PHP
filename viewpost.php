<?php
include_once'config.php';
//include_once'comment.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['title'];?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div id="wrapper">

        <h1>Blog</h1>
        <hr />
        <p><a href="./">Blog Index</a></p>


        <?php 
        	//$id = isset($_GET['id']) ? $_GET['id'] : ''; 

      		$sql = 'SELECT title,description,created_at FROM post WHERE id='.$_GET['id'];
			$result = $conn->query($sql);

        	$row = $result->fetch_assoc();


		        echo '<div>';
                echo '<h1>'.$row['title'].'</h1>';
                
                	echo "<hr>";

                echo '<p>Posted on '.date("F j, Y h:m:s A", strtotime($row['created_at'])).'</p>';
                	echo "<hr>";
               	echo '<p>'.$row['description'].'</p>'; 
               	

            	echo '</div>';


            $sql = 'SELECT postid ,Description,created_at FROM comment WHERE postid='.$_GET['id'];
			$result = $conn->query($sql);
        	$row = $result->fetch_assoc();
        	//var_dump($row); die();
	//while ($row) {
	# code...

		         echo '<div>';
                echo '<h1>'.$row['postid'].'</h1>';
                
                	echo "<hr>";

                echo '<p>Posted on '.date("F j, Y h:m:s A", strtotime($row['created_at'])).'</p>';
                	echo "<hr>";
               	echo '<p>'.$row['Description'].'</p>'; 
               	//var_dump($row['Description']); die();
               	

            	echo '</div>';	
            	//}

        ?>

     

        <div class="comment">
        	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Comment</button>

  <!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
      <!-- Modal content-->
      		<div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Modal Header</h4>
	        </div>
	        <div class="modal-body">
	        	<form action="comment.php" method="post"> 
				    <p><tr>
				        <input type='hidden' name='postid' value='<?php echo $_GET['id'];?>'/> 
							<td>Comment:</td>
							<textarea class="form-control" cols= "1" rows="5" style="min-width: 100%" name='Description'></textarea>
						
					</tr>

					<tr class="text-center">
						<td >
							<button type="button" class="btn btn-info btn-m" ><a href="./">Back</a></button> 
							<input  class="btn btn-primary" id='submit' type='submit' value='Save' name="comment"/>
							
						
						</td>

					</tr></p>


				</form>
	        	

			
	        </div>
	        	<div class="modal-footer">
	          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	</div>
     		 </div>
      
   		 	</div>
 		</div>
        	
        </div>
     
        

    </div>


</body>
</html>