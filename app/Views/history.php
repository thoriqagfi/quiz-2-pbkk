<?= $this->extend('partials/layout', [$title]) ?>

<?= $this->section('content') ?>

<?= $this->include('partials/header-user.php', [$user]) ?>
<?= $this->include('partials/navbar.php') ?>

    <h1 class="bg-red-100">Home</h1>
<?= $this->endSection() ?>