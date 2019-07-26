<?php

include_once("Config.php");
session_start();


	if(isset($_SESSION['valid'])) {

    if(isset($_GET['delete']))
          {
            $id=$_GET['delete'];
            

            $result=mysqli_query($con,"delete from mechanic_service_info where id=$id");
            echo $result;
            if($result)
              {
                header("Location: MechanicDashboard.php");
              }
            

          }
    
      }