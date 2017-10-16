<!DOCTYPE html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="tracker.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel="stylesheet" type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
      body {
          background-image: url("soccerBall.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          padding: 100px;
      }
      </style>
    
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Soccer System Generator</a>
			</div>	
				<nav>
					<ul class="nav navbar-nav">
					<li style="width:300px;left:10px;top:10px;" class="active"><a href="home.php">Home</a></li>
					<li style="width:300px;right:10px;top:10px;"><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
		
				</nav>
		
		</div>
	</nav>
	<div id="rounded">
	  <div class="jumbotron text-center">
				<div><h2>Teams</h2></div>
			  </div>
			<div id="pageContent" class="container">
								 
				  <table class="table table-striped">
					<thead>
					  <tr>
						<th>Team ID</th>
						<th>Team Name</th>
						<th>Manager</th>
						<th>Players</th>
						<th>Location</th>
					  </tr>
					</thead>
				  </table>
			</div>
		<div class="clear"></div>
    

	</div>




</body>

</html>