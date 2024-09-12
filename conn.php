<?php
$polaczenie = new mysqli('10.0.0.22:1205', 'tst_db', '4$S1*fSf', 'tst_db');
if (mysqli_connect_errno() != 0){
	echo '<p>Wystąpił błąd połączenia: ' . mysqli_connect_error() . '</p>';
}
$polaczenie->set_charset("utf8");
?>
