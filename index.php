<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Long Scrolly Template</title>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="main-menu">
        <ul>
            <li><a href="#first">Home Page</a></li>
            <li><a href="#second">Portfolio</a></li>
            <li><a href="#third">Contact Form</a></li>
        </ul>
    </nav>

    <!-- Top Section -->
    <section id="first">
        <div class="container">

        <h1>Sarah Kingsley</h1>

            
        </div><!-- .container -->
    </section>

    <!-- Second Section -->
    <section id="second">
        <div class="container">

            <h1>Portfolio</h1>

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

            <h1>Contact Me</h1>      

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
