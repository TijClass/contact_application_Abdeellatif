<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact_App</title>
</head>
<body>
<div class=welcome_back >
      <div class="image"></div>

       <div class="welcome">
       <h1 class="title">Welcome back</h1>
       <div class="login">
         <div> <h2 class="ti-login">Login</h2></div>
         <div>
         <form action="../index.php" method="POST">

         <div>  
         <label for="fname">Email:</label><br>
         <input type="email" class="fname" name="fname"  placeholder="Enter your email"><br>
         </div>

         <div>
         <label for="lname">Password:</label><br>
         <input type="password" class="fname" name="lname" value=""  placeholder="Enter your password"><br><br>
         </div>
           
         <div class="align">
         <button class="butt-login" type="submit" name="login"><a href="http://localhost/contact_application_Abdeellatif/index.php">Login</a></button>

         <button class="butt-read" type="submit"><a href="http://localhost/contact_application_Abdeellatif/Components/Read_More.php">Read More</a></button>
         </div>
         </form>
         </div>
         </div>

        </div>
     </div>
</body>
</html>