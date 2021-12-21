<?php
    class DB 
    {
        private $con = null;

        public function __construct(){ //php 생성자가 아예 정의 되있다. __construct()
            $host = "localhost";
            $dbname = "skill";
            $charset = "utf8";
            $user = "root"; //최종관리자
            $pass = "";
            $conStr = "mysql:host={$host}; dbname={$dbname}; charset={$charset}";
            $this->con = new PDO($conStr, $user, $pass);
        }

        //리스트로 데이터를 가져올 때 사용하는 매서드
        public function fetchAll($sql, $data = []){
            $q = $this->con->prepare($sql);
            $q->execute($data);
            return $q->fetchAll(PDO::FETCH_OBJ);
        }

        //한개만 데이터를 가져올 때 사용하는 매서드
        public function fetch($sql, $data=[]){
            $q = $this->con->prepare($sql);
            $q->execute($data);
            return $q->fetch(PDO::FETCH_OBJ);
        }

        //데이터를 넣거나 삭제하거나 수정할 때 사용하는 매서드
        public function execute($sql, $data=[]){
            $q = $this->con->prepare($sql);
            return $q->execute($data);
        }
    }    

    
