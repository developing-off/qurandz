<div class="box-notify bg-brand-1">
  <div class="container position-relative">
    <div class="box-container-sw">
      <div class="box-swiper">
        <div class="swiper-container swiper-notify">
          <div class="swiper-wrapper">
            <div class="swiper-slide" dir="rtl"><span class="d-inline-block font-sm color-brand-2"><?php echo (new hijri\datetime())->format('D _j _M _Yهـ'); ?></span></div>
            <div class="swiper-slide" dir="rtl"><span class="d-inline-block font-sm color-brand-2"><?php echo $formatter->format(time()); ?></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>