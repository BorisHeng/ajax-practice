<?php
require_once './Model/Model.php';
use Models\Model as Model;



$model = new Model;
// $data = [
//     ['name' => 'jason','age' => '18'],
//     ['name' => 'albee','age' => '55'],
//     ['name' => 'gary','age' => '30'],
//     ['name' => 'jason','age' => '18'],
//     ['name' => 'albee','age' => '55'],
//     ['name' => 'gary','age' => '30'],
//     ['name' => 'jason','age' => '18'],
//     ['name' => 'albee','age' => '55'],
//     ['name' => 'gary','age' => '30'],
//     ['name' => 'jason','age' => '18'],
//     ['name' => 'albee','age' => '55'],
//     ['name' => 'gary','age' => '30'],
//     ['name' => 'jason','age' => '18'],
//     ['name' => 'albee','age' => '55'],
//     ['name' => 'gary','age' => '30']
// ];


if(isset($_POST['account'])){
    if($_POST['account'] == 'all'){
        $data = $model->select('data');
        echo json_encode($data);
        return;
    }
    $data = $model->select('data',['account' => $_POST['account']]);
    echo json_encode($data);
}


