<?php
    session_start();
    require_once("./DB.php");
    require_once("./Lib.php");

    if(!isset($_SESSION['user'])) {
        Lib::msgAndGo("권한이 없습니다. 로그인 후 시도하세요.", "/login.php");
        exit;
    }

    $title = $_POST['title'];
    $content = $_POST['content'];
    $writer = $_SESSION['user']->id;

    $sql = "INSERT INTO boards (title, content, writer, date) VALUES (?, ?, ?, NOW())";

    if(trim($title) === "" || trim($content) === ""){
        Lib::msgAndBack("필수값이 누락되어 있습니다.");
        exit;
    }

    $db = new DB();
    $result = $db->execute($sql, [$title, $content, $writer]);
    if($result){
        Lib::msgAndGo("성공적으로 작성되었습니다.", "/board.php");
    }else{
        Lib::msgAndBack("DB입력중 에러 발생. 잠시후 다시 시도하세요");
    }