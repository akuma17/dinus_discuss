<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:index.php");
  }
$uname=$_SESSION['uname'];

?>
<html>
<head>
    <title>Dasboard Admin</title>
    <link rel="icon" type="image" href="../images/logodinus.png">
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">beralih navigasi</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"><img src="../images/logodinus.png" height="30px"> Admin</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	
                <ul class="nav navbar-nav navbar-left">
                   <li><a href="home.php"> Dashboard</a></li>
                    <li><a href="post.php"> Topik</a></li>
                    <li><a href="user.php"> Pengguna</a></li>
                    <li class="active"><a href="category.php">Kategori</a></li>


                </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" ><span class="glyphicon glyphicon-user"></span> <?php echo $uname;?></a></li>
                <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
               
        </ul>

                
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
     <div class="container" style="margin:8% auto;width:900px;">
           
           <h2>Kategori</h2>

           <hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Kategori Baru</h3>

                </div> 
                 <div class="panel-body">
                   <form method="POST" action="add-category-function.php">
                   
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="category" required style="width:50%">
        
                        <input type="submit" class="btn btn-success pull-right" value="Add">
                   </form>
                </div>
    </div>
	</body>
</html>