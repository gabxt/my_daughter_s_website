<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 300px;
			height: 300px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="index.php">&#8592;</a>
     <?php 
          $pic = mysqli_query($con,"SELECT * FROM tblcard");
		  while($row = mysqli_fetch_array($pic)) {  ?>
        
            <div class="alb">
             	<img src="<?=$row['Image']?>">
				
				 <tr>
                <td><?=$row['Name']?></td>
               
                <td><?=$row['Price']?></td>
                
                
                
                
            </tr>
             </div>
          		
			 <?php } ?>
		 

</body>
</html>