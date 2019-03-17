<div class="container-fluid">
  
    <!-- Page Heading -->

    <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>


                        <?php 
                        //$user = User::find_by_id(2);

                        //echo $user->username;

                       // $photo = Photo::find_by_id(17);

                       // echo $photo->filename;
                        
                         //$user = new User();

                         //$user->username = "alex the first";
                         //$user->password = "taneski last name";
                        // $user->first_name = "alex";
                         //$user->last_name = "taneski";

                         //$user->create();

                       // $user = User::find_all(13);

                       // $user->username = "David45";
                       // $user->password = "david1989";
                       // $user->first_name = "WILLIAMSSON";
                       // $user->last_name = "WILLIAMSSON";
                       // $user->update();

                        //$user = User::find_all_users(2);
                        //$user->delete();

                        //$user = User::find_user_by_id(12);

                        //$user->password = "justpassword"; 
                        //$user->save();

                        // $user = new User();

                          //$user->username = "tom"; 
                         // $user->save();

                         // $users= Photo::find_all();

                         // foreach ($photos as $photo) {
                          //    echo $photo->title;
                         // }
                         
                          $photo = new User();

                        $photo->title = "test title";
                        $photo->size = "20";
                        

                         $photo->create();

                        //$users = User::find_all();

                        //foreach ($users as $user) {
                           // echo $user->username;
                      //  }

                    //  $photos = Photo::find_all();
                      // foreach ($photos as $photo) {
                      //  echo $photo->title;

                        
                     //  }
                    

                   
                       
                         ?>
                         
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