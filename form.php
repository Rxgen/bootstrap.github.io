<?php 

$conn=mysqli_connect("localhost","root","","form-db");

if($conn){
    echo" Connected Successfully ";
} else {
    echo" Not connected ";
}

if(isset($_REQUEST['submit']))  { 
    if(($_REQUEST['name']=="") || ($_REQUEST['email'] == "") || ($_REQUEST['Password']=="")) {
        echo "please fill all required fields";
     }else{
         $name=$_REQUEST['name'];
         $email=$_REQUEST['email'];
         $pass=$_REQUEST['Password'];
         $sql="INSERT into employee(name,email,password) value('$name','$email','$pass')";
         if(mysqli_query($conn,$sql)){
             echo"Data Added Successfully";

         } else {
             echo"Data Not added Successfully";
         }
     }
    }
?>