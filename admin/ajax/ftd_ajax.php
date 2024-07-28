<?php
$action = $_REQUEST['action'];
if (!empty($action)) {
    require_once '../database/db3/ftd_queries.php';
    $obj = new Query();
}
if ($action == "addques" && !empty($_POST)) {
    // $photo1 = $_FILES['photo1'];
    // $photo2 = $_FILES['photo2'];
    // $photo3 = $_FILES['photo3'];
    $photo1 = (!empty($_FILES['photo1'])) ? $_FILES['photo1'] : $_POST['hp1'];
    $photo2 = (!empty($_FILES['photo2'])) ? $_FILES['photo2'] : $_POST['hp2'];
    // $hp1 = $_POST['hp1'];
    // $hp2 = $_POST['hp2'];
    // $hp3 = $_POST['hp3'];
    $diff_no = $_POST['diff_no'];

    $questionId = (!empty($_POST['qid'])) ? $_POST['qid'] : "";

    $imagename1 = "";
    $imagename2 = "";
    $imagename3 = "";
    if (!empty($photo1['name']) && !empty($photo2['name'])) {
        $imagename1 = $obj->uploadPhoto($photo1);
        $imagename2 = $obj->uploadPhoto($photo2);
        $questionData = [
            'ftd_image1' => $imagename1,
            'ftd_image2' => $imagename2,
            'ftd_count' => $diff_no,
        ];
    } 
    else if(!empty($photo1['name']) && empty($photo2['name'])){
        $imagename1 = $obj->uploadPhoto($photo1);
        $result = $obj->deletePhoto($_POST['hp1']);
        $questionData = [
            'ftd_image1' => $imagename1,
            'ftd_count' => $diff_no,
        ];
    }
    else if(empty($photo1['name']) && !empty($photo2['name'])){
        $imagename2 = $obj->uploadPhoto($photo2);
        $result = $obj->deletePhoto($_POST['hp2']);
        $questionData = [
            'ftd_image2' => $imagename2,
            'ftd_count' => $diff_no,
        ];
    }
    else {
        $questionData = [
            'ftd_count' => $diff_no,
        ];
    }
    if ($questionId) {
        $obj->update($questionData, $questionId);
    } else {
        $questionId = $obj->add($questionData);
    }
    if (!empty($questionId)) {
        $qus = $obj->getRow('ftd_ID', $questionId);
        echo json_encode($qus);
        exit();
    }
}
if ($action == "getusers") {
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 10;
    $start = ($page - 1) * $limit;

    $players = $obj->getRows($start, $limit);
    //ignore players, imagine questions
    if (!empty($players)) {
        $playerslist = $players;
    } else {
        $playerslist = [];
    }
    $total = $obj->getCount();

    $playerArr = ['count' => $total, 'list' => $playerslist];
    echo json_encode($playerArr);
    exit();
}
if ($action == "deleteuser") {
    $playerId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    if (!empty($playerId)) {
        $isDeleted = $obj->deleteRow($playerId);
        if ($isDeleted) {
            $message = ['deleted' => 1];
        } else {
            $message = ['deleted' => 0];
        }
        echo json_encode($message);
        exit();
    }
}
if ($action == "getuser") {
    $playerId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    if (!empty($playerId)) {
        $player = $obj->getRow('ftd_ID', $playerId);
        echo json_encode($player);
        exit();
    }
}
if ($action == "search") {
    $queryString = (!empty($_GET['searchQuery'])) ? trim($_GET['searchQuery']) : '';
    $results = $obj->searchPlayer($queryString);
    echo json_encode($results);
    exit();
}
