<?php
 function ourDoctors() {

  $doctors = [
 
                 [  'icon'=> 'images/team1.jpg'
                    'name'=> 'Hennry',
                    'subtitle'=> 'MBBS',
                    'link1'=> '#',
                    'link2'=> '#',
                    'link3'=> '#',
                    'link4'=> '#',
                    'faceook' => 'fa fa-facebook',
                    'tweeter'=> 'fa fa-tweeter',
                    'instagram'=> 'fa fa-instagram',
                ],
                [
                    'icon'=> 'images/team2.jpg'
                    'name'=> 'Jenni'
                    'subtitle'=> 'MBBS'
                    'link1'=> '#',
                    'link2'=> '#',
                    'link3'=> '#',
                    'link4'=> '#',
                    'faceook' => 'fa fa-facebook',
                    'tweeter'=> 'fa fa-tweeter',
                    'linkedin'=> 'fa fa-lenkedin',
                    'instagram'=> 'fa fa-instagram'
                ]
                [
                    'icon'=> 'images/team3.jpg'
                    'name'=> 'Morco'
                    'subtitle'=> 'MBBS'
                    'link1'=> '#',
                    'link2'=> '#',
                    'link3'=> '#',
                    'link4'=> '#',
                    'faceook' => 'fa fa-facebook',
                    'tweeter'=> 'fa fa-tweeter',
                    'linkedin'=> 'fa fa-lenkedin',
                    'instagram'=> 'fa fa-instagram'
                ]

                
     ] 
        
            }
            <?php
foreach ($doctors as $doctor) {
    echo '<div class="item">';
    foreach ($doctors as $doctor) {
        echo '
        <div class="box">
            <div class="img-box">
                <img src="images/team1.jpg" alt="" />
            </div>
            <div class="detail-box">
                <h5>' . $doctor['name'] . '</h5>
                <h6>' . $doctor['qualification'] . '</h6>
                <div class="social_box">
                    <a href="' . $doctor['facebook'] . '">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="' . $doctor['twitter'] . '">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="' . $doctor['linkedin'] . '">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="' . $doctor['instagram'] . '">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>';
    }
 }
?>

            
