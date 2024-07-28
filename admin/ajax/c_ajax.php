<?php
$action = $_REQUEST['action'];
if (!empty($action)) {
    require_once '../database/db4/c_queries.php';
    $obj = new Query();
}
if ($action == "addques" && !empty($_POST)) {
    $question = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    // $answer = $_POST['options'];
    $answer = (!empty($_POST['options'])) ? $_POST['options'] : exit();

    $questionId = (!empty($_POST['qid'])) ? $_POST['qid'] : "";
    $questionData = [
        'c_question' => $question,
        'c_option1' => $option1,
        'c_option2' => $option2,
        'c_option3' => $option3,
        'c_option4' => $option4,
        'c_answer' => $answer,
    ];
    if ($questionId) {
        $obj->update($questionData, $questionId);
    } else {
        $questionId = $obj->add($questionData);
    }
    if (!empty($questionId)) {
        $qus = $obj->getRow('c_ID', $questionId);
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
        $player = $obj->getRow('c_ID', $playerId);
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