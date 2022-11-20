<?php
    $name = $_POST['name']
    $email = $_POST['emeil']
    $password = $_POST['password']

    //Database connection
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email,  password, ) values(?, ?, ?,)");
		$stmt->bind_param("sssssi", $name,  $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
