<?php
    require_once("./DB.php");
    require_once("./Lib.php");

    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $passwordc = $_POST['passwordc'];

    if(trim($id) === "" || trim($name) === "" || trim($password) === "" ){
        Lib::msgAndBack("필수값을 입력하세요");
        exit; //PHP를 여기서 종료한다. 바로 요청에 전송함.
    }

    if($password !== $passwordc){
        Lib::msgAndBack("비밀번호와 확인이 일치하지 않습니다.");
        exit; 
    }

    $db = new DB();
    $user = $db->fetch("SELECT * FROM users WHERE id = ?", [$id]);

    if($user) {  //이미 해당 아이디를 사용하는 유저가 존재한다
        Lib::msgAndBack("해당 아이디는 이미 사용중입니다.");
        exit; 
    }

    $sql = "INSERT INTO users (id, name, password, profile) VALUES(?,?,PASSWORD(?),?)";
    $result = $db->execute($sql, [$id, $name, $password, ""]);
    
    if($result){
        Lib::msgAndGo("성공적으로 회원가입 되었습니다.", "/");
    }else{
        Lib::msgAndBack("데이터베이스 입력실패, 잠시 후 다시 시도해주세요");
    }

    //password와 passwordc가 일치하지 않을 시에는 뒤로가기
    // javascript history.back(); 를 사용하면 됨
    
    //id, name, password 중 한가지라도 비어 있으면 뒤로가기

    //모두 만족하면 데이터베이스에 id, name, password 를 가지는 유저 삽입
    //테이블명은 users로 만들 것
    