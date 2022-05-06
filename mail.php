<?php


$name  = $_POST['name'];
$email  = $_POST['email'];
$subject  = $_POST['subject'];
$message  = $_POST['message'];

$mailHeader = "From: ".$name."<" .$email.">\r\n";


$recipient = "yaaser10esam1010@gmail.com";

mail($recipient, $subject, $message, $mailHeader)
or die("Error!!");

echo'
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rania Graphic Designer</title>
    <!-- This is the start of css files to normalize the web and for fonts -->

        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/style.css">
        <!-- font Awesome -->
        <link rel="stylesheet" href="./css/all.min.css">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet">
    <!-- This is the start of css files to normalize the web and for fonts -->

</head>
<body>
    <!-- Start Header -->

    <section id="header" style="background-color: rgb(0, 0, 49) ;">
    
        <div class="header containerr">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <a href="#" class="logo"><img src="/image/Thelogo.png" alt="Rania Esam" style="padding: 10px;"></a>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="#hero" data-after="Home">الصفحة الرئيسية</a></li>
                        <li><a href="#services" data-after="About">من أنا</a></li>
                        <li><a href="#projects" data-after="Skills">المهارات</a></li>
                        <li><a href="#about" data-after="Projects">أعمالي</a></li>
                        <li><a href="#contact" data-after="Contact">تواصل</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- End Header -->

<!-- Start Contact -->
    <div class="contact" style="margin-top: 100px;">
        <h2 class="main-title">تم أرسال الطلب بنجاح</h2>
        <div class="container">
            <h1 style="margin: 100px 0px;line-height: 2;">شكرا لتواصلكم معي سوف يتم الرد عليكم بأسرع وقت ممكن</h1>
            <p class="back"><a href="./index.html" style="border: 2px solid black; padding: 10px 20px; border-radius: 10px; background-color: rgb(6, 0, 32); color: rgb(238, 255, 0) ;">العودة الى الصفحة الرئيسية</a></p>
        </div>
    </div>
<!-- End Contact -->



    <script src="./app.js"></script>

</body>
</html>





';

?>