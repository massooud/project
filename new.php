<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php include 'link.php' ?>
	<style type="text/css">
		.vartical-nav {
			height: 100vh;
			width: 17rem;
		}
		.content {
			width: calc(100% - 17rem);
		}
		@media screen and (max-width: 500px){
			.vartical-nav {
				height: 0px;
				width: 0px;
			}
		}
	</style>
</head>
<body>

	<div class="container-fluid d-flex">
		<div class="vartical-nav bg-secondary">
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
			<ul>
				<li>moja</li>
				<li>mbili</li>
				<li>moja</li>
				<li>moja</li>
				<li>moja</li>
			</ul>
		</div>
		<div class="content bg-primary">
			<div class="topbar" style="background-color: ">
      <div class="row">
        <div class="col-1 mt-sm-3 ml-sm-4">
          <img src="zstc.jpg" id="picture1" class="rounded-circle">
        </div>

        <div class="col pt-3" style="text-align: center;">
          <h3>ZANZIBAR STATE TRADING CORPORATION (ZSTC)</h3>
        </div>
      </div>
      <div>
        <hr style="background-color: grey; height: 4px">
      </div>
</div>
		</div>
	</div>
</body>
</html>