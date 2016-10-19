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
                           
                        <?php ; ?> 
                            
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($photos as $photo): ?>
                                <?php echo "<tr><td><img class='admin-photo-thumbnail' src='{$photo->picture_path()}'>"; ?>
                                <div class="action_links" style="padding-top: 10px;">
                                    <a class="btn btn-danger" href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a>
                                    <a class="btn btn-warning" href="edit_photo.php?id=<?php echo $photo->id; ?>">Edit</a>
                                    <a class="btn btn-success" href="../photo.php?id=<?php echo $photo->id; ?>">View</a>
                                </div>
                                </td>
                                <?php echo "<td>{$photo->title}</td>"; ?>
                                <?php echo "<td>{$photo->description}</td>"; ?>
                                <?php echo "<td>{$photo->size}</td>"; ?>
                            <td><a href="photo_comment.php?id=<?php echo $photo->id; ?>"><?php echo Comment::CountRows($photo->id); ?></a></td></tr>
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