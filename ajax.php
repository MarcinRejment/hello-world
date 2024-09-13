<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	if ($_POST['dane'] == 'string') {
		print ('prosty ciag');
		exit;
	}
	elseif($_POST['dane'] == 'array') {
		$tabl = array(
			1 => 'val 1',
			2 => 'val 2'
		);
		echo json_encode($tabl);
		exit;
	}
	elseif($_POST['dane'] == 'mysql') {
		//ladujesz polaczenie do bazy
		require_once('conn.php');
		//i wykonujesz standardową procedure z SELECT
		$sql = $polaczenie->query('SELECT tekst FROM teksty WHERE id=1');
		if ($sql !== false) {
			while (($idxy=$sql->fetch_assoc())!==null) {
				//wyprintowuje tekst ktory zostanie zwrocony w funkcji wykonujacej ajaxa w pliku index.js
				echo $idxy['tekst'];
			}
			$sql -> close();
		}
	}
?>