<?php
    $posts = array(
        array("imgSrc" => "images/post1.jpg", "altText" => "Normal distribution", "text" => "Normal distribution"),
        array("imgSrc" => "images/post2.jpg", "altText" => "Normal distribution", "text" => "Normal distribution")
    );

    function printLatestPosts($posts) {
        echo '<div class="info_post">';
        echo '<h5>LATEST POSTS</h5>';

        foreach ($posts as $post) {
            echo '<div class="post_box">';
            echo '<div class="img-box">';
            echo '<img src="' . $post['imgSrc'] . '" alt="' . $post['altText'] . '">';
            echo '</div>';
            echo '<p>' . $post['text'] . '</p>';
            echo '</div>';
        }

        echo '</div>';
    }

    $news = array(
        array("imgSrc" => "images/post3.jpg", "altText" => "Normal distribution", "text" => "Normal distribution"),
        array("imgSrc" => "images/post4.png", "altText" => "Normal distribution", "text" => "Normal distribution"),
    );

    function printNews($news) {
        echo '<div class="info_post">';
        echo '<h5>NEWS</h5>';

        foreach ($news as $new) {
            echo '<div class="post_box">';
            echo '<div class="img-box">';
            echo '<img src="' . $new['imgSrc'] . '" alt="' . $new['altText'] . '">';
            echo '</div>';
            echo '<p>' . $new['text'] . '</p>';
            echo '</div>';
        }

        echo '</div>';
    }