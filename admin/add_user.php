<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

   <?php

   

 //   $user = user::find_by_id($_GET['Id']);

  //}

  $user = new User();

  if(isset($_POST['create'])) {

    if($user)  {

        $user->username = $_POST['username'];
        $user->username = $_POST['first_name'];
        $user->username =$_POST['last_name'];
        $user->username =$_POST['password'];

       $user->set_file($_FILES)([user_image]);
       $user->save_user_and_image();

     }
 

  // if($user)  {

      // $user->title = $_POST['title'];
      // $user->caption = $_POST['caption'];
        //$user->alternative_text = $_POST['alternative_text'];
        //$user->description = $_POST['description'];



      // $user->save();

   // }



    }


      
    
        //$users = user::find_all();


      ?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
           
           <?php include("includes/top_nav.php") ?>



            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            

           <?php include("includes/side_nav.php") ?>



            <!-- /.navbar-collapse -->



        </nav>

        <div id="page-wrapper">


        <div class="container-fluid">
  
  <!-- Page Heading -->

  <div class="row">
                  <div class="col-lg-12">
                      <h1 class="page-header">
                            users
                          <small>Subheading</small>
                      </h1>

             <form action="" method="post" enctype="multipart/form-data">

              <div class="col-md-6 col-md-offset-3">

              <div class="form-group">
                       
                    <input type="file" name="user_image" >




                <div class="col-md-8">
                     <div class="form-group">

                       <label for="username">Username></label>
                       <input type="text" name="username" class="form-control" value="<?php echo $user->title; ?>">

                    </div>
                    
                                        
              
                     <div class="form-group">
                        <label for="first name">First Name</label>
                    <input type="text" name="caption" class="form-control" >

                    </div>

                    <div class="form-group">
                        <label for="last name">Last Name></label>
                    <input type="text" name="caption" class="form-control" >

                    <div class="form-group">
                        <label for="password">Password></label>
                    <input type="password" name="password" class="form-control" >

                    

                   
                    </div>
                    
                     <div class="form-group">
                       
                    <input type="submit" name="create" class="btn btn-primary pull-right" >



                  </div>



                  

            </form>




                    






                  </div>
              </div>
              <!-- /.row -->
               

          </div>
           <!-- /.container-fluid -->
                     
          
        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>