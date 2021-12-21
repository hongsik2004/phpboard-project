<?php
    session_start();
    require_once("./DB.php");
    require_once("./Lib.php");

    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $user = $_SESSION['user'];

    $db = new DB();
    $a = $db->fetch("SELECT * FROM boards WHERE id = ?", [$id]);

    if($a->writer !== $user->id){
        Lib::msgAndGo("권한이 없습니다!","/board.php");
        exit;
    }
    //위 까지 오류가 없다면 id는 맞다.
    if(trim($title) === "" || trim($content) === ""){
        Lib::msgAndBack("필수값이 비어있습니다.");
        exit;
    }
    //입력준비 끝
    $sql = "UPDATE boards SET title = ?, content = ? WHERE id = ?";
    $result = $db->execute($sql, [$title,$content,$id]);

    if($result){
        Lib::msgAndGo("성공적으로 수정되었습니다.", "/view.php?id={$id}");
    }else{
        Lib::msgAndBack("수정중 오류 발생 잠시후 다시 시도하세요.");
    }