<?php
    // Define arrays for contacts and social media links
    $contacts = array(
        array("icon" => "fa fa-map-marker", "text" => "Location", "link" => ""),
        array("icon" => "fa fa-phone", "text" => "Call +01 1234567890", "link" => ""),
        array("icon" => "fa fa-envelope", "text" => "demo@gmail.com", "link" => "")
    );

    $socials = array(
        array("icon" => "fa fa-facebook", "link" => ""),
        array("icon" => "fa fa-twitter", "link" => ""),
        array("icon" => "fa fa-linkedin", "link" => ""),
        array("icon" => "fa fa-instagram", "link" => "")
    );

    // Function to generate HTML for displaying contact information and social media links
    function addressSection($contacts, $socials) {
        // Start HTML div for contact information
        echo '<div class="info_contact">';

        // Loop through each contact item and generate HTML
        foreach ($contacts as $contact) {
            echo '<a href="' . $contact['link'] . '">';
            echo '<i class="' . $contact['icon'] . '" aria-hidden="true"></i>'; // Contact icon
            echo '<span>' . $contact['text'] . '</span>'; // Contact text
            echo '</a>';
        }
    
        // Close the div for contact information
        echo '</div>';
        
        // Start HTML div for social media links
        echo '<div class="social_box">';
        
        // Loop through each social media item and generate HTML
        foreach ($socials as $social) {
            echo '<a href="' . $social['link'] . '">';
            echo '<i class="' . $social['icon'] . '" aria-hidden="true"></i>'; // Social media icon
            echo '</a>';
        }
    
        // Close the div for social media links
        echo '</div>';
        echo '</div>'; // Close the overall div container
    }
?>
