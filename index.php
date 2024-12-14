<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die ('connection failed');

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, message) VALUES ('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF -8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>My Personal Portfolio Website</title>

    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message" data-aos="zoom-out">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}

?>
        <header class="header">

            <div id="menu-btn" class='fas fa-bars'></div>

            <a href="#home" class="logo">Jhona</a>

            <nav class="navbar">
                <a href="#home" class="active">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#contact">contact</a>
            </nav>

            <div class="follow">
                <a href="https://web.facebook.com/JhonaQuines.1" class="fab fa-facebook-f"></a>
                <a href="https://www.youtube.com/@jhonavillanueva5265" class="fab fa-youtube"></a>
                <a href="https://www.linkedin.com/in/jhona-villanueva-57a77a2a8/" class="fab fa-linkedin"></a>
                <a href="https://github.com/jhona-vq" class="fab fa-github"></a>
                
            </div>
        </header>

        <section class="home" id="home">
            <div class="image" data-aos="fade-right">
                <img src="image1.jpg" alt="">
            </div>
            <div class="content">
                <h3 data-aos="fade-up">Hi, i am Jhona Quines</h3>
                <span data-aos="fade-up">Web Designer & Developer</span>
                <p data-aos="fade-up">I'm a web Designer with a experience for over 3 years.My expertise is to create a web design,graphic design, and many more.... </p>
                <a  data-aos="fade-up" href="#about" class="btn">About Me</a>
            </div>
        </section>

        <section class="about" id="about">
            <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>
            <div class="biography">
                <p data-aos="fade-up">"I am a web programmer with 2 years of experience in developing websites, web applications, and digital solutions.I use cutting-edge technologies to build scalable, responsive, and efficient websites.I constantly seek to expand my skills through hands-on projects and learning new tools. I’m a quick learner, detail-oriented, and highly motivated to contribute to innovative solutions. My goal is to apply my knowledge and drive to create impactful tech solutions while continuously growing as a beginner in the IT field."</p>

                <div class="bio">
                    <h3 data-aos="zoom-in"> <span>name : </span> Jhona Quines</h3>
                    <h3 data-aos="zoom-in"> <span>email : </span> jhonav402@gmail.com </h3>
                    <h3 data-aos="zoom-in"> <span>address : </span> Baguio City,Philippines</h3>
                    <h3 data-aos="zoom-in"> <span>phone : </span> +63 9307568452</h3>
                    <h3 data-aos="zoom-in"> <span>age : </span> 22</h3>
                    <h3 data-aos="zoom-in"> <span>experience : </span> 2 years of experience</h3>
                </div>
                <a href="#" class="btn" data-aos="fade-up">Download CV</a>
            </div>

            <div class="skills" data-aos="fade-up">
                <h1 class="heading"><span>skills</span></h1>
                <div class="progress">
                    <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
                    <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
                    <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>70%</span></h3> </div>
                    <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>85%</span></h3> </div>
                </div>
            </div>

            <div class="edu-exp">
                <h1 class="heading" data-aos="fade-up"> <span>education & experiences</span></h1>
                <div class="row">
                    <div class="box-container">
                        <h3 class="title" data-aos="fade-right">education</h3>
                        <div class="box" data-aos="fade-right">
                            <span>( 2019 - 2020 )</span>
                            <h3>web designer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorem numquam non nemo! Cupiditate, ipsa?</p>
                        </div>

                        <div class="box" data-aos="fade-right">
                            <span>( 2020 - 2021 )</span>
                            <h3>web developer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorem numquam non nemo! Cupiditate, ipsa?</p>
                        </div>

                        <div class="box" data-aos="fade-right">
                            <span>( 2021 - 2022 )</span>
                            <h3>graphic designer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorem numquam non nemo! Cupiditate, ipsa?</p>
                        </div>

                    </div>

                    <div class="box-container">
                        <h3 class="title" data-aos="fade-left">experience</h3>
                        <div class="box" data-aos="fade-left">
                            <span>( 2019 - 2020 )</span>
                            <h3>front-end developer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorem numquam non nemo! Cupiditate, ipsa?</p>
                        </div>

                        <div class="box" data-aos="fade-left">
                            <span>( 2020 - 2021 )</span>
                            <h3>back-end developer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorem numquam non nemo! Cupiditate, ipsa?</p>
                        </div>

                        <div class="box" data-aos="fade-left">
                            <span>( 2021 - 2022 )</span>
                            <h3>full-stack developer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorem numquam non nemo! Cupiditate, ipsa?</p>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section class="services" id="services">
            <h1 class="heading" data-aos="zoom-in"><span>services</span></h1>

            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-code"></i>
                    <h3>web development</h3>
                    <p>Designing, building, maintaining, and optimizing websites and web applications, covering areas like front-end, back-end, e-commerce, CMS, SEO, and custom solutions.</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-paint-brush"></i>
                    <h3>graphic design</h3>
                    <p>Creating visually appealing designs for branding, marketing, and communication, such as logos, posters, social media graphics, brochures, packaging, and UI/UX elements.</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fab fa-bootstrap"></i>
                    <h3>bootstrap</h3>
                    <p>Developing responsive and mobile-first websites and web applications, providing pre-designed components like grids, buttons, forms, and navigation bars, along with CSS and JavaScript utilities.</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-chart-line"></i>
                    <h3>marketing</h3>
                    <p>Encompass strategies and activities like advertising, branding, social media management, content creation, SEO, email marketing, and analytics to promote products, engage audiences, and drive business growth.</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-bullhorn"></i>
                    <h3>digital marketing</h3>
                    <p>Social media marketing, content creation, email campaigns, PPC advertising, influencer marketing, and analytics to enhance online visibility, engage audiences, and drive conversions.</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fab fa-wordpress"></i>
                    <h3>wordpress</h3>
                    <p>Website development, theme customization, plugin integration, e-commerce solutions, SEO optimization, website migration, and ongoing maintenance to create and manage dynamic, user-friendly websites.</p>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolio">
            <h1 class="heading" data-aos="zoom-in"><span>portfolio</span></h1>

            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <img src="images/portfolio-1.jpg" alt="">
                    <h3>web design</h3>
                    <span>( 2020 - 2022 )</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="images/portfolio-2.jpg" alt="">
                    <h3>wordpress</h3>
                    <span>( 2020 - 2022 )</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="images/portfolio-3.jpg" alt="">
                    <h3>pixel project</h3>
                    <span>( 2020 - 2022 )</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="images/portfolio-4.jpg" alt="">
                    <h3>web design</h3>
                    <span>( 2023 - 2024 )</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="images/portfolio-5.jpg" alt="">
                    <h3>web slider</h3>
                    <span>( 2023 - 2024 )</span>
                </div>

                <div class="box" data-aos="zoom-in">
                    <img src="images/portfolio-6.jpg" alt="">
                    <h3>wordpress website</h3>
                    <span>( 2023 - 2024 )</span>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <h1 class="heading" data-aos="fade-up"> <span>contact me</span></h1>
            <form action="" method="post">
                <div class="flex">
                    <input data-aos="fade-right" type="text" name="name" placeholder="Enter Your Name" class="box" required>
                    <input data-aos="fade-left" type="text" name="email" placeholder="Enter Your Email" class="box" required>
                </div>
                <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter Your Number" class="box" required>
                <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter Your Message" cols="30" rows="10"></textarea>
                <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
            </form>

            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-phone"></i>
                    <h3>phone</h3>
                    <p>09307568452</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-envelope"></i>
                    <h3>email</h3>
                    <p>jhonav402@gmail.com</p>
                </div>

                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>address</h3>
                    <p>Baguio City</p>
                </div>
            </div>
        </section>

        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Jhona Quines</span></div>

        <script src="script.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <script>
            AOS.init({
                duration:800,
                delay:300
            });
        </script>
    </body>
</html>