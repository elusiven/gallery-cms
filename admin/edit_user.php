<?php include("includes/header.php"); ?>
    <?php include("includes/top_nav.php"); ?>
         <?php include("includes/side_nav.php"); ?>
        
        
        
        <?php

        (empty($database->escape_string($_GET['id']))) ? redirect("users.php") : $user = User::find_by_id($database->escape_string($_GET['id']));
            
        if(isset($_POST['update'])) {
        
            if($user) {
                
                $user->password = $_POST['password'];
                $user->first_name = $_POST['first_name'];
                $user->last_name = $_POST['last_name'];
                $user->user_image = $_FILES['user_image'];
                
                $user->save();
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
                            Editing <?php echo $user->username; ?>'s profile
                        </h1>
                            <form action="" method="POST">
                        <div class="col-md-8">
                          <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?> "readonly>
                          </div>
                              <div class="form-group">
                              <label for="username">Password</label>
                              <input type="password" name="password" class="form-control" value="<?php echo $user->password; ?>">
                          </div>
                           <div class="form-group">
                              <label for="caption">First Name</label>
                              <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name ?>">
                          </div>
                           <div class="form-group">
                              <label for="caption">Last Name</label>
                              <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name ?>">
                          </div>
                     
                          
                          <input type="submit" name="update" value="Update" class="btn btn-primary">
   

                        </div>
                           <div class="col-md-4" >
                            <div  class="photo-info-box">
                                <div class="info-box-header">
                                   <h4>User's Picture <span id="toggle" class="glyphicon glyphicon-menu-up pull-right"></span></h4>
                                </div>
                            <div class="inside">
                              <div class="box-inner">
                                  <div class="form-group">
                              <a href=""><img src="<?php echo $user->user_image_func(); ?>" class="thumbnail" width="100%"></a>
                          </div>
                              </div>
                              <div class="info-box-footer clearfix">
                                <div class="info-box-delete pull-left">
                                </div>
                                <div class="info-box-update pull-right ">
                                </div>   
                              </div>
                            </div>          
                        </div>
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