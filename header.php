<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">

    
    <title>  <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
</title>

    <!-- Bootstrap -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<link rel="preconnect" href="https://fonts.gstatic.com">
      
<?php wp_head(); ?>
</head>

<body>

    <header class="container-fluid herobg">
        <!-- div for the main image that stretches to the edge of the page -->

        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">publications</a></li>
                        <li><a href="#">Cv</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="container">
            <!-- div that holds the content in the middle of the page-->
            <h1> Games Design For the Future </h1> <!-- the main tag line-->
        </div> <!-- container-->

    </header>

    <section class="container-fluid aboutbg text-center">

        <div class="container">

            <h2> Games &amp; LEVEL DESIGNER</h2>
            <p class="particle">...and partical wizard</p>
            <p class="about-text">My name is josh Whitkin. I’m a professional with more than 7 years of industry experience in Games Design, Level design, Scripting and Visual Effects. What makes me passionate about games is the combination of technology and creativity, and how multiple disciplines come together to create an interactive experience. Whether I'm designing for puzzle games, 2D platformers or 3D environments.
                I always tell a story.</p>
            
            <div class="blocker"></div>

        </div> <!-- container-->


    </section>




    <section class="container-fluid articlebg">
        <div class="container">
            <div class="row">
                <!-- a row gives us access to BS colums-->


                <div>
                    <h3 class="text-center article-title"> LATEST ARTICLES</h3>
                </div>

                <div class="col-md-4 article-cent">
                    
                    <img class="image-responsive" alt="portrait" src="Images/portrait.jpg">
                    <h4>A PORTRAIT</h4>
                    <p class="date">12 December 2020</p>
                    <p> STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                    </p>
                    <p class="readmore">CONTINUE READING</p>

                </div>

                <div class="col-md-4 article-cent">
                    
                    <img class="image-responsive" alt="portrait" src="Images/portrait.jpg">
                    <h4>A MODEL</h4>
                    <p class="date">12 December 2020</p>
                    <p> STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                    </p>
                    <p class="readmore">CONTINUE READING</p>

                </div>

                <div class="col-md-4 article-cent">
                    
                    <img class="image-responsive" alt="portrait" src="Images/portrait.jpg">
                    <h4>GAMES DESIGN</h4>
                    <p class="date">12 December 2020</p>
                    <p> STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                    </p>
                    <p class="readmore">CONTINUE READING</p>

                </div>


            </div> <!--  row-->

        </div> <!--  container-->


    </section>


    
    <footer class="container-fluid"> <!-- div for the main image to streth to the edge of the page-->
        
        <div class="container"> <!--  div to add content in the middle of the page-->
            
            <div class="row"> <!--  row gives asset to column-->
                
                <div class="col-md-6 text-center footer-content">
                    <p> JOSH WHITKIN</p>
                    <img src="Images/tumblr.jpg" alt="tumblr">
                    <img src="Images/rss.jpg" alt="rss">
                         
                </div> <!-- column-->
                
                 <div class="col-md-6 text-center footer-content">
                    <p> Terms and Conditions</p>
                     <img src="Images/linkedin.jpg" alt="linkedin">
                     <img src="Images/facebook.jpg" alt="facebook">
                </div> <!-- column-->
                
                
            
            </div> <!-- row-->
        
        </div> <!-- container-->
    
    </footer> <!-- container-fluid-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>