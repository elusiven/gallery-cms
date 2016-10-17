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
                            Comments
                        </h1>
                       
                        <?php $comments = Comment::find_all(); ?>

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
                                    <a class="btn btn-danger" href="delete_user.php?id=<?php echo $comment->id; ?>">Delete</a>
                                    <a class="btn btn-warning" href="edit_user.php?id=<?php echo $comment->id; ?>">Edit</a>
                                    <a class="btn btn-success" href="">View</a>
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