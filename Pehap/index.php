<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (file_exists('przepisNaBi3gos.txt')){
    echo "Przpis Na Bigos Został Znaleziony";
}
else{
    echo "Przepis nie istnieje"
}
?>    
<br>
<?php
$mortadela = "przepisNaMortadele.txt";
echo $mortadela . ': ' . filesize($mortadela) . 'Bitów';
?>

</body>
</html>


<?php

touch("Elo.txt");

$plik = fopen("elo.txt", "write");
fwrite($plik, "Teting");
fclose($plik);
?>
<br>
<?php
$plik2 = fopen("elo.txt", "read");
echo fgets($plik2);
fclose($plik2);

?>
