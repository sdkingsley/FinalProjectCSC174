<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta charset="utf-8">
    <title>Sarah Kingsley</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700|PT+Sans+Narrow:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/long-scrolly.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/lightbox.css" />

    <script type="text/javascript">
        function openModal() {
          document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
          document.getElementById('myModal').style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>

    <script type="text/javascript">
         function validate()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your email!" );
            document.myForm.email.focus() ;
            return false;
         }
         
         if( document.myForm.phone.value == "" ||
         isNaN( document.myForm.phone.value ) ||
         document.myForm.phone.value.length != 10 )
         {
            alert( "Please provide a number in format ###########." );
            document.myForm.phone.focus() ;
            return false;
         }

         if( document.myForm.message.value == "" )
         {
            alert( "Please provide a message!" );
            document.myForm.message.focus() ;
            return false;
         }
         
      }

      </script>
</head>

<body>

    <!-- Navigation -->
    <nav class="main-menu">
        <ul>
            <li><a href="#first">ABOUT</a></li>
            <li><a href="#second">SKILLS</a></li>
            <li><a href="#third">PORTFOLIO</a></li>
            <li><a href="#fourth">CONTACT</a></li>
        </ul>
    </nav>

    <!-- Top Section -->
    <section id="first">
        <div class="container">

        <img class="center" src="images/profilepic.jpg" alt="tshirt">

        <h1>Sarah Kingsley</h1>
        <h2>UI Designer & Software Engineer</h2>

        <h3>Qualifications</h3>
        <p>Coursework in Java, web, HCI and mobile.</p>
        <p>Experience incorporating libraries APIs and databases.</p>
        <p>Designer and developer within 3 different firms.</p>
        <p>Strong background in the Fine Arts and maintaining a creative process.</p>

        <h3>Education</h3>
        <p>University of Rochester - Graduating Spring 2017 with a Bachelor of Arts in Computer Science and Studio Arts</p>
        <p>Selected Coursework: Mobile App Decelopment, Advanced Front End Development, Human Computer Interaction, Artificial Intelligence, Advanced Digital Art, Computer Organziation, Web Programming, Principles of Marketing, Financial Accounting, Senior Studio in the Fine Arts</p>

        <h3>Tools</h3>
        
        </div><!-- .container -->
    </section>

    <!-- Second Section -->
    <section id="second">
        <div class="skills">

            <h1>Skills</h1>

            <h2>Fine Arts</h2>

            <div class="content">

                <img class="right frame" src="images/Anaclaire.jpg" alt="tshirt">

                <p>In my art I use mediums of acrylic paint and digital to take a closer look at the role of empathy in reference to the voices within myself and within the networks I operate. In the past this has included looking at the art form of theatre, the complexities of proportion, tensions between technologies and humanity, and advocation for sexual assault awareness. My current work involves painting portraits of women in all the STEM majors that the University of Rochester to purpose both celebrating their passion and understanding the difficulties of being in that position.</p>

            </div><!-- .content -->

            <h2>User Interface Design</h2>

            <div class="content">

                <p>With a background in the fine arts, human computer interaction and an accompanying business minor, I believe I have a unique ability to be able to combine those skills in the field of user interface design. Creating visually has always been my passion, and I observe interfaces as a medium where I can work actively with with the process of thought.</p>
            </div><!-- .content -->
            <div class="content">

                <h3>Summer 2017</h3>

                <p>My most recent work has been through my internship, where I completed a solo design for both the recent release of the <a href="https://developer.soleo.com/">Soleo API Developer's Portal</a> and the <a href="https://search.soleo.com/">Soleo Web Application</a>. I also had the opportunity to work as a contributing researcher and grapic designer for the Soleo app, <a href="https://play.google.com/store/apps/details?id=com.soleo.api.android.localsearch.nlp">Heystack</a>.
            </div><!-- .content -->
            <div class="content">

                <h3>Motion Speak</h3>

                <iframe class="right frame" src="https://docs.google.com/presentation/d/1tvR0AEh8CpiMf0wkhTIFu08h2xArQmfk8wbtbnLf3ww/embed?start=false&loop=false&delayms=3000" frameborder="0" width="560" height="315" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

                <p>For the course human computer action, I worked as head of research for the product Motion Speak. The final working prototype utilizes the google glass interface to provide users with real time feedback to help them optimize movement while speaking publicly.</p>

            </div><!-- .content -->
            <div class="content">

                <h3>Work in Progress</h3>

                <iframe class="right frame" width="560" height="315" src="https://www.youtube.com/embed/zyTiBGdInUE?list=PL5aTD63kf1EB3wzBrkOvyl2HqnQX_DziS" frameborder="0" allowfullscreen></iframe>

                <p>For a current work in progress, I am the lead user experience designer for a new social media app through a student entrepreneurial program at the University of Rochester.</p>

            </div><!-- .content -->

            <h2>Software Engineering</h2>

            <div class="content">

                <p>At the University of Rochester I am fulfilling a bachelor of arts degree in human computer interaction. Through this course of study I have learned many skills, my main proficiencies being in Java, web development, mobile development and user experience research.</p>

                <p class="view"><a href="https://github.com/sdkingsley">View My GitHub Profile</a> to see some of my recent work in web and iOS.</p>
    
                <p>The<a href="https://play.google.com/store/apps/details?id=com.soleo.api.android.localsearch.nlp&hl=en"> heystack mobile app</a> was one of my most recent software engineering projects where I worked as in android studio to implement much of the front end design and interactions of the app.</p>

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Third Section -->
    <section id="third">
        <div class="container">

            <h1>Portfolio</h1>

            <!-- RESOURCE: http://www.w3schools.com/howto/howto_js_lightbox.asp -->
            <div class="row">
              <div class="column">
                <img src="images/finearts/Isabelle-sm.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
              </div>
              <div class="column">
                <img src="images/finearts/Anaclaire-sm.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
              </div>
              <div class="column">
                <img src="images/finearts/TechnologyIsEmpathy-sm.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
              </div>
              <div class="column">
                <img src="images/finearts/TheatreEmpathy-sm.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
              </div>
            </div>

            <div id="myModal" class="modal">
              <span class="close cursor" onclick="closeModal()">&times;</span>
              <div class="modal-content">

                <div class="mySlides">
                  <div class="numbertext">1 / 4</div>
                    <img src="images/finearts/Isabelle.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                  <div class="numbertext">2 / 4</div>
                    <img src="images/finearts/Anaclaire.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                  <div class="numbertext">3 / 4</div>
                    <img src="images/finearts/TechnologyIsEmpathy.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                  <div class="numbertext">4 / 4</div>
                    <img src="images/finearts/TheatreEmpathy.jpg" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                  <p id="caption"></p>
                </div>

                <div class="column">
                  <img class="demo" src="images/finearts/Isabelle-sm.jpg" onclick="currentSlide(1)" alt="Nature">
                </div>

                <div class="column">
                  <img class="demo" src="images/finearts/Anaclaire-sm.jpg" onclick="currentSlide(2)" alt="Trolltunga">
                </div>

                <div class="column">
                  <img class="demo" src="images/finearts/TechnologyIsEmpathy-sm.jpg" onclick="currentSlide(3)" alt="Mountains">
                </div>

                <div class="column">
                  <img class="demo" src="images/finearts/TheatreEmpathy-sm.jpg" onclick="currentSlide(4)" alt="Lights">
                </div>
              </div>
            </div>


       </div><!-- .container -->

    </section>

    <!-- Fourth Section -->
    <section id="fourth">
        <div class="container">

            <h1>Contact Me</h1>

            <form method= "post" action="database-write.php" name="myForm" onsubmit="return(validate());">
         <table cellspacing="2" cellpadding="8">
            
            <tr>
               <td align="right">Name</td>
               <td><input type="text" name="name" /></td>
            </tr>
            
            <tr>
               <td align="right">Email Address</td>
               <td><input type="text" name="email" /></td>
            </tr>
            
            <tr>
               <td align="right">Phone Number</td>
               <td><input type="text" name="phone" /></td>
            </tr>

            <tr>
               <td align="right">Message</td>
               <td><input type="text" name="message" /></td>
            </tr>
            
            <tr>
               <td align="right"></td>
               <td><input type="submit" value="Submit" /></td>
            </tr>
            
         </table>
      </form>     

       </div><!-- .container -->

    </section>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>
