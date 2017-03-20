<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php echo '<p>Emmanuel a 42 ans.</p>';
echo '<p>Thierry a 51 ans.</p>';
echo '<p>Pascal a 45 ans.</p>';
echo '<p>Eric a 48 ans.</p>';
echo '<p>Nicolas a 19 ans.</p>';
$Emmanuel=42;
$Thierry=51;
$Pascal=45;
$Eric=48;
$Nicolas=19;
$total= $Emmanuel+$Thierry+$Pascal+$Eric+$Nicolas;
$moy= $total / 5 ;
echo 'La moyenne d';
echo '\'âge est de ';
echo $moy;
echo ' !';
?>
</body>
</html>