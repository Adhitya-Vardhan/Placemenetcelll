<?php
 
  $subject = $_POST['Subject'];
  $message = $_POST['Message'];
  if(isset($_POST['submit']))
  {
	  $connect = mysqli_connect("localhost","root","","placement") or die("Couldn't Connect");
		mysqli_select_db($connect,"comm") or die("Cant find DB");
		
		if($query = mysqli_query($connect,"INSERT into `comm`.`prim`(`Subject`,`Message`,`Images`) VALUES('$subject','$message','$images')"))
			echo "Message has been Posted";
		else
			echo "Message Posting Unsuccessfull! Try Again";
  }
 
  
  /*mysql_connect("localhost","root","");
  mysqlo_select_db($connect,"comm");
  

  $sub = $_POST['Subject'];
  $msg = $_POST['Message'];
  
      if(!$insert = mysqli_query($connect,"INSERT INTO `comm`.`prim` (`Id`, `Subject`, `Message`) VALUES (NULL, \'$sub\', \'$msg\')"))
        echo "Problem Uploading Data";
       else
       echo"Message Posted Successfully";

  /*$connect = mysqli_connect("localhost","root","""placement") or die("Couldn't Connect");
		mysqli_select_db($connect,"comm") or die("Cant find DB");
    if(isset($_POST['submit'])){
  $sub = $_POST['Subject'];
  $msg = $_POST['Message'];
  $name = $_FILES['image']['name'];
  $tmp_name = $FILES['files']['tmp_name'];
  $location = 'Uploads/';
  $target = 'Uploads/'.$name;
  
  if(move_uploaded_file($tmp_name,$location.$name)){
    echo "File Uploaded";
    $nam = $_POST['nam'];
    $query = mysqli_query($connect,"INSERT INTO prim(Id,Subject,Message,Images_loc,Images_Name) VALUES ('','$sub','$msg','".$target."','$nam')");
  } else echo "<center>Failed</center>";
  }*/
   ?>
   
   