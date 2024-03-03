<?php
    $infos = [
        [
            'class' => 'fa fa-phone',
            'icon' => 'aria-hidden="true"',
            'info' => 'Call : +01 123455678990',
        ],
        [
            'class' => 'fa fa-envelope',
            'icon' => 'aria-hidden="true"',
            'info' => 'Email : demo@gmail.com',
        ],
        [
            'class' => 'fa fa-map-marker',
            'icon' => 'aria-hidden="true"',
            'info' => 'Location',
        ],
    ];

    function printContact ($infos) : void {
        foreach ($infos as $info) {
            echo '<div class="contact_nav">
            <a href="">
              <i class="' . $info['class'] . '"' . $info['icon'] . '"></i>
              <span>
              ' . $info['info'] . '
              </span>
            </a>
          </div>';
        }
    }
    
    $categories = [
        [
            'link' => '/Mico/index.php',
            'name' => 'HOME',
        ],
        [
            'link' => '/Mico/about.php',
            'name' => 'ABOUT',
        ],
        [
            'link' => '/Mico/treatment.php',
            'name' => 'TREATMENT',
        ],
        [
            'link' => '/Mico/doctor.php',
            'name' => 'DOCTORS',
        ],
        [
            'link' => '/Mico/testimonial.php',
            'name' => 'TESTIMONIAL',
        ],
        [
            'link' => '/Mico/contact.php',
            'name' => 'CONTACT US',
        ],
    ];

    function printHeader($categories) : void {
        foreach ($categories as $category) {
            echo '<div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                    <li class="nav-item active">
                        <a class="nav-link" href="' . $category['link'] . '">' . $category['name'] . ' <span class="sr-only">(current)</span></a>
                    </li>
                    </ul>
                </div>';
        }
    }
