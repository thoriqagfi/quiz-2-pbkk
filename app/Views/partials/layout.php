<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen w-[375px] bg-[#1B1E25] shadow-2xl mx-auto">
  <?= $this->renderSection('content') ?>
</body>

</html>