<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container text-center bg">
    <center>
        <form action="auth_v.php" method="post" enctype="multipart/form-data">
      	<div class="card text-center mt-4 bg-white form" style="height: 80vh; width: 25rem">
      		<div class="card-img-top">
      			<img src="zstc.jpg " class="" style="">
      		</div>
      		<div class="card-title text-center mt-1">
      			<div class="h5 bg-light">
      				ZSTC payment System <hr>
      			</div>
      		</div>
      		<div class="card-body text-center">
      			<div class="row ">
	              <div class="col-sm-12">
	                  <input type="text" name="username" placeholder="Username" required="required" class="form-control">
	              </div>
          		</div>
		         <div class="row mt-4">
		          	<div class="col-sm-12">
		              	<input type="password" name="password" placeholder="Password" required="required" class="form-control">
		             </div>
		          </div>
		          <div class="row">
		          	<div class="col-sm-8 mt-sm-2" style="">
		          		<p>
		          			<input type="checkbox">
		          			<a>Remember me Letter</a>
		          		</p>
		          	</div>
		          </div>
		          <div class="row mt-1">
		          	<div class="col-sm-12">
		          		<button class="btn btn-primary col-sm-12" name="login">Login</button>
		          	</div>
		          </div>
      		</div>       
          </div>
        </form>
          </center>
      </div>
  </body>
</html>