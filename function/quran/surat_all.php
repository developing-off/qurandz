<?php require('get_all_surat_json.php');

?>
<style>
    .surat {
        display: none;
    }
</style>
<?php foreach ($surat_all as $sa) { ?>
    <div id="quran" class="surat col-lg-3 col-md-6 col-sm-6 ">
        <a href="/surat/<?= $sa['id'] ?>">
            <div class="card-offer hover-up">
                <div class="card-info">
                    <h4 class="color-brand-2 mb-15">
                        <?= $sa['name_arabic'] ?>
                    </h4>
                    <p class="font-md color-white mb-15">عدد الآيات:
                        <?= $sa['verses_count'] ?>
                    </p>
                    <div class="box-button-offer">
                        <div class="btn btn-default font-sm-bold pl-0 color-brand-2"> <i class="fa-solid fa-play"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
<?php } ?>
<button id="load-more" style="background-color: #066a4c;border-radius: 50px;width: 141px;margin-bottom: 12px;"
    class="btn color-brand-2 col hover-up">المزيد للعرض <i class="fa-solid fa-arrow-down"></i></button>
<script>
    $(document).ready(function () {
        $(".surat").slice(0, 8).show();
        if($(".surat:hidden").length != 0) {
            $("#load-more").show();
        }
        $("#load-more").on("click", function (e) {
            e.preventDefault();
            $(".surat:hidden").slice(0, 8).slideDown();
            if($(".surat:hidden").length == 0) {
                $("#load-more").text("لا يوجد المزيد للعرض")
                    .fadOut("slow");
            }
        });
    });

</script>