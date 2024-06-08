<?= $this->extend('layoutadmin/template'); ?>


<?= $this->section('isi'); ?>


<main id="main" class="main">

    <section class="section dashboard">
        <div class="row">

            <div class="pagetitle">
                <h1>Detail Berita</h1>

            </div><!-- End Page Title -->
        </div>
    </section>

    <!-- Customers Card -->
    <div class="col-xxl-12 col-xl-12">

        <div class="card info-card customers-card">
            <div class="card-body">

                <h2 class="h2"><?= $news['title'] ?></h2>
                <div class="mb-5">
                    <span><?= $news['created_at'] ?></span> <br>
                    <span><?= $news['author'] ?></span>
                </div>
                <div><?= $news['content'] ?></div>
            </div>
        </div>

    </div>

    </div><!-- End Customers Card -->

</main><!-- End #main -->


<?= $this->endSection(); ?>