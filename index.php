<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <form action="index.php" method="post">
 <input type="text" name="name" class="form-text" value="">
 <input class="contact-submit" type="submit" value="検索" />
 </form>
 <?php
 echo '<p>こんにちは世界</p>';
 echo var_dump(isset($_POST["name"]));
 ?>
</body>
</html>
