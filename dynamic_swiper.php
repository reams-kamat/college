<!DOCTYPE html>
<html>
<head>
	<title>dynamic</title>
	<style type="text/css">
		.gallery img {
    width: 20%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}
	</style>

<!-- Fancybox CSS library -->
<link rel="stylesheet" href="fancybox/jquery.fancybox.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>

</head>
<body>

	<div >
    <?php 
    // Include database configuration file 
	include('admin/includes/connect.php');						    
	  
    // Retrieve images from the database 
						$result = mysqli_query($connect,"SELECT * FROM `gallery` order by 1 desc ");
						    while($row = mysqli_fetch_array($result)){
        
            $imageThumbURL = 'admin/gallery/images/'.$row["image"]; 
            $imageURL = 'admin/gallery/images/'.$row["image"]; 
    ?>
		<a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"]; ?>" >
			<img src="<?php echo $imageThumbURL; ?>" alt="" />
		</a>
    <?php 
    } ?>
</div>

</body>
<script>
$("[data-fancybox]").fancybox();
</script>

</html>