<?php require_once("./DB.php");?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="ko">

<?php require_once ("./template/head.php"); ?>

<body>
    <div class="container">
    <?php require_once ("./template/header.php"); ?>

        <div class="row mt-2">
            <div class="col-12">
                <div class="jumbotron" style="background-color:#6f5499">
                    <h1 class="display-3" style="color:white">나만의 게시판</h1>
                    <p class="lead" style="color:white">게시판입니다.</p>
                    <hr class="my-3">
                    <p style="color:white">게시판을 마음껏 구경하세요.</p>
                    <a class="btn btn-outline-light btn-lg" href="/board.php" role="button">게시판 보기</a>
                </div>
            </div><!-- end of col-12 -->
        </div> <!-- end of row -->

    </div><!-- end of container -->
</body>

</html>