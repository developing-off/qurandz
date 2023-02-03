<?php
require_once('get_all_hadiths.php');

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <?php require('partials/_head.php') ?>
</head>

<body>
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="page-loading">
          <div class="page-loading-inner">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- notify bar -->
  <?php require('partials/_notify.php') ?>
  <!-- header -->
  <?php require('partials/_header.php') ?>
  <!-- main -->
  <main class="main">
    <section class="section mt-100">
      <div class="container">
        <div class="row">
        <?php foreach ($collections as $collection) { ?>
          <div class="col-lg-6 col-md-4 col-sm-6 col-12">
            <a href="hadiths/<?= $collection->name ?>">
              <div class="card-small">
                <div class="card-image">
                  <div class="box-image"><?= $collection->collection[1]->title ?></div>
                </div>
                <div class="card-info">
                  <h6 class="color-brand-1 icon-up" dir="ltr"><?= $collection->collection[0]->title ?></h6>
                </div>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
  </main>
  <?php require('partials/_footer.php') ?>
  </script>
  <?php require('partials/_script.php') ?>
</body>

</html>