<?php include("includes/header.php"); ?>
<?php include("admin/includes/init.php"); ?>

<?php $photos = Photo::find_all(); ?>
        
<?php 

$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

$items_per_page = 2;

$items_total_count = Photo::count_all();

$paginate = new Paginate($page, $items_per_page, $items_total_count);

$sql = "SELECT * FROM photos LIMIT {$items_per_page} OFFSET {$paginate->offset()}";

$photos = Photo::find_this_query($sql);

?>

        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-lg-12">
			<!-- Top Navigation -->
               <div class="thumbnails row">

                       <?php foreach($photos as $photo): ?>
                       
                            
                            <div class="col-xs-6 col-md-3">
                                
                                <a class="thumbnail" href="photo.php?id=<?php echo $photo->id; ?>">
                                    <img class="img-responsive home_page_photo" src="admin/<?php echo $photo->picture_path(); ?>" alt="<?php echo $photo->alternative_text; ?>">
                                </a>
                                
                            </div>
                        
                       <?php endforeach; ?> 
                       
                </div>
                
                <div class="row">
                    <ul class="pager">
   
                       <?php if($paginate->page_total() > 1): ?>
                            
                           <?php if($paginate->has_next()): ?>
                                
                             <li class='next'><a href='index.php?page=<?php echo $paginate->next_page(); ?>'>Next</a></li>

                            <?php endif; ?>
                            
                            <?php for($i=1; $i <= $paginate->page_total(); $i++): ?>
                            
                            <?php if($i == $paginate->current_page): ?>
                            
                            <li class='active'><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            
                            <?php endif; ?>
                            
                            <?php endfor; ?>

                            <?php if($paginate->has_previous()): ?>
                            
                            <li class='previous'><a href='index.php?page=<?php echo $paginate->previous_page(); ?>'>Previous</a></li>
                            
                            <?php endif; ?>
                        
                            <?php endif; ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        

<!-- Blog Sidebar Widgets Column -->
           
      
        <!-- /.row -->

        <?php include("includes/footer.php"); ?>
     