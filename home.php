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
    <!-- counter for ramdan day -->
    <?php require('partials/ramadan-day.php') ?>
    <!-- prayer time -->
    <?php require('function/prayertime/prayer_time.php') ?>
    <!-- bg-brand-1 -->
    <section id="quran" class="section bg-brand-1 mt-100">
      <div class="container">
        <div class="row mt-50 align-items-end">
          <div class="col-lg-8 col-md-8">
            <h2 class="color-brand-2 mb-20">سورات القرآن الكريم</h2>
          </div>
        </div>
        <div class="row mt-50">
          <?php require('function/quran/surat_all.php') ?>
        </div>
      </div>
    </section>
    <!-- hadiths -->
    <?php require('function/hadith/hadith_show.php') ?>
    <!-- <section class="section mt-50">
      <div class="container">
        <div class="box-newsletter">
          <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
              <div class="box-image-newsletter"> <img class="img-main" src="assets/imgs/template/newsletter_img.png" alt="iori">
                <div class="shape-2 image-1"> <img src="assets/imgs/template/newsletter_finger.png" alt="iori"></div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12"><span class="font-lg color-brand-1">Newsletter</span>
              <h2 class="color-brand-1 mb-15 mt-5">Subcribe our newsletter</h2>
              <p class="font-md color-grey-500">By clicking the button, you are agreeing with our Term & Conditions</p>
              <div class="form-newsletter mt-30">
                <form action="#">
                  <input type="text" placeholder="Enter you mail ..">
                  <button class="btn btn-submit-newsletter" type="submit">
                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  </main>
  <?php require('partials/_footer.php') ?>
  <script>
    (function() {
      "use strict";

      /**
       * Easy selector helper function
       */
      const select = (el, all = false) => {
        el = el.trim()
        if (all) {
          return [...document.querySelectorAll(el)]
        } else {
          return document.querySelector(el)
        }
      }

      /**
       * Easy event listener function
       */
      const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
          if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener))
          } else {
            selectEl.addEventListener(type, listener)
          }
        }
      }

      /**
       * Easy on scroll event listener 
       */
      const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
      }

      /**
       * Back to top button
       */
      let backtotop = select('.back-to-top')
      if (backtotop) {
        const toggleBacktotop = () => {
          if (window.scrollY > 100) {
            backtotop.classList.add('active')
          } else {
            backtotop.classList.remove('active')
          }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
      }

      /**
       * Countdown timer
       */
      let countdown = select('.countdown');
      const output = countdown.innerHTML;

      const countDownDate = function() {
        let timeleft = new Date(countdown.getAttribute('data-count')).getTime() - new Date().getTime();

        let days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
        let hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

        countdown.innerHTML = output.replace('%d', days).replace('%h', hours).replace('%m', minutes)
          .replace('%s', seconds);
      }
      countDownDate();
      setInterval(countDownDate, 1000);

    })()
  </script>
  <?php require('partials/_script.php') ?>
</body>

</html>