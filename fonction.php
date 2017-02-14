<?php
  function openDB(){

        $server="localhost";
        $user="root";
        $pass='';
        $DB="wm_mat";
        $con=mysqli_connect($server,$user,$pass,$DB);
        return $con;
  }
  
  function linkCss(){
	$script='
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="bootstrap/js/bootstrap.js" />
        <link rel="stylesheet" href="bootstrap/js/jquery-3.1.1.js" />
        <link rel="stylesheet" href="style.css" />';
	print ($script);
	}

  function scriptHeader(){
	$script='<nav class="navbar navbar-inverse">
  					<div class="container-fluid">
    					<div class="navbar-header">
     					 <a class="navbar-brand" href="#">WM Matériaux</a>
    					</div>
   						<ul class="nav navbar-nav">
      						<li class="active"><a href="acceuil.php">Acceuil</a></li>
      						<li><a href="#">Vente</a></li>
      						<li><a href="#">Location</a></li>			
    					</ul>
    					<ul class="nav navbar-nav navbar-right">
   							<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Mon Panier</a></li>     	<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Connectez Vous</a></li>
   							</ul>
  					</div>
				</nav>';
	print ($script);			
  }

  function sessionInit(){
    session_start();
    
    if (!isset($_SESSION['log'])){

    
       $_SESSION['log'] = 'guest';
    }
    /*if (time() > ($_SESSION['timeout'] + 30)){
      session_destroy();
      header('Location: http://www.google.com');
      exit();
    }*/
  }
  function clodeDB($con){
    mysqli_close($con);
  }
  
  

  

?>