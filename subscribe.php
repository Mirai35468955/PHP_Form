<?php
if(empty($_POST['email'])){
	echo 'You need to fill out your email';
}
else if (empty($_POST['name'])){
	echo 'You need to fill out your name';
}
else if (isset($_POST['name'], $_POST['email'], $_POST['player'], $_POST['vehicle'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
    $player = $_POST['player'];
    $vehicle = $_POST['vehicle'];

	if(ctype_alpha(str_replace(" ","", $name)) === false) {
		echo 'Name should contain only alphabets';
		die();
	}

	if (false == strpos($_POST['email'], '@')){
		echo '@ should be included in emali';
		die();
	}

	require __DIR__ . '/savedata.php';
	require __DIR__ . '/sql.php';
	

	// show the $name and $email
	$NAME = strtoupper($name);
	echo "Thanks $NAME.<br>";
	echo "Please confirm it in your inbox of the email $email.";
}

