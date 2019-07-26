<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php

include_once("Config.php");

if(isset($_POST['Submit']))
{
    if(isset($_POST['type']))
        {
            echo "<span>You have selected :<b> ".$_POST['type']."</b></span>";

            $name=$_POST['name'];
            $address=$_POST['address'];
            
            $user_name=$_POST['user_name'];
            $password=md5($_POST['password']);
            $type="admin";
            $valid="valid";








               $result=mysqli_query($con,"select user_name from user");
                while ($res=mysqli_fetch_array($result)) {
                    if($res['user_name']==$user_name)
                    {
                        $valid="false";



                    }
                }
                echo $valid;

                if($valid=="valid")
                {
                    $result=mysqli_query($con,"INSERT INTO user(name,address,user_name,password,role,status) values('$name','$address','$user_name','$password','$type','$valid')");
                    if($result)
                    {
                        header("Location: Login.php");

                    }
                }
        





    




        
           

           
        




        






       

        if($result)
        {
            echo " Insert Successful";
            header("Location: Login.php");

        }else{
            echo "Insert Error";
            header("Location: index.html");
        }


        //header("Location: index.html");


        
        }


        

 


   
}

?>

</body>
</html>