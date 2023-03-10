<?php
include('connection.php');

$user_type_id = $_POST['user_type_id'];

$query = $mysqli->prepare('SELECT id,first_name,last_name,email FROM users WHERE usertype_id=?');
$query->bind_param('i', $user_type_id);
$query->execute();
$array=$query->get_result();

$response=[];
while ($user_types= $array->fetch_assoc()) {
    $response[]=$user_types;
}

echo json_encode($response);




?>