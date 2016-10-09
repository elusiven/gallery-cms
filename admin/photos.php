<?php include("includes/header.php"); ?>
    <?php include("includes/top_nav.php"); ?>
         <?php include("includes/side_nav.php"); ?>
        
        
        
        
        
        
        </nav>

    <!-- END OF HEADER AND NAVIGATION --> 
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Photos
                        </h1>
                        <div class="col-md-12">
                            
                        <?php $photos = Photo::find_all(); ?>
                            
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($photos as $photo): ?>
                                <?php echo "<tr><td><img src='{$photo->picture_path()}' width='150px'>"; ?>
                                <div class="pictures_link">
                                    <a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a>
                                    <a href="">Edit</a>
                                    <a href="">View</a>
                                </div>
                                </td>
                                <?php echo "<td>{$photo->id}</td>"; ?>
                                <?php echo "<td>{$photo->title}</td>"; ?>
                                <?php echo "<td>{$photo->description}</td>"; ?>
                                <?php echo "<td>{$photo->size}</td></tr>"; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>