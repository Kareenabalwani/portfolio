<?php
require_once "./assets/connection.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $contact = $_POST['contact'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO user (name, email,subject,contact,msg)
VALUES ('$name', '$email', '$subject','$contact','$msg')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('message sent succesfully !')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio-kareena balwani</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antic+Slab&family=Lobster+Two&family=Poppins:wght@300&family=Satisfy&display=swap" rel="stylesheet">
    <link href="./assets/CSS/style.css" rel="stylesheet">
    
    <style>

    </style>
</head>

<body>
    <div class="menu"><img src="./assets/Images/menu.png" alt="menu" id="menu-img" onclick="toggle()"></div>

    <nav id="nav">
        
        <div class="left-nav">Kareena Balwani</div>
        <div class="center-nav">
            
            <ul id="nav-ul">
               <li><a href="#about">About</a></li>
               <li><a href="#skills">Skills</a></li>
               <li><a href="#projects">Projects</a></li>
               <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div align="right" class="right-nav social-links" id="social-link-id">
            <a href="https://www.linkedin.com/in/kareena-balwani-068505211" target="_blank"><img src="./assets/Images/linkedin-logo.png" alt="Linkedin"></a>
            <a href="https://github.com/Kareenabalwani" target="_blank"><img src="./assets/Images/github.png" alt="Github"></a>
            <a href="https://instagram.com/kareena_balwani?igshid=YmMyMTA2M2Y=" target="_blank"><img src="./assets/Images/instagram.png" alt="Instagram"></a>
        </div>
    </nav>
    <section id="Main">
        <h1 class="heading about_head">About</h1>
        <hr width="25%" >
        <section class="sections home" id="home">
            <div class="left-home" align="left">
                <h1 class="name" >I am Kareena Balwani</h1>
                <h2 class="text1_head"><span class="text_1"> I'm a Web developer</span><span class="text_2">I'm a Coder</span></h2>
                <h4 class="short_desc">Currently a BCA student at St. Xavier's college.<br>The Career Objective is to
                    become a professional in IT industry where i can enhance my skills and achieve financial as well as
                    personal goals</h4>
                    <a href ="./assets/resume/kareena-sem-6-resume-updated.pdf" attributes-list download ="kareena_balwani_resume" > <button type="submit" class="download_btn">Download CV</button> </a>
            </div>
            <div class="right-home" >
                <img src="./assets/Images/fotor_2023-2-22_19_1_39.png" alt="" class="profile">
            </div>
        </section>

        <h1 class="skill_head heading">Skills</h1>
        <hr>

        <section class="sections skills" id="skills">
            <canvas id="skill_head" width="300" height="150"></canvas>
           
            <div class="skill_list">
                <div class="skill" onmouseover="skill_hover(0)" onmouseleave="skill_leave(0)">
                    <h2 class="skillname">HTML</h2>
                    <canvas id="s1" width="300px" height="150px">your browser does not support canvas</canvas>
                    <h2 class="skill_percent">100%</h2>
                    <hr>
                </div>


                <div class="skill" onmouseover="skill_hover(1)" onmouseleave="skill_leave(1)">
                    <h2 class="skillname">CSS</h2>
                    <canvas id="s2" width="300px" height="150px">your browser does not support canvas</canvas>
                    <h2 class="skill_percent">90%</h2>
                    <hr>
                </div>

                <div class="skill" onmouseover="skill_hover(2)" onmouseleave="skill_leave(2)">
                    <h2 class="skillname">Javascript</h2>
                    <canvas id="s3" width="300px" height="150px">your browser does not support canvas</canvas>
                    <h2 class="skill_percent">80%</h2>
                    <hr>
                </div>

                <div class="skill" onmouseover="skill_hover(3)" onmouseleave="skill_leave(3)">
                    <h2 class="skillname">PHP</h2>
                    <canvas id="s4" width="300px" height="150px">your browser does not support canvas</canvas>
                    <h2 class="skill_percent">95%</h2>
                    <hr>
                </div>
                <div class="skill" onmouseover="skill_hover(4)" onmouseleave="skill_leave(4)">
                    <h2 class="skillname">Django</h2>
                    <canvas id="s5" width="300px" height="150px">your browser does not support canvas</canvas>
                    <h2 class="skill_percent">90%</h2>
                    <hr>
                </div>
                <div class="skill" onmouseover="skill_hover(5)" onmouseleave="skill_leave(5)">
                    <h2 class="skillname">C</h2>
                    <canvas id="s6" width="300px" height="150px">your browser does not support canvas</canvas>
                    <h2 class="skill_percent">98%</h2>
                    <hr>
                </div>

                <div class="skill" onmouseover="skill_hover(6)" onmouseleave="skill_leave(6)">
                    <h2 class="skillname">C++</h2>
                    <canvas id="s7" width="300px" height="150px">your browser does not support canvas</canvas>
                    <h2 class="skill_percent">100%</h2>
                    <hr>
                </div>
                <div class="skill" onmouseover="skill_hover(7)" onmouseleave="skill_leave(7)">
                    <h2 class="skillname">Rest API</h2>
                    <canvas id="s8" width="300px" height="150px">your browser does not support canvas</canvas>
                    <h2 class="skill_percent">75%</h2>
                    <hr>
                </div>
                <div class="skill" onmouseover="skill_hover(8)" onmouseleave="skill_leave(8)">
                    <h2 class="skillname">SQL</h2>
                    <canvas id="s9" width="300px" height="150px">your browser does not support canvas</canvas>
                    <h2 class="skill_percent">100%</h2>
                    <hr>
                </div>
            </div>


        </section>
        <h2 class="project_heading heading">Projects</h2>
        <hr>
        <section class="sections projects_section" id="projects">
            <canvas id="project_head" width="300" height="150"></canvas>
          
            <div class="projects">

                <div class="project">
                    <h2 class="project_head">Research Project</h2>
                    <img src="./assets/images/project_1_research.png" alt="">
                    <h3 class="project_desc">Validar - Product validation using QR code</h3>
                </div>
                <div class="project">
                    <h2 class="project_head">Job Portal Project</h2>

                    <img src="./assets/images/project_2_job_portal.png" alt="">
                    <h3 class="project_desc">Candidates can view and apply for job which are added by various companies</h3>
                </div>
                <div class="project">
                    <h2 class="project_head">Basic Music Player</h2>
                    <img src="./assets/images/project_3_spotify.png" alt="">
                    <h3 class="project_desc">A Music player using Javascript</h3>
                </div>



                <div class="project">
                    <h2 class="project_head">Calculator</h2>
                    <img src="./assets/images/project_4_calculator.jpeg" alt="">
                    <h3 class="project_desc">Fully Functional general Calculator</h3>
                </div>
                <div class="project">
                    <h2 class="project_head">A quiz Website</h2>

                    <img src="./assets/images/project_5_amero.jpeg" alt="" id="amero">
                    <h3 class="project_desc"> A quiz website which provides amero coins </h3>
                </div>
                <div class="project">
                    <h2 class="project_head">Todo List</h2>
                    <img src="./assets/images/project_6_todo.png" alt="">
                    <h3 class="project_desc">A todo list for maintaining daily tasks</h3>
                </div>




                <div class="project">
                    <h2 class="project_head">Laundry service website</h2>
                    <img src="./assets/images/project_7_dust.png" alt="" id="dust">
                    <h3 class="project_desc">Online site for a laundry firm which provides laundry & cleaning services(Currently working)</h3>
                    
                </div>

                <div class="project">
                    <h2 class="project_head">Christmas website</h2>
                    <img src="./assets/images/project_8_christmas.jpeg" alt="">
                    <h3 class="project_desc">A Beautiful christmas website UI</h3>
                </div>



            </div>
        </section>
        <h1 class="contact_head heading">Contact</h1>
        <hr>
        <section class="sections contact" id="contact">
           
            <div class="contact-left">
                <h2 class="contact_left_head">Let's Connect</h2>
                <br>
                <h3 class="email"> Email <img src="./assets/Images/email.png" alt="" width="20px">:<br>kareenabalwani5@gmail.com</h3> <div class="right-nav contact-links social-links" id="social-link-id" style="margin-left: 2.5rem;">
                    <a href="https://www.linkedin.com/in/kareena-balwani-068505211" target="_blank"><img src="./assets/Images/linkedin-logo.png" alt="Linkedin"></a>
                    <a href="https://github.com/Kareenabalwani" target="_blank"><img src="./assets/Images/github.png" alt="Github"></a>
                    <a href="https://instagram.com/kareena_balwani?igshid=YmMyMTA2M2Y=" target="_blank"><img src="./assets/Images/instagram.png" alt="Instagram"></a>
                </div>
            </div>
            <div class="contact-right">
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td>Name: </td>
                            <td> <input type="text" name="name" id=""  required ></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td> <input type="text" name="email" id="" required ></td>
                        </tr>
                        <tr>
                            <td>Subject: </td>
                            <td> <input type="text" name="subject" id="" required ></td>
                        </tr>
                        <tr>
                            <td>Contact No: </td>
                            <td> <input type="text" name="contact" id="" required ></td>
                        </tr>
                        <tr>
                            <td>Message: </td>
                            <td> <textarea rows="4" name="msg" required></textarea></td>
                        </tr>
                        <tr>

                            <td colspan="2"> <input type="submit" value="Send Message" name="submit" id=""></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
    </section>
    <footer>
        <div class="left-footer">Made with 💖 by kareena_balwani</div>
        <div class="right-footer social-links" id="social-link-id">
            <a href="https://www.linkedin.com/in/kareena-balwani-068505211" target="_blank"><img src="./assets/Images/linkedin-logo.png" alt="Linkedin"></a>
            <a href="https://github.com/Kareenabalwani" target="_blank"><img src="./assets/Images/github.png" alt="Github"></a>
            <a href="https://instagram.com/kareena_balwani?igshid=YmMyMTA2M2Y=" target="_blank"><img src="./assets/Images/instagram.png" alt="Instagram"></a>
        </div>
    </footer>
    <script src="./assets/JS/script.js"></script>
</body>

</html>