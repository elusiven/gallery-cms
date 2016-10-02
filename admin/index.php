<?php include("includes/header.php"); ?>
   <?php if(!$session->is_signed_in()){redirect("login.php");} ?>
    <?php include("includes/top_nav.php"); ?>
         <?php include("includes/side_nav.php"); ?>
        </nav>

    <!-- END OF HEADER AND NAVIGATION --> 
       
        <div id="page-wrapper">

           <?php include("includes/admin_content.php"); ?>

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>