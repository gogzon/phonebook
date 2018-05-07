<?php

     $con = mysqli_connect('localhost' , 'root' , '');

    if(!$con)
    { 
       echo 'Not connected to localhost';
    }
    
    if(!mysqli_select_db($con,'phonebook'))
    {
      echo'Database selection unsuccesful';
    }
      $Gender = $_POST['Gender'];
      $Name = $_POST['Name'];
      $Lastname = $_POST['Lastname'];
      $Phone = $_POST['Phone'];
      $Email = $_POST['Email'];
      
      $sql = "INSERT INTO contacts (Gender,Name,Lastname,Phone,Email) VALUES ('$Gender', '$Name', '$Lastname', '$Phone', '$Email')"; 
      
      if(mysqli_query($con,$sql))
      {
      echo'Inserted';
      }
      else 
      {
         echo'Not Inserted';
      }
  header("refresh:2; url=index.html");
?>

