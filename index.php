<?php
	$dbhost = "148.66.138.145";
    $dbuser = "portfolioSh";
    $dbpass = "portShUsr21!";
    $dbname = "portfolioSh";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 
?>
<?php
	$query = 'SELECT * FROM portfolioSh.portfolio_oriBashary;';
	$result = mysqli_query($conn, $query);
	if (!$result) die("DB query failed.");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ori Bashary</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/lightbox/css/lightbox.css" rel="stylesheet">
	<link href="assets/textrotator/simpletextrotator.css" rel="stylesheet">
	<link href="assets/flexslider/flexslider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="img/iconpage.ico" rel="shortcut icon" type="image/x-icon" /> 
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="assets/html5shiv/html5shiv.js"></script>
	<script src="assets/respond/respond.min.js"></script>
	<![endif]-->
</head>
<body id="top">
	<div id="preloader"></div>
	<header id="home">
		<div class="container-fluid">
			<div class="row">
				<div class="menu-wrap">
					<nav class="menu">
						<div class="icon-list">
							<a href="#home"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
							<a href="#about"><i class="fa fa-fw fa-quote-left"></i><span>About</span></a>
							<a href="#service"><i class="fa fa-fw fa-globe"></i><span>Skills</span></a>
							<a href="#portfolio"><i class="fa fa-fw fa-picture-o"></i><span>Portfolio</span></a>
							<a href="#contact"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
						</div>
					</nav>
				</div>
				<button class="menu-button" id="open-button"></button>
			</div>
		</div>
		<section class="hero" id="hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-right navicon">
						<a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-1 inner">
						<h1 class="animated fadeInDown">
							O<span style="color:#E04343;">r</span>i<br/><span>Bas<span style="color:#FFE800">h</span>ary</span>
						</h1><!-- Title -->
						<h3 class="animated fadeInUp delay-05s"><span class="rotate">Software Engnieer,Fullstack developer,backend developer</span></h3><!-- Text Rotator -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<a href="#about" class="scrollto wow fadeInUp delay-5s ">
							<p>SEE MORE</p>
							<p class="scrollto--arrow"><img src="img/scroll-down.png" alt="scroll down arrow"></p>
						</a>
					</div>
				</div>
			</div>
		</section>
	</header>
	<section class="intro text-center section-padding color-bg" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 wp1">
					<h1 class="arrow">A little <span>about</span> me</h1>
					<p>Ori here, 24, experienced programmer with several projects under my belt. I’d say my portfolio introduces me better than my words do, so if want we can look at it together, and I can tell you about the principal projects I engineered over the years. I love in my free time to program, surf, play football and play the guitar. I am a Futsal player in the Premier League, with 3 years of experience in the field. It is very important to me to constantly learn new things, to get smarter and smarter every day especially in the field of software and hardware. After my military service straight away I started studying software engineering at Shenkar and developing my biggest hobby, software engineering.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="features text-center section-padding" id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="arrow">My <span>Skills</span></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="services">
						<div class="col-md-4 wp2 item">
							<div class="icon">
								<i class="fa fa-desktop"></i>
							</div>
							<h2>CSS FRAMEWORK</h2>
							<p>A year of continuous use of <b>Bootstrap</b>. In-depth learning while gaining an in-depth understanding of designing templates for typography, forms, buttons, navigation and other interface components.</p><!-- Description -->
						</div>
						<div class="col-md-4 wp2 item">
							<div class="icon">
								<i class="fa fa-html5 delay-05s" ></i>
							</div>
							<h2>MARKUP / STYLING LANGUAGE</h2>
							<p>Two years of intensive programming in <b>HTML</b> and <b>CSS</b>. During my work I also studied game development independently.</p><!-- Description -->
						</div>
						<div class="col-md-4 wp2 item delay-1s">
							<div class="icon">
								<i class="fa fa-code"></i>
							</div>
							<h2>PROGRAMMING LANGUAGE</h2>
							<p>Two years of continuous <b>JavaScript</b>, <b>C</b>, <b>C++</b> and <b>C#</b> learning to build games and websites. Independent learning to this day to expand my knowledge and experience.</p><!-- Description -->
						</div>
						<div class="col-md-4 wp2 item">
							<div class="icon">
								<i class="fa fa-cubes"></i>
							</div>
							<h2>DATABASE MANAGEMENT</h2>
							<p>Two years of experience in maintaining and building databases in the <b>mySQL</b> language and learning the structure of various relational and non-relational databases</p><!-- Description -->
						</div>
						<div class="col-md-4 wp2 item delay-05s">
							<div class="icon">
								<i class="fa fa-code-fork"></i>
							</div>
							<h2>VERSION CONTROL</h2>
							<p>Intensive year use of <b>Git</b> and <b>Github</b> while learning teamwork in an orderly and clean way in terms of code and work.</p><!-- Description -->
						</div>
						<div class="col-md-4 wp2 item delay-1s">
							<div class="icon">
								<i class="fa fa-language"></i>
							</div>
							<h2>LANGUAGE</h2>
							<p>Speaks <b>English</b> and <b>Hebrew</b> fluently. Most of the language I learned at a young age from reading books.</p><!-- Description -->
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="intro text-center section-padding color-bg" id="portfolio">
		<div class="container">
			<div class="row">
				<h1 class="arrow">Recent <span>Porojects</span></h1>
			</div>
		</div>
		</br></br></br>
		<div class="container">
			<div class="row row-offset-0">
				<?php while ($row = mysqli_fetch_assoc($result)) : ?>
					<div class="col-md-3 col-sm-6">
						<div class="overlay-effect effects clearfix">
							<div class="img">
								<a href="<?php echo htmlspecialchars($row['projectLink']); ?>"><img class="grayscale" src="<?php echo htmlspecialchars($row['imgSource']); ?>" alt="Portfolio Item"></a>
							</div>
							<div>
								<a href="<?php echo htmlspecialchars($row['gitLink']); ?>"><i class="fa fa-github-square"></i></a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		</br>
	</section>
	<section class="text-center section-padding contact-wrap" id="contact">
		<a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="arrow">Contact <span>me</span></h1>
				</div>
			</div>
			<div class="row contact-details">
				<div class="col-md-4">
					<div class="dark-box box-hover">
						<h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
						<p>Mazkeret Batia , Israel</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dark-box box-hover">
						<h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
						<p>+972 549 480 720</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dark-box box-hover">
						<h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
						<p><a href="#">oribasharyipad@gmail.com</a></p>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<ul class="social-buttons">
						<li><a href="https://github.com/OriBashary1/" class="social-btn"><i class="fa fa-github-square"></i></a></li><!-- git -->
						<li><a href="http://linkedin.com/in/ori-bashary-604519175" class="social-btn"><i class="fa fa-linkedin"></i></a></li><!-- linkedin -->
					</ul>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="https://www.shenkar.ac.il/he/departments/engineering-software-department">ֿתואר ראשון בהנדסת תוכנה בשנקר</a>
				</div>
				<div class="col-md-12 text-center">
					<p>All Rights Reserved. &copy; 2015 <a href="http://www.themewagon.com">ThemeWagon</a> & Edited by : Ori Bashary
				</div> 
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="assets/smoothscroll/smoothscroll.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="assets/flexslider/jquery.flexslider.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="assets/textrotator/jquery.simple-text-rotator.js"></script>
	<script src="assets/lightbox/js/lightbox.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript">
		$(".rotate").textrotator({
			animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
			separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
			speed: 2000 // How many milliseconds until the next word show.
		});
	</script>
</body>
</html>
<?php
	mysqli_close($conn);
?>