<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">게시판</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">홈</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/board.php">게시판</a>
                    </li>
                </ul>
                <div class="menu">
                    <?php if(isset($_SESSION['user'])) : ?>
                        <button class="btn btn-success mr-1"><?= $_SESSION['user']->name?></button>
                        <a href="/logout.php" class="btn btn-danger">로그아웃</a>
                    <?php else : ?>
                    <a href="/login.php" class="btn btn-outline-primary mr-1">로그인</a>
                    <a href="/register.php" class="btn btn-outline-success">회원가입</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </div><!-- end of col-12 -->
</div> <!-- end of row -->