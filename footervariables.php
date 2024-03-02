<?php

$blogs = [];

function footer() {
    $footers = [
        [
            'title' => 'latest posts',
            'image' => 'images/post1.jpg',
            'description' => 'Normal distribution'
        ],
        [
            'title' => 'news',
            'image' => 'images/post2.jpg',
            'description' => 'Normal distribution'
        ]
    ];

    foreach ($footers as $footer) {
        echo '<div class="col-md-6 col-lg-3">
                <div class="info_post">
                  <h5>' . $footer['title'] . '</h5>
                  <div class="post_box">
                    <div class="img-box">
                      <img src="' . $footer['image'] . '" alt="">
                    </div>
                    <p>' . $footer['description'] . '</p>
                  </div>
                </div>
              </div>';
    }
}


footer();

?>
