/* 
***** FORM *****
<html><head></head>
<body>
<form action="thePage.php" method="POST">
  <input type="text" id="title"></input>
  <input type="color" id="bgcolor"></input>
  <input type="color" id="color"></input>
  <input type="text" id="heading"></input>
  <input type="text" id="content"></input>
  <input type="text" id="nextpage"></input>
  <input type="submit">
</form>
</body>
*/

////////// thePage.php //////////
<html>
<head>
<title><?php echo $_POST['title']; ?> </title>
</head>
<body>
<style>
body {
  background-color: <?php echo $_POST['bgcolor']; ?>;
  color: <?php echo $_POST['color']; ?>;
}
</style>
<?php print('<img src="img/die".rand(1,6).'.png">'); ?>
<br>
<h1><?php echo $_POST['heading']; ?></h1><br><div><?php echo $_POST['content']; ?></div>
<?php print('<a href="' . $_POST['nextpage'] . '">Next Page</a>' ?> <br></body></html>
