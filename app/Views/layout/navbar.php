<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="#home" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="/page/assets/img/logomi.png" alt="">
            <h3 class="">SARAN MI</h3>
        </a>

        <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="#home" class="<?= (($title == 'Home')) ? 'active' : ''; ?>">Home</a></li>
        <li><a href="#layanan" class="<?= (($title == 'Home')) ? 'active' : ''; ?>">Tentang Aplikasi</a></li>
        <li><a href="#sarana" class="<?= (($title == 'Home')) ? 'active' : ''; ?>">Sarana & Prasarana</a></li>
        <li><a class="btn" href="/login">Masuk</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>




    </div>
</header>

<!-- <?php d($title); ?> -->