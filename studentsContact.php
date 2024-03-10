<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Traders | Students Corner </title>
    <meta name="author" content="Bharath">
    <link rel="stylesheet" href="studentsStyle.css">
    <link rel="stylesheet" href="ResponsiveStudentStyle.css">
    <link rel="shortcut icon" type="img/text" href="img/icons8-projects-96.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color:#000;
        }
    </style>
</head>
<body>
    <div class="naviation_bar">
        
        <div class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="index.php #header" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="index.php #section__about-me" class="nav__link">About Me</a></li>
                <li class="nav__item"><a href="index.php #section__projectBook" class="nav__link">My Service</a></li>
                <li class="nav__item"><a href="index.php #section__skills" class="nav__link">My Skills</a></li>
            </ul>
        </div>
        <div class="toggle-btn">
            <i class="fa-solid fa-bars"></i>

        </div>
    </div>
    <div class="dropDownMenu">
        <li><a href="index.php #header" class="drop__link">Home</a></li>
        <li><a href="index.php #section__about-me" class="drop__link">About Me</a></li>
        <li><a href="index.php #section__projectBook" class="drop__link">My Service</a></li>
        <li><a href="index.php #section__skills" class="drop__link">My Skills</a></li>
    </div>

    <!-- Main Content -->
    <div class="student-container">
        <div class="student" >
            <div class="dont-know " data-aos="zoom-in-right"> 
                <img src="img/dont-know.png" alt="" class="dont-konw-img">
                <h1 class="dont-know-text">Are you Struggling with your college projects???</h1>
            </div>
        </div>
        
        <div class="student">
            <div class="dont-copy u-margin-top" data-aos="zoom-in-right">
                <h1 class="dont-copy-text">Don’t Just Copy Everything.Just Understand what you are doing.</h1>
                <img src="img/dont-copy.png" alt="" class="dont-copy-img">
                
            </div>
        </div>
        
        <div class="student">
            <div class="session u-margin-top" data-aos="zoom-in-right">
                <img src="img/project-traders-comes.png" alt="" class="project-img">
                <h1 class="project-text">We Project Traders Provide One-One Sessions through online</h1>
            </div>
        </div>
        
        <div class="student">
            <div class="projects u-margin-top" data-aos="zoom-in-right">
                <h1 class="projects-text">From very Start until completing the whole project we guide and teach you about the projects.</h1>
                <img src="img/project-traders-projects.png" alt="" class="projects-img">
            </div>
        </div>
        <div class="student-block student-me" data-aos="zoom-in-right">
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
    </div>
    <footer class="student-footer">
        <h3 class="copy-txt">&copy; All Rights Reserved By Project-Traders</h3>
    </footer>
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
            duration: 600
        });
    </script>
</body>
</html>