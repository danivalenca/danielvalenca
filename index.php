<?php include('include-config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

	<?php include('include-head-tag.php'); ?>

</head>

<body data-spy="scroll">

	<div class="container-fluid">

	    <div class="row">

	    	<?php include('include-navigation.php'); ?>

	        <!--==========================
	        =            Main            =
	        ===========================-->
	        <main class="col-lg-10 px-0">

	        	<!-- Home -->
	        	<section class="d-flex vh-100" id="home" style="background: linear-gradient(to bottom, rgba(0,0,0,.8), rgba(0,0,0,.8)), url(https://images.pexels.com/photos/340152/pexels-photo-340152.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) center center / cover;">

	        		<div class="m-auto text-center text-white">
	        			<p class="fs-40">Welcome</p>
	        			<h1 class="display-3 font-weight-bold mt-2">I'm a Web Developer</h1>
	        			<p class="fs-40 mt-2">based in Toronto, Ontario.</p>
	        			<a href="#contact" class="btn btn-transparent-green mt-4">Hire me</a>
	        		</div>

	        	</section>
	        	<!-- End of Home -->

	        	<!-- About me -->
	        	<section class="py-100" id="about-me">

	        		<div class="container">
	        			
	        			<h2 class="display-4 font-weight-bold text-center">About me</h2>

	        			<div class="row justify-content-center">
	        				<div class="col-lg-5 text-center text-lg-left">
	        					<h3 class="font-weight-bold mt-80">I'm Daniel Valenca, a Web Developer</h3>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3">I love to work with everything related to the web, I am just fascinated about how many wonderful and useful things can be done on the web, that change everyone's life.</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3">I am very proficient Web Developer with a strong PHP background with over 9 years of experience on the IT industry. My focus is always to keep things as simple as possible and make stuff better. Some areas of expertise include: HTML5, CSS3, Bootstrap, Responsive Web Development, JavaScript, jQuery, AJAX, JSON, PHP5, WordPress, WooCommerce, MySQL, XAMPP, XML, Search Engine Optimization, Sublime Text, Photoshop, Fireworks, OOP, and MVC.</p>
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg-4 text-center text-lg-left">
	        					<ul class="list-group list-group-flush fs-17 text-4c4d4d lh-18 mt-80">
	        						<li class="list-group-item border-f0f2fa"><strong>Name:</strong> Daniel Valenca</li>
	        						<li class="list-group-item border-f0f2fa"><strong>Email:</strong> danielvalenca@gmail.com</li>
	        						<li class="list-group-item border-f0f2fa"><strong>Experience:</strong> <?= date('Y') - 2011; ?>+ years</li>
	        						<li class="list-group-item border-f0f2fa"><strong>Location:</strong> Toronto, Canada</li>
	        						<li class="list-group-item border-f0f2fa"><strong>Hobbies:</strong> Travel, sports, be with family and friends</li>
	        					</ul>
	        					<a href="docs/daniel-valenca-resume.pdf" target="_blank" class="btn btn-green mt-4">Download CV</a>
	        				</div>
	        			</div>

	        			<div class="row justify-content-center">
	        				<div class="col-3 col-lg-2 text-center mt-80 border-right border-f0f2fa">
	        					<p class="display-4 text-4c4d4d"><?= date('Y') - 2011; ?>+</p>
	        					<p class="fs-17 text-4c4d4d mt-2">Years experience</p>
	        				</div>
	        				<div class="col-3 col-lg-2 text-center mt-80 border-right border-f0f2fa">
	        					<p class="display-4 text-4c4d4d">52+</p>
	        					<p class="fs-17 text-4c4d4d mt-2">Projects done</p>
	        				</div>
	        				<div class="col-3 col-lg-2 text-center mt-80 border-right border-f0f2fa">
	        					<p class="display-4 text-4c4d4d">30+</p>
	        					<p class="fs-17 text-4c4d4d mt-2">Happy clients</p>
	        				</div>
	        				<div class="col-3 col-lg-2 text-center mt-80">
	        					<p class="display-4 text-4c4d4d">2</p>
	        					<p class="fs-17 text-4c4d4d mt-2">Diplomas</p>
	        				</div>
	        			</div>

	        		</div>

	        	</section>
	        	<!-- End of About me -->

	        	<!-- What I do -->
	        	<section class="bg-f8f9fa py-100" id="what-i-do">

	        		<div class="container">

	        			<h2 class="display-4 font-weight-bold text-center">What I do</h2>

	        			<div class="row">
	        				<div class="col-lg">
	        					<div class="media mt-80">
	        						<img src="img/icon-1.png" class="img-80 mr-3 mr-lg-5" alt="Icon">
	        						<div class="media-body">
	        							<h4 class="font-weight-bold">System development</h4>
	        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        						</div>
	        					</div>
	        					<div class="media mt-5">
	        						<img src="img/icon-2.png" class="img-80 mr-3 mr-lg-5" alt="Icon">
	        						<div class="media-body">
	        							<h4 class="font-weight-bold">Website development</h4>
	        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        						</div>
	        					</div>
	        					<div class="media mt-5">
	        						<img src="img/icon-3.png" class="img-80 mr-3 mr-lg-5" alt="Icon">
	        						<div class="media-body">
	        							<h4 class="font-weight-bold">Database management</h4>
	        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        						</div>
	        					</div>
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg">
	        					<div class="media mt-80">
	        						<img src="img/icon-4.png" class="img-80 mr-3 mr-lg-5" alt="Icon">
	        						<div class="media-body">
	        							<h4 class="font-weight-bold">SEO</h4>
	        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        						</div>
	        					</div>
	        					<div class="media mt-5">
	        						<img src="img/icon-5.png" class="img-80 mr-3 mr-lg-5" alt="Icon">
	        						<div class="media-body">
	        							<h4 class="font-weight-bold">Design</h4>
	        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        						</div>
	        					</div>
	        					<div class="media mt-5">
	        						<img src="img/icon-6.png" class="img-80 mr-3 mr-lg-5" alt="Icon">
	        						<div class="media-body">
	        							<h4 class="font-weight-bold">Social media management</h4>
	        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        						</div>
	        					</div>
	        				</div>
	        			</div>

	        		</div>

	        	</section>
	        	<!-- End of What I do -->

	        	<!-- Resume -->
	        	<section class="py-100" id="resume">

	        		<div class="container">
	        			
	        			<h2 class="display-4 font-weight-bold text-center">Resume</h2>

	        			<div class="row">
	        				<div class="col-lg">
	        					<h3 class="fs-36 font-weight-bold mt-80 text-center text-lg-left">My experience</h3>
	        					<div class="card p-4 mt-30">
	        						<p><span class="badge-green">2019 - Present</span></p>
	        						<h4 class="font-weight-bold mt-3">Full Stack Web Developer</h4>
	        						<p class="fs-17 text-green lh-18 mt-1">Royal Canadian Institute of International Studies - Canada</p>
        							<p class="fs-17 text-4c4d4d lh-18 mt-2">English school for international students where I was hired to create from scratch a new administrative system with 4 different modules to be used by students, teachers, agencies and employees.</p>
	        					</div>
	        					<div class="card p-4 mt-30">
	        						<p><span class="badge-green">2016 - 2019</span></p>
	        						<h4 class="font-weight-bold mt-3">Full Stack Web Developer</h4>
	        						<p class="fs-17 text-green lh-18 mt-1">Woori Education & Immigration Group - Canada</p>
        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Education and immigration agency for new immigrants in Canada with no online presence where I was hired to develop several institutional pages (multiple departments) and an internal sales administrative system.</p>
	        					</div>
	        					<div class="card p-4 mt-30">
	        						<p><span class="badge-green">2015 - 2016</span></p>
	        						<h4 class="font-weight-bold mt-3">Full Stack Web Developer</h4>
	        						<p class="fs-17 text-green lh-18 mt-1">Bloor Importação - Brazil</p>
        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					</div>
	        					<div class="card p-4 mt-30">
	        						<p><span class="badge-green">2014</span></p>
	        						<h4 class="font-weight-bold mt-3">Web Designer / Special Collects</h4>
	        						<p class="fs-17 text-green lh-18 mt-1">Google - Brazil</p>
        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					</div>
	        					<div class="card p-4 mt-30">
	        						<p><span class="badge-green">2013 - 2014</span></p>
	        						<h4 class="font-weight-bold mt-3">Web Developer</h4>
	        						<p class="fs-17 text-green lh-18 mt-1">Cidiz - Brazil</p>
        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					</div>
	        					<div class="card p-4 mt-30">
	        						<p><span class="badge-green">2010 - 2011</span></p>
	        						<h4 class="font-weight-bold mt-3">Web Developer</h4>
	        						<p class="fs-17 text-green lh-18 mt-1">FUNASE - Brazil</p>
        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					</div>
	        					<div class="card p-4 mt-30">
	        						<p><span class="badge-green">2007 - 2009</span></p>
	        						<h4 class="font-weight-bold mt-3">Web Developer</h4>
	        						<p class="fs-17 text-green lh-18 mt-1">Morro Branco - Brazil</p>
        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					</div>
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg">
	        					<h3 class="fs-36 font-weight-bold mt-80 text-center text-lg-left">My education</h3>
	        					<div class="card p-4 mt-30">
	        						<p><span class="badge-green">2009 - 2010</span></p>
	        						<h4 class="font-weight-bold mt-3">Software Engineering</h4>
	        						<p class="fs-17 text-green lh-18 mt-1">Universidade Federal do Paraná - Brazil</p>
        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					</div>
	        					<div class="card p-4 mt-30">
	        						<p><span class="badge-green">2006 - 2008</span></p>
	        						<h4 class="font-weight-bold mt-3">Internet Systems</h4>
	        						<p class="fs-17 text-green lh-18 mt-1">Faculdade Marista do Recife - Brazil</p>
        							<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					</div>
	        				</div>
	        			</div>

	        			<div class="row">
	        				<div class="col-lg-12">
	        					<h3 class="fs-36 font-weight-bold mt-80 text-center text-lg-left">My skills</h3>
	        				</div>
	        				<div class="col-lg">
	        					<div class="d-flex justify-content-between fs-17 text-4c4d4d mt-30">
	        						<div>HTML5</div>
	        						<div>90%</div>
	        					</div>
	        					<div class="progress mt-2" style="height: 8px;">
	        						<div class="progress-bar bg-green" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
	        					</div>
	        					<div class="d-flex justify-content-between fs-17 text-4c4d4d mt-30">
	        						<div>CSS3</div>
	        						<div>80%</div>
	        					</div>
	        					<div class="progress mt-2" style="height: 8px;">
	        						<div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
	        					</div>
	        					<div class="d-flex justify-content-between fs-17 text-4c4d4d mt-30">
	        						<div>JavaScript/jQuery</div>
	        						<div>80%</div>
	        					</div>
	        					<div class="progress mt-2" style="height: 8px;">
	        						<div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
	        					</div>
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg">
	        					<div class="d-flex justify-content-between fs-17 text-4c4d4d mt-30">
	        						<div>PHP5</div>
	        						<div>90%</div>
	        					</div>
	        					<div class="progress mt-2" style="height: 8px;">
	        						<div class="progress-bar bg-green" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
	        					</div>
	        					<div class="d-flex justify-content-between fs-17 text-4c4d4d mt-30">
	        						<div>MySQL</div>
	        						<div>80%</div>
	        					</div>
	        					<div class="progress mt-2" style="height: 8px;">
	        						<div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
	        					</div>
	        					<div class="d-flex justify-content-between fs-17 text-4c4d4d mt-30">
	        						<div>Bootstrap</div>
	        						<div>90%</div>
	        					</div>
	        					<div class="progress mt-2" style="height: 8px;">
	        						<div class="progress-bar bg-green" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
	        					</div>
	        				</div>
	        			</div>

	        			<div class="row">
	        				<div class="col-lg-12 text-center">
	        					<a href="docs/daniel-valenca-resume.pdf" target="_blank" class="btn btn-transparent-green mt-80">Download CV</a>
	        				</div>
	        			</div>

	        		</div>

	        	</section>
	        	<!-- End of Resume -->

	        	<!-- Portfolio -->
	        	<section class="bg-f8f9fa py-100" id="portfolio">

	        		<div class="container">

	        			<h2 class="display-4 font-weight-bold text-center">Portfolio</h2>

	        			<div class="row">
	        				<div class="col-lg-7">
        						<img src="img/portfolio-myrciis.png" class="img-cover rounded w-100 mt-80" alt="Portfolio" style="height: 516px;">
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg-4 my-auto">
	        					<h4 class="font-weight-bold mt-80">School management system</h4>
	        					<p class="fs-17 text-secondary lh-18 mt-2">Started building in 2019</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima.</p>
	        					<a href="#" class="btn btn-green mt-4">View pictures</a>
	        				</div>
	        			</div>

	        			<div class="row">
	        				<div class="col-lg-4 my-auto">
	        					<h4 class="font-weight-bold mt-80">School institutional website</h4>
	        					<p class="fs-17 text-secondary lh-18 mt-2">Started building in 2019</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima.</p>
	        					<a href="https://rciis.ca/" target="_blank" class="btn btn-green mt-4">View link</a>
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg-7">
	        					<img src="img/portfolio-rciis.png" class="img-cover rounded w-100 mt-80" alt="Portfolio" style="height: 630px;">
	        				</div>
	        			</div>

	        			<div class="row">
	        				<div class="col-lg-7">
        						<img src="img/portfolio-myrciis.png" class="img-cover rounded w-100 mt-80" alt="Portfolio" style="height: 516px;">
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg-4 my-auto">
	        					<h4 class="font-weight-bold mt-80">School management system</h4>
	        					<p class="fs-17 text-secondary lh-18 mt-2">Started building in 2019</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima.</p>
	        					<a href="#" class="btn btn-green mt-4">View pictures</a>
	        				</div>
	        			</div>

	        			<div class="row">
	        				<div class="col-lg-4 my-auto">
	        					<h4 class="font-weight-bold mt-80">School institutional website</h4>
	        					<p class="fs-17 text-secondary lh-18 mt-2">Started building in 2019</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima.</p>
	        					<a href="https://rciis.ca/" target="_blank" class="btn btn-green mt-4">View link</a>
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg-7">
	        					<img src="img/portfolio-rciis.png" class="img-cover rounded w-100 mt-80" alt="Portfolio" style="height: 630px;">
	        				</div>
	        			</div>

	        			<div class="row">
	        				<div class="col-lg-7">
        						<img src="img/portfolio-myrciis.png" class="img-cover rounded w-100 mt-80" alt="Portfolio" style="height: 516px;">
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg-4 my-auto">
	        					<h4 class="font-weight-bold mt-80">School management system</h4>
	        					<p class="fs-17 text-secondary lh-18 mt-2">Started building in 2019</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima.</p>
	        					<a href="#" class="btn btn-green mt-4">View pictures</a>
	        				</div>
	        			</div>

	        			<div class="row">
	        				<div class="col-lg-4 my-auto">
	        					<h4 class="font-weight-bold mt-80">School institutional website</h4>
	        					<p class="fs-17 text-secondary lh-18 mt-2">Started building in 2019</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima dicta, placeat ducimus, magnam! Dignissimos pariatur neque nostrum!</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Suscipit doloribus in minima.</p>
	        					<a href="https://rciis.ca/" target="_blank" class="btn btn-green mt-4">View link</a>
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg-7">
	        					<img src="img/portfolio-rciis.png" class="img-cover rounded w-100 mt-80" alt="Portfolio" style="height: 630px;">
	        				</div>
	        			</div>

	        			<p class="text-center mt-30"><a href="#" class="btn btn-transparent-green mt-4">View more</a></p>

	        		</div>

	        	</section>
	        	<!-- End of Portfolio -->

	        	<!-- Testimonial -->
	        	<section class="py-100-150" id="testimonial">

	        		<div class="container">
	        			
	        			<h2 class="display-4 font-weight-bold text-center">Testimonial</h2>

	        			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	        				<ol class="carousel-indicators">
	        					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	        					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	        				</ol>
	        				<div class="carousel-inner">
	        					<div class="carousel-item active">
	        						<div class="row">
	        							<div class="col-lg-6">
	        								<div class="card border-0 bg-f8f9fa p-5 mt-80">
	        									<div class="media">
	        										<img src="img/testimonial-kyle.jpg" class="img-profile-80 mr-3" alt="Testimonial picture">
	        										<div class="media-body my-auto">
	        											<h4 class="font-weight-bold">Kyle Doré</h4>
	        											<p class="fs-18 lh-18 text-secondary mt-1">Academic Director at RCIIS</p>
	        										</div>
	        									</div>
	        									<p class="fs-17 text-4c4d4d lh-18 mt-4">“Daniel is one of the most talented, hardworking professionals that I have ever met before. As a designer I have worked with many developers; however, none of them caught my attention. Daniel is the best developer that I have ever worked with so far. He is also a great team player, and has wonderful, positive personality. What makes Daniel special from other developers is that he has a great passion for learning.”</p>
	        									<p class="mt-4">
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        									</p>
	        								</div>
	        							</div>
	        							<div class="col-lg-6">
	        								<div class="card border-0 bg-f8f9fa p-5 mt-80">
	        									<div class="media">
	        										<img src="img/testimonial-krista.jpg" class="img-profile-80 mr-3" alt="Testimonial picture">
	        										<div class="media-body my-auto">
	        											<h4 class="font-weight-bold">Krista Kin</h4>
	        											<p class="fs-18 lh-18 text-secondary mt-1">Designer at Woori Education Group</p>
	        										</div>
	        									</div>
	        									<p class="fs-17 text-4c4d4d lh-18 mt-4">“Daniel is one of the most talented, hardworking professionals that I have ever met before. As a designer I have worked with many developers; however, none of them caught my attention. Daniel is the best developer that I have ever worked with so far. He is also a great team player, and has wonderful, positive personality. What makes Daniel special from other developers is that he has a great passion for learning.”</p>
	        									<p class="mt-4">
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        									</p>
	        								</div>
	        							</div>
	        						</div>
	        					</div>
	        					<div class="carousel-item">
	        						<div class="row">
	        							<div class="col-lg-6">
	        								<div class="card border-0 bg-f8f9fa p-5 mt-80">
	        									<div class="media">
	        										<img src="img/testimonial-cris.jpg" class="img-profile-80 mr-3" alt="Testimonial picture">
	        										<div class="media-body my-auto">
	        											<h4 class="font-weight-bold">Cristina Perez</h4>
	        											<p class="fs-18 lh-18 text-secondary mt-1">Advisor at Woori Education Group</p>
	        										</div>
	        									</div>
	        									<p class="fs-17 text-4c4d4d lh-18 mt-4">“Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis nemo omnis minus totam magnam vel neque rem, repellendus sit, quisquam dolorem ipsam maxime expedita vitae facere soluta. Assumenda obcaecati modi nemo provident! Odio, ipsa, necessitatibus! Sequi, a voluptates fugiat odit! Quae provident odit, molestias recusandae voluptates enim incidunt hic suscipit.”</p>
	        									<p class="mt-4">
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        									</p>
	        								</div>
	        							</div>
	        							<div class="col-lg-6">
	        								<div class="card border-0 bg-f8f9fa p-5 mt-80">
	        									<div class="media">
	        										<img src="img/testimonial-tong.jpg" class="img-profile-80 mr-3" alt="Testimonial picture">
	        										<div class="media-body my-auto">
	        											<h4 class="font-weight-bold">Tong Zhang</h4>
	        											<p class="fs-18 lh-18 text-secondary mt-1">Director at RCIIS</p>
	        										</div>
	        									</div>
	        									<p class="fs-17 text-4c4d4d lh-18 mt-4">“Daniel is one of the most talented, hardworking professionals that I have ever met before. As a designer I have worked with many developers; however, none of them caught my attention. Daniel is the best developer that I have ever worked with so far. He is also a great team player, and has wonderful, positive personality. What makes Daniel special from other developers is that he has a great passion for learning.”</p>
	        									<p class="mt-4">
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        										<i class="fas fa-star text-warning"></i>
	        									</p>
	        								</div>
	        							</div>
	        						</div>
	        					</div>
	        				</div>
	        			</div>

	        		</div>

	        	</section>
	        	<!-- End of Testimonial -->

	        	<!-- Contact -->
	        	<section class="bg-f8f9fa py-100" id="contact">

	        		<div class="container">

	        			<h2 class="display-4 font-weight-bold text-center">Contact</h2>

	        			<div class="row">
	        				<div class="col-lg-3 text-center text-lg-left">
	        					<h4 class="font-weight-bold mt-80">Location</h4>
	        					<ul class="list-unstyled fs-17 text-4c4d4d lh-18 mt-30">
	        						<li>4th Flor, Plot No. 22</li>
	        						<li>145 Murphy Canyon Rd.</li>
	        						<li>Toronto, ON M5P 2C6</li>
	        					</ul>
	        					<ul class="list-unstyled fs-17 text-4c4d4d lh-18 mt-30">
	        						<li><i class="fas fa-phone fa-fw text-green mr-1"></i> (647) 720 4032</li>
	        						<li><i class="fas fa-envelope fa-fw text-green mr-1"></i> danielvalenca@gmail.com</li>
	        					</ul>
	        					<h4 class="font-weight-bold mt-30">Follow me</h4>
	        					<ul class="list-inline mt-30">
	        						<li class="list-inline-item">
	        							<a href="https://www.facebook.com/daniel.santosvalenca/" class="link-4c4d4d-green" target="_blank"><i class="fab fa-facebook-f fa-fw fs-20"></i></a>
	        						</li>
	        						<li class="list-inline-item">
	        							<a href="https://twitter.com/danielvalenca" class="link-4c4d4d-green" target="_blank"><i class="fab fa-twitter fa-fw fs-20"></i></a>
	        						</li>
	        						<li class="list-inline-item">
	        							<a href="https://www.linkedin.com/in/danielvalenca/" class="link-4c4d4d-green" target="_blank"><i class="fab fa-linkedin fa-fw fs-20"></i></a>
	        						</li>
	        						<li class="list-inline-item">
	        							<a href="https://github.com/danivalenca" class="link-4c4d4d-green" target="_blank"><i class="fab fa-github fa-fw fs-20"></i></a>
	        						</li>
	        					</ul>
	        				</div>
	        				<div class="col-lg-1"></div>
	        				<div class="col-lg-8">
	        					<h4 class="font-weight-bold mt-80 text-center text-lg-left">Get in touch</h4>
	        					<form method="post" action="" class="mt-30">
	        						<div class="row">
	        							<div class="col-lg-6">
	        								<div class="form-group">
	        									<label class="fs-17 text-4c4d4d" for="name">Name</label>
	        									<input type="text" name="name" class="form-control" id="name" maxlength="80" required>
	        								</div>
	        							</div>
	        							<div class="col-lg-6">
	        								<div class="form-group">
	        									<label class="fs-17 text-4c4d4d" for="email">Email</label>
	        									<input type="email" name="email" class="form-control" id="email" maxlength="50" required>
	        								</div>
	        							</div>
	        						</div>
	        						<div class="form-group">
	        							<label class="fs-17 text-4c4d4d" for="message">Message</label>
	        							<textarea name="message" class="form-control" id="message" rows="4" maxlength="3000" required></textarea>
	        						</div>

	        						<!-- Hidden Fields -->
	        						<?php

	        						# Find out user location
	        						$user_ip = getenv('REMOTE_ADDR');
	        						$geo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=$user_ip'));
	        						$location = "{$geo['geoplugin_city']}, {$geo['geoplugin_countryName']}";

	        						?>
	        						<input type="hidden" name="location" id="location" value="<?= $location; ?>" maxlength="80">
	        						<!-- End of Hidden Fields -->

	        						<button type="submit" class="btn btn-green mt-2">Send message</button>
	        					</form>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3 alert-positive d-none"><i class="fas fa-check text-green mr-1"></i> Message sent. I will read it within the next 24 hours and get back to you!</p>
	        					<p class="fs-17 text-4c4d4d lh-18 mt-3 alert-negative d-none"><i class="fas fa-bug text-danger mr-1"></i> It was not possible to send your message. Please try again!</p>
	        				</div>
	        			</div>

	        		</div>

	        	</section>
	        	<!-- End of Contact -->

	        	<!-- Copyright -->
	        	<section class="py-5" id="copyright">

	        		<div class="container">

	        			<div class="row">
	        				<div class="col-lg-6 text-center text-lg-left">
	        					<p class="fs-17 text-4c4d4d">Copyright <i class="fas fa-copyright fs-15"></i> <?= date('Y'); ?> Daniel Valenca. All Rights Reserved.</p>
	        				</div>
	        				<div class="col-lg-6 text-center text-lg-right">
	        					<ul class="list-inline mt-3 mt-lg-0">
	        						<li class="list-inline-item border-right pr-3"><a href="#" class="fs-17 link-4c4d4d-green">Terms & Policy</a></li>
	        						<li class="list-inline-item pl-1"><a href="#" class="fs-17 link-4c4d4d-green">Disclaimer</a></li>
	        					</ul>
	        				</div>
	        			</div>

	        		</div>

	        	</section>
	        	<!-- End of Contact -->

	        </main>
	        <!--====  End of Main  ====-->

	    </div>

	</div>

	<?php include('include-footer.php'); ?>

	<script>
	/* Navbar change active link on click */
	$('.nav-link').click(function() {

		$('.nav-link').removeClass('active');
		$(this).addClass('active');

	});

	/* Contact form */
	$('form').submit(function(e) {

		e.preventDefault();

		$.ajax({
	        url: 'src/contact-save.php',
	        data: {
	            name: $('#name').val(),
                email: $('#email').val(),
                message: $('#message').val(),
                location: $('#location').val()
	        },
	        dataType: 'json',
	        type: 'post',
	        success: function(data) {
	        	$('.alert-positive').removeClass('d-none');
                $('#name,#email,#message').val('');
	        },
	        error: function(data) {
	            $('.alert-negative').removeClass('d-none');
	        }
	    });
	
	});
	</script>

</body>

</html>