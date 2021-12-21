<?php
    session_start();
    require_once("./DB.php");
    require_once("./Lib.php");

    if(!isset($_GET['id'])){
        Lib::msgAndBack("올바른 접근이 아닙니다.");
        exit;
    }

    $id= $_GET['id'];
    
    $sql = "SELECT * FROM boards WHERE id = ?";

    $db = new DB();
    $a= $db->fetch($sql, [$id]);
?>
<!DOCTYPE html>
<html lang="ko">
<?php require_once ("./template/head.php"); ?>

<body>
    <div class="container">
    <?php require_once ("./template/header.php"); ?>
        <div class="row mt-4">
            <div class="col-12">
                <h2>글 보기</h2>
            </div><!-- end of col-12 -->
        </div> <!-- end of row -->

        <div class="row mt-4">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h4><?= htmlentities($a->title) ?></h4>
                        <div class="info">
                            <div class="tags mr-3">
                                <span class="tag bg-dark text-white">글쓴이</span>
                                <span class="tag bg-primary text-white"><?= $a->writer?></span> 
                            </div>
                            <div class="tags">
                            <span class="tag bg-dark text-white">작성일</span>
                            <span class="tag bg-info text-white"><?= $a->date?></span> 
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= nl2br(htmlentities($a->content))?>
                    </div>
                    <div class="card-footer text-right">
                        <a class="btn btn-primary" href="/board.php">목록</a>
                        <?php if(isset($_SESSION['user']) && $_SESSION['user']->id === $a->writer) : ?>
                            <a class="btn btn-warning" href="/modify.php?id=<?=$a->id?>">수정</a>
                            <a class="btn btn-danger" href="/delete.php?id=<?=$a->id?>">삭제</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of container -->
</body>

</html>