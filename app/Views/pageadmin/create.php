<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <section class="section">
        <div class="container">
            <h2>Create News</h2>
            <!-- Form untuk membuat berita baru -->
            <form action="<?= base_url('admin/news/create') ?>" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Add Picture</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>
