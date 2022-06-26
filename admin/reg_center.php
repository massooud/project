<!doctype html>
<html lang="en">
  <head>
    <title>center</title>
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
          <div class="row ml-sm-1 mr-sm-1" style="height: 70vh">
            <div class="col-sm-2 " id="col1">
                <?php include "sidenav.php" ?>
            </div>
            <div class="col-sm-9 bg-light " id="col2">
              <div class="card">
                <form class="form-group" action="insert_c.php" method="post">
                <div class="row text-center">
                     <h3 class="col-sm-12">REGISTER FARMER</h3> <hr class="col-sm-10 ml-4" style=""> 
                  </div>
                  <div class="row m-4">
                      <div class="col-sm-6">
                          <label>Center Name</label>
                          <input type="text" name="cname" class="form-control" placeholder="enter center name">
                          <label>Center Region</label>
                          <input type="text" name="creg" class="form-control" placeholder="enter Center Number">
                      </div>
                      <div class="col-sm-6">
                          <label>Location</label>
                          <input type="text" name="location" class="form-control" placeholder="enter location">
                          <label>District</label>
                          <input type="text" name="district" class="form-control" placeholder="enter district">
              
                      </div>              
                  </div>
                  <div class="text-center">
                      <button class="btn btn-primary m-sm-4" name="submit">Add <i class="fa fa-plus"></i></button> 
                      <button class="btn btn-warning m-sm-4" name="edit">
                      <a href="s_center.php">edit</a> <i class="fa fa-edit"></i></button>                    
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