<?php
    require_once("./DB.php");
    require_once("./Lib.php");

    $sql = "SELECT * FROM boards ORDER BY id DESC LIMIT 0,10";
    $db = new DB();
    $list= $db->fetchAll($sql);
?>
<?php session_start();
        if(!isset($_SESSION['user'])){
            Lib::msgAndGo("로그인 후 게시판 이용 가능합니다.","/login.php");
            exit;
        }
?>
<!DOCTYPE html>
<html lang="ko">

<?php require_once ("./template/head.php"); ?>

<body>
    <div class="container">
    <?php require_once ("./template/header.php"); ?>
        <div class="row mt-4">
            <div class="col-10 offset-1">
                <h2>자유게시판</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <table class="table table-striped">
                    <tr>
                        <th>글번호</th>
                        <th width="60%">글제목</th>
                        <th>글쓴이</th>
                        <th>작성일</th>
                    </tr>
                    <?php foreach($list as $a) : ?>
                    <tr>
                        <td><?= $a->id?></td>
                        <td><a href="/view.php?id=<?=$a->id?>"><?= $a->title?></a></td>
                        <td><?= $a->writer?></td>
                        <td><?= $a->date?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div><!-- end of col-12 -->
        </div> <!-- end of row -->
            <?php if(isset($_SESSION['user'])) : ?>
            <div class="row">
                <div class="col-10 offset-1 text-right">
                    <a href="/write.php" class="btn btn-primary">글쓰기</a>
                </div>
            </div>
            <?php endif; ?>
    </div><!-- end of container -->
</body>

</html>