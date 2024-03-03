<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        // Collect input data
       
        $confirmPassword = $_POST["confirm_password"];
      
        // Check if passwords match
        if ($password = $confirmPassword) {
            echo "Registration succesful.<br>";
            
        } else {
            echo "Passwords do not match. Please try again.";
        }

        if (isset($your_array['username'])) {
            // Access $your_array['username'] here
        } else {
            // Handle the case when 'username' key is not set

        }
        // Initialize the array
        $your_array = array();

        // Check if the 'username' key exists before accessing it
        if (isset($your_array['username'])) {
            // Access $your_array['username'] here
            $username = $your_array['username'];
            echo "Username: $username";
        } else {
            // Handle the case when 'username' key is not set
            echo "Username key is not set";
        }
                    // Populate the array with the 'username' key
            $your_array['username'] = 'some_value';
            // Initialize the array with some data
    $your_array = array(
        'username' => 'some_value',
        // other key-value pairs
     );


  ?>

        

    

 



