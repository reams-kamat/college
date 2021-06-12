<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
<style>
	
</style>
	<!-- Fancybox CSS library -->
<link rel="stylesheet" href="fancybox/jquery.fancybox.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="nab.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="includes/navv.css">
	<link rel="stylesheet" type="text/css" href="includes/gallery.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
	<nav class="navbar navbar-default" style="margin-bottom: 0px">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img alt="Brand" class="img img-responsive" src="images/logo.png">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse right_nav" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
          <li><a href="index.php" class="a">Home</a></li>
          <li class="dropdown">
            <a href="programs.php" class="dropdown-toggle a"  role="button" aria-haspopup="true" aria-expanded="false">Programs </a>
            <ul class="dropdown-menu">
              <?php include'includes/programs_dropdown.php'; ?>
            </ul>
        </li>
        <li class="active"><a href="gallery.php" >Gallery</a></li>
        <li><a href="notice.php"class="a">Notice</a></li>
        <li ><a class="a" href="about.php">About</a></li>
        <li><a href="support.php"class="a">Support</a></li>
        <li>
            <div class="search-container">
              <form action="search.php" method="get" class="" role="search">
                <input class="search" id="searchleft" type="search" name="search" placeholder="Search">
                <label class="button1 searchbutton" for="searchleft"><span class="mglass">&#9906;</span></label>
            </form>
        </div>
    </li>
    

</ul>
<ul class="nav navbar-nav navbar-right">
  <?php

  // database connection
  include('includes/connect.php');
  // nav change connection
  include('includes/signin_disappear_on_login.php');
  ?>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
	<div class="container-fluid">
		<div  class="row" style="background: url(images/home/1.jpg);background-position: center;background-repeat: no-repeat;background-size: cover; height:75px;">
			<div>
				<h3 style="padding-left: 100px;padding-top: 5px;"><i>Gallery</i></h3>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="margin-top:50px;margin-bottom:50px ;">
				<div>
					<?php
						include('admin/includes/connect.php');
						if (isset($_GET['page_no']) && $_GET['page_no']!="") {
							$page_no = $_GET['page_no'];
							} else {
								$page_no = 1;
						        }

							$total_records_per_page = 51;
						    $offset = ($page_no-1) * $total_records_per_page;
							$previous_page = $page_no - 1;
							$next_page = $page_no + 1;
							$adjacents = "2"; 

							$result_count = mysqli_query($connect,"SELECT COUNT(*) As total_records FROM `gallery`");
							$total_records = mysqli_fetch_array($result_count);
							$total_records = $total_records['total_records'];
						    $total_no_of_pages = ceil($total_records / $total_records_per_page);
							$second_last = $total_no_of_pages - 1; // total page minus 1

						    $result = mysqli_query($connect,"SELECT * FROM `gallery` order by 1 desc LIMIT $offset, $total_records_per_page");
						    while($row = mysqli_fetch_array($result)){
								$id=$row['id'];
								$title=substr($row['title'],0,30);
								$content=substr($row['content'],0,60);
								$imageThumbURL = 'admin/gallery/images/'.$row["image"]; 
           						$imageURL = 'admin/gallery/images/'.$row["image"]; 
							    ?>
						  <div class=" col-md-4 col-sm-6 my-gallery gallery-image">
						    <figure class="img-box">
						      <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"];echo nl2br("\n $content"); ?>" data-size="1024x1024">
								<img alt="picture" src="<?php echo $imageThumbURL; ?>"  class="img img-responsive img-fluid" alt="Failed to load image" style="width:100%;padding-bottom:10px;height: 250px;" >
							</a>
						      <div class="transparent-box">
						        <div class="caption">
						          <p><?php echo "$title"; ?></p>
						          <p class="opacity-low"><?php echo "$content"; ?></p>
						        </div>
						      </div> 
			    			</figure>
						 </div>									
										
			<?php
							 }
							mysqli_close($connect);

					?>
	
					<div class="row"></div><br>
					<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
						<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
					</div>

					<ul class="pagination">
						<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

						<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
							<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
						</li>

						<?php 
						if ($total_no_of_pages <= 10){  	 
						for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";	
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
										}
									}
								}
								elseif($total_no_of_pages > 10){
								
								if($page_no <= 4) {			
								for ($counter = 1; $counter < 8; $counter++){		 
								if ($counter == $page_no) {
								echo "<li class='active'><a>$counter</a></li>";	
							}else{
							echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
						}

						elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
						echo "<li><a href='?page_no=1'>1</a></li>";
						echo "<li><a href='?page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";
						for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";	
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}                  
						}
						echo "<li><a>...</a></li>";
						echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
						echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
						}

						else {
						echo "<li><a href='?page_no=1'>1</a></li>";
						echo "<li><a href='?page_no=2'>2</a></li>";
						echo "<li><a>...</a></li>";

						for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
						if ($counter == $page_no) {
						echo "<li class='active'><a>$counter</a></li>";	
						}else{
						echo "<li><a href='?page_no=$counter'>$counter</a></li>";
						}                   
						}
						}
						}
						?>

						<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
							<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
						</li>
						<?php if($page_no < $total_no_of_pages){
						echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
						} ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php
		include('includes/footer.php');
	?>
	<button onclick="topFunction()" id="myBtn" title="Go to top">
		 <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
	</button>
											
		
<script>
// Create template for zoom button
$.fancybox.defaults.btnTpl.zoom = '<button class="fancybox-button fancybox-zoom"><div class="zoom_icon"><span class="	glyphicon glyphicon-zoom-in"></span></div></button>';

// collpase icon change 
$('.zoom_icon').click(function(){
$(this).parent().find(".glyphicon-zoom-in").removeClass("glyphicon-zoom-in").addClass("glyphicon-zoom-out");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-zoom-out").removeClass("glyphicon-zoom-out").addClass("glyphicon-zoom-in");
});

// Choose what buttons to display by default
$.fancybox.defaults.buttons = [
  'slideShow',
  'fullScreen',
  'thumbs',
  'zoom',
  'close'
];


$( '[data-fancybox]' ).fancybox({
  onInit : function( instance ) {
    
    // Make zoom icon clickable
    instance.$refs.toolbar.find('.fancybox-zoom').on('click', function() {

      if ( instance.isScaledDown() ) {
        instance.scaleToActual();

      } else {
        instance.scaleToFit();
      }
      
    });
  }
});

</script>
<script type="text/javascript"></script>
</body>
<script type="text/javascript" src="js/back.to.top.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>