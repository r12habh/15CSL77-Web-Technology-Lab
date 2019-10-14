<html>
<title>Visitor</title>
<body>
<h1>Flower</h1>
<figure>
<img src="flower.jpeg"/>
<figcaption style="color:red">The Flower</figcaption>
</figure>
<?php
$file = "count.txt";
$count = strval(file_get_contents($file));
file_put_contents($file, $count+1);
echo("You are the visitor no:".$count);
?>
</body>
</html>
