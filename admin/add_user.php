<?php include("includes/header.php"); ?>
    <?php include("includes/top_nav.php"); ?>
         <?php include("includes/side_nav.php"); ?>
        
        <?php $user = new User(); ?>
        
        <?php
            
        if(isset($_POST['submit'])) {
            
            if($user) {
                
                $user->username = $_POST['username'];
                $user->password = $_POST['password'];
                $user->first_name = $_POST['first_name'];
                $user->last_name = $_POST['last_name'];
                
                $user->set_file($_FILES['user_image']);
                $user->save_profile_photo();
            }
            
        }

        ?>
        
        
        
        </nav>

    <!-- END OF HEADER AND NAVIGATION --> 
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Adding new user
                        </h1>
                            <form action="" method="POST">
                        <div class="col-md-8">
                          <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" class="form-control">
                          </div>
                              <div class="form-group">
                              <label for="username">Password</label>
                              <input type="password" name="password" class="form-control">
                          </div>
                           <div class="form-group">
                              <label for="caption">First Name</label>
                              <input type="text" name="first_name" class="form-control" >
                          </div>
                           <div class="form-group">
                              <label for="caption">Last Name</label>
                              <input type="text" name="last_name" class="form-control">
                          </div>
                          <div class="form-group">
                              <label for="user_images">Profile Picture</label>
                              <input type="file" name="user_image" class="form-control">
                          </div>
                           
                            <input type="submit" name="submit" class="btn btn-success">
                        </div>

                    </div>
                    </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>