<?php


if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}


include_once __DIR__ . '/../controllers/index.php';
include_once '../inc/functions.php';
include_once '../inc/redirection.php';

// Define the keys you want to process
$wanted_keys = [
    'id','level', 'f1', 'f2', 'f3', 'f4', 'f5', 'f6', 'f7', 'f8', 'f9', 'f10', 'f11', 'f12', 'f13', 'f14', 'f15', 'f16',
    'f17', 'f18', 'f19', 'f20', 'f21', 'f22', 'f23', 'f24', 'f25', 'f26', 'f27', 'f28', 'f29', 'f30',
    'created_by', 'updated_by', 'created_date', 'updated_date'
];



$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$data['id'] = $id;



// Loop through each wanted key
foreach ($wanted_keys as $key) {
    if (isset($_POST[$key]) && !empty($_POST[$key])) {
        // If 'created_by' or 'updated_by', cast to integer
        if ($key === 'created_by' || $key === 'updated_by') {
            $data[$key] = (int)$_POST[$key];
        } else {
            $data[$key] = $_POST[$key];
        }
    }
}


$result = $user->update($data);

 


 
    header('Location: ../profile'. '?error=' . base64_encode(1));
 