<?php include("includes/header.php"); ?>
    <?php include("includes/top_nav.php"); ?>
         <?php include("includes/side_nav.php"); ?>
        </nav>

    <!-- END OF HEADER AND NAVIGATION --> 
<?php

if(empty($_GET['id'])) {
    
    redirect("photos.php");
}

$comments = Comment::find_the_comments($_GET['id']);
$photo = Photo::find_by_id($_GET['id']);

?>
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Comments in <a href="../photo.php?id=<?php echo $_GET['id']; ?>"><?php echo $photo->title ?></a> photo
                        </h1>
                        
                        <?php echo $session->message; ?>
                       
                        <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Body</th>   
                        </thead>
                        <tbody>
                       <?php foreach($comments as $comment): ?>
                            <tr><td><?php echo $comment->id; ?></td>
                                <td><?php echo $comment->author; ?>
                                <div class="pictures_link" style="padding-top: 10px;">
                                    <a class="btn btn-danger" href="delete_comment_photo.php?id=<?php echo $comment->id; ?>">Delete</a>
                                </div>
                                </td>
                                <?php echo "<td>{$comment->body}</td>"; ?>
                                <?php endforeach; ?>
                        </tbody>    
                        </table>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>