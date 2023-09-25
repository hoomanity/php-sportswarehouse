<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "NO TITLE" ?> - Some Company</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="site-wrapper">
        <header class="site-header">
            <h1 class="site-header__title"><img class="logo-image" src="images/sports-warehouse-logo.png" width="600"
                    height="82" alt="sports-warehouse-logo"></h1>
            <!-- nav.main-nav>ul>(li>a[href=#]{Item $})*4 -->
            <!-- <nav class="main-nav">
                include "_navigation.html.php" 
            </nav> -->
        </header>
        <main class="main-content">

            <?= $output ?? 'NO TEMPLATE CONTENT - $output not defined' ?>

        </main>
        <footer class="site-footer">
            <p class="site-footer__copyright">Copyright &copy;<?= date('Y') ?> Some Company</p>
            <div class="social-links">
                <span class="social-cards"><a href="#">
                        <div class="image-icon">
                            <img src="images/facebook-icon.png" width="22" height="34" alt="facebook-icon">
                        </div>
                        <div class="social-links-description">facebook</div>
                    </a></span>

                <span class="social-cards"><a href="#">
                        <div class="image-icon">
                            <img src="images/twitter-icon.png" width="39" height="32" alt="twitter-icon">
                        </div>
                        <div class="social-links-description">twitter</div>
                    </a></span>
                <span class="social-cards"><a href="#">
                        <div class="image-icon">
                            <img src="images/other-icon.png" width="44" height="45" alt="other-icon">
                        </div>
                        <div class="social-links-description">other</div>
                    </a></span>
            </div>
        </footer>
    </div>
</body>

</html>