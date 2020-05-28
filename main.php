<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Connect!</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body class="body1">

    <div class="container-fluid">
        <div class="row">
		
            <!--Category-->
            <div class="col-sm-2" id="filterLeft">
                <div class="row" justify-content-center>
                    <form valign="top" method="post" action="catalog.php" target="4">
                        <input type="hidden" name="type" value="F">
                        <input type="hidden" name="target" value="">
						  <div class="dropdown">
							<button type="button" id="giveget1" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" width="100">
								Give/Get
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Give</a>
								<a class="dropdown-item" href="#">Get</a>
							</div>
						  </div>
                    </form>
                </div>
				<br>
                <div class="row" justify-content-center>
                    <form valign="top" method="post" action="catalog.php" target="4">
                        <input type="hidden" name="type" value="F">
                        <input type="hidden" name="target" value="">
						  <div class="dropdown">
							<button type="button" id="lv1" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" width="100">
								Mask Level
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Level 1</a>
								<a class="dropdown-item" href="#">Level 2</a>
								<a class="dropdown-item" href="#">Level 3</a>
							</div>
						  </div>
                    </form>
                </div>
				<br>
                <div class="row" justify-content-center>
                    <form method="post" action="catalog.php" target="4">
                        <input type="hidden" name="type" value="F">
                        <input type="hidden" name="target" value="f">
						  <div class="dropdown">
							<button type="button" id="size1" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" width="100">
							  Mask Size
							</button>
							<div class="dropdown-menu">
							  <a class="dropdown-item" href="#">Adult (9" x 6")</a>
							  <a class="dropdown-item" href="#">Child (7.5" x 5")</a>
							</div>
						  </div>
                    </form>
                </div>
				<br>
                <div class="row" justify-content-center>
                    <form valign="top" method="post" action="catalog.php" target="4">
                        <input type="hidden" name="type" value="F">
                        <input type="hidden" name="target" value="a">
						  <div class="dropdown">
							<button type="button" id="district1" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
							  District
							</button>
							<div class="dropdown-menu">
							  <a class="dropdown-item" href="#">Central and Western</a>
							  <a class="dropdown-item" href="#">Eastern</a>
							  <a class="dropdown-item" href="#">Southern</a>
							  <a class="dropdown-item" href="#">Wan Chai</a>
							  <a class="dropdown-item" href="#">Sham Shui Po</a>
							  <a class="dropdown-item" href="#">Kowloon City</a>
							  <a class="dropdown-item" href="#">Kwun Tong</a>
							  <a class="dropdown-item" href="#">Wong Tai Sin</a>
							  <a class="dropdown-item" href="#">Yau Tsim Mong</a>
							  <a class="dropdown-item" href="#">Islands</a>
							  <a class="dropdown-item" href="#">Kwai Tsing</a>
							  <a class="dropdown-item" href="#">North</a>
							  <a class="dropdown-item" href="#">Sai Kung</a>
							  <a class="dropdown-item" href="#">Sha Tin</a>
							  <a class="dropdown-item" href="#">Tai Po</a>
							  <a class="dropdown-item" href="#">Tsuen Wan</a>
							  <a class="dropdown-item" href="#">Tuen Mun</a>
							  <a class="dropdown-item" href="#">Yuen Long</a>
							</div>
						  </div>
                    </form>
                </div>
            </div>
			
			
            <!--Show Content-->
            <div class="col-sm-10">
				<button class="btn btn-info"id="showButton" type="button" data-toggle="collapse" data-target="#showfilter" aria-expanded="false" aria-controls="showfilter">
					Show Filter
				</button>
				<!--Category-->
				<div class="collapse" id="showfilter">
					<div class="row" justify-content-center>
						<form valign="top" method="post" action="catalog.php" target="4">
							<input type="hidden" name="type" value="F">
							<input type="hidden" name="target" value="">
							  <div class="dropdown">
								<button type="button" id="giveget2" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" width="100">
								  Give/Get
								</button>
								<div class="dropdown-menu">
								  <a class="dropdown-item" href="#">Give</a>
								  <a class="dropdown-item" href="#">Get</a>
								</div>
							  </div>
						</form>
					</div>
					<br>
					<div class="row" justify-content-center>
						<form valign="top" method="post" action="catalog.php" target="4">
							<input type="hidden" name="type" value="F">
							<input type="hidden" name="target" value="">
							  <div class="dropdown">
								<button type="button" id="lv2" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" width="100">
								  Mask Level
								</button>
								<div class="dropdown-menu">
								  <a class="dropdown-item" href="#">Level 1</a>
								  <a class="dropdown-item" href="#">Level 2</a>
								  <a class="dropdown-item" href="#">Level 3</a>
								</div>
							  </div>
						</form>
					</div>
					<br>
					<div class="row" justify-content-center>
						<form method="post" action="catalog.php" target="4">
							<input type="hidden" name="type" value="F">
							<input type="hidden" name="target" value="f">
							  <div class="dropdown">
								<button type="button" id="size2" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" width="100">
								  Mask Size
								</button>
								<div class="dropdown-menu">
								  <a class="dropdown-item" href="#">Adult (9" x 6")</a>
								  <a class="dropdown-item" href="#">Child (7.5" x 5")</a>
								</div>
							  </div>
						</form>
					</div>
					<br>
					<div class="row" justify-content-center>
						<form valign="top" method="post" action="catalog.php" target="4">
							<input type="hidden" name="type" value="F">
							<input type="hidden" name="target" value="a">
							  <div class="dropdown">
								<button type="button" id="district2" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
								  District
								</button>
								<div class="dropdown-menu">
								  <a class="dropdown-item" href="#">Central and Western</a>
								  <a class="dropdown-item" href="#">Eastern</a>
								  <a class="dropdown-item" href="#">Southern</a>
								  <a class="dropdown-item" href="#">Wan Chai</a>
								  <a class="dropdown-item" href="#">Sham Shui Po</a>
								  <a class="dropdown-item" href="#">Kowloon City</a>
								  <a class="dropdown-item" href="#">Kwun Tong</a>
								  <a class="dropdown-item" href="#">Wong Tai Sin</a>
								  <a class="dropdown-item" href="#">Yau Tsim Mong</a>
								  <a class="dropdown-item" href="#">Islands</a>
								  <a class="dropdown-item" href="#">Kwai Tsing</a>
								  <a class="dropdown-item" href="#">North</a>
								  <a class="dropdown-item" href="#">Sai Kung</a>
								  <a class="dropdown-item" href="#">Sha Tin</a>
								  <a class="dropdown-item" href="#">Tai Po</a>
								  <a class="dropdown-item" href="#">Tsuen Wan</a>
								  <a class="dropdown-item" href="#">Tuen Mun</a>
								  <a class="dropdown-item" href="#">Yuen Long</a>
								</div>
							  </div>
						</form>
					</div>
				</div>

			</div>
        </div>
    </div>
	
</body>
</html>