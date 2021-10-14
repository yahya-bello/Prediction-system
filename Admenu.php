<!DOCTYPE html>
<html>

<head>
    <title> </title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        body {
            background-image: url(img/usermenu.jpg);
            background-size: cover;
        }

        li {
            margin-left: 40px;
            display: inline;
            color: white;
            padding: 20px;
        }
        .bar {
            font-family: Arial;
            background-color: lightseagreen;
            padding: 30px;
            align-items: center;
        }
        .menu a {
            font-size: 20px;
            text-decoration: none;
            list-style: none;
        }

        .menu ul li:hover {
            background: lightblue;
            border-radius: 2px;
        }

        .showSlide {  
            display: none  
        }  
        .showSlide img {  
            width: 100%;  
        }  
        .slidercontainer {
            padding: 70px;  
            max-width: 1000px;  
            position: relative;  
            margin: auto;  
        }  
        .left, .right {  
            cursor: pointer;  
            position: absolute;  
            top: 50%;  
            width: auto;  
            padding: 16px;  
            margin-top: -22px;  
            color: white;  
            font-weight: bold;  
            font-size: 18px;  
            transition: 0.6s ease;  
            border-radius: 0 3px 3px 0;  
        }  
        .right {  
            right: 0;  
            border-radius: 3px 0 0 3px;  
        }
        .left {  
            left: 0;  
            border-radius: 3px 0 0 3px;  
        }    
        .left:hover, .right:hover {  
            background-color: rgba(115, 115, 115, 115);  
        }  
        .content {  
            color: #eff5d4;  
            font-size: 30px;  
            padding: 8px 12px;  
            position: absolute;  
            top: 10px;  
            width: 100%;  
            text-align: center;  
        }  
        .active {  
            background-color: #717171;  
        }  
        /* Fading animation */  
        .fade {  
            -webkit-animation-name: fade;  
            -webkit-animation-duration: 1.5s;  
            animation-name: fade;  
            animation-duration: 1.5s;  
        }  
        @-webkit-keyframes fade {  
            from {  
                opacity: .4  
            }  
            to {  
                opacity: 2 
            }  
        }  
  
        @keyframes fade {  
            from {  
                opacity: .4  
            }  
            to {  
                opacity: 2  
            }  
        }  
        .titl{
            color: white;
            text-align: center;
            padding-top:50px;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <div class="bar">
        <nav class="menu">
            <ul>
                <a href="home.php">
                    <li> Home </li>
                </a>
                <a href="Predict_job.php">
                    <li> Job Predict </li>
                </a>
                <a href="cv_form.php">
                    <li> upload CV </li>
                </a>
                <a href="Fetch_cv.php">
                    <li> View user CV </li>
                </a>
            </ul>
        </nav>
    </div>
    <div class="titl"><strong>WELCOME TO PREDICTION SYSTEM </strong></div>
    <div class="slidercontainer"> 
        <div class="showSlide fade">  
            <img src="img/Analysis-696x364.jpg" />    
        </div>   
        <div class="showSlide fade">  
            <img src="img/curriculo-finlandia-1.jpg" />    
        </div>
        <div class="showSlide fade">  
            <img src="img/Screenshot 2021-10-04 102043.png" />    
        </div>  
        <div class="showSlide fade">  
            <img src="img/system-300x160.png" />    
        </div>    
        <!-- Navigation arrows -->  
        <a class="left" onclick="nextSlide(-1)">❮</a>  
        <a class="right" onclick="nextSlide(1)">❯</a>  
    </div>  
  
    <script type="text/javascript">  
        var slide_index = 1;  
        displaySlides(slide_index);  
  
        function nextSlide(n) {  
            displaySlides(slide_index += n);  
        }  
  
        function currentSlide(n) {  
            displaySlides(slide_index = n);  
        }  
  
        function displaySlides(n) {  
            var i;  
            var slides = document.getElementsByClassName("showSlide");  
            if (n > slides.length) { slide_index = 1 }  
            if (n < 1) { slide_index = slides.length }  
            for (i = 0; i < slides.length; i++) {  
                slides[i].style.display = "none";  
            }  
            slides[slide_index - 1].style.display = "block";  
        }  
    </script> 
</body>

</html>