<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
	<link rel="Stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="navbar.php">
	  <link rel="stylesheet" type="text/css" href="Css/table.css">
    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#00ffff;
        color: white;
      }
    </style>
</head>

<body style="background-color :#5f9ea0;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>


<div class="container">
        <h2 class="text-center pt-2" style="color :#fff;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                        
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-striped table-condensed table-bordered">
                    <thead style="background-color:#006400;color: white">
                            <tr>
                            <th scope="col" class="text-center py-2" >Id</th>
                            <th scope="col" class="text-center py-2" >Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : darkblue; background-color:white">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="userDetails.php?id= <?php echo $rows['id'] ;?>">
						<button type="button" class="btn" style="background-color :#006400;color: darkblue"><b>View Profile & Transact<b></button></a></td> 
                     
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer>
     <p class="text-copy" style="text-align: center; background-color:#006400"><b>
     www.SparksBank.com Copyright &copy; 2022 All Rights Reserved</b>
    </p>
  
 
  </footer>
</body>
</html>