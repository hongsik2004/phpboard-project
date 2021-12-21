<?php require_once("./DB.php"); ?>
<!DOCTYPE html>
<html lang="ko">

<?php require_once("./template/head.php"); ?>

<body>
    <div class="container">
        <?php require_once("./template/header.php"); ?>

        <div class="row mt-4">
            <div class="col-12">
                <h2>로그인</h2>
            </div><!-- end of col-12 -->
        </div><!-- end of row -->

        <div class="row mt-4">
            <div class="col-10 offset-1">
                <form action="/login_process.php" method="post">
                    <div class="form-group">
                        <label for="userId">아이디</label>
                        <input type="text" class="form-control" id="userId" name="id">
                    </div>
                    <div class="form-group">
                        <label for="password">비밀번호</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">로그인</button>
                </form>
            </div><!-- end of col-12 -->
        </div> <!-- end of row -->

    </div><!-- end of container -->
</body>

</html>