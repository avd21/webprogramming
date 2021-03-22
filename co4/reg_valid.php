<html>
<head>
<title>Registration Form</title>
</head>
<body>
<br><br>
<center>
<form name="formRegistration" method="POST" >
 <table border="0" width="800" align="center">
  <tr><th colspan=2>Registration Form</th></tr>
  <tr><td>Username</td>
  <td><input type="text"  name="userName" value"></td> 
  </tr> 
  <tr><td>First Name</td> 
  <td><input type="text"  name="firstName" value"></td> 
  </tr> 
  <tr><td>Last Name</td> 
  <td><input type="text" name="lastName" value"></td> 
  </tr> 
  <tr><td>Password</td> 
  <td><input type="password" name="password" value=""></td> 
  </tr> 
  <tr><td>Confirm Password</td> 
  <td><input type="password" name="confirm_password" value=""></td> 
    </tr> 
  <tr><td>Email</td> 
  <td><input type="text" name="userEmail" ></td> 
  </tr> 
 <tr><th colspan=2> 
 <div><input type="submit" name="submit" value="Register" ></div> 
</th></tr> 
</table> 
</form> 
</body> 
</html> 
<?php
if(isset($_POST["submit"]))
{
  $usrn=$_POST["userName"];
  $fname=$_POST["firstName"];
  $lname=$_POST["lastName"];
  $pass=$_POST["password"];
  $cpass=$_POST["confirm_password"];
  $uid=$_POST["userEmail"];
 
  if($usrn=="")
   {
     echo"<span style='color: red;'>*Please fill Name*</span>";
    }
  else if(strlen($usrn)<=4)
   {
    echo"<span style='color: red;'>*User Name should be more tha 4 character*</span>";
   }
  else if($fname=="")
   {
    echo"<span style='color: red;'>*Please fill First name*</span>";
   } 
  else if($pass=="")
   {
    echo"<span style='color: red;'>*Please Enter ur password*</span>";
   } 
  else if($cpass=="")
   {
    echo"<span style='color: red;'>*Please re confirm your password*</span>";
   } 
  else if($pass!=$cpass)
   {
    echo"<span style='color: red;'>*Password Mismatch*</span>";
   } 
  else if($uid=="")
   {
    echo"<span style='color: red;'>*Please fill Email id*</span>";
   } 
 
  else
  { 
   print("<table width='700'><tr><th colspan=2>Successfully Registered</th></tr>");
  
}
}
?>
