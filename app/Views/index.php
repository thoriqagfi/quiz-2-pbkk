<?= $this->extend('partials/layout', [$title]) ?>

<?= $this->section('content') ?>

<?= $this->include('partials/header-user.php', [$user]) ?>
<?= $this->include('partials/navbar.php') ?>

    <div class="bg-[#1B1E25]"></div>
<?= $this->endSection() ?>