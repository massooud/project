<!doctype html>
<html lang="en">
  <head>
    <title>user</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include 'link.php' ?>
  </head>
  <body>
    <div class="container-fluid text-center bg-light" style="height: 90vh">
          <div class="header">
            <?php include 'topbar.php'?>
          </div>
          <div class="section row ml-sm-1 mr-sm-1" style="height: 70vh">
            <div class="col-sm-2 " id="col1">
                <?php include "sidenav.php" ?>
            </div>
            <div class="col-sm-9 bg-light" id="col2">
            <div class="card">
            <form class="form form-group" enctype="multipart/form-data" action="insert_u.php" method="post">
                	<div class="row text-center">
                		 <h3 class="col-sm-12">REGISTRATION FORM</h3> <hr class="col-sm-10 ml-4" style=""> 
                	</div>
                    <div class="row m-4">
                        <div class="col-sm-6">
                            <label>User ID</label>
                            <input type="text" name="userid" class="form-control" placeholder="enter UserID">

                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="enter Full Name">

                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="enter email address">

                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="enter username">
                        </div>
                        <div class="col-sm-6">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="enter password">

                                <label>Location</label>
                                <input type="text" name="location" class="form-control" placeholder="enter location">

                                <label>Access Level</label>
                                <input type="text" name="level" class="form-control" placeholder="Enter the Access Level">
                                <label>Gender</label> <br>
                                <input type="radio" name="gender" value="Male"> Male <br>
                                <input type="radio" name="gender" value="Female"> Female <br>
                        </div> 
                     </div>
                     <div class="text-center"> 
                          <button class="btn btn-primary m-4" name="submit">submit  </button> 
                         <button class="btn btn-warning m-4" name="uedit" > <a href="s_user.php">view</a></button>
                         <button class="btn btn-danger m-4" name="delete"><a href="s_user.php">clear</a></button>                    
                     </div>	
                </form>
              </div>
            </div>
          </div>
          <div class="footer">
              <?php include 'footer.php' ?>
          </div>
    </div>
  </body>
</html>