<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <form action="index.php" method="post">
 <input type="text" name="name" class="form-text" value="">
 </form>
 <?php echo '<p>こんにちは世界</p>'; ?>
 <?php echo var_dump(isset($_POST["name"])); ?>
</body>
</html>
