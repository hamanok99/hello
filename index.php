<?php
file_put_contents("sample.txt", "HELLO WORLD!!");
?>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
 <?php echo '<p>deploy test</p>'; ?>
 <?php echo '<p>OK</p>'; ?>
 <?php echo var_dump(file('sample.txt')); ?>

</body>
</html>
