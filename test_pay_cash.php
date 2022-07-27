<!doctype html>
<html lang="en">
  <head>
    <title>center</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php 
        include 'connection.php';
        include 'link.php';
        //fiil out the farmers information
        $name = "";
        $phone = "";
        
        if (isset($_POST['search'])) {
            
            $find =  $_POST['find'];
            $sql = "SELECT farmerName, phoneNo, fullName  FROM farmer, reg_user where phoneNo = '$find' or zanId ='$find' or Nida like '$find' or zstcRegNo like '$find'"; 
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)> 0){
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['farmerName'];
                    $phone = $row['phoneNo'];
                }
            }
        }
    ?>
  </head>
  <body>
    <div class="container-fluid bg-light" style="height: 90vh">
          <div class="header">
            <?php include 'topbar.php'?>
          </div>
          <div class="section row ml-sm-1 mr-sm-1" style="height: 70vh">
            <div class="col-sm-2 " id="col1">
                <?php include "sidenav.php" ?>
            </div>
            <div class="col-sm-9 bg-light " id="col2">
                <div class="card">
                <form  method="post" class="d-flex my-2 m-sm-4">
                    <label>search farmer</label> 
                    <input class="form-control mr-sm-2 ml-sm-2 w-75" type="search" name="find" placeholder="Search farmer by zan id, nida or zstc registration no." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>                       
                </form> <br>
                <form action="cash.php" method="post" class="m-sm-4">                   
                    <h3>Cash payment</h3> <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Full name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name ?>" required>
                            </div>
                            <div class="col">
                                <label>Goods</label>
                                <select name="good" class="form-control" id="goods">
                                    <option selected disabled="disabled">--select product--</option>
                                    <option value="karafuu" >KARAFUU</option>
                                    <option value="makonyo" >MAKONYO</option>
                                    <option value="mafuta" id="mf">MAFUTA</option>
                                </select>
                            </div>
                        </div>
            
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Mobile Name</label>
                                <select class="form-control" id="mobname" name="mobname" value="<?php echo $phone ?>">
                                    <option selected disabled="disabled">--select mobile name--</option>
                                    <option>Zantel</option>
                                    <option>Tigo</option>
                                    <option>Halotel</option>
                                    <option>Airtel</option>
                                    <option>Vodacom</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label>Mobile Number</label>
                                <input type="text" name="mobno" id="mobno" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Remarks</label>
                                <select name="remark" class="form-control" id="remark">
                                    <option value="nzuri" >NZURI</option>
                                    <option value="wastani" >WASTANI</option>
                                    <option value="hafifu" >HAFIFU</option>
                                    <option value="mpeta" >MPETA</option>
                                    <option value="organic">ORGANIC</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Date of Sale</label>
                                <input type="text" name="date" class="form-control" value="<?php echo date('d-m-Y') ?>" disabled>
                            </div>
                                
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Weight/Volume </label>
                                <input type="text" name="weight" id="weight" class="form-control" id="weight" oninput="weight()">
                            </div>
                            <div class="col">
                                <label>Amount</label>
                                <input type="number" name="amount" class="form-control"  id="result" onclick="total()" readonly="readonly" required>
                            </div>
                        </div>
                                            
                        <div id="changing">
                            
                        </div>
                        <br>
                    </div>
                    <div class="text-center">
                            <button class="btn btn-primary m-4" name="addcash">submit<i class="fa fa-plus"></i></button> 
                            <button class="btn btn-warning m-4" ><a href="s_cash.php">view</a> </button>
                            <button class="btn btn-danger m-4" type="reset" >clear </button>                    
                    </div>
                    <input type="hidden" name="userid" value=" <?php echo $uid ?>">
                    <input type="hidden" name="productid" value="<?php echo $pid ?>">
            </form>
        </div>
            </div>
          </div>
          <div class="footer">
              <?php include 'footer.php' ?>
          </div>
    </div>
    <script type="text/javascript">
        // function legend() {
        //     var a = document.getElementById('goods').value;
        //     if (a=="makonyo") {
        //         document.getElementById('changing').outerHTML = "Welcome " ;
        //     }
        // }
            
    </script>
  </body>
</html>
