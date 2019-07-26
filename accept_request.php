<?php

include_once("Config.php");
session_start();


	if(isset($_SESSION['valid'])) {

    if(isset($_GET['accept']))
          {
            $id=$_GET['accept'];

            $client_id;
            $mechanic_id;
            $service_location;
            $service_type;
            $service_description;
            $status="not done";

            $result=mysqli_query($con,"select *from requests where request_id=$id");
            while ($res=mysqli_fetch_array($result)) {
              $client_id=$res['client_id'];
              $mechanic_id=$res['mechanic_id'];
              $service_location=$res['service_location'];
              $service_type=$res['service_type'];
              $service_description=$res['service_description'];
            }
            echo $client_id;
            echo $service_description;
            $result=mysqli_query($con,"delete from requests where request_id=$id");

            $result=mysqli_query($con,"INSERT INTO accepted_service_info(`service_location`,`service_type`,`service_description`,`mechanic_id`,`client_id`,`status`) values('$service_location','$service_type','$service_description','$mechanic_id','$client_id','$status')");
            
            
            
              
              if($result)
              {
                header("Location: MechanicDashboard.php");
              }
            

          }
    
      }