<?php
    // Define an array of links with text and corresponding URLs
    $links = array(
        array("text" => "Home", "link" => "index.php"),
        array("text" => "About", "link" => "about.php"),
        array("text" => "Treatment", "link" => "treatment.php"),
        array("text" => "Doctors", "link" => "doctor.php"),
        array("text" => "Testimonial", "link" => "testimonial.php"),
        array("text" => "Contact us", "link" => "contact.php")
    );

    // Function to print useful links with active class for the current page
    function printUsefulLinks($links) {
        // Start HTML div for the links menu
        echo '<div class="info_links_menu">';
        
        // Get the current page's filename
        $currentPage = basename($_SERVER['PHP_SELF']);
        
        // Loop through each link
        foreach ($links as $link) {
            // Check if the link's URL matches the current page
            // If yes, set the class to 'active' to highlight it
            $class = ($link['link'] == $currentPage) ? 'active' : '';
            
            // Generate HTML for the link with appropriate class and URL
            echo '<a class="' . $class . '" href="' . $link['link'] . '">' . $link['text'] . '</a>';
        }
        
        // Close the div for the links menu
        echo '</div>';
    }
?>
