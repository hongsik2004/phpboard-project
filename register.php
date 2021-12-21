<!DOCTYPE html>
<html lang="ko">

<?php require_once("./template/head.php"); ?>

<body>
    <div class="container">
        <?php require_once("./template/header.php"); ?>

        <div class="row mt-4">
            <div class="col-12">
                <h2>회원가입</h2>
            </div><!-- end of col-12 -->
        </div><!-- end of row -->

        <div class="row mt-4">
            <div class="col-10 offset-1">
                <form action="/register_process.php" method="post">
                    <div class="form-group">
                        <label for="userId">아이디</label>
                        <input type="text" class="form-control" id="userId" name="id">
                    </div>
                    <div class="form-group">
                        <label for="name">이름</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="password">비밀번호</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="passwordc">비밀번호 확인</label>
                        <input type="password" class="form-control" id="passwordc" name="passwordc">
                    </div>                    

                    <button type="submit" class="btn btn-primary">회원가입</button>
                </form>
            </div><!-- end of col-12 -->
        </div> <!-- end of row -->

    </div><!-- end of container -->
</body>

</html>