<?= $this->extend('partials/layout', [$title]) ?>

<?= $this->section('content') ?>

<?= $this->include('partials/header.php', [$header]) ?>


<?= $this->include('partials/navbar.php') ?>

<?= $this->endSection() ?>