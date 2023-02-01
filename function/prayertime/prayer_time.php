<?php
require 'get_prayer_time.php';
?>
<section id="mawaqit" class="section">

    <div class="box-radius-bottom">
        <div class="container">
            <div class="table-box-help mt-20">
                <div class="text-center">
                    <h3 class="color-brand-1 mb-15">مواقيت صلاة</h3>
                    <h5 style="font-family: uthman_surat" class="color-grey-300">قال تعالى:"فَإِذَا قَضَيْتُمُ
                        الصَّلَاةَ فَاذْكُرُوا اللَّهَ قِيَامًا وَقُعُودًا وَعَلَىٰ جُنُوبِكُمْ ۚ فَإِذَا
                        اطْمَأْنَنْتُمْ فَأَقِيمُوا الصَّلَاةَ ۚ إِنَّ الصَّلَاةَ كَانَتْ عَلَى الْمُؤْمِنِينَ كِتَابًا
                        مَوْقُوتًا "</h5>
                <!--   <form method="GET">
                        <div class="box-form-contact">
                            <div class="row">
                                <?php #require('get_country_time.php') ?>
                                <div class="info-place">
                                    <div class="place country">
                                        <h3>البلد</h3>
                                        <select id="country">
                                            <?php #$options ?>
                                        </select>
                                    </div>
                                    <div class="place wilaya">
                                        <h3>الولاية</h3>
                                        <select id="wilaya">
                                            <option>Algerie</option>
                                        </select>
                                    </div>
                                
                                    <div class="btn-time btn">
                                        تحديد مواقيت الصلاة
                                    </div>
                                </div>
                                <div class="show-info">
                                    <p class="info-place">مواقيت الصلاة في ولاية <span
                                            class="wilaya-select">.....</span>
                                        بــ <span class="country-select">.....</span></p>
                                    <p class="info-date">بتاريخ <span class="date-miladi">.....</span> الموافق ل <span
                                            class="date-hijri">.....</span></p>
                                </div>
                            </div>
                        </div>
                    </form>
-->
                </div>

                <div class="table-responsive">
                    <table class="table table-forum">
                        <thead>
                            <tr>
                                <th class="width-16">تاريخ</th>
                                <th class="width-16">الفجر</th>
                                <th class="width-16">شروق</th>
                                <th class="width-16">الظهر</th>
                                <th class="width-16">العصر</th>
                                <th class="width-16">المغرب</th>
                                <th class="width-16">العشاء</th>
                                <th class="width-16">إمساك</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = false;
                            foreach ($prayer_times as $time) {
                                if ($time["date"]["gregorian"]["date"] == $today_date) {
                                    $start = true;
                                }
                                if ($start) {
                                    ?>
                                    <tr class="mawaqit">
                                        <td>
                                            <?= str_replace("(CET)", "/", $time["date"]["gregorian"]["date"]); ?>
                                        </td>
                                        <td>
                                            <?= str_replace("(CET)", "", $time['timings']["Fajr"]); ?>
                                        </td>
                                        <td>
                                            <?= str_replace("(CET)", "", $time['timings']["Sunrise"]); ?>
                                        </td>
                                        <td>
                                            <?= str_replace("(CET)", "", $time['timings']["Dhuhr"]); ?>
                                        </td>
                                        <td>
                                            <?= str_replace("(CET)", "", $time['timings']["Asr"]); ?>
                                        </td>
                                        <td>
                                            <?= str_replace("(CET)", "", $time['timings']["Maghrib"]); ?>
                                        </td>
                                        <td>
                                            <?= str_replace("(CET)", "", $time['timings']["Isha"]); ?>
                                        </td>
                                        <td>
                                            <?= str_replace("(CET)", "", $time['timings']["Imsak"]); ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                    <center>
                        <button id="load-mawaqit"
                            style="background-color: #066a4c;border-radius: 50px;width: 141px;margin-bottom: 12px;"
                            class="btn color-brand-2 mt-10 col hover-up">المزيد للعرض<i
                                class="fa-solid fa-arrow-down"></i></button>
                    </center>
                    <script>
                        $(document).ready(function () {
                            $(".mawaqit").slice(0, 5).show();
                            if($(".mawaqit:hidden").length != 0) {
                                $("#load-mawaqit").show();
                            }
                            $("#load-mawaqit").on("click", function (e) {
                                e.preventDefault();
                                $(".mawaqit:hidden").slice(0, 5).slideDown();
                                if($(".mawaqit:hidden").length == 0) {
                                    $("#load-mawaqit").text("لا يوجد المزيد للعرض")
                                        .fadOut("slow");
                                }
                            });
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>