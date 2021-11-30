<html>
<body>

<?php
$path = "menudata.txt";
$fh = fopen("menudata.txt","w");
$string = $_POST['coke'];
fwrite($fh,$string); 
$txt= $_POST['coke'] . PHP_EOL; 
file_put_contents('menudata.txt', $txt, FILE_APPEND);
fclose($fh);	
?>

</body>
</html>