<html>
<head>
<title>Digital Clock</title>
<meta http-equiv="refresh" content="1"/>
<style>
p {
color:white;
font-size:70px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
}
body{background-color:black;}
</style>
<p> <?php 
date_default_timezone_set("Asia/Calcutta");
echo date(" h: i : s A");?> </p>
</head>
</html>
