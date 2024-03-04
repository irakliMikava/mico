<?php
    // Define an array of posts with image source, alt text, and text
    $posts = array(
        array("imgSrc" => "images/post1.jpg", "altText" => "Normal distribution", "text" => "Normal distribution"),
        array("imgSrc" => "images/post2.jpg", "altText" => "Normal distribution", "text" => "Normal distribution")
    );

    // Function to print latest posts
    function printLatestPosts($posts) {
        // Start HTML div for the latest posts section
        echo '<div class="info_post">';
        echo '<h5>LATEST POSTS</h5>';
    
        // Loop through each post
        foreach ($posts as $post) {
            // Start HTML div for each post
            echo '<div class="post_box">';
            echo '<div class="img-box">';
            // Display the post image with alt text
            echo '<img src="' . $post['imgSrc'] . '" alt="' . $post['altText'] . '">';
            echo '</div>';
            // Display the post text
            echo '<p>' . $post['text'] . '</p>';
            // Close the post box div
            echo '</div>';
        }
    
        // Close the latest posts div
        echo '</div>';
    }
    
    // Define an array of news with image source, alt text, and text
    $news = array(
        array("imgSrc" => "images/post3.jpg", "altText" => "Normal distribution", "text" => "Normal distribution"),
        array("imgSrc" => "images/post4.png", "altText" => "Normal distribution", "text" => "Normal distribution"),
    );

    // Function to print news
    function printNews($news) {
        // Start HTML div for the news section
        echo '<div class="info_post">';
        echo '<h5>NEWS</h5>';

        // Loop through each news item
        foreach ($news as $new) {
            // Start HTML div for each news item
            echo '<div class="post_box">';
            echo '<div class="img-box">';
            // Display the news item image with alt text
            echo '<img src="' . $new['imgSrc'] . '" alt="' . $new['altText'] . '">';
            echo '</div>';
            // Display the news item text
            echo '<p>' . $new['text'] . '</p>';
            // Close the news item box div
            echo '</div>';
        }

        // Close the news div
        echo '</div>';
    }
?>
