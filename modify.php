<?php
    session_start();
    require_once("./DB.php");
    require_once("./Lib.php");

    if(!isset($_GET['id'])) {
        Lib::msgAndGo("잘못된 접근입니다.", "/");
        exit;
    }

    $id = $_GET['id'];
    $db = new DB();
    $a = $db->fetch("SELECT * FROM boards WHERE id = ?", [$id]);

    if(!isset($_SESSION['user']) && $_SESSION['user']->id !== $a->writer){
        Lib::msgAndBack("권한이 없습니다.");
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
                <h2>글쓰기</h2>
            </div><!-- end of col-10 -->
        </div> <!-- end of row -->
        <div class="row mt-4">
            <div class="col-10 offset-1">
                <form action="/modify_process.php" method="post">
                    <input type="hidden" name="id" value="<?= $a->id?>">
                    <div class="form-group">
                        <label for="title">글 제목</label>
                        <input type="text" id="title" class="form-control" name="title" value="<?= $a->title?>">
                    </div>
                    <div class="form-group">
                        <label for="title">글 내용</label>
                        <textarea name="content" id="content" rows="10"<?= $a->content?> class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary">글수정</button>
                </form>
            </div>
        </div>
    </div><!-- end of container -->
</body>

</html>