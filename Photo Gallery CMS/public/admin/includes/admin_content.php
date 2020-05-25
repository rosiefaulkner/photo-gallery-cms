<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>

                        <?php

                        // $result_set = User::find_all_users();

                        // while($row = mysqli_fetch_array($result_set)){
                        
                        // echo $row['username'] . "<br>";

                        // }

                        // $found_user = User::find_user_by_id(2);

                        // $user = User::instantiation($found_user);

                        // echo $user->username;

                        // $users = User::find_all_users();
                        
                        // foreach ($users as $user){

                        //     echo $user->id . "<br>";

                        // }

                        $found_user = User::find_user_by_id(2);

                        echo $found_user->username;
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

        </div>