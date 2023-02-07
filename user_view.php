<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Publish Firing Result</title>
    <link href="result.css" rel="stylesheet" media="all">
  </head> 
<?php
    
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


    $sql = "SELECT * FROM `hitcount`  ORDER BY  `Date` DESC" ;
    $result = $mysqli->query($sql);
    $mysqli->close();

    
?>
<!-- partial -->

<div col='8'>
<center><u><h1>RESULT VIEW FOR USER</h1></u></center>
  <table class="responsive-table">
    
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">No</th>
        <th scope="col">Rank</th>
        <th scope="col">Name</th>
        <th scope="col">Unit</th>
        <th scope="col">Total_fired</th>
        <th scope="col">Total_hit</th>
      </tr>
    </thead>
    <?php
        // LOOP TILL END OF DATA
        while($rows=$result->fetch_assoc())
        {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Date'];?></td>
                <td><?php echo $rows['No'];?></td>
                <td><?php echo $rows['Rank'];?></td>
                <td><?php echo $rows['Name'];?></td>
                <td><?php echo $rows['Unit'];?></td>
                <td><?php echo $rows['Total_fired'];?></td>
                <td><?php echo $rows['Total_hit'];?></td>
            </tr>
            <?php
                }
            ?>
  </table>
  </div>
</div>
 </div>
</form>
</html>