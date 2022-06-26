<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    include 'link.php';
    include_once 'connection.php';
    $sqlSelect = "SELECT * FROM reg_user";
    $selectQ = mysqli_query($conn, $sqlSelect);
    $center = mysqli_fetch_all($selectQ, MYSQLI_ASSOC);
    
    ?>
</head>
<body>
    <div class="container-fluid text-center bg-light" style="height: 90vh">
          <div class="header">
            <?php include 'topbar.php'?>
          </div>
          <div class="section row ml-sm-1 mr-sm-1" style="height: 70vh">
            <div class="col-sm-2" id="col1">
            <!-- <span style="font-size:30px;cursor:pointer" class="float-left" onclick="openSideNav()">&#9776; open</span> -->
                <?php include "sidenav.php" ?>
            </div>
            <div class="col-sm-9 bg-light" id="col2">
                <table class="table table-responsive d-block">
                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th>full name</th>
                            <th>email</th>
                            <th>username</th>
                            <th>location</th>
                            <th>gender</th>
                            <th>Change<i class="fa fa-edit"></i></th>
                            <th>Delete<i class="fa fa-trash"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($center as $user ):  ?>
                            <tr>
                                <td><?php echo $user['userid'] ?></td>
                                <td><?php echo $user['fullName']; ?></td>
                                <!-- <td><?php echo $user['gender']; ?></td> -->
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['username']; ?></td>
                                
                                <td><?php echo $user['location']; ?></td>
                                <td><?php echo $user['gender']; ?></td>
                                <td>
                                    <button class="btn  btn-warning">
                                        <a href="e_user.php?id=<?php echo $user['userid'];?>" onclick="return confirm('are you sure ? you want to change <?php echo $user['fullName']; ?>')" >edit</a> 
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-danger">
                                        <a href="insert_u.php?id=<?php echo $user['userid'];?>" onclick="return confirm('are you sure? you want to delete <?php echo $user['fullName']; ?>') " >delete</a>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
          </div>
          <div class="footer">
              <?php include 'footer.php' ?>
          </div>
      </div>
    <form class="container" action="insert_u.php" method="post">
        
</body>
</html>