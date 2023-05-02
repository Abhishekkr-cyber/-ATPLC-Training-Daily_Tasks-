<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'appointment failed';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        AIIMS Patna</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>
                AIIMS</strong>Patna</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#doctors">doctors</a>
            <a href="#appointment">appointment</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image">
            <img src="image/home-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
            <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>150+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1030+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>490+</h3>
            <p>bed facility</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>70+</h3>
            <p>available hospitals</p>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="image/about-img.svg" alt="">
            </div>

            <div class="content">
                <h3>take the world's best quality treatment</h3>
                <p>All India Institute of Medical Sciences Patna is strategically located to address regional imbalances in healthcare services, research, and training. It was established under Pradhan Mantri Swasthya Suraksha Yojna (PMSSY) during the first phase following the- then Prime Minister Atal Bihari Vajpayee’s visionary announcement in Independence Day Speech on 15th August 2003.</p>
                <p>With 42 specialized departments and an array of various specialties, inpatient bed facility, and emergency and trauma services with 960 beds available for all types of emergency and high-risk cases, We not only see thousands of outpatients every day, but we have also established ourselves as the most trusted hub for medical services and healthcare facilities.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>free checkups</h3>
                <p>life saving & emergency drugs including crystalloids as well as Investigation and Diagnostic Procedures are being provided free to all patients attending the casualty.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 ambulance</h3>
                <p> the hospital provides 24 hours hospital service with ambulance and many other facility.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <p>Dr Amrita Singh. MBBS, MS - Obstetrics &
                    Gynaecology. Gynaecologist.
                    Dr. Abhay Kumar Jadhav. MBBS, Diploma in Ophthalmology.
                </p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>The discipline of Community and Family Medicine has witnessed rapid evolution from the community oriented health care point of view to the clinic aspect of the subject for appropriate patient care.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>bed facility</h3>
                <p>AIIMS Patna provides Intensive Care Unit(ICU) facilities for critically ill patients.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>This department is providing healthcare facility as well training on health awareness to common people including pre-hospital care training.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- services section ends -->



    <!-- doctors section starts  -->

    <section class="doctors" id="doctors">

        <h1 class="heading"> our <span>doctors</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/doc-1.jpg" alt="">
                <h3>
                    Dr. Lipy Gupta</h3>
                <span>MD - Dermatology , Venereology & Leprosy, MBBS
                    Dermatologist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>

                </div>
            </div>

            <div class="box">
                <img src="image/doc-2.jpg" alt="">
                <h3>Dr Amrita Singh</h3>
                <span>MBBS, MS - Obstetrics & Gynaecology
                    Gynaecologist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-3.jpg" alt="">
                <h3>Dr. Pankaj Chaturvedi</h3>
                <span>MD, MBBS
                    Dermatologist
                    MedLinks</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-4.jpg" alt="">
                <h3>Dr. Nalini Gupta</h3>
                <span>M.Sc, MD, MBBS
                    IVF Specialist
                    Dynamic Fertility and IVF Centre</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-5.jpg" alt="">
                <h3>Dr. Randhir Sud</h3>
                <span>D.M. (Gastroenterology), M.B.B.S., M.D. (General Medicine), Visitng Fellowship in ERCP
                    Gastroenterologist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-6.jpg" alt="">
                <h3>Dr. Amit Seth</h3>
                <span>MD, MBBS
                    Dermatologist
                    Skin & Allergy Clinic</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>

                </div>
            </div>
            <div class="box">
                <img src="image/doc-7.jpg" alt="">
                <h3>Dr. Vasundhara Oberoi</h3>
                <span>MCh-Plastic Surgery, MS-General Surgery, MBBS
                    Cosmetic/Plastic Surgeon</span>
                <div class="share">

                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="image/doc-8.jpg" alt="">
                <h3>Dr. Ashima Dhawan </h3>
                <span>BDS
                    Dentist, Delhi</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="image/doc-9.jpg" alt="">
                <h3>Dr. Abdul Qadir</h3>
                <span>MBBS, DNB Ophtalmology, DOMS, DNB ophthalmology
                    Ophthalmologist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- doctors section ends -->

    <!-- appointmenting section starts   -->

    <section class="appointment" id="appointment">

        <h1 class="heading"> <span>appointment</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="image/appointment-img.svg" alt="">
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<p class ="message">' . $message . '</p>';
                    }
                }
                ?>

                <h3>make appointment</h3>
                <input type="text" name="name" placeholder="your name" class="box">
                <input type="number" name="number" placeholder="your number" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <input type="date" name="date" class="box">
                <input type="submit" name="submit" value="appointment now" class="btn">
            </form>

        </div>

    </section>

    <!-- appointmenting section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/pic-1.jpg" alt="">
                <h3>Akash Yadva</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">The senior most doctors are fine but the rest is a mess. Very poor staff in wards the doctors other than the big names have no idea what they are here for. It won`t take much time to be like any other hospital in Patna.Just having a good infrastructure, doesn`t make you a good hospital.</p>
            </div>

            <div class="box">
                <img src="image/pic-3.jpg" alt="">
                <h3>Kittu </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Wonderful experience with AIIMS hospital. Dr. Rajveer was a wonderful surgeon, and the staff was always helpful and kind. They ensured I had a smooth prep, surgery, and follow-up. I am so glad I chose AIIMS hospital and would highly recommend to anyone.</p>
            </div>

            <div class="box">
                <img src="image/pic-2.jpg" alt="">
                <h3>Gautam</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">One of the best hospitals with having a branches in many places with each and every facilities and doctors are fully trained and patient are also satisfied with the nurse service and the hospital provides 24 hours hospital service with ambulance and many other facility.</p>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 01 May, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by AIIMS </a>
                    </div>
                    <h3>
                        Importance of practice in improving speed and accuracy for NEET exam</h3>
                    <p>Aspiring medical students who are preparing for the National Eligibility cum Entrance Test (NEET) know how important it is to perform well in this competitive exam. </p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 02 may, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by IIBM Institute </a>
                    </div>
                    <h3>
                        The Gates Are Open Registrations For NEET 2023 Are Here!</h3>
                    <p>All the future geniuses note that your opportunity is here for a strike. The National Testing Agency will soon publish the NEET UG 2023 exam registration process.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 03 May, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by aiimspatna </a>
                    </div>
                    <h3>
                        The ultimate guide to ace AIIMS 2023 examination</h3>
                    <p>Overview of AIIMS examination The AIIMS 2023 examination is one of the most competitive medical entrance examinations for admission into various undergraduate and postgraduate course</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 03 May, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Times Of India </a>
                    </div>
                    <h3>
                        Best Institute for NEET in India</h3>
                    <p>The NTA NEET undergraduate examination remains one of India’s toughest competitive exams. Lakhs of students appear for the entrance test each year, although very few make it to the leading medical institutions in the country.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 03 May, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> Harvard Health </a>
                    </div>
                    <h3>Read the latest posts </h3>
                    <p>Medical and health news service that features the most comprehensive coverage in the fields of neuroscience, cardiology, cancer, HIV/AIDS, psychology, psychiatry, dentistry, genetics, diseases and conditions, medications and more.</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="image/blog-6.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 03 May, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Everyday Health </a>
                    </div>
                    <h3>Team of journalists and health experts</h3>
                    <p>Everyday Health inspires and empowers people to live their healthiest lives, every day, through trusted,</p>
                    <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
                <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
                <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
            </div>

            <div class="box">
                <h3>appointment info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91-612-2451070 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91-612-2451006 </a>
                <a href="#"> <i class="fas fa-envelope"></i> admin@aiimspatna.org</a>
                <a href="#"> <i class="fas fa-envelope"></i> ak7616945@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Phulwarisharif, Patna, Bihar India </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> created by <span>Abhishek Kumar</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->


    <!-- js file link  -->
    <script src="js/script.js"></script>

</body>

</html>