<?php



include_once '../session.php';
include_once __DIR__ . '/../controllers/index.php';
include_once '../../inc/functions.php';

// Define the keys you want to process
$wanted_keys = ['id', 'f1', 'f2', 'f3', 'f4', 'f5', 'created_by', 'updated_by', 'created_date', 'updated_date'];

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

if ($id > 0) { //save   

    $data['updated_by'] = $_SESSION['login'];
    $data['updated_date'] = date("Y-m-d H:i:s");
    $result = $signals->update($data);

    if( $result['error']==null && $result['status']==1){
        $info=$result['message']; 
       
        $info = implode(" ", $info);
        header('Location: ../signal_list.php?error=' . base64_encode(1) . '&info=' . base64_encode($info));
    }else{
        header('Location: ../signals?id=' . base64_encode($id) . '&error=' . base64_encode(3));
    }
  
 
} else {

    $data['status']=1;
    $data['created_by'] = $_SESSION['login'];
    $data['created_date'] = date("Y-m-d H:i:s"); 
   
    $result = $signals->register($data);  

    if($result['code']==200)
    {
        header('Location: ../signal_list'. '?error=' . base64_encode(4));
    }else
    {
        header('Location: ../signals?id=' . base64_encode($id) . '&error=' . base64_encode(3));
    }


}


