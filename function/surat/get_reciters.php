<?php
$url = "https://api.quran.com/api/v4/resources/chapter_reciters?language=ar";
$json = file_get_contents($url);
$reciters_data = json_decode($json, TRUE);
$reciters = $reciters_data['reciters'];
function trad_reciters($reciter_name)
{
    if ($reciter_name === 'Khalifah Taniji') {
        echo 'خليفة الطنيجي';
    }
    if ($reciter_name === 'Abdur-Rahman as-Sudais') {
        echo 'عبد الرحمن السديس';
    }
    if ($reciter_name === 'Sa`ud ash-Shuraym') {
        echo 'سعود الشريم';
    }
    if ($reciter_name === 'Mahmoud Khaleel Al-Husary') {
        echo 'محمود خليل الحصري';
    }
    if ($reciter_name === 'Abdul Basit Abdul Samad') {
        echo 'عبد الباسط عبد الصمد';
    }
    if ($reciter_name === 'Mishari Rashid al-`Afasy') {
        echo 'مشاري راشد العفاسي';
    }
    if ($reciter_name === 'Abu Bakr al-Shatri') {
        echo 'أبو بكر الشطري';
    }
    if ($reciter_name === 'Muhammad Siddiq al-Minshawi') {
        echo 'محمد صديق المنشاوي';
    }
    if ($reciter_name === 'Hani ar-Rifai') {
        echo 'هاني الرفاعي';
    }
    if ($reciter_name === 'Mahmoud Khalil Al-Husary') {
        echo 'محمود خليل الحصري';
    }
    if ($reciter_name === 'Muhammad Siddiq al-Minshawi(with kids)') {
        echo 'محمد صديق المنشاوي';
    }
}

?>
<section id="quran" class="section bg-brand-1 mt-10">
    <div class="container">
        <div class="row mt-50">
            <?php
            $i = 0;
            foreach ($reciters as $reciter) {
            ?>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="card-offer hover-up">
                        <div class="card-info">
                            <h4 class="color-brand-2 mb-5" style="font-size: 18px;">القارئ: <?php trad_reciters($reciter['name']); ?></h4>
                            <p class="font-md color-white mb-5">قراءة: <?php if ($reciter['qirat']['name'] === "Hafs") {
                                                                            echo 'حفص';
                                                                        } ?></p>
                            <div class="box-button-offer">
                                <?php
                                $url_reciter_audio = "https://api.quran.com/api/v4/chapter_recitations/" . $reciter['id'] . "/$id";
                                $json = file_get_contents($url_reciter_audio);
                                $reciters_audio = json_decode($json, TRUE);
                                ?>
                                <audio id="audioPlayer<?= $i ?>" src="<?= $reciters_audio['audio_file']['audio_url'] ?>"></audio>
                                <button id="playPauseButton<?= $i ?>" class="btn btn-default font-sm-bold pl-0 color-brand-2"> <i style="font-size: 30px;" class="fa-solid fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            }
            ?>
        </div>
    </div>
</section>

<script>
    var audioPlayers = [
        document.getElementById("audioPlayer0"),
        document.getElementById("audioPlayer1"),
        document.getElementById("audioPlayer2"),
        document.getElementById("audioPlayer3"),
        document.getElementById("audioPlayer4"),
        document.getElementById("audioPlayer5"),
        document.getElementById("audioPlayer6"),
        document.getElementById("audioPlayer7"),
        document.getElementById("audioPlayer8"),
        document.getElementById("audioPlayer9"),
        document.getElementById("audioPlayer10"),
        document.getElementById("audioPlayer11"),
        document.getElementById("audioPlayer12"),
    ];
    var playPauseButtons = [
        document.getElementById("playPauseButton0"),
        document.getElementById("playPauseButton1"),
        document.getElementById("playPauseButton2"),
        document.getElementById("playPauseButton3"),
        document.getElementById("playPauseButton4"),
        document.getElementById("playPauseButton5"),
        document.getElementById("playPauseButton6"),
        document.getElementById("playPauseButton7"),
        document.getElementById("playPauseButton8"),
        document.getElementById("playPauseButton9"),
        document.getElementById("playPauseButton10"),
        document.getElementById("playPauseButton11"),
        document.getElementById("playPauseButton12"),
    ];

    for (var i = 0; i < playPauseButtons.length; i++) {
        playPauseButtons[i].addEventListener("click", function(i) {
            return function() {
                if (audioPlayers[i].paused) {
                    audioPlayers[i].play();
                    playPauseButtons[i].innerHTML = "<i style='font-size: 30px;' class='fa-solid fa-pause'></i>";
                } else {
                    audioPlayers[i].pause();
                    playPauseButtons[i].innerHTML = "<i style='font-size: 30px;' class='fa-solid fa-play'></i>";
                }
            }
        }(i));
    }
</script>