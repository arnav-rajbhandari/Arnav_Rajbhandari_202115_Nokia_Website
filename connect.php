<?php
  
  
    $con=new mysqli('localhost','root','', 'nokia_form');
    if($con){
      //echo "Connection Successfull";
      $sql="SELECT * FROM `contact_form`";
      $result=mysqli_query($con,$sql);
           
    }
    else{
      die(mysql_error($con));
    }
  
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<table>
                <tr>
                    <th>S No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            
            
                <tr>
                    <?php   
			      //display rows
			    
			      	while ($row=mysqli_fetch_assoc($result)) {
			      		?>
			      	<td><?php echo $row['ID'];?></td>
			      	<td><?php echo $row['Name'];?></td>
			      	<td><?php echo $row['Email'];?></td>
			      	<td><?php echo $row['Message'];?></td>
			      	</tr>
			      	<?php
      }
  
      
    
  
?>
                
                
            
        </table>
</body>
</html>


