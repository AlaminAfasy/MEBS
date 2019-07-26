<?php
include_once("Config.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/alamin.css">
	<title>EmptySession</title>
</head>
<body>
<?php
	if(isset($_SESSION['valid'])) {
          echo "<h1>Wellcome ".$_SESSION['NAME']."</h1>";
          echo "<a href='logout.php'>Logout</a>";
          if(isset($_POST['submit_request'])){


        $client_id=$_SESSION['id'];
        $mechanic_id=$_POST['mechanic_id'];
        $service_location=$_POST['service_location'];
        $service_type=$_POST['service_type'];
        $service_description=$_POST['service_description'];

        $result=mysqli_query($con,"INSERT INTO requests(client_id, mechanic_id, service_location, service_type, service_description) values('$client_id','$mechanic_id','$service_location','$service_type','$service_description')");

        if($result)
        {
        	header("Location: ClientDashboard.php");
        }


        ?>




        <?php

    }

?>
//HTML START

<?php           
      }else{
        	header("Location: Login.php");
        }

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
