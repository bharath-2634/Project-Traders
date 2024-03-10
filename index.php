<?php 
    session_start();
    
    if(!isset($_SESSION['UserName']) || !isset($_COOKIE['UserName'])) {
        // echo "Try Again Bharath";
        //delayed Register PopUp should Occur
    }else {
        $UserName = $_COOKIE['UserName'];
    }
    


    
    if(isset($_SERVER['REQUEST_METHOD'])) {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            header('location:booking.php');
        }
    }
    
    
    $con = mysqli_connect("127.0.0.1","root","","projecttraders");
    if($con) {
        $user = "select id from users";
        $UserRes = mysqli_query($con,$user);
        $UserCount =0;
        while($row = mysqli_fetch_row($UserRes)) {
            $UserCount++;   
        }

        $project = "select id from projects";
        $ProjectRes = mysqli_query($con,$project);
        $ProjectCount =0;
        while ($res = mysqli_fetch_row($ProjectRes)) {
            $ProjectCount++;
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Traders | Get Reddy With Your Projects </title>
    <meta name="author" content="Bharath">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="popUpstyle.css">
    <link rel="stylesheet" href="responsivePopUp.css">
    <link rel="stylesheet" href="contactSection.css">
    <link rel="stylesheet" href="introStyle.css">
    <link rel="stylesheet" href="footerMakeUp.css">
    <link rel="shortcut icon" type="img/text" href="img/icons8-projects-96.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color:#1C1B1A;
            color:white;
            font-family:"Jost";
        }
        .heading-logo {
            margin:auto 0;
        }
       .naviation_bar {
        margin-bottom:0;
       }
       
       .progress-bar {
        background-color:#000;
       }
       .footer {
        height:45rem;
        @media(max-width:400px) {
            height:60rem;
            width:100%;
        }
       }
       

    </style>
</head>

<body>
    
    <div class="popUpContainer">
        <div class="popUp" id="popUp">
            <img src="img/registration_logo.jpg" alt="logo" class="popUpImg">
            <h2 class="popUpHeading">Welcome <br> 
            <?php 
                if(isset($_COOKIE['UserName'])) {
                    echo $_COOKIE['UserName'];
                }
            ?></h2>
            <p class="popUpText">thank you For Being a part of <span class="blue-txt">Project Traders</span> get Started With Your Projects.</p>
            <button class="closePopUp" onclick="closePopUp()">Ok</button>
        </div>
    </div>
    <div class="naviation_bar">
        <div class="logo-box">
            <img src="img/icons8-projects-96.png" alt="Project Traders" class="logo">
            <h2 class="heading-logo">Project Traders</h2>
        </div>
        <div class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#header" class="drop__link">Home</a></li>
                <li class="nav__item"><a href="#section__about-me" class="drop__link">About Me</a></li>
                <li class="nav__item"><a href="#section__projectBook" class="drop__link">Services</a></li>
                <li class="nav__item"><a href="#section__contact" class="drop__link">Overview</a></li>
            </ul>
        </div>
        <div class="toggle-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="dropDownMenu">
        <li><a href="#header" class="drop__link">Home</a></li>
        <li><a href="#section__about-me" class="drop__link">About Me</a></li>
        <li><a href="#section__projectBook" class="drop__link">Services</a></li>
        <li><a href="#section__contact" class="drop__link">Overview</a></li>
    </div>
    <header class="header" id="header">
        <div class="main-block">
            <div class="intro-block">
                Hi I'm Bharath Kumar And <br>
                <div class="move-text u-text-center">
                    <div class="text_wrapper">
                        <span class="text first-txt u-text-center">I am an </span>
                        <span class="text sec-txt u-text-center">  </span>
                    </div>
                </div>
                This Website Will Let You <br>
                Know About Me And My 
                Skills....<br><br>

                <a href="registeration.php" class="btn btn-white btn-animated">Get Started</a>
                <div class="user-nav">
                    <div class="wrapper">
                        <div class="icon contacts">
                            <span><a href="#footer"><i class="fa-solid fa-address-book"></i></a></span>
                            <div class="tooltip ">contact Me</div>
                        </div>
                        <div class="icon github">
                            <span><a href=""><i class="fa-brands fa-github"></i></a></span>
                            <div class="tooltip ">gitHub</div>
                        </div>
                        <div class="icon FaceBook">
                            <span><a href=""><i class="fa-brands fa-facebook"></i></a></span>
                            <div class="tooltip ">Face Book</div>
                        </div>
                        <div class="icon instagram">
                            <span><a href=""><i class="fa-brands fa-instagram"></i></a></span>
                            <div class="tooltip ">Instagram</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-img" >
                <video height="100%" class="vid"  autoplay muted loop>
                    <source src="img/Project-Traders-Welcome.mp4" type="video/mp4">
                </video>
                <!-- <img src="img/header_img.jpg" alt="intro-img" class="personal-img"> -->
            </div>
        </div>
    </header>
    <main>

        <section class="section__about-me" id="section__about-me" data-aos="fade-up">
            <div class="heading" data-aos="fade-up">
                <div class="heading-primary">
                    About Me
                </div>
            </div>
            <div class="aboutMe-text" data-aos="fade-up" >
                <img src="img/about_me_3d_2.png" alt="about Me Image" class="aboutMe-img">
                <p class="text-heading">
                    I'm Bharath Kumar a <span class="blue-txt">Web Developer</span> , <span class="blue-txt">Web Designer</span>,
                    <span class="blue-txt">Android And Multiplatform App Developer</span> , <span class="blue-txt">Full Stack Developer</span> 
                    Worked On Various Projects.
                </p>
                <p class="text-para">
                    Hello to my fellow tech enthusiasts and coding peers! I'm thrilled to present myself as an avid developer on an unending journey for knowledge and innovation. Fueled by a profound fascination for technology and an unwavering commitment to crafting purposeful solutions, I flourish in the realm of coding

                    <br>
                    I've spent my Past 1+ years across different Areas of Full Stack Development, Mobile Platforms,Designing And Developing Responsive Web Designs And Apps.

                    <span class="blue-txt">I'm Currently Undertaking All Kinds of Project Works</span> Based on My Skills And Knowledge.
                    <br>
                    Out of My Work I Used to spend most of my time with my books And Projects and some time with  My Dog.
                </p>
            </div>
        </section>
        
        <section class="section__projectBook" id="section__projectBook" data-aos="fade-up">
            <div class="heading u-margin-top" data-aos="fade-up">
                <div class="heading-primary">
                    My Service
                </div>
            </div>
            <?php 

                if(!isset($_SESSION['UserName'])) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Please Click <strong>Get Started</strong> and book Your Projects For Better Experience!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php        
                }
            
            ?>
            <div class="projectBox">
                <div class="project" data-aos="slide-right">
                    <div class="project-logo" data-aos="fade-up">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="project-heading" data-aos="fade-up">
                        Web Development
                    </div>
                    <div class="project-description" data-aos="fade-up">
                        We Provide a Responsive and quality Web designs and apps based on users perference
                    </div>
                    <div class="project-btn" data-aos="fade-up">
                        <!-- <a href="#" class="btn btn-white btn-animated">Book Now!</a> -->
                        <form  class="form" method="POST">
                            <input type="submit" class="ProjectBtn Btn-white Btn-animated" value="Book Now!">
                        </form>
                        
                    </div>
                </div>

                <div class="project" data-aos="slide-right">
                    <div class="project-logo" data-aos="fade-up">
                        <i class="fa-sharp fa-solid fa-crop-simple"></i>
                    </div>
                    <div class="project-heading" data-aos="fade-up">
                        UI/UX Designing
                    </div>
                    <div class="project-description" data-aos="fade-up">
                        We Provide More Creative and Quality UI/Ux Product Designs frames based on User Preferences

                    </div>
                    <div class="project-btn" data-aos="fade-up">
                        <!-- <a href="#" class="btn btn-white btn-animated">Book Now!</a> -->
                        <form  class="form" method="POST">
                            <input type="submit" class="ProjectBtn Btn-white Btn-animated" value="Book Now!">
                        </form>
                    </div>
                </div>

                <div class="project" data-aos="slide-right">
                    <div class="project-logo" data-aos="fade-up">
                        <i class="fa-brands fa-app-store"></i>
                    </div>
                    <div class="project-heading" data-aos="fade-up">
                        Android  Development
                    </div>
                    <div class="project-description" data-aos="fade-up">
                        We Provide a Quality and creative apps with mindblowing animations and perfect functioning apps Based on Users Preference
                    </div>
                    <div class="project-btn" data-aos="fade-up">
                        <!-- <a href="#" class="btn btn-white btn-animated">Book Now!</a> -->
                        <form  class="form" method="POST">
                            <input type="submit" class="ProjectBtn Btn-white Btn-animated" value="Book Now!">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__contact" id="section__contact">
            <div class="contact-block " data-aos="zoom-in-right">
                <div class="students-logo">
                    <img src="img/registration_logo.jpg" alt="" class="student">
                </div>
                <div class="students-corner">
                    <h2 class="students-heading">Students Corner</h2>
                    <div class="contact-btn">
                        <p class="contact-text">student</p>
                        <div class="next">
                            <a href="studentsContact.php" class="next-btn"><i class="fa-sharp fa-solid fa-forward"></i></a>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="contact-block u-padding" data-aos="zoom-in-right">
                <h2 class="follow-heading">Follow Me On</h2>
                <div class="social-media">
                    <div class="social-media-icon"><a href="https://github.com/bharath-2634" target="blank"><i class="fa-brands fa-github"></i></a></div>
                    <div class="social-media-icon"><a href="https://www.linkedin.com/in/bharath-kumar-b5536828a/" target="blank"><i class="fa-brands fa-linkedin"></i></a></div>
                </div>
                <div class="social-media">
                
                    <div class="social-media-icon"><i class="fa-brands fa-instagram"></i></div>
                    <div class="social-media-icon"><i class="fa-brands fa-twitter"></i></div>
                </div>
            </div>
            <div class="contact-block contact-me" data-aos="zoom-in-right">
                <div class="lamp-logo">
                <img src="img/icon.png" alt="">
                </div>
                
                <div class="contact-btn">
                    <h1 class="work-heading">
                    Let's <br> Work <br>Together
                    </h1> 
                    <div class="next work-btn">
                        <a href="booking.php" class="next-btn"><i class="fa-sharp fa-solid fa-forward"></i></a>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    <footer class="footer" id="footer">
        <div class="footer__container">
            <div class="footer__logoBox">
                <img src="img/icons8-projects-96.png" alt="Project Traders" class="footer__logo">
                <div class="heading">
                     <div class="heading-primary">
                         Project Traders
                     </div>
                 </div>
             </div>
        </div>
        <div class="footer__textBox">
            <div class="footer__textBox-contactDetails">
                <div class="footer__textBox-contactDetails-contact u-margin-top ">
                    <h3 class="heading-secondary contact-heading blue-txt">Mail Id :</h3>
                    <p class="contact-detail">bharath2005goo@gmail.com</p>
                </div>

                <div class="footer__textBox-contactDetails-contact u-margin-top ">
                    <h3 class="heading-secondary contact-heading blue-txt">Mobile Number :</h3>
                    <p class="contact-detail">+91 7845425982</p>
                </div>

                <div class="footer__textBox-contactDetails-contact u-margin-top">
                    <h3 class="heading-secondary contact-heading blue-txt">whatsApp Number :</h3>
                    <p class="contact-detail">+91 8438515729</p>
                </div>


            </div>
            <div class="footer__textBox-copyRight">
                <div class="countingDetails">
                    <div class="userCounting ">
                        <div class="countHeading">
                            Clients Worldwide
                        </div>
                       <div class="count">
                            <?php 
                                echo $UserCount+10;
                            ?> 
                       </div>
                    </div>
                    <div class="projectCounting">
                        <div class="countHeading">
                                Total Projects
                            </div>
                        <div class="count">
                                <?php 
                                    echo $ProjectCount+10;
                                ?> 
                        </div>
                    </div>
                </div>
                &copy; All Rights are reserved by <span class="blue-txt">Project Traders</span>
            </div>
        </div>
    </footer>

    <!-- Java Script For Header Text Typing Animation -->
    <script>
        const txt = document.querySelector(" .sec-txt");

        const textLoad = () => {
            setTimeout(() => {
                txt.textContent = "Web and Android Developer";
            }, 0);

            setTimeout(() => {
                txt.textContent = "Full Stack Developer";
            }, 4000);

            setTimeout(() => {
                txt.textContent = "UI/UX Designer";
            }, 8000);

            
        }

        textLoad();
        setInterval(textLoad,12000);
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            duration: 600
        });
    </script>
    <script>
        var name = document.cookie; 
        if(name) {
            let popUp = document.getElementById("popUp");
            popUp.classList.add("openPopUp");
        }
        function closePopUp() {
            let popUp = document.getElementById("popUp");
            popUp.classList.remove("openPopUp");
        }
    </script>
    <script>
        const toogleBtn = document.querySelector(" .toggle-btn");
        const toogleBtnIcon = document.querySelector(" .toggle-btn i");
        const dropDownMenu = document.querySelector(" .dropDownMenu");

        toogleBtn.onclick = function () {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toogleBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'
        }
    </script>
    <!-- <script>
        window.addEventListener("scroll",function() {
            var navigation = document.querySelector(" .naviation_bar");
            navigation.classList.toggle("sticky", window.scrollY >0)
        })
    </script> -->
</body>
</html>