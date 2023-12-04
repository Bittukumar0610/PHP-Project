<?php  
   /*-----------------------------------CONNECTIVITY CODE-----------------------------------*/
     error_reporting(E_ERROR | E_PARSE);      //optional,to remove warning messages.
     $conn=mysqli_connect("localhost","root","","radhe");
        if ($conn)
          {
           //echo "database connected successfully","<br>";
          }
        else
          {
           //die("Connection Aborted:" . mysqli_connect_error());
          }

          $fname3=$_REQUEST['fname1'];
          echo $fname3;

          $mdname3=$_REQUEST['mdname1'];
          echo $mdname3;

          $ltname3=$_REQUEST['ltname1'];
          echo $ltname3;

         $fathername3=$_REQUEST['fathername1'];
         echo $fathername3;

         $mothername3=$_REQUEST['mothername1'];
         echo $mothername3;

         $course3=$_REQUEST['course1'];	
         echo $course3;

         $ntion3=$_REQUEST['ntion1'];	
         echo $ntion3;

         $gen3=$_REQUEST['gen1'];	
         echo $gen3;

        
         $dob3=$_REQUEST['dob1'];
         echo $dob3;

         $ph3=$_REQUEST['ph1'];
         echo $ph3;

         $chkmt3=$_REQUEST['chkmt1'];
         echo $chkmt3;

         $chkin3=$_REQUEST['chkin1'];
         echo $chkin3;

         $chkgd3=$_REQUEST['chkgd1'];
         echo $chkgd3;

         $address3=$_REQUEST['address1'];
         echo $address3;

         

         $email3=$_REQUEST['email1'];
         echo $email3;

        
         $psw3=$_REQUEST['psw1'];	
         echo $psw3;

         $pwrept3=$_REQUEST['pwrept1'];	
         echo $pwrept3;

        

         
        
         mysqli_query($conn,"INSERT INTO kr(fname5,mdname5,ltname5,fathername5,mothername5,course5,ntion5,gen5,dob5,ph5,chkmt5,chkin5,chkgd5,address5,email5,psw5) VALUES ('$fname3','$mdname3','$ltname3','$fathername3','$mothername3','$course3','$ntion3','$gen3','$dob3','$ph3','$chkmt3','$chkin3','$chkgd3','$address3','$email3','$psw3')");
        

?>          
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form action="" method="post">  
  <div class="container">  
  <center>  <h1> Student Registeration Form</h1> </center>  
  <hr>  
  <label> Firstname: </label>   
<input type="text" name="fname1" id="fname2" placeholder= " Enter ur Firstname" size="15" required />   
<label> Middlename: </label>   
<input type="text" name="mdname1" id="mdname2" placeholder="Enter ur Middlename" size="15" required />   
<label> Lastname: </label>    
<input type="text" name="ltname1" id="ltname2" placeholder="Enter ur Lastname" size="15"required />   
<label> Father's Name: </label>    
<input type="text" name="fathername1" id="fathername2" placeholder="Enter ur fathername" size="15"required />  
<label> Mother's name: </label>    
<input type="text" name="mothername1" id="mothername2" placeholder="Enter ur Mothername" size="15"required />  
<div>  
<label>   
Course :  
</label>   
  
<select name="course1" id="course2">  
<option value="Select Course">Select Course</option>  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  
</div> 

<div>  
<label>   
Nationality :  
</label>   
  
<select name="ntion1" id="ntion2">  
<option value="Choose Nationality">Choose Nationality</option>  
<option value="Indian">Indian</option>  
<option value="Australia">Australia</option>  
<option value="Russia">Russia</option>  
<option value="Canada">Canada</option>  
<option value="Germany">Germany</option>  
<option value="Pakistan">Pakistan</option>  
<option value="China">China</option>  
</select>  
</div>  
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gen1" id="gen2"  checked > Male   
<input type="radio" value="Female" name="gen1" id="gen2"> Female   
<input type="radio" value="Other" name="gen1" id="gen2"> Other  
  
</div> 

<br>
<label>   
Date of Birth :  
</label>  
<input type="date" name="dob1" id="dob2" placeholder="Enter dob" required/>  
<br>
<br>



<label>   
Phone :  
</label>    
<input type="text" name="ph1" id="ph2" placeholder="phone no." size="10"/ required> 

<label>   
Qualification :  
</label> 
<input type="checkbox" name="chkmt1" id="chkmt2" value="Matrix"> Matrix
<input type="checkbox" name="chkin1" id="chkin2" value="Intermediate"> Intermediate
<input type="checkbox" name="chkgd1" id="chkgd2" value="Graduation"> Graduaation 

<br>
<br>


 
 
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" name="address1" id="address2"  required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email1" id="email2" required>  
  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="psw1" id="psw2" required>  
  
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="pwrept1" id="pwrept2" required>  
    <button type="submit" class="registerbtn">Register</button>
    
</form>  
</body>  
</html>  