<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="description" content="blog abhay vincent arts fullstack developer">
    <meta name="keywords" content="blog, abhay, vincent, apeiro, arts, fullstack, web, designer, painting, kochi, canada, durham college, toronto, illustration">
    <meta name="author" content="Abhay Vincent">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abhay | Blog </title>
    <link rel="shortcut icon" type="image/png" href="./pixelCanon/logo.png">
    <link rel="stylesheet" href="cleopatra.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
   
</head>
<?php 
    include './databaseInfo.php';
?>
<body>
    <header>
        <div id="logo"></div>
        <div id="headerTitleWrap">
            <div id="headerName">
                <p id="mainName">Apeiro</p>
                <p id="subName">by Abhay</p>
            </div>
            <div id="headerTitle">Blog</div>
        </div>
        <div id="settings"><i class="fas fa-user-circle"></i></div>

    </header>

    <div id="menu" class="vertical">
        <div class="menu selectedMenu" id="apeiro"><i class="fas fa-icons"></i> Apeiro</div>
        <div class="menu" id="code"> <i class="fab fa-codepen"></i> Code</div>
        <div class="menu" id="movie"> <i class="fas fa-film"></i> Movie</div>
        <div class="menu" id="digitalArt"><i class="fas fa-palette"></i> Digital Arts</div>
    </div><div id="info" class="vertical">
        <div id="infoWrap">
            <section class="info" id="info1">
                <div class="infoImage"> </div>
                <div class="infoTitle">Abhay Vincent </div>
                <div id="born" class="subTitle"><i class="fas fa-baby-carriage"></i> Born 20 October 1998  <i class="fas fa-home"></i>  Kochi, India</div>
                <div id="" class="subTitle"><i class="fas fa-map-marker-alt"></i> Lives in Oshawa, Canada <i  class="fab fa-canadian-maple-leaf subIcon"></i></div>
                <div id="" class="subTitle"><i class="fas fa-university"></i> Media And Design, <a href="www.durhamcollege.ca">Durham College</a></div>
                <br>
                <div class="infoDesig">Fullstack Developer <i class="fas fa-laptop-code"></i> </div>
                <div class="infoDesig">Designer <i class="fab fa-adobe"></i></i></div>
                <div class="infoDesig">Artist <i class="fas fa-palette"></i></div>
                <br>
                <div class="infoSkill">Illustration <i class="fas fa-bezier-curve"></i></div>
                <div class="infoSkill">Digital Painting <i class="fas fa-paint-brush"></i></div>
                <div class="infoSkill">UI/UX <i class="fas fa-mobile"></i></div>
                <div class="infoSkill">Animation <i class="fab fa-earlybirds"></i></div>
                <div class="infoSkill">Programming <i class="fas fa-code"></i></div>
                <div class="infoSkill">Web Apps <i class="fab fa-app-store"></i></div>

            </section>

            <section id="social" class="info">
                <a href="https://www.instagram.com/fullstack_lad"><div class="social" id="socialInsta" class="social"><i class="fab fa-instagram"></i></div></a>
                <a href="https://www.linkedin.com/in/abhay-vincent-54416861"><div class="social" id="socialLinked" class="social"><i class="fab fa-linkedin-in"></i></div></a>
                <a href="https://www.facebook.com/abhay.vincent"><div class="social" id="socialFace" class="social"><i class="fab fa-facebook-f"></i></div></a>
                <a href="https://twitter.com/abhaykvincent"><div class="social" id="socialTwiter" class="social"><i class="fab fa-twitter"></i></div></a>
 
            </section>
            <section class="info" id="info3">
                <p><i class="fas fa-globe-americas"></i> Website : www.abhayarts.ga</p>
                <p><i class="fas fa-envelope"></i> Email : abhaykvincent@gmail.com</p>
                <p><i class="fas fa-mobile"></i> Phone : +1 (365) 688 2276</p>
            </section>
            <section class="footer" id="footer">
                <p id="love">Made with <i class="fas fa-heart"></i></p>
                <p id="copy"><i class="fas fa-copyright"></i>  2019 | <i class="fab fa-autoprefixer"></i>  Abhay | <i class="fas fa-infinity"></i> Apeiro </p>
                <p id="credits"><i id="html" class="fab fa-html5"></i> <i id="css" class="fab fa-css3-alt"></i> <i id="js" class="fab fa-js"></i> <i id="php" class="fab fa-php"></i> | <i id="chrome" class="fab fa-chrome"></i>  <i id="adobe" class="fab fa-adobe"> <i id="appleInc" class="fab fa-apple"></i></i></p>
            </section>
        </div>
    </div>  
    <div id="blog" class="vertical">
        <div id="addPostExpand" class="" data-status="close"> Add a post <i class="fas fa-edit"></i></div>
        <section id="addPost" class="intro">

                <textarea type="text" class="postInputs" placeholder="Title" id="postTitleMain"></textarea>
                <p class="addField" id="addSubtitleInput"><i class="fas fa-plus"></i> Add Subtitle</p>
                <input type="text" class="postInputs" placeholder="Sub Title" id="postTitleSub">
                <br><br>

                <textarea type="textarea" cols="40" rows="3" class="postInputs" placeholder="Content" id="postContentText"></textarea>
                <p class="addField" id="addSubcontentInput"><i class="fas fa-plus"></i> Add Sub-content</p>
                <input type="text" class="postInputs" placeholder="sub Content" id="postContentTextSub">
                <br><br>

                <input type="text" class="postInputs" placeholder="Place" id="placeInput" >
                <br>
                <div id="placeList"></div>

                <br><br>

                <input type="file" class="postInputs" placeholder="" id="postImage" name="postImage">
                <p id="addCaption" class="addField" ><i class="fas fa-plus"></i> Add Caption</p>
                <input type="text" class="postInputs" placeholder="Image Caption" id="PostImageCaption">

                <div id="error">
                </div>

                <div id="post"> Post <i class="fas fa-file-import"></i></div>
        </section>
        <hr>
        <section id="intro" class="intro">
        I'm a self-motivated and updated Fullstack Developer, UI/UX designer, Graphical Artist, Programmer and Contemporary Web Design Student at Durham College, Canada from Kochi, India. I design in web with HTML, CSS and Vanilla JavaScript. Also comfortable working with Javascript libraries like JQuery, GSAP. I'm following Agile workflow also works with Waterflow method in short projects.
            <div id="seeMore">See More  <i class="icon-left-margin fas fa-chevron-circle-down"></i></div>
        </section>

        <hr>
        <div id="postSection">
            <?php
                include 'blogContent.php';
            ?>

            <section class="footer" id="monfooter">
                <p id="love">Made with <i class="fas fa-heart"></i></p>
                <p id="copy"><i class="fas fa-copyright"></i>  2019 | <i class="fab fa-autoprefixer"></i>  Abhay | <i class="fas fa-infinity"></i> Apeiro </p>
                <p id="credits"><i id="html" class="fab fa-html5"></i> <i id="css" class="fab fa-css3-alt"></i> <i id="js" class="fab fa-js"></i> <i id="php" class="fab fa-php"></i> | <i id="chrome" class="fab fa-chrome"></i>  <i id="adobe" class="fab fa-adobe"> <i id="appleInc" class="fab fa-apple"></i></i></p>
            </section>      
        </div>
        
        
    </div>
      



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="./cityData.js"></script>
<script src="./sole.js"></script>
<script src="./addPost.js"></script>
<script src="https://kit.fontawesome.com/9f2e6fd0b8.js"></script>
</html>