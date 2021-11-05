<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
</body>
</html>

<?php

$url = parse_url(getenv('DATABASE_URL'));
$dsn = sprintf('pgsql:host=%s;dbname=%s', $url['host'], substr($url['path'], 1));
$pdo = new PDO($dsn, $url['user'], $url['pass']);
var_dump($pdo->getAttribute(PDO::ATTR_SERVER_VERSION));

//$sql = "INSERT INTO public.test(id, name, email, age, designation, created) VALUES (1, '山田', 'yamada@gmail.com', 19, 'エンジニア', current_timestamp);";
//$pdo->exec ($sql);

$sql = 'select * from public.test';
foreach ($pdo->query($sql) as $row) {
    echo $row['id'];
    echo $row['name'];
    echo $row['email'];
    echo $row['age'];
    echo $row['designation'];
    echo $row['created'];
}

?>