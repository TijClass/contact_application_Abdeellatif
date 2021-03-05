<?php include './Components/connexion.php'; 

DEFINE("BASE_URI","http://".$_SERVER['SERVER_NAME'].'/contact_application_Abdeellatif/');
DEFINE("SITE_TITLE","Contact_app_abdellatif");

$conn = OpenCon ();  
// echo "Connecté avec succès" ; 
 session_start();
if (isset($_POST['login'])) {
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $sql = "SELECT * FROM users WHERE email='$email' AND password ='$pass'";
  $result = mysqli_query($conn, $sql);
  if (!$row = mysqli_fetch_assoc($result)) {
    header("location: ./login.php?err=Worng password or email !");
  } else {
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
    header("location:./Components/admin.php");
  }
}



// $query = "SELECT * FROM tables";
// $result = $con->query($query);
// $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Components/css/style.css">
    <title><?= SITE_TITLE; ?></title>
</head>
<body>
<div class=welcome_back >
      <div class="image"></div>

       <div class="welcome">
       <h1 class="title">Welcome back</h1>
       <div class="login">


         <div> <h2 class="ti-login">Login</h2></div>
         <div>
         <form action="login.php" method="POST">

         <div>  
         <label for="fname">Email:</label><br>
         <input type="email" class="fname" name="email"  placeholder="Enter your email"><br>
         </div>

         <div>
         <label for="lname">Password:</label><br>
         <input type="password" class="fname" name="password" value=""  placeholder="Enter your password"><br><br>
         </div>
           
         <div class="align">
         <button class="butt-login" type="submit" name="login">Login</button>

         <button class="butt-read" type="submit"><a href="http://localhost/contact_application_Abdeellatif/Components/Read_More.php">Read More</a></button>
         </div>
         <?php if(isset($_GET['err'])){
           echo '<div class="alert">'.$_GET['err'].'</div>';
         }?>
         </form>
         </div>
         </div>

        </div>
     </div>
</body>
</html>