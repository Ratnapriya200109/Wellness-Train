<?php
     session_start();
     $_SESSION['current_page'] = "otherS.php";
?>
<!doctype html>
<html>
<head>
<title>About Us</title>
<link href="css/Stylingg1.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/image-bar-style.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">    
</head>
<body>

<?php
    include('navbar.php');
?>
<section class="img-bar">
    <div class="image-box">
        <img src="https://media.istockphoto.com/photos/grilled-chicken-meat-and-fresh-vegetable-salad-of-tomato-avocado-and-picture-id1295633127?b=1&k=20&m=1295633127&s=170667a&w=0&h=VDkBqjm0RShberDPMJ_L-LHX1rZ5v8yNvq0I0UxXquM=" alt="">
    </div>
    <div class="image-box">
        <img src="data:image/jpeg;base64,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" alt="">
    </div>
    <div class="image-box">
        <img src="https://raw.githubusercontent.com/Ratnapriya200109/Wellness-Train/4a5c2f1ac53f86a171b494af34f9e95458efff68/images/yoga5.jpg" alt="">
    </div>
    <div class="image-box">
        <img src="https://media.istockphoto.com/photos/parkinson-disease-patient-alzheimer-elderly-senior-arthritis-person-picture-id1218464621?k=20&m=1218464621&s=612x612&w=0&h=PC5JNOkIRt4iFYapXR3fnjhIGj4DNAwOOSqyBqM4VEo=" alt="">
    </div>
    <div class="image-box">
        <img src="data:image/webp;base64,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" alt="">
    </div>
    <div class="image-box">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSkexypO0Xe8amrVJsLbOmUTBboVlS8C-IGw&usqp=CAU" alt="">
    </div>
</section>
<div class="about-block">
<p class="highl"><br>
Health is a very crucial term in the lives of human people but alas it is also a very vast topic and to know every aspect it 
is time consuming, for getting knowledge. It consumes a lot of time. Also, teenagers being exaggerated by their hormones, 
develop a feeling to take care of themselves but they lack the correct roadmap.</p>
<p class="padding">
We all know that this is the age of Internet and it is widely used to gather information and to do research or add to the 
knowledge of various subjects.It plays a very vital role in education; people always try to refer it, at the door of problem.
And the arrival of Corona Virus indeed proved that how much important it is for us to have a source that is handy and could 
give knowlege anytime, anywhere as per our choices/ease.</p><br>
<p class="padd">
ItsAbtU emphasizes on providing a platform to people whereat they could acquire new information or figure out answers to 
their questions related to their health/body. We provide information in the form of Articles/Blogs and Videos. </p><br>
<p class="padd">  
Our main keypoint is to solve the problem of time for our users. Internet is publicly available, which has it's own pros and
cons. Pros is everyone can access it and gather information available on it, in different forms but cons are that anybody 
could also use it to provide information to others based on their whatsoever knowledge. For instance, you can reference at 
Youtube. YOUTUBE is one of the major sources of information for anyone because it's well known that people tends to learn 
better by watching information provided in terms of videos then reading it from textbooks! 
But issue is anyone could post anything on youtube by making a Youtube Channel. There are soo many solutions in the form of 
answers and now the issue is which one to go for?</p>
<p class="padd">On ItsAbtU you will get videos which are made by Doctors/Specialists or very known Youtubers, thus Individuals don't need to waste 
time in choosing one out of many. And they will get a true/promising information.</p><br>
<p class="padd">
ItsAbtU also provides articles from reliable sources regarding health/body issues.  </p><br>
<p class="padd"> 
Apart it, our another KeyFeature is that we provide knowledge in the form of All in One. You don't need to wander different sites/window tabs for different 
subtypes of health! Details associated to all three main subsets of health i.e., Physical Health, Mental Health and Personal Care are given simultaneously.</p>
<br><p class="padd">
ItsAbtU also gives oppurtunity to people who wishes to share their knowledge with others via Tips/Suggestions section.</p>
<br><p class="padd">
Users could calculate their BMI (Body Mass Index) and Calorie count via our website.</p><br>
<p class="padd">
ItsAbtU provides Dietplan to users based on their requirements.</p><br>
<p class="padd"> We wish every Individual to take care of themselves because Health is the Biggest Posession. Also users feel free to Contact Us if you find any errors/problems while using our website or on Content available.</p>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <ul>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
             <ul>
                 <li><a href="otherS.php">Our Services</a></li>
             </ul>
         </div>
            <div class="footer-col">
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    </footer>
</body>
</html>