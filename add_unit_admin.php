<?php
      session_start();


      $dbname = 'idp';
      $dbuser = 'root';  
      $dbpass = ''; 
      $dbhost = 'localhost';

      $mysqli = new mysqli($dbhost, $dbuser,
      $dbpass, $dbname);

      // Checking for connections
      if ($mysqli->connect_error) {
      die('Connect Error (' .
      $mysqli->connect_errno . ') '.
      $mysqli->connect_error);
      }
 
      if(isset($_POST['add'])){  

            $_SESSION['Formation']=$_POST['Formation'];
            $_SESSION['Unit']=$_POST['Unit'];
           
      
            echo $_SESSION['Formation'];
            echo $_SESSION['Unit'];

            
            $Formation=$_SESSION['Formation'];
            $Unit=$_SESSION['Unit'];
            if($Formation<>NULL && $Unit<>NULL){
            $sql = "INSERT INTO `unit`(`Unit`, `Formation`) VALUES ('$Unit','$Formation')" ;
            $result = $mysqli->query($sql);
            $mysqli->close();}
            else{
                echo 'Unit could not insert';
            }
            }
            else{
                echo 'not set';
            }  
            header("Location:add_unit.php");

?>