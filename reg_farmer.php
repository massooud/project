<!doctype html>
<html lang="en">
  <head>
    <title>farmer</title>
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
            <div class="col-sm-9 bg-secondary " id="col2">
                <h1>Register Farmer</h1><hr>
                <form class="form form-group"  action="insert_f.php" method="post">
                    <div class="row m-4">
                        <div class="col-sm-4">
                            <label>Farmer name</label>
                            <input type="text" name="fname" class="form-control" placeholder="enter farmer name" required>

                            <label>Date</label>
                            <input type="date" name="date"  value="<?php echo date('Y-m-y')?>" class="form-control" disabled="disabled"  placeholder="enter username">
                            
                            <label for="">Phone number</label>
                            <input type="number" name="phone" placeholder="Phone number" class="form-control">
                          </div>
                          <div class="col-sm-4">
                            
                            <label for="nida">NIDA</label>
                            <input type="text" name="nida" placeholder="NIDA" class="form-control">
                            
                            <label>Zanzibar ID</label>
                            <input type="text" name="zid" class="form-control" placeholder="Enter Zanzibar ID">
                            
                            <label>ZSTC registartion number</label>
                            <input type="text" name="regno" class="form-control" placeholder="Registartion number">
                            
                          </div> 
                          <div class="col-sm-4">
                            <label>Location</label>
                            <input type="text" name="location" class="form-control" placeholder="enter location">
                            <label>Ward</label>
                            <input type="text" name="ward" class="form-control" placeholder="enter ward name">
                            <label>Gender</label> <br>
                            <select name="gender" id="gender" class="form-control">
                              <option value="" disabled selected>--select gender--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>

                        </div>
                     </div>
                     <div class="text-center"> 
                          <button class="btn btn-primary m-4" name="add" >add  <i class="fa fa-plus"></i></button> 
                         <button class="btn btn-warning m-4" ><a href="s_farmer.php">edit</a> <i class="fa fa-edit"></i></button>
                         <button class="btn btn-danger m-4" >delete  <i class="fa fa-trash-o"></i></button>                    
                     </div>	
                </form>
      
            </div>
          </div>
          <div class="footer">
              <?php include 'footer.php' ?>
          </div>
    </div>
  </body>
</html>