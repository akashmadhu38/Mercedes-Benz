
 <?php
			include("testing.php");
			
			$res=mysqli_query($conn,"select * from accstock where accno=1");
			while($row=mysqli_fetch_array($res))
			{			
				
					?>
					
      
				<div class="w3-col l3 s6">
      <div class="w3-container">
	  <div class="w3-display-container">
        <img src=<?php echo $row['image'] ?>style="width:100%">
 <div class="w3-display-middle w3-display-hover">
            <button  <a  href="../user/accessorybooking.php?accno=<?php echo $row['accno'] ?>">Buy now </a></button>
         now <i class="fa fa-shopping-cart"></i></a></button>
          </div>
		</div>
        <p><?php echo $row['accname'] ?><br><b><?php echo  $row['price'] ?></b></p>

	<?php
 			
				}
				?>
				
				
				
				