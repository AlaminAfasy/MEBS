<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">


    <style type="text/css">
    h4 {
    color: white;
    }
  </style>
</head>
<body> 
	<form class="box" action="Login.php" method="post">
		<h1>Longin</h1>
		<input type="text" name="phone_number" placeholder="phone_number" required="true" pattern="[0-9]{11}">
		<input type="password" name="password" placeholder="password" required="true">

        
        
        
		





        <input type="submit" name="Submit" value="Longin">






        
        <a  type="home" class="nav-item nav-link active bg-white" href="index.html" style="color: white">Home</a>

		
	</form>


	<?php
include_once("Config.php");
 
session_start(); 





if(isset($_POST['Submit']))
{
    if(isset($_POST['type']))
        {
            echo "<span>You have selected :<b> ".$_POST['type']."</b></span>";

            
            $phone_number=$_POST['phone_number'];
            $password=md5($_POST['password']);
            $type=$_POST['type'];






            $result=mysqli_query($con,"select *from user");
                while ($res=mysqli_fetch_array($result)) {
                    
                    if($res['phone_number']==$phone_number && $res['password']==$password)
                    {
                        $name= $res['name'];
                        
                        $address= $res['address'];

                        $_SESSION['id']= $res['id'];
                        
                        $_SESSION['name'] = $res['name'];
                        $_SESSION['address'] = $res['address'];
                        
                        
                        $_SESSION['valid'] = $phone_number;
                        $_SESSION['password']= $res['password'];
                        $_SESSION['role']=$type;



                    } else {
                                echo "Invalid username or password.";
                                
                            }


                    if(isset($_SESSION['valid'])) {
                        if($_SESSION['role']=="admin"){
                            header('Location: Dashboard.php');
                        }
                        elseif ($_SESSION['role']=="client")
                        {
                            header('Location: ClientDashboard.php');
                        }
                        elseif ($_SESSION['role']=="mechanic")
                        {
                            header('Location: MechanicDashboard.php');
                        }




                    }else{
                        echo "are u hacker?";
                    }






                }
            
        
            





            
            
        




        






       

        


        


        
        }


        

 


   
}


 
?>

</body>
</html>