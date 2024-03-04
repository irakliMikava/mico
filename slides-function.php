<?php
    $slides = array(
        array(
            'title' => 'Mico',
            'subtitle' => 'Hospital',
            'content' => "When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to",
            'link' => '',
            'link_text' => 'Contact Us',
            'image' => 'images/slider-img.jpg'
        ),
        array(
            'title' => 'Mico',
            'subtitle' => 'Hospital',
            'content' => "When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to",
            'link' => '',
            'link_text' => 'Contact Us',
            'image' => 'images/slider-img.jpg'
        ),
        array(
            'title' => 'Mico',
            'subtitle' => 'Hospital',
            'content' => "When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to",
            'link' => '',
            'link_text' => 'Contact Us',
            'image' => 'images/slider-img.jpg'
        ),
    );

    /**
 * Prints the slider section HTML structure based on provided slides.
 *
 * @param array $slides An array containing slide information.
 */
function printSliderSection($slides) {
    // Start the slider section with dot design and carousel container
    echo '<div class="dot_design">
                <img src="images/dots.png" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">';

    // Loop through each slide and print HTML structure
    foreach ($slides as $index => $slide) {
        $activeClass = ($index == 0) ? ' active' : ''; // Determine active class for the first slide
        
        // Print the HTML structure for each slide
        echo '<div class="carousel-item' . $activeClass . '">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <div class="play_btn">
                                    <button>
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <h1>' . $slide['title'] . '<br>
                                    <span>' . $slide['subtitle'] . '</span>
                                </h1>
                                <p>' . $slide['content'] . '</p>
                                <a href="' . $slide['link'] . '">
                                    ' . $slide['link_text'] . '
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="' . $slide['image'] . '" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }

    // Close the carousel inner div
    echo '</div>';
}

// Define carousel ID and image sources for previous and next buttons
$carouselId = "customCarousel1";
$prevImageSrc = "images/prev.png";
$nextImageSrc = "images/next.png";

/**
 * Prints the carousel control buttons HTML structure.
 *
 * @param string $carouselId     ID of the carousel.
 * @param string $prevImageSrc   Image source for the previous button.
 * @param string $nextImageSrc   Image source for the next button.
 */
function printCarouselControls($carouselId, $prevImageSrc, $nextImageSrc) {
    // Print the carousel control buttons HTML structure
    echo '<div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#' . $carouselId . '" role="button" data-slide="prev">
                <img src="' . $prevImageSrc . '" alt="">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#' . $carouselId . '" role="button" data-slide="next">
                <img src="' . $nextImageSrc . '" alt="">
                <span class="sr-only">Next</span>
            </a>
        </div>';
}
