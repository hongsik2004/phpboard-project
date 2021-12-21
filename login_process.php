<?php
    session_start();    
    require_once("./DB.php");
    require_once("./Lib.php");
    $id = $_POST["id"];
    $password = $_POST["password"];

    if(trim($id)==="" ||trim($password) === ""){
        Lib::msgAndBack("아이디 또는 패스워드가 비워져있습니다.");
        exit;
    }
    
    $sql = "SELECT * from users WHERE id = ? AND password = PASSWORD(?)";
    $db = new DB();
    $user = $db->fetch($sql, [$id, $password]);

    if($user){
        $_SESSION['user']=$user;
        Lib::msgAndGo("성공적으로 로그인되었습니다.", "/");
    }else{
        Lib::msgAndBack("아이디 또는 비밀번호가 올바르지 않습니다.");
    }