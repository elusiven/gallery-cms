<?php include("includes/header.php"); ?>
    <?php include("includes/top_nav.php"); ?>
         <?php include("includes/side_nav.php"); ?>
             <?php if(!$session->is_signed_in()){redirect("login.php");} ?>
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
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                        
                        <?php $users = User::find_all(); ?>

                        <table class="table table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Username</th>   
                            <th>First Name</th>
                            <th>Last Name</th>                     
                        </thead>
                        <tbody>
                        <?php foreach($users as $user): ?>
                        <?php echo "<tr><td>" . $user->id . "</td>"; ?>
                        <?php echo "<td>" . $user->username . "</td>"; ?>
                        <?php echo "<td>" . $user->first_name . "</td>"; ?>
                        <?php echo "<td>" . $user->last_name . "</td></tr>"; ?>
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