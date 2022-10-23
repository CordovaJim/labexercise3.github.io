<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA</title>
    <style>
        *{ box-sizing: border-box; }
        html, body{ margin: 0; padding: 0; }
        .container{
            margin: 50px 350px;
        }
        .form-group{
            margin: 10px;
        }
         
         .form-group0{
               
            border: solid 1px #eee;
            padding: 15px 10px;
        }
        
        input{
            width: 100%;
            border: solid 1px #eee;
            padding: 15px 10px;
        }
        button{
            width: 150px;
            padding: 10px;
            margin: 20px 0px 0px 250px;
            background: #fff;
            color: dodgerblue;
            border: solid 1px dodgerblue;
            border-radius:33px;
            cursor: pointer;
            transition:  all .20s ease-in-out;
        }
        button:hover{
            background: dodgerblue;
            color: #fff;
        }
        table tr td{
            border: solid 1px #eee;
            padding: 10px;
        }
        .form-group:before{
         content: " *";
         color: red;
        }
        .container {
    width: 640px;
    height: 780px;
    align: center;
    border: 5px solid #339;
}
.he{
text-align:center;
}
.c1{
margin-left: auto;
margin-right:auto;
}
    </style>
</head>
<body>
    
    <div class="container">
        <h2 class="he">Registration Form</h2>
        <br><br>
        <form action="test1.php", method="POST">
            <div class="input-group">
             <b>First Name</b> <input type="text" name="fname" placeholder="Enter First Name" required value="<?php echo $fname; ?>">
             </div>
             <div class="input-group">
             <b>Middle Name</b> <input type="text" name="mname" placeholder="Enter Middle Name" value="<?php echo $mname; ?>">
             </div>
            <div class="input-group">
             <b>Last Name</b> <input type="text" name="lname" placeholder="Enter Last Name" required value="<?php echo $lname; ?>">
           </div>
           <div class="input-group">
             <b>Gender</b> <input type="text" name="gender" placeholder="Enter your Gender" required value="<?php echo $gender; ?>">
           </div>
            <div class="input-group">
              <b>Email Address</b> <input type="email" name="email" placeholder="Enter Email Address" required value="<?php echo $email; ?>">
           </div>
           <div class="input-group">
             <b>Username</b> <input type="text" name="username" placeholder="Enter Username" required value="<?php echo $username; ?>">
           </div>
            <div class="input-group">
              <b>Password</b> <input type="password" name="password" id="password" placeholder="Enter new password" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z]).{6,10}" title="Password should be of 6-10 length and should contain atleast one character and one number"></input>
              </div>
             <div class="input-group">
               <b>Confirm Password</b> <input type="password" name="password_repeat" id="password_repeat" placeholder="Repeat your password" required>
            </div>
            <div class="input-group1">
                <button type="submit" name="submit" id="submit" class="button" onclick="return validate()" >Sign Up</button>
            </div>
        </form>
        <script>

function validate() {

  var password = document.getElementById("password").value;
  var password_repeat = document.getElementById("password_repeat").value;

  if (password != password_repeat) {
      alert("Password does not match to confirm password, try again.");
      return false;
  }
  

  else {
   alert("Registration Complete!");
  }
  
  return true;
}
</script>
</body>
</div>

 
