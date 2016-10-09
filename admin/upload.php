<?php include("includes/header.php"); ?>
<?php include("includes/top_nav.php"); ?>
<?php include("includes/side_nav.php"); ?>
<?php if(!$session->is_signed_in()){redirect("login.php");} ?>

<?php

$message = "";

if(isset($_POST['submit'])) {
    
    $photo = new Photo();
    $photo->title = $_POST['title'];
    $photo->description = $_POST['description'];
    $photo->set_file($_FILES['file_upload']);
    
    if($photo->save()) {
        
        $message = "Photo Uploaded Successfuly";
    } else {
        
        $message = join("<br>", $photo->errors);
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
                            Upload a photo
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                        
                        <div class=""></div>

                       <div class="col-md-6">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="file_upload">Upload an image</label>
                                <input type="file" name="file_upload">
                            </div>
                            
                            <input type="submit" name="submit" class="btn btn-success">                            
                            
                        </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>