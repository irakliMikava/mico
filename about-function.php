<?php
    $information = [
        [
            'image' => 'images/about-img.jpg',
            'title1' => "About ",
            'title2' => "Hospital",
            'text' => "has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors",
            'button' => 'Read More',
        ]
    ];

  /**
 * Prints the information about the hospital based on the provided data.
 *
 * @param array $information An array containing information about the hospital.
 */
function printAbout($information): void {
    // Iterate through each information block
    foreach ($information as $info) {
        echo '<div class="col-md-6 ">
                <div class="img-box">
                    <img src="' . $info['image'] . '" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>' . $info['title1'] . ' <span>' . $info['title2'] . '</span></h2>
                    </div>
                    <p>' . $info['text'] . '</p>
                    <a href="">' . $info['button'] . '</a>
                </div>
            </div>';
    }
}
