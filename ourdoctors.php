<?php
//   iraklis-section
 $doctors = [
    [
    "name" => "Hennry",
    "qualification" => "MBBS",
    "image" => "images/team1.jpg",
    "social" =>
        [
        "facebook" => "fa fa-facebook",
        "twitter" => "fa fa-twitter",
        "linkedin" => "fa fa-linkedin",
        "instagram" => "fa fa+instagram",
        ]
    ],
    [
        "name" => "Jenni",
        "qualification" => "MBBS",
        "image" => "images/team2.jpg",
        "social" =>
        [
            "facebook" => "fa fa-facebook",
            "twitter" => "fa fa-twitter",
            "linkedin" => "fa fa-linkedin",
            "instagram" => "fa fa+instagram",
        ]
    ],
    [
        "name" => "Morco",
        "qualification" => "MBBS",
        "image" => "images/team3.jpg",
        "social" =>
        [
            "facebook" => "fa fa-facebook",
            "twitter" => "fa fa-twitter",
            "linkedin" => "fa fa-linkedin",
            "instagram" => "fa fa+instagram",
        ]
    ],

];


foreach ($doctors as $doctor) {
    // Start of HTML content for each doctor
    ?>
    <div class="item">
        <div class="box">
            <div class="img-box">
                <!-- Displaying the doctor's image -->
                <img src="<?php echo $doctor['image']; ?>" alt="image" />
            </div>
            <div class="detail-box">
                <!-- Displaying the doctor's name -->
                <h5><?php echo $doctor['name']; ?></h5>
                <!-- Displaying the doctor's qualification -->
                <h6><?php echo $doctor['qualification']; ?></h6>
                <div class="social_box">
                    <?php
                    // Looping through the doctor's social media links
                    foreach ($doctor['social'] as $socialPlatform => $socialLink) {
                        ?>
                        <!-- Displaying each social media icon with its link -->
                        <a href="<?php echo $socialLink; ?>">
                            <i class="fa fa-<?php echo $socialPlatform; ?>" aria-hidden="true"></i>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    // End of HTML content for each doctor
}