<?php
include '../function/configdb.php';
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:../pages/404');
}
//Restrict admin to Access user.php page
if($_SESSION['user']['user_type']=='Адміністрація'){
 header('location:../admin/admin');
}
?>
<?php include("../include/up_style.php") ?>
<body>
<header class="top_header">
	<?php include("../include/header.php") ?>
</header>
  <div class="main_content_news">
    <div class="container">
    <div class="row">
      <div class="col-md-8">
          <!-- main -->
<div class="news_content">
	            <div class="box_news">
                <div class="profile_user">
        <?php
  if(isset($_GET['id'])){
    $sql = mysqli_query($conn,"SELECT * FROM `multi_login` WHERE `id` = ".$_GET['id']."") or die("Помилка");
    while($result = mysqli_fetch_array($sql)){
?>
<h2>Профіль користувача  - <span><?php echo $result['username']; ?></span> </h2>
    <img src="<?php echo $result['image']; ?>" alt="userlogo">
    <div class="profile_user">
     <ul> </li>
    <li>E-mail - <span><?php echo $result['email']; ?></span></li>
    <li>Нікнейм - <span><?php echo $result['username']; ?></span></li>
    <li>ПІБ - <span><?php echo $result['pib']; ?></span></li>
    <li>Номер телефону - <span><?php echo $result['phone_number']; ?></span></li>
    <li>Тип облікового запису - <span><?php echo $result['user_type']; ?></li>
    <li>Адреса - <span><?php echo $result['adress']; ?></span></li>
    <li>Вік - <span><?php echo $result['age']; ?> років</span></li>
    </ul>
  </div>
    <?php }} mysqli_close($conn); ?>
          </div>
          </div>
            </div>
                        </div>
          <!-- Sidebar -->
            <?php include("../include/sidebar.php"); ?>
          <!-- Sidebar -->
        </div>
    </div>
</div>
<footer>
	<?php include("../include/footer.php") ?>
</footer>	
  <?php include("../include/bot_script.php") ?>
</body>
  <?php include("../modal_window.php") ?>
</html>