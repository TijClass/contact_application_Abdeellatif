<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="css/style.css">
   
    <title>Contact_App</title>
</head>
<body >
<div class="add-person">
         <div class="nav-add">
         <h2>Add Person</h2>
         <div class="close">
         <i class="fa fa-close"></i>
             </div>
         </div>

     <div class="formgroup">
         <form action="">

         <div>
        <label for="lname" class="label">Firstname:</label><br>
        <input type="text" class="input" name="lname"  placeholder="Enter your firstname"><br><br>
        </div>
         <div>
        <label for="lname" class="label">Lastname:</label><br>
        <input type="text" class="input" name="lname"  placeholder="enter your lastname"><br><br>
        </div>
         <div>
        <label for="lname" class="label">Email:</label><br>
        <input type="email" class="input" name="lname" placeholder="enter your email"><br><br>
        </div>
         <div>
        <label for="lname" class="label">Adress:</label><br>
        <input type="text" class="input" name="lname"  placeholder="Enter your adress"><br><br>
        </div>
         <div>
        <label for="lname" class="label">Phone:</label><br>
        <input type="number" class="input" name="lname" value=""  placeholder="Enter your number phone"><br><br>
        </div>

        <div class="choose">
           <label for="male" class="male">Family</label>
           <input type="radio" id="male" name="gender" value="male">
           <label for="female" class="male">Friend</label>
           <input type="radio" id="male" name="gender" value="female">
           <label for="other" class="male">Buissenns</label>
            <input type="radio" id="male" name="gender" value="other">
            
        </div>

        <div>
        <label for="lname" class="label">notes:</label><br>
        <input type="text" id="notes" name="lname"  placeholder="text area"><br><br>
        </div>

         <div>
        <button type="submit" class="butt-submit"><a href="http://localhost/contact_application_Abdeellatif/index_.php">Submit</a></button>
        </div>

         </form>
      </div>

     </div>
</body>
</html>
