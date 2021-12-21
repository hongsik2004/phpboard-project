<?php
    session_start();
    require_once("./DB.php");
    require_once("./Lib.php");

    if(!isset($_GET['id'])) {
        Lib::msgAndGo("잘못된 접근입니다.","/");
        exit;
    }

    $db = new DB();
    $id = $_GET['id'];
    $sql = "SELECT * FROM boards WHERE id= ?";
    $a = $db->fetch($sql, [$id]);

    if(!isset($_SESSION['user']) && $_SESSION['user']->id !== $a->writer){
        Lib::msgAndGo("권한이 없습니다. 로그인후 시도하세요.", "/login.php");
        exit;
    }

    $sql = "DELETE FROM boards WHERE id = ?";
    $result = $db->execute($sql, [$id]);

    if($result){
        Lib::msgAndGo("삭제되었습니다.", "/board.php");
        exit;
    }else{
        Lib:msgAndBack("삭제 중 오류 발생. 잠시후 다시 시도해주세요.");
        exit;
    }