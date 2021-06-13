<html>
<head>
<title> Random Number</title>

</head>
<body>
<center>
<h2> Generate Random number and finding its Square Root</h2>
<p> I have selected random number

<?php
$choice = rand(1, 1000);
echo $choice;
?>
<p> Square root of random number is =
<?php
echo sqrt ($choice);
?>

</p>
</center>
</body>
</html>