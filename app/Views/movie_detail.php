<?= $this->extend('partials/layout', [$title]) ?>

<?= $this->section('content') ?>

<?= $this->include('partials/header.php', [$header]) ?>
<?= $this->include('partials/navbar.php') ?>

<div class="p-[30px] flex flex-col justify-center gap-3">
  <img src="/images/home/movie-2.png" alt="" class="shadow-xl">
  <h1 class="text-2xl font-semibold text-white"><?php echo $movie['title'] ?></h1>
  <p class="text-[14px] text-[#BABFC9]"><?php echo $movie['duration'] ?> Minutes</p>
  <p class="px-3 py-2 bg-[#252932] text-[#B2B5BB] w"><?php echo $movie['genre']; ?></p>

  <div class="py-3">
    <h3 class="text-lg text-white font-medium">Synopsis</h3>
    <p class="text-[#696D74]"><?php echo $movie['synopsis'] ?></p>
  </div>

  <div class="">
    <a href="/select_seats/<?php echo $movie['id']; ?>">Book Ticket</a>
  </div>
</div>

<?= $this->endSection() ?>