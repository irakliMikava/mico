<h2>Request received</h2>
<?php
// Check if the form has been submitted
if(isset($_POST["submit"])) {   
    // Retrieve and display patient's name
    $patientName = $_POST["patientName"];
    echo "Patient name: " . $patientName . "<br />";

    // Retrieve and display doctor's name
    $doctorName = $_POST["doctorName"];
    echo "Doctor's name: " . $doctorName . "<br />";

    // Retrieve and display department's name
    $depName = $_POST["depName"];
    echo "Department's name: " . $depName . "<br />";

    // Retrieve and display phone number
    $number = $_POST["number"];
    echo "Phone number: " . $number . "<br />";

    // Retrieve and display symptoms
    $symptoms = $_POST["symptoms"];
    echo "Symptoms: " . $symptoms . "<br />";

    // Retrieve and display date
    $date = $_POST["date"];
    echo "Date: " . $date . "<br />";
}
?>
