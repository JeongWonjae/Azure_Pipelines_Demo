<?php session_start(); ?>
<html>
<head>
    <!-- Website Title -->
    <title>PHP Bank</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="style/index.css" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
	
<body>

	<!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
	
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/favicon.png" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php?page=index">HOME <span class="sr-only">(current)</span></a>
                </li>
				<!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="index.php?page=lookup"><span class="item-text">LOOKUP</span></a>
						<div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="index.php?page=opening"><span class="item-text">OPENING</span></a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item" href="index.php?page=termination"><span class="item-text">TERMINATION</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="index.php?page=deposit"><span class="item-text">DEPOSIT</span></a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item" href="index.php?page=transfer"><span class="item-text">TRANSFER</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
				
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php?page=insurance">INSUARANCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php?page=qna">QNA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php?page=chat">CHAT</a>
                </li>
                <li class="nav-item">
                    <?php
						if(isset($_SESSION['user_id']) AND isset($_SESSION['user_name']))
						{
							echo "<a class='nav-link page-scroll' href='index.php?page=logout'>LOGOUT</a>";
						}else
						{
							echo "<a class='nav-link page-scroll' href='index.php?page=signin'>SIGNIN</a>";
						}
					?>
                </li>
				
				<li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php?page=mypage">MY PAGE</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php?page=signup">SIGN UP</a>
                </li>
            </ul>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>ACCOUNT <span id="js-rotating">LOOKUP, OPENING, DEPOSIT, TRANSFER, TERMINATION</span></h1>
                            <p class="p-heading p-large">PHP Bank made for H41N.</p>
                            <a class="btn-solid-lg page-scroll" href="index.php?page=index">WHAT IS</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

	<div id="hellowords">
		
	<?php if(isset($_SESSION['user_id']) AND isset($_SESSION['user_name'])){ ?>
	<?php echo "Hello! ".$_SESSION['user_name']; ?>	
	<?php }?>
	<br>
	</div>
	
	<nav id="content">
		<br>
		 <div class="container">
            <div class="row">
			<?php
		
		if($_GET['page']=="transfer"){
			include 'transfer.html';
		}
		if($_GET['page']=="lookup"){
			include 'lookup.html';
		}
		if($_GET['page']=="insurance"){
			include 'insurance.html';
		}
		if($_GET['page']=="inquery"){
			include 'inquery.php';
		}
		if($_GET['page']=="signin"){
			include 'signin.html';
		}
		if($_GET['page']=="signup"){
			include 'signup.html';
		}
		if($_GET['page']=="logout"){
			include 'logout.php';
		}
		if($_GET['page']=="index"){
			include 'introduce.html';
		}
		if($_GET['page']=="opening"){
			include 'opening.html';
		}
		if($_GET['page']=="deposit"){
			include 'deposit.html';
		}
		if($_GET['page']=="termination"){
			include 'termination.html';
		}
		if($_GET['page']=="admin"){
			include 'admin.html';
		}
		if($_GET['page']=="mypage"){
			include 'mypage.html';
		}
		if($_GET['page']=="qna"){
			include 'board.html';
		}
		if($_GET['page']=="write"){
			include 'board_write.html';
		}
		if($_GET['page']=="board_lookup"){
			if(isset($_GET['no']))
			{
				include 'board_lookup.html';
			}else
			{
				echo "<script>alert('Wrong Access.');</script>";
				echo "<script>location.href='index.php'</script>";
			}
		}
		if($_GET['page']=="chat"){
			
			include 'chat.html';
		}
		?>
			 </div>
		</div>
		<br>
	</nav>
	
	    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 Design by Inovatik, Develop by h41n</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>