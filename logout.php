<?php
    session_start();
    require_once("./Lib.php");
    unset($_SESSION['user']);
    Lib::msgAndGo("로그아웃 되었습니다.", "/");