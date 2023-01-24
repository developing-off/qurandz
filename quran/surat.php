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
    <?php require('function/surat/surat_option.php') ?>
  </main>
  <?php require('partials/_footer.php') ?>
  </script>
  <?php require('partials/_script.php') ?>
</body>

</html>