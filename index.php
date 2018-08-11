<!DOCTYPE html>
<html>
<head>
	<title>Title of the blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="panel panel-primary">
	<div class="conatiner">
		<div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
		</div>
		
		<div class="create">
			<a class="btn btn-primary pull-right" href="post.php"> + Create a new post</a>
	
		</div>
			
				
			
		<div class=" jumbotron">
		    <h1 class="text-center">Simple Blog</h1>     
		    <p>Welcome to the Simple Blog....................</p>
		 </div>

		<?php
            include'config.php';
            function custom_echo($x, $length)
						{
						  if(strlen($x)<=$length)
						  {
						    echo $x;
						  }
						  else
						  {
						    $y=substr($x,0,$length) . '...';
						    echo $y;
						  }
						}

                $stmt = $conn->query('SELECT id, title, description, created_at FROM post ORDER BY id DESC');
                while($row = $stmt->fetch_assoc()){
                    
                    echo '<div>';
                        echo '<h2 class ="text-center"><a href="viewpost.php?id='.$row['id'].'">'.$row['title'].'</a></h2>';
                        echo "<hr>";
                        echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['created_at'])).'</p>';
                        echo "<hr>";
                        echo custom_echo($row['description'],1000);
                        echo '<p><a href="viewpost.php?id='.$row['id'].'">Read More</a></p>';                
                    echo '</div>';

                }

                ?>

		
	</div>

</body>
</html>



