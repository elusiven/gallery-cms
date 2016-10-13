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
                            Users
                        </h1>

                       <a href="add_user.php" class="btn btn-primary">Add User</a>
                       
                        <?php $users = User::find_all(); ?>

                        <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Username</th>   
                            <th>First Name</th>
                            <th>Last Name</th>                     
                        </thead>
                        <tbody>
                       <?php foreach($users as $user): ?>
                            <tr><td><?php echo $user->id; ?></td>
                                <td><img src="<?php echo $user->user_image_func(); ?>" width="80px"></td>
                                <td><?php echo $user->username; ?>
                                <div class="pictures_link" style="padding-top: 10px;">
                                    <a class="btn btn-danger" href="delete_user.php?id=<?php echo $user->id; ?>">Delete</a>
                                    <a class="btn btn-warning" href="edit_user.php?id=<?php echo $user->id; ?>">Edit</a>
                                    <a class="btn btn-success" href="">View</a>
                                </div>
                                </td>
                                <?php echo "<td>{$user->first_name}</td>"; ?>
                                <?php echo "<td>{$user->last_name}</td>"; ?>
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