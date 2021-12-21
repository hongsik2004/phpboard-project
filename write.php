<?php
    require_once("./DB.php");
    require_once("./Lib.php");
    session_start();
    if(!isset($_SESSION['user'])){
        Lib::msgAndGo("권한이 없습니다. 로그인 후 시도하세요.","/login.php");
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
                <form action="/write_process.php" method="post">
                    <div class="form-group">
                        <label for="title">글 제목</label>
                        <input type="text" id="title" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="title">글 내용</label>
                        <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary">글쓰기</button>
                </form>
            </div>
        </div>
    </div><!-- end of container -->
</body>

</html>