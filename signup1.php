<?php
session_start();
   include("connec2.php");
   include("function2.php");
   
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
       //something was posted
       $user_name=$_POST['user_name'];
       $password=$_POST['password'];
       $secret=$_POST['secret'];

       if(!empty($user_name) && !empty($password) && !empty($secret) && !is_numeric($user_name) )
       {
           //save to database
           $user_id=random_num(20);
           $query ="insert into users (user_id,User_name,password,secret) values ('$user_id','$user_name','$password','$secret')";

           mysqli_query($con,$query);
          
           header("Location: Login1.php");
           die;

       }else
       {
           echo "please enter some valid information!";
   }
}

?>


<!Doctype html>
<html>
    <head>
        <title>Signup </title>
</head>
<body>
<!Doctype html>
<html>
    <head>
        <title>Signup </title>
</head>
<body>
    <style type="text/css">
    #text{
        height:25px;
        border-radius:5px;
        padding:4px;
        border:solid thin #aaa;
        width:100%;
    }
    #button{

        padding:10px;
        width:260px;
        color:white;
        border-width:0px;
        border-radius:5px;
        background-color:#2196F3;
        border:name;
    }
    #box{
        background-color:white;
        margin:auto;
        width:250px;
        padding:20px;

    }
</style>
<div id="box">
    <form method="post">
        <div style="font-size:30px;margin:10px;color:black;">Sign Up</div>
        <h5> <pre>  Already  have a account  <a href="login1.php">Sign In</a><br></h5></pre>
        <h4>Email</h4><input id="text" type="text" name="user_name" placeholder="">
        <h4>password</h4><input  id="text"  type="password" name="password" placeholder="" ><br>
        <h4>secret</h4><input id="text" type="text" name="secret" placeholder=""><br></br>
        <input id="button"  type="submit" value="signup"><br>
        <h5> By clicking the "sign Up" button you are creating an account and you agree to the terms of use.</h5></br>
        
        
</form>
</body>
</html>

</form>
</div>
</body>
</html>