<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Manager/main/header.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Conductor/markAttendance/structure.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Conductor/markAttendance/tableStyle.css">
    <link rel="stylesheet" href="<?php echo URL?>public/css/common/backgroundAnim.css">
    <title>Attendance</title>
</head>
<body>
<ul class="background">
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
</ul>
    <div class="header">

    <?php require_once APPROOT."/../views/common/header.php"; ?>
        <!--this is the side bar content--> 
    </div>
    
    <!--body content of the page starts here-->
    <div class="main-container">
    <?php require_once APPROOT."/../views/common/InstructorSidebar.php"; ?>
        <div class="container">
            <!--Header-->
            <h1>Attendance</h1>
            <div class="date-viewer">
                <p id="todayDate"></p>
                <div class="session-id-container" id="sessionIdContainer">
               
                </div>
            </div>

            <div class="heading">
                <div class="heading-row">
                    <div class="cell">
                    <div class="headingDetails">
                        <div class="one">Profile Pic</div>
                        <div class="three">ID</div>
                        <div class="two">Name</div>
                        
                        <div class="four">Contact No</div>

                    </div>
                    </div>
                </div>
            </div>
            <div class="table" id="tableRows">
                <!-- <div class="row">
                    <div class="cell">
                        <div class="information">
                            <div class="one">Image</div>
                            <div class="three">ST_1</div>
                            <div class="two">J.J.Silva</div>
                            <div class="four">0771324111</div>
                        </div>
                        <div class="Attendance-Button-set">
                            <button class="present" id="present">Present</button>
                            <button class="absent" id="absent">Absent</button>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <script src="<?php echo URL?>public/js/instructor/markAttendance.js"></script>
</body>
</html>