<?php

$blogs = [];

function treatment() {
    $services = [
        [
            'icon' => 'images/t1.png',
            'title' => 'Nephrologist Care',
            'subtitle' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
            'under' => 'Read More'
        ],
        [
            'icon' => 'images/t2.png',
            'title' => 'Eye Care',
            'subtitle' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
            'under' => 'Read More'
        ],
        [
            'icon' => 'images/t3.png',
            'title' => 'Pediatrician Clinic',
            'subtitle' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
            'under' => 'Read More'
        ],
        [
            'icon' => 'images/t4.png',
            'title' => 'Parental Care',
            'subtitle' => "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
            'under' => 'Read More'
        ]
    ];

    foreach ($services as $service) {
        echo '
        <div class="col-md-6 col-lg-3">
            <div class="box">
                <div class="img-box">
                    <img src="'. $service['icon'] . '" alt="">
                </div>
                <div class="detail-box">
                    <h4>' . $service['title'] . '</h4>
                    <p>' . $service['subtitle'] . '</p>
                    <a href="#">' . $service['under'] . '</a>
                </div>
            </div>
        </div>';
    }
}



?>
