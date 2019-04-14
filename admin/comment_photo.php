<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

 if(empty($_GET['id'])) {
     redirect("photos.php");
 }
     

$comments = Comment::find_the_comments($_GET['Id']);

   ?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- mobile display -->
           
           <?php include("includes/top_nav.php") ?>



            <!-- Sidebar Menu Items -  collapse to the responsive navigation menu on small screens -->
            

           <?php include("includes/side_nav.php") ?>



            <!-- /.navbar-collapse -->



        </nav>

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
                  </div>
              </div>
              <!-- /.row -->
               

          </div>
           <!-- /.container-fluid -->
                     
          
        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>