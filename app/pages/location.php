<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>COLEVENTS - Місця заходів</title>
	<meta name="description" content="Site for educational work and organization of events" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../img/favicon.ico" />
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="../libs/font-awesome-4.7.0/css/font-awesome.css" />
	<link rel="stylesheet" href="../css/fonts.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/media.css" />
	<link rel="stylesheet" href="../libs/mobilemenu/jquery.mmenu.all.css" />
	<link rel="stylesheet" href="../libs/superfish/superfish.css" />
	<link rel="stylesheet" href="../libs/superfish/megafish.css" />
	<link rel="stylesheet" href="../css/hard_style.css">
	<link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css">
</head>	
<body>
<header class="top_header">
	<?php include("../include/header.php") ?>
</header>
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="catagory_event_list">
				<h3>Місця проходження заходів</h3>
				<p>подивись більше про місця заходів</p>
				<div class="sorting">
					<span>Сортування:</span>
					<a href="#">Дата</a> |
					<a href="#">Назва</a>
				</div>
          <div class="catagory_event_list_sort">
          <?php 
            for ($i=0; $i < 9; $i++) { 
              echo '<div class="catagory_event_list_singl">
              <img src="../img/location.jpg" alt="logo_event">
              <div class="catagory_event_list_desc">
              <a href="../pages/singl_location.php">Назва місця</a><br>
                  <span>Опис Опис Опис Опис </span>
                </div>
              </div>';
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>  
<!-- nav --> 
<footer>
	<?php include("../include/footer.php") ?>
</footer>	
	<!--[if lt IE 9]>
	<script src="../libs/html5shiv/es5-shim.min.js"></script>
	<script src="../libs/html5shiv/html5shiv.min.js"></script>
	<script src="../libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="../libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="../libs/jquery/jquery-3.3.1.min.js"></script>
	<script src="../libs/superfish/superfish.min.js"></script>
  <script src="../libs/mobilemenu/jquery.mmenu.min.all.js"></script>
	<script src="../js/common.js"></script>
  <script src="../libs/bootstrap/bootstrap.min.js"></script>
</body>
  <?php include("../modal_window.php") ?>
</html>