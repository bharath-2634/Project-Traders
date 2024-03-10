<?php 

    session_start();

    $con = mysqli_connect("127.0.0.1","root","","projecttraders");
    if (!$con) {
        die(mysqli_error("Sorry There is a technical Issue"));
    }else {
        if($_SERVER['REQUEST_METHOD'] == "POST") {

            $Name = $_POST["Name"];
            $Email = $_POST["Email"];
            $Phone = $_POST["Phone"];
            $Address = $_POST["Address"];
            $Institute = $_POST["Institute"];

           
            
            if(!empty(trim($Name," ")) && !empty(trim($Email," "))  && !empty(trim($Address," ")) && !empty(trim($Institute," ")) && !empty($Phone) && preg_match('/^[0-9]{10}+$/',$Phone)) {

                $Insertquery = "insert into users (name,email,phone,address,instituteName,registerDate,verfied) 
                              values ('$Name','$Email','$Phone','$Address','$Institute',current_date(),'incomplete') ";
                    
                mysqli_query($con,$Insertquery);
                $_SESSION['UserName'] = $Name; 
                setcookie("UserName",$Name,time()+60*60*24*30);
                header('location:index.php');
                die();
    
            }else {
                echo '  
                // <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
                        <script>  
                            swal("Oops!", "Please Enter Valid Details", "error"); 
                        </script>
                    ';
            }
            
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Traders | Registration</title>
    <meta name="author" content="Bharath">
    <link rel="stylesheet" href="registerationstyle.css" type="text/css">
    <link rel="stylesheet" href="responsiveRegsiteration.css">
    <link rel="shortcut icon" type="img/text" href="img/icons8-projects-96.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    /* .form__input {
        @media(max-width:400px) {
            width:40%;
        }
    }

    .form_btn {
        @media(max-width:400px) {
            width:40%;
        }
    } */
    /* .container {
        @media(max-width:400px) {
            width:100%;
        }
    } */
   </style>
</head>
<body>

    <div class="container">
        <div class="registration">
            <div class="registration__form">
                
                <form  class="form" method="POST">
                    <div class="form__logoBox">
                        <img src="img/icons8-projects-96.png" alt="logo" class="form__img">
                        <h2 class="heading-secondary">Project Traders</h2>
                    </div>

                    <div class="form__group">
                        <input type="text" class="form__input" placeholder="Full Name" id="name" name="Name" required>
                        <label for="name" class="form__label"><i class="fa-solid fa-user"></i>&nbsp;Full Name</label>
                    </div>

                    <div class="form__group">
                        <input type="email" class="form__input" placeholder="Email Address" id="email" name="Email" required>
                        <label for="email" class="form__label"><i class="fa-solid fa-envelope"></i>&nbsp;Email Address</label>
                    </div>

                    <div class="form__group">
                        <input type="tel" class="form__input" placeholder="Phone" id="phone" name="Phone"  required>
                        <label for="phone" class="form__label"><i class="fa-solid fa-phone"></i>&nbsp;Phone </label>
                    </div>

                    <div class="form__group">
                        <input type="text" class="form__input" placeholder="Residential Address"  name="Address" id="address">
                        <label for="address" class="form__label"><i class="fa-solid fa-house"></i>&nbsp;Residential Address</label>
                    </div>

                    <div class="form__group">
                        <input type="text" class="form__input" placeholder="Institue/school/unversity Name" name="Institute" id="institute">
                        <label for="institute" class="form__label"><i class="fa-solid fa-building-columns"></i>&nbsp;Institue/school/unversity Name</label>
                    </div>
                    
                    <div class="form_btn">
                        <input type="submit" class="form__input-btn"  id="button" value="Register Here" onclick=>
                    </div>

                </form>
            </div>
            <div class="registration__logoBox">
                <h2 class="heading-secondary">Hello Friend! Welcome</h2>
                <img src="img/registration_logo.jpg" alt="Project Traders Registration" class="logo u-margin-top">
                <p class="registration__text u-margin-top">Get Reddy With Your Project <br> <span class="blue-txt"> Perfectly and smartly with <span class="underline-txt">Project Traders</span></span></p>
            </div>
        </div>
    </div>
    <script src="unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script>
    <!-- <script src="https://www.gstatic.com/firebasejs/10.3.0/firebase.js"></script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-analytics.js";
        import { getFirestore, doc, setDoc,collection,addDoc} from "https://www.gstatic.com/firebasejs/10.3.0/firebase-firestore.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyB7xGYB_-EmQR3lk5jI5DgDGNj5w5I9ngE",
            authDomain: "project-traders-e7d2a.firebaseapp.com",
            projectId: "project-traders-e7d2a",
            storageBucket: "project-traders-e7d2a.appspot.com",
            messagingSenderId: "912256604284",
            appId: "1:912256604284:web:a02149390255a07b67d1f9",
            measurementId: "G-4NZY1LWKBS"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);

        const db = getFirestore();

        let Name = document.getElementById("name");
        let Email = document.getElementById("email");
        let Phone = document.getElementById("phone");
        let Address = document.getElementById("address");
        let InstituteName = document.getElementById("institute");

        let Btn = document.querySelector(" .button");

        Btn.onclick = function addData() {
            var Ref = collection(db,"Users");
            const docRef = addDoc(Ref, {
                name: Name.value,
                Status:"Don't Worry Tony"
            } ).then(() => {
                alert("Don't Worry Tony");
            }).catch((error)=> {
                alert("Sorry Retry Tony!");
            });
        }

        Btn.addEventListener("click",addData());
        
        
    </script> -->
</body>
</html>