<!DOCTYPE html>
<html lang="en" class="theme-color-a7d9a8 theme-skin-dark">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Brian Phillips</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png"/>

    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">

    <!-- Icon Fonts -->
    <link rel="stylesheet" type="text/css" href="fonts/map-icons/css/map-icons.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/icomoon/style.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.bxslider/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.customscroll/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.mediaelement/mediaelementplayer.min.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.fancybox/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.owlcarousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/jquery.owlcarousel/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="colors/pale-green.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizer for detect what features the user’s browser has to offer -->
    <script type="text/javascript" src="js/libs/modernizr.js"></script>
</head>

<body class="home header-has-img loading">

    <div class="mobile-nav">
        <button class="btn-mobile mobile-nav-close"><i class="rsicon rsicon-close"></i></button>

        <div class="mobile-nav-inner">
            <nav id="mobile-nav" class="nav">
                <ul class="clearfix">
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#references">References</a></li>
                    <li><a href="#contact">Contact <span></span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- .mobile-nav -->

    <div class="sidebar sidebar-fixed">
        <button class="btn-sidebar btn-sidebar-close"><i class="rsicon rsicon-close"></i></button>

        <div class="widget-area">
            <aside class="widget widget-profile">
                <div class="profile-photo">
                    <img src="img/uploads/headshot.jpg" alt="Brian Phillips"/>
                </div>
                <div class="profile-info">
                    <h2 class="profile-title">Brian Phillips</h2>

                    <h3 class="profile-position">Full Stack Developer and Project Manager</h3>
                </div>
            </aside>
            <!-- .widget-profile -->

            <aside class="widget widget_contact">
                <h2 class="widget-title">Contact Me</h2>

                <form class="rsForm" action="php/mailsender.php" method="post">
                    <div class="input-field">
                        <label>Name</label>
                        <input type="text" name="rsName" value="">
                        <span class="line"></span>
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" name="rsEmail" value="">
                        <span class="line"></span>
                    </div>

                    <div class="input-field">
                        <label>Subject</label>
                        <input type="text" name="rsSubject" value="">
                        <span class="line"></span>
                    </div>

                    <div class="input-field">
                        <label>Message</label>
                        <textarea rows="4" name="rsMessage"></textarea>
                        <span class="line"></span>
                    </div>

                    <span class="btn-outer btn-primary-outer ripple">
                        <input class="rsFormSubmit btn btn-lg btn-primary" type="submit" value="Send">
                    </span>
                </form>
            </aside>
            <!-- .widget_contact -->
        </div>
        <!-- .widget-area -->
    </div>
    <!-- .sidebar -->

    <div class="wrapper">
        <header class="header">
            <div class="head-bg" style="background-image: url('img/uploads/phoenix.jpg')"></div>

            <div class="head-bar">
                <div class="head-bar-inner">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <a class="logo" href="http://brianphillips.tech"><span>Brian</span> Phillips</a>
                            <!-- <a class="head-logo" href=""><img src="img/rs-logo.png" alt="RScard"/></a> -->
                        </div>

                        <div class="col-sm-9 col-xs-6">
                            <div class="nav-wrap">
                                <nav id="nav" class="nav">
                                    <ul class="clearfix">
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#skills">Skills</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>
                                        <li><a href="#experience">Experience</a></li>
                                        <li><a href="#references">References</a></li>
                                        <li><a href="#contact">Contact <span></span></a></li>
                                    </ul>
                                </nav>

                                <button class="btn-mobile btn-mobile-nav">Menu</button>
                                <button class="btn-sidebar btn-sidebar-open"><i class="rsicon rsicon-menu"></i></button>
                            </div>
                            <!-- .nav-wrap -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- .header -->

        <div class="content">
            <div class="container">

            <!-- START: PAGE CONTENT -->
            <section id="about" class="section section-about">
                <div class="animate-up">
                    <div class="section-box">
                        <div class="profile">
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="profile-photo"><img src="img/uploads/headshot.jpg" alt="Brian Phillips"/></div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="profile-info">
                                        <div class="profile-preword"><span>Hello! 你好! Hola! Привет!</span></div>
                                        <h1 class="profile-title"><span>I'm</span> Brian Phillips</h1>

                                        <h2 class="profile-position">Full Stack Developer and Project Manager</h2></div>
                                    <ul class="profile-list">
                                        <li class="clearfix">
                                            <strong class="title">Company</strong>
                                            <span class="cont"><a href="http://www.polyphasicdevs.com">Polyphasic Developers</a></span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="title">E-mail</strong>
                                            <span class="cont"><a href="mailto:info@polyphasicdevs.com">info@polyphasicdevs.com</a></span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="title">Phone</strong>
                                            <span class="cont"><a href="tel:+12562548456">+86 186 2821 7720</a></span>
                                        </li>
                                        <li class="clearfix">
                                            <strong class="title">Address</strong>
                                            <span class="cont">中国四川成都龙泉驿柏合镇</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="profile-social">
                            <ul class="social">
                                <li><a class="ripple-centered" href="https://www.linkedin.com/in/unipheas" target="_blank">
                                  <i class="rsicon rsicon-linkedin"></i></a></li>
                                <li><a class="ripple-centered" href="https://www.facebook.com/unipheas" target="_blank">
                                  <i class="rsicon rsicon-facebook"></i></a></li>
                                <li><a class="ripple-centered" href="https://plus.google.com/u/0/101534820040353022889" target="_blank">
                                  <i class="rsicon rsicon-google-plus"></i></a></li>
                                <li><a class="ripple-centered" href="https://twitter.com/unipheus" target="_blank">
                                  <i class="rsicon rsicon-twitter"></i></a></li>
                                <li><a class="ripple-centered" href="https://github.com/unipheas" target="_blank">
                                  <i class="rsicon rsicon-github"></i></a></li>
                                <li><a class="ripple-centered" href="https://bitbucket.org/unipheas/" target="_blank">
                                  <i class="rsicon rsicon-bitbucket"></i></a></li>
                                  <li><a class="ripple-centered" href="skype:liu939dd@outlook.com?chat" target="_blank">
                                    <i class="rsicon rsicon-skype"></i></a></li>
                                <br />
                                <li><a class="rsicon work" href="https://www.fiverr.com/unipheas" target="_blank">
                                  <img src="img/uploads/work/fiverr.png" alt="" /></a></li>
                                  <li><a class="rsicon work" href="https://vrtsk.com/author/unipheas/" target="_blank">
                                    <img src="img/uploads/work/vrtsk.png" alt="" /></a></li>
                                <li><a class="rsicon work" href="https://www.freelancer.com/u/liulanghan.html" target="_blank">
                                  <img src="img/uploads/work/freelancer.png" alt="" /></a></li>
                                <li><a class="rsicon work" href="https://www.truelancer.com/freelancer/brianphillips" target="_blank">
                                  <img src="img/uploads/work/truelancer.png" alt="" /></a></li>
                                <li><a class="rsicon work" href="http://www.upwork.com/o/profiles/users/_~014b06cdaa95c65ef6/" target="_blank">
                                  <img src="img/uploads/work/upwork.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-txt-btn">
                        <p><a class="btn btn-lg btn-border ripple" target="_blank"
                              href="brian_phillips.pdf">Download Resume</a></p>

                        <p>I am a self-motivated, goal-oriented, hands-on professional, with a successful record of accomplishments. My qualifications consist of project management, web and mobile development using HTML5,CSS3, and multiple Javascript libraries, business management, advertising, marketing, English education, and sales. I have many years of experience dealing with high level business affairs as well as intercontinental travel. I have written multiple academic papers and currently working on a book about my life and travel experiences. I’ve started a small development company creating applications and have created multiple websites on my own. I am also knowledgeable in multiple areas of information technology. I continuously educate myself on as many topics as I can. I am very dependable and always follow through with what I say.</p>
                    </div>
                </div>
            </section>
            <!-- #about -->

            <section id="skills" class="section section-skills">
                <div class="animate-up">
                    <h2 class="section-title">Professional Skills</h2>

                    <div class="section-box">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">HTML5&CSS3 (Bootstrap,Sass)</span>
                                        <span class="bar-value">93%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="93%"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">Javascript (jQuery,AngularJS)</span>
                                        <span class="bar-value">78%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="78%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">Cordova & Electron</span>
                                        <span class="bar-value">69%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="69%"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">NPM (Bower,Grunt)</span>
                                        <span class="bar-value">86%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="86%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">NodeJS & PHP</span>
                                        <span class="bar-value">67%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="67%"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">MySQL & MongoDB</span>
                                        <span class="bar-value">73%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="73%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">Nginx & Apache</span>
                                        <span class="bar-value">95%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="95%"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">Git & Docker</span>
                                        <span class="bar-value">59%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="59%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">CMS (Wordpress,Drupal,Joomla)</span>
                                        <span class="bar-value">64%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="64%"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">SEO & SEM</span>
                                        <span class="bar-value">66%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="66%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">Scrum & Agile</span>
                                        <span class="bar-value">50%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="50%"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">Windows & OSX & Linux</span>
                                        <span class="bar-value">75%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="75%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">Gimp & Sketch</span>
                                        <span class="bar-value">62%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="62%"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="progress-bar">
                                    <div class="bar-data">
                                        <span class="bar-title">Xmind</span>
                                        <span class="bar-value">80%</span>
                                    </div>
                                    <div class="bar-line">
                                        <span class="bar-fill" data-width="80%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #skills -->

            <!-- Badges -->
            <div id="badge">
              <a href="https://www.google.com/partners/?authuser=1#i_profile;idtf=109434256878634508529;" target="_blank"><img src="img/google.jpg" alt="" /></a>
            </div>
            <center>
              <p>
                <div data-pro-badge-shopper-uuid=a7f855e1-bcac-4119-8bcd-6ef04db3db4c data-pro-badge-mode=light style="width:200px; margin: 33px 0px -10px 10px;"></div> <script defer src="https://pro.godaddy.com/static/js/badge.js"></script>
              </p>
            </center>
            <p id="badge">
            <script data-cfbadgetype="a" data-cfbadgeskin="blue" type="text/javascript">
          			//<![CDATA[
          			try{window.CloudFlare||function(){var a=window.document,b=a.createElement("script"),a=a.getElementsByTagName("script")[0];window.CloudFlare=[];b.type="text/javascript";b.async=!0;b.src="//ajax.cloudflare.com/cdn-cgi/nexp/cloudflare.js";a.parentNode.insertBefore(b,a)}(),CloudFlare.push(function(a){a(["cloudflare/badge"])})}catch(e$$5){try{console.error("CloudFlare badge code could not be loaded. "+e$$5.message)}catch(e$$6){}};
          			//]]>
        			</script>
            </p>
            <!-- Badges -->

            <!-- Portfolio -->
            <section id="portfolio" class="section section-portfolio">
            <div class="animate-up">
            <h2 class="section-title">Portfolio</h2>

            <div class="grid">
                <div class="grid-sizer"></div>
                  <!-- Xi-rang -->
                <div class="grid-item size11">
                    <div class="grid-box">
                        <figure class="portfolio-figure">
                            <img src="img/uploads/portfolio/xirang-289px.png" alt=""/>
                            <figcaption class="portfolio-caption">
                                <div class="portfolio-caption-inner">
                                    <h3 class="portfolio-title">Xi-rang</h3>
                                    <div class="btn-group">
                                        <a class="btn-link" href="http://www.xi-rang.com" target="_blank"><i
                                                class="rsicon rsicon-link"></i></a>
                                        <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox1"
                                           href="#portfolio1-inline1"><i class="rsicon rsicon-eye"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- Start: Portfolio Inline Boxes -->
                        <div id="portfolio1-inline1" class="fancybox-inline-box">
                            <div class="inline-embed" data-embed-type="image"
                                 data-embed-url="img/uploads/portfolio/xirang-large.jpg"></div>
                            <div class="inline-cont">
                                <h2 class="inline-title">Xi-rang</h2>

                                <div class="inline-text">
                                    <p>This is a website for a company in China who produces organic fertilizer.
                                    They wanted a website that would present their product and be able to search and have blog system.
                                  I helped them design and built this website using Wordpress, HTML5, CSS3, PHP, MySQL, Javascript, and jQuery.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End: Portfolio Inline Boxes -->
                    </div>
                </div>
                <!-- .grid-item -->
                  <!-- Dharma Beach -->
                <div class="grid-item size11">
                    <div class="grid-box">
                        <figure class="portfolio-figure">
                            <img src="img/uploads/portfolio/dharmabeach-289px.png" alt=""/>
                            <figcaption class="portfolio-caption">
                                <div class="portfolio-caption-inner">
                                    <h3 class="portfolio-title">Dharma Beach</h3>
                                    <div class="btn-group">
                                        <a class="btn-link" href="http://www.dharmabeach.com/" target="_blank"><i
                                                class="rsicon rsicon-link"></i></a>
                                        <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox1"
                                           href="#portfolio2-inline1"><i class="rsicon rsicon-eye"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- Start: Portfolio Inline Boxes -->
                        <div id="portfolio2-inline1" class="fancybox-inline-box">
                          <div class="inline-embed" data-embed-type="image"
                               data-embed-url="img/uploads/portfolio/dharmabeach-large.jpg"></div>
                            <div class="inline-cont">
                                <h2 class="inline-title">Dharma Beach</h2>
                                <div class="inline-text">
                                    <p>A website to help foreigners travel around the world and stay with families for a cultural experience.
                                    This website needed to be redesigned and some new features added.
                                    I helped them design and rebuild this website using HTML5, CSS3, PHP, MySQL, Javascript, and jQuery.
                                    I was also responsible for their SEO and SEM to bring more customers in.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End: Portfolio Inline Boxes -->
                    </div>
                </div>
                <!-- .grid-item -->
                  <!-- MontaniTours -->
                <div class="grid-item size11">
                    <div class="grid-box">
                        <figure class="portfolio-figure">
                            <img src="img/uploads/portfolio/montanitours-289px.png" alt=""/>
                            <figcaption class="portfolio-caption">
                                <div class="portfolio-caption-inner">
                                    <h3 class="portfolio-title">MontaniTours</h3>
                                    <div class="btn-group">
                                        <a class="btn-link" href="http://www.montanitours.com/" target="_blank"><i
                                                class="rsicon rsicon-link"></i></a>
                                        <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox1"
                                           href="#portfolio3-inline1"><i class="rsicon rsicon-eye"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- Start: Portfolio Inline Boxes -->
                        <div id="portfolio3-inline1" class="fancybox-inline-box">
                          <div class="inline-embed" data-embed-type="image"
                               data-embed-url="img/uploads/portfolio/montanitours-large.jpg"></div>
                            <div class="inline-cont">
                                <h2 class="inline-title">MontaniTours</h2>
                                <div class="inline-text">
                                    <p>A website to help foreigners travel around the world and stay with families for a cultural experience.
                                    This website needed to be redesigned and some new features added.
                                    I helped them design and rebuild this website using HTML5, CSS3, PHP, MySQL, Javascript, and jQuery.
                                    I was also responsible for their SEO and SEM to bring more customers in.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End: Portfolio Inline Boxes -->
                    </div>
                </div>
                <!-- .grid-item -->
            </div>

            <div class="grid-more">
                <span class="ajax-loader"></span>
                <button class="btn btn-border ripple"><i class="rsicon rsicon-add"></i></button>
            </div>
            </div>
            </section>
            <!-- #portfolio -->

            <section id="experience" class="section section-experience">
                <div class="animate-up">
                    <h2 class="section-title">Work Experience</h2>

                    <div class="timeline">
                        <div class="timeline-bar"></div>
                        <div class="timeline-inner clearfix">
                            <div class="timeline-box timeline-box-left">
                                <span class="dot"></span>

                                <div class="timeline-box-inner animate-right">
                                    <span class="arrow"></span>

                                    <div class="date">8/2016 - Present</div>
                                    <h3><a href="http://www.polyphasicdevs.com">Polyphasic Developers</a></h3>
                                    <h4>Co-founder / Lead Full Stack Dev / Project Manager</h4>

                                    <p>I'm the owner of a small software development company. I manage a team of under 10 people at any given time.
                                    I'm the project manager and also participate in the development process of each project. </p>
                                </div>
                            </div>

                            <div class="timeline-box timeline-box-right">
                                <span class="dot"></span>

                                <div class="timeline-box-inner animate-left">
                                    <span class="arrow"></span>

                                    <div class="date">1/2015 - 8/2016</div>
                                    <h3>Freelancer</h3>
                                    <h4>Academic Writer / Developer / English Tutor</h4>

                                    <p>I decided to become traveling freelancers. All of my work is done with my computer,
                                      via telecommunication. I have been developing web and mobile applications,
                                      writing academic papers and doing other side work such as English tutoring.
                                      I was also involved in the development of a major English app used in China.</p>
                                </div>
                            </div>

                            <div class="timeline-box timeline-box-left">
                                <span class="dot"></span>

                                <div class="timeline-box-inner animate-right">
                                    <span class="arrow"></span>

                                    <div class="date">9/2014 – 1/2015</div>
                                    <h3>Bosch</h3>
                                    <h4>Adult Business English Teacher</h4>

                                    <p>I was responsible for a class of 25 students and educating them with business terminology.
                                      I created lesson plans for every class and administered tests on a monthly basis.</p>
                                </div>
                            </div>

                            <div class="timeline-box timeline-box-right">
                                <span class="dot"></span>

                                <div class="timeline-box-inner animate-left">
                                    <span class="arrow"></span>

                                    <div class="date">8/2013 – 8/2014</div>
                                    <h3>Old Suttonian’s English Language Centre</h3>
                                    <h4>ESL Teacher</h4>

                                    <p>I was responsible for educating students whose ages ranged from 5 to adults. I used Cambridge and Oxford
                                      educational material to create lesson plans and did progress reports for each student.
                                      I also managed a student inventory system and was outsourced to other schools for short term classes.</p>
                                </div>
                            </div>

                            <div class="timeline-box timeline-box-left">
                                <span class="dot"></span>

                                <div class="timeline-box-inner animate-right">
                                    <span class="arrow"></span>

                                    <div class="date">1/2011 – 12/2013</div>
                                    <h3>Unipheas: Web Consulting and Advertising</h3>
                                    <h4>Owner</h4>

                                    <p>I maintained client portfolios for advertising and marketing campaigns.
                                      I helped with the Integration of company networks into the Google Cloud.
                                      My specialization was SEO, SEM, social media platforms and analytical data.
                                      I also trained employees of clients on how to use Google Apps.
                                      The clients ranged from east to west coast of the United States, Ecuador,
                                      Taiwan, Fiji Islands, Australia and China..</p>
                                </div>
                            </div>

                            <div class="timeline-box timeline-box-right">
                                <span class="dot"></span>

                                <div class="timeline-box-inner animate-left">
                                    <span class="arrow"></span>

                                    <div class="date">3/2010 – 09/2011</div>
                                    <h3>FPI Management</h3>
                                    <h4>Community Director</h4>

                                    <p>I managed a 4.2 million dollar apartment complex with ninety-six units and over one hundred residents.
                                      I had an office assistant and a maintenance crew of four people.
                                      I did budget reports and payroll on a bi- weekly basis.
                                      My tasks included establishing a relationship with distributors and contractors while scheduling
                                      monthly or weekly appointments, as well as dealing with anything else that came up.</p>
                                </div>
                            </div>

                            <div class="timeline-box timeline-box-left">
                                <span class="dot"></span>

                                <div class="timeline-box-inner animate-right">
                                    <span class="arrow"></span>

                                    <div class="date">01/2009 – 03/2010</div>
                                    <h3>Columbia Basin Herald</h3>
                                    <h4>Advertising Sales Associate</h4>

                                    <p>I managed and produced client portfolios for advertisement campaigns.
                                      My tasks included setting appointments and scheduling kiosk locations or dates.
                                      I had month end reports for all sales or commission and managed incoming subscriptions
                                      for customers.</p>
                                </div>
                            </div>

                            <div class="timeline-box timeline-box-right">
                                <span class="dot"></span>

                                <div class="timeline-box-inner animate-left">
                                    <span class="arrow"></span>

                                    <div class="date">04/2004 – 08/2008</div>
                                    <h3>United States Marine Corp.</h3>
                                    <h4>Aviation Supply Specialist</h4>

                                    <p>My duties were to uphold corps values of honor, courage, and commitment.
                                      I became a leader of all lower ranking Marines.
                                      I have worked with NAV-SUP, military software, and military networks.
                                      I was tasked with distribution of hardware to squadrons and receiving of goods.
                                      I also had to uphold a fit physical condition and combat readiness.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #experience -->

            <section id="references" class="section section-references">
                <div class="animate-up">
                    <h2 class="section-title">References</h2>

                    <div class="section-box">
                        <ul class="ref-slider">
                            <li>
                                <div class="ref-box">
                                    <div class="person-speech">
                                        <p>I am please to recommend Brian as your website developer as I believe him to be a skilled,
                                          thoughtful, and thoroughly professional Information Technology expert.
                                          From our collaboration, Brian has demonstrated outstanding analytical and problem solving skills;
                                          he tackled the project assigned to him with enthusiasm and competence.
                                          He produced superior quality work, on time, and within budget targets.
                                          If you are looking for a website developer who is knowledgeable, creative, and accountable,
                                          I am positive that Brian will do his very best for his clients.</p>
                                    </div>
                                    <div class="person-info clearfix">
                                        <img class="person-img" src="img/uploads/emma.png" alt="Headshot">

                                        <div class="person-name-title">
                                            <span class="person-name">Emma Sun</span>
                                            <span class="person-title">Freelance Sales and Advertising Consultant</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="ref-box">
                                    <div class="person-speech">
                                        <p>Brian has helped me a lot throughout the years with many things regarding technology.
                                          He’s helped me setup websites, build them and do many other things associated to this.
                                          I’ve always been able to depend on him and go to him for all my needs.
                                          He’s a wonderful person and I’m very glad to have him in my life.</p>
                                    </div>
                                    <div class="person-info clearfix">
                                        <img class="person-img" src="img/uploads/chelsea.png" alt="Headshot">

                                        <div class="person-name-title">
                                            <span class="person-name">Chelsea Ayers</span>
                                            <span class="person-title">Botan Hair Salon</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ref-box">
                                    <div class="person-speech">
                                        <p>Brian自2016年4月开始建设我公司网站，期间认真负责，工作能力很强，遇到问题能与我们及时沟通并解决，与Brian一起工作很愉快。</p>
                                    </div>
                                    <div class="person-info clearfix">
                                        <img class="person-img" src="img/uploads/xirang.png" alt="Headshot">

                                        <div class="person-name-title">
                                            <span class="person-name">Xi Rang</span>
                                            <span class="person-title">xi-rang.com</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="ref-slider-nav">
                            <span id="ref-slider-prev" class="slider-prev"></span>
                            <span id="ref-slider-next" class="slider-next"></span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #references -->

            <section id="contact" class="section section-contact">
                <div class="animate-up">
                    <h2 class="section-title">Contact Me</h2>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="section-box contact-form">
                                <h3>Feel free to contact me</h3>

                                <form class="rsForm" action="php/mailsender.php" method="post">
                                    <div class="input-field">
                                        <label>Name</label>
                                        <input type="text" name="rsName" value="">
                                        <span class="line"></span>
                                    </div>

                                    <div class="input-field">
                                        <label>Email</label>
                                        <input type="email" name="rsEmail" value="">
                                        <span class="line"></span>
                                    </div>

                                    <div class="input-field">
                                        <label>Subject</label>
                                        <input type="text" name="rsSubject" value="">
                                        <span class="line"></span>
                                    </div>

                                    <div class="input-field">
                                        <label>Message</label>
                                        <textarea rows="4" name="rsMessage"></textarea>
                                        <span class="line"></span>
                                    </div>

                                    <span class="btn-outer btn-primary-outer ripple">
                                        <input class="rsFormSubmit btn btn-lg btn-primary" type="submit" value="Send">
                                    </span>
                                </form>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="section-box contact-info has-map">
                                <ul class="contact-list">
                                    <li class="clearfix">
                                        <strong>Address</strong>
                                        <span>中国四川成都龙泉驿柏合镇</span>
                                    </li>
                                    <li class="clearfix">
                                        <strong>phone</strong>
                                        <span><a href="tel:+12562548456">+86 186 2821 7720</a></span>
                                    </li>
                                    <li class="clearfix">
                                        <strong>E-mail</strong>
                                        <span><a href="mailto:info@polyphasicdevs.com">info@polyphasicdevs.com</a></span>
                                    </li>
                                </ul>
                                <div id="map" data-latitude="30.5466451" data-longitude="104.2863191"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #contact -->
            <!-- END: PAGE CONTENT -->

        </div>
        <!-- .container -->
    </div>
    <!-- .content -->

    <footer class="footer">
        <div class="footer-social">
          <ul class="social">
              <li><a class="ripple-centered" href="https://www.linkedin.com/in/unipheas" target="_blank">
                <i class="rsicon rsicon-linkedin"></i></a></li>
              <li><a class="ripple-centered" href="https://www.facebook.com/unipheas" target="_blank">
                <i class="rsicon rsicon-facebook"></i></a></li>
              <li><a class="ripple-centered" href="https://plus.google.com/u/0/101534820040353022889" target="_blank">
                <i class="rsicon rsicon-google-plus"></i></a></li>
              <li><a class="ripple-centered" href="https://twitter.com/unipheus" target="_blank">
                <i class="rsicon rsicon-twitter"></i></a></li>
              <li><a class="ripple-centered" href="https://github.com/unipheas" target="_blank">
                <i class="rsicon rsicon-github"></i></a></li>
              <li><a class="ripple-centered" href="https://bitbucket.org/unipheas/" target="_blank">
                <i class="rsicon rsicon-bitbucket"></i></a></li>
              <li><a class="ripple-centered" href="skype:liu939dd@outlook.com?chat" target="_blank">
                <i class="rsicon rsicon-skype"></i></a></li>
          </ul>
        </div>
    </footer>
    <!-- .footer -->

    </div>
    <!-- .wrapper -->

    <a class="btn-scroll-top" href="#"><i class="rsicon rsicon-arrow-up"></i></a>

    <div id="overlay"></div>
    <div id="preloader">
        <div class="preload-icon"><span></span><span></span></div>
        <div class="preload-text">Loading ...</div>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB44t43mCXUHMnaqpxlqOlPiETwKdWJiBU"></script>
    <script type="text/javascript" src="fonts/map-icons/js/map-icons.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="js/plugins/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.onepagenav.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.customscroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.mediaelement/mediaelement-and-player.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.fancybox/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.owlcarousel/owl.carousel.min.js"></script>
	  <script type="text/javascript" src="js/options.js"></script>
    <script type="text/javascript" src="js/site.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-88750310-1', 'auto');
      ga('send', 'pageview');
  </script>
</body>
</html>
