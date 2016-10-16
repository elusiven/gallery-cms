<?php include("includes/header.php"); ?>
<?php include("admin/includes/init.php"); ?>

<?php $photos = Photo::find_all(); ?>


        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

			<!-- Top Navigation -->
			
	
			<section class="grid-wrap">
				<ul class="grid swipe-down" id="grid">
                       
                       <?php foreach($photos as $photo): ?>
                        <li><a href="#"><img src="admin/<?php echo $photo->picture_path(); ?>" alt="dummy"><h3><?php echo $photo->title; ?></h3></a></li>
                       <?php endforeach; ?> 
				</ul>
			</section>
			
            
          
         
    	
            </div>




            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

            
                 <?php include("includes/sidebar.php"); ?>



        </div>
        <!-- /.row -->

        <?php include("includes/footer.php"); ?>
        <script>
			new GridScrollFx( document.getElementById( 'grid' ), {
				viewportFactor : 0.4
			} );
		</script>