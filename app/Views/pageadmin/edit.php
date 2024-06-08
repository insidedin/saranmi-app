<?= $this->extend('layoutadmin/template'); ?>

<?= $this->section('isi'); ?>

<main id="main" class="main">
    <section class="section">
        <div class="container">
            <h2>Edit News</h2>
            <!-- Form untuk mengedit berita -->
            <form action="<?= base_url('admin/news/update/' . $news['id']) ?>" method="post">
                <input type="hidden" name="id" value="<?= $news['id'] ?>">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $news['title'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required><?= $news['content'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="draft" <?= ($news['status'] == 'draft') ? 'selected' : '' ?>>Draft</option>
                        <option value="published" <?= ($news['status'] == 'published') ? 'selected' : '' ?>>Published</option>
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
