<?php
    session_start();
    include("connec2.php");
    include("function2.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name=$_POST['user_name'];
        $password=$_POST['password'];
 
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //read from  database
           
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result) >0)
                {
                  $user_data =mysqli_fetch_assoc($result);
                  
                  if($user_data['password'] === $password)
                  {
                      $_SESSION['user_id']= $user_data['user_id'];
                      header("Location: index1.php");
                     
                      die;
                  }
                }
            }
 
 
            echo "wrong username or password";
 
        }else
        {
            echo "please enter some valid information!";
    }
 }
?>


<!Doctype html>
<html>
    <head>
        <title></title>
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

        padding:8px;
        width:260px;
        color:white;
        border-radius:5px;
        border-width:0px;
        background-color:#2196F3;
        border:name;
    }
    #box{
        background-color:white;
        margin: auto;
        width:250px;
        padding:20px;

    
    

    }
</style>
<div id="box">
    <form method="post">
        <div style="font-size:30px;margin:20px;color:black;">Sign In</div>
        <h4> <pre>    Don't have a account <a href="signup1.php">signup</a></h4></pre>
        <h4>Email</h4><input id="text" type="text" name="user_name"  placeholder="">
        
        <h4>password</h4> <input  id="text"  type="password" name="password" placeholder=""><br><br>
        <input id="button"  type="submit" value="sign In"><br>
        
        
</form>
</body>
</html>


</form>
</div>
</body>
</html>