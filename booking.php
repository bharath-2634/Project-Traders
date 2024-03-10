<?php 

    session_start();
    $con = mysqli_connect("127.0.0.1","root","","projecttraders");
    if (!$con) {
        die(mysqli_error("Sorry There is a technical Issue"));
    }else {
        if($_SERVER['REQUEST_METHOD'] == "POST") {

            $ProjectName = $_POST["ProjectName"];
            $ProjectDomain = $_POST["ProjectDomain"];
            $ProjectDescription = $_POST["ProjectDescription"];
            $Phone = $_POST["Phone"];
           
            if(!empty(trim($ProjectName," ")) && !empty(trim($ProjectDomain," ")) && !empty($Phone) && preg_match('/^[0-9]{10}+$/',$Phone)) {

                $Insertquery = "insert into projects (projectName,projectDomain,projectDescription,phone,projectDate) 
                              values ('$ProjectName','$ProjectDomain','$ProjectDescription','$Phone',current_date() ) ";
                    
                mysqli_query($con,$Insertquery);
                header('location:index.php');
                die();
    
            }else {
                echo '
                // <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
                    <script>  
                        swal("Oops!", "Please Enter Valid Details", "error"); 
                    </script>';
            }
            
            
        }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Traders | Booking</title>
    <meta name="author" content="Bharath">
    <link rel="stylesheet" href="bookingPage.css">
    <link rel="stylesheet" href="responsiveBooking.css">
    <link rel="shortcut icon" type="img/text" href="img/icons8-projects-96.png">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .red-mark {
            color: red;
        }
    </style>

</head>
<body>
   
    <div class="heading u-margin-top">
        <div class="heading-primary">
             Book Your Projects
        </div>
    </div>

    <div class="container">
        <div class="logo-box">
            <img src="img/icons8-projects-96.png" alt="project traders" class="logo">
            <div class="heading u-margin-top">
                <div class="heading-secondary">
                    Project Traders
                </div>
            </div>
        </div>
        <div class="registration">
            
                <form  name="myForm" class="form" method="POST" onsubmit="return (submitForm(this) && (formValidation());">
                    <div class="form__group">
                        <input type="text" class="form__input" placeholder="Project Name" id="name" name="ProjectName" required>
                        <label for="name" class="form__label"><span class="red-mark">*</span>Project Name</label>
                    </div>

                    <div class="form__group">
                        <input type="text" class="form__input" placeholder="Project Domain" id="email" name="ProjectDomain" required>
                        <label for="email" class="form__label"><span class="red-mark">*</span>Project Domain</label>
                    </div>

                    <div class="form__group">
                        <input type="text" class="form__input" placeholder="Project Description" id="phone" name="ProjectDescription"  >
                        <label for="phone" class="form__label">Project Description </label>
                    </div>

                    <div class="form__group">
                        <input type="text" class="form__input" placeholder="phone"  name="Phone" id="address" required>
                        <label for="address" class="form__label"><span class="red-mark">*</span>Phone</label>
                    </div>

                    <div class="form_btn">
                        <input type="submit" class="form__input-btn"  id="institute" value="Book" onclick="openPopUp()">
                    </div>

                </form>
            
        </div>
    </div>    
    <script src="unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script>  
    <script>
        function submitForm(form) {
            swal({
                title: "Project Traders| Booking",
                text: "We Will Be On Your Project Within an hour",
                icon: "success",
                buttons: true,
                dangerMode: true,
            }).then((isOkay) => {
                if(isOkay) {
                    form.submit();
                }
            });
            return false;
        }
    </script> 
    <script>
        function formValidation() {
            
        }

    </script>
</body>
</html>