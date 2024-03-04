<?php
    $subscribes = [
        [
            'logo' => 'images/logo.png',
            'placeholder' => "Your email",
            'button' => "Subscribe",
        ]
    ];

    /**
 * Prints the subscription form section HTML structure based on provided subscription information.
 *
 * @param array $subscribes An array containing subscription information.
 */
function printInfoSubscribe($subscribes) : void {
    // Loop through each subscription entry and print the HTML structure
    foreach ($subscribes as $subscribe) {
        echo '<div class="info_logo">
                <a href="">
                <img src="' . $subscribe['logo'] . '" alt="">
                </a>
            </div>
            <div class="info_form">
                <form action="">
                <input type="email" placeholder="' . $subscribe['placeholder'] . '">
                <button>
                    ' . $subscribe['button'] . '
                </button>
                </form>
            </div>';
    }
}
