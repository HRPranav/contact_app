<?php

session_start();
   include("connec2.php");
   include("function2.php");
   $user_data=check_login($con);


?>
<!Doctype html>
<html>
    <head>
        <title>my website  </title>
        <script src="pranav.js"></script>
</head>

    <style>
        .ajax h1{
            text-align: center;
        }
        .ajax h3{
            text-align: center;
        }
        .abc,#display{
            text-align: center;
        }
        
       
        </style>
        </head>
        <body>
<div class="ajax">
<h1> contact form and contact list page</h1>
<h3> Add contacts </h3>
    </div>
<p class="abc">

Name <input type="text" id="nam" onchange="abc()" name="Name" placeholder=""> 

</p>
<p class="abc">  

Ph no <input type="text" id="ph" name="ph_No" onchange="abc()" placeholder=""> 

</p>
<p class="abc">

Email <input type="text" name="Email" id="email" onchange="abc()" placeholder="">

</p>
<p class="abc">
<input id="button"  type="submit" value="save"><br><br>
<br>
    </div>

    <p id="display">NAME</p>

    
</div>
</body>
</html>