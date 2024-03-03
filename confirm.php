<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <?php
    $patientName = isset($_POST['inputPatientName']) ? $_POST['inputPatientName'] : '';
    $doctorName = isset($_POST['inputDoctorName']) ? $_POST['inputDoctorName'] : '';
    $departmentName = isset($_POST['inputDepartmentName']) ? $_POST['inputDepartmentName'] : '';
    $phoneNumber = isset($_POST['inputPhone']) ? $_POST['inputPhone'] : '';
    $symptoms = isset($_POST['inputSymptomse']) ? $_POST['inputSymptomse'] : '';
    $chosenDate = isset($_POST['inputDate']) ? $_POST['inputDate'] : '';
    
    ?>
    <section class="book_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Your appointment has been successfylly scheduled</h1>
                    <h2>Submitted Information</h2>
                    <div class="sub-info">
                    <p>Patient Name:<?php echo $patientName;?></p>
                    <p>Doctor's Name:<?php echo $doctorName;?></p>
                    <p>Department's Name:<?php echo $departmentName;?></p>
                    <p>Phone Number:<?php echo $phoneNumber;?></p>
                    <p>Symptoms:<?php echo $symptoms;?></p>
                    <p>Chosen Data<?php echo $chosenDate;?></p>
                    </div>
                    <button id="downloadButton">Download Info</button>
                    <button class="home-btn"><a href="./index.php">Home Page</a></button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<style>
    *{
    margin-top: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    background-color: #00ff7f;
}

.your-info{
    width: 1000px;
    height: 600px;
    color: #ffffff;
    margin-top: 70px;
    margin-left: 200px;
    border-radius: 10% 50% 10% 50% / 50% 10% 50% 10%;
    filter: drop-shadow(50px 30px 50px black);
    background-color: #ffffff;
}
</style>
