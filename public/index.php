<?php 

require_once __DIR__ . '/src/includes/config.php';

// Define skills
$best_skills = [
    [ "name" => "HTML", "logo" => "https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" ],
    [ "name" => "CSS", "logo" => "https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" ],
    [ "name" => "PHP", "logo" => "https://cdn-icons-png.flaticon.com/128/5968/5968332.png" ],
    [ "name" => "Laravel", "logo" => "https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" ],
    [ "name" => "MySQL", "logo" => "https://pngimg.com/d/mysql_PNG23.png" ],
    [ "name" => "JavaScript", "logo" => "https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" ],
    [ "name" => "Bootstrap", "logo" => "https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" ],
    [ "name" => "Tailwind", "logo" => "https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg" ],
    [ "name" => "jQuery", "logo" => "https://cdn.iconscout.com/icon/free/png-256/free-jquery-icon-svg-png-download-1175155.png" ],
    [ "name" => "AJAX", "logo" => "https://upload.wikimedia.org/wikipedia/commons/a/a1/AJAX_logo_by_gengns.svg" ],
    [ "name" => "Git", "logo" => "https://upload.wikimedia.org/wikipedia/commons/3/3f/Git_icon.svg" ],
    [ "name" => "GitHub", "logo" => "https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" ],
    [ "name" => "Photoshop", "logo" => "https://upload.wikimedia.org/wikipedia/commons/2/20/Photoshop_CC_icon.png" ],
    [ "name" => "Figma", "logo" => "https://upload.wikimedia.org/wikipedia/commons/3/33/Figma-logo.svg" ],
];

$working_skills = [
    [ "name" => "React", "logo" => "https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" ],
    [ "name" => "Node.js", "logo" => "https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg" ],
    [ "name" => "Python", "logo" => "https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" ],
    [ "name" => "Docker", "logo" => "https://www.docker.com/wp-content/uploads/2022/03/vertical-logo-monochromatic.png" ],
    [ "name" => "Linux", "logo" => "https://upload.wikimedia.org/wikipedia/commons/3/35/Tux.svg" ], 
    [ "name" => "Cloud AWS", "logo" => "https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg" ],
    [ "name" => "Oracle", "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Oracle_logo.svg/2560px-Oracle_logo.svg.png" ],
    [ "name" => "Analytics", "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Logo_Google_Analytics.svg/1200px-Logo_Google_Analytics.svg.png" ],
    [ "name" => "Java", "logo" => "https://upload.wikimedia.org/wikipedia/en/3/30/Java_programming_language_logo.svg" ],
    [ "name" => ".NET", "logo" => "https://upload.wikimedia.org/wikipedia/commons/7/7d/Microsoft_.NET_logo.svg" ],
];

// Define projects
$projects = [
    [
        "img" => "https://cdn.dribbble.com/userupload/17719501/file/original-fe25b3f94b2b4a9f29c0fb8c789fea65.png?resize=752x564&vertical=center",
        "name" => "Playground",
        "description" => "An experimental platform where I test and prototype new web technologies, frameworks, and design ideas before applying them in production projects.",
        "link" => "https://app.playground.ca/"
    ],
    [
        "img" => "img/projects-studhub.jpg",
        //"img" => "https://cdn.dribbble.com/userupload/4283813/file/original-c7dd9f1f6c391d33e2dca7410e86ce73.png",
        "name" => "Studhub",
        "description" => "A CRM platform built to help agencies and schools manage leads, students, and applications with smart automation and user-friendly workflows.",
        "link" => "https://app.studhub.ca/"
    ],
    [
        "img" => "img/projects-good_shepherd_parish.jpg",
        //"img" => "https://cdn.dribbble.com/userupload/4283813/file/original-c7dd9f1f6c391d33e2dca7410e86ce73.png",
        "name" => "Good Shepherd Parish",
        "description" => "A CRM platform built to help agencies and schools manage leads, students, and applications with smart automation and user-friendly workflows.",
        "link" => "https://danielvalenca.com/iecbrazilcanada/"
    ],
    [
        "img" => "img/projects-myrciis.jpg",
        //"img" => "https://cdn.dribbble.com/userupload/17590363/file/original-2c1e8386556b10adc382c03f7c7880ad.jpg",
        "name" => "MyRCIIS",
        "description" => "A dedicated student portal for RCIIS that provides international students with access to resources, events, and communication tools during their studies.",
        "link" => "https://app.rciis.ca/"
    ],
    [
        "img" => "img/projects-rciis.jpg",
        //"img" => "https://cdn.dribbble.com/userupload/41426434/file/original-06e05b2644e14e294659c36f08244025.png",
        "name" => "RCIIS",
        "description" => "The official website of RCIIS, designed to showcase programs, events, and school culture while providing a seamless experience for prospective students.",
        "link" => "https://rciis.ca/"
    ],
    [
        "img" => "img/projects-woori_italy_fair.jpg",
        //"img" => "https://cdn.dribbble.com/userupload/25887510/file/original-2f506d65043900afccace738397f649e.png",
        "name" => "Woori Italy Fair",
        "description" => "A suite of web applications developed for FUNASE, a public child care foundation in Brazil, streamlining operations and improving accessibility.",
        "link" => "https://www.funase.pe.gov.br/"
    ],
    [
        "img" => "img/projects-wooriapp.jpg",
        //"img" => "https://cdn.dribbble.com/userupload/25887510/file/original-2f506d65043900afccace738397f649e.png",
        "name" => "WooriApp",
        "description" => "A suite of web applications developed for FUNASE, a public child care foundation in Brazil, streamlining operations and improving accessibility.",
        "link" => "https://www.funase.pe.gov.br/"
    ],
    [
        "img" => "img/projects-woori.jpg",
        //"img" => "https://cdn.dribbble.com/userupload/25887510/file/original-2f506d65043900afccace738397f649e.png",
        "name" => "Woori",
        "description" => "A suite of web applications developed for FUNASE, a public child care foundation in Brazil, streamlining operations and improving accessibility.",
        "link" => "https://www.funase.pe.gov.br/"
    ],
    [
        "img" => "img/projects-funase.jpg",
        //"img" => "https://cdn.dribbble.com/userupload/25887510/file/original-2f506d65043900afccace738397f649e.png",
        "name" => "Funase",
        "description" => "A suite of web applications developed for FUNASE, a public child care foundation in Brazil, streamlining operations and improving accessibility.",
        "link" => "https://www.funase.pe.gov.br/"
    ],
];

// Define experiences
$experiences = [
    [
        "img" => "img/experience-rciis.png",
        "position" => "Web Developer",
        "company" => "RCIIS",
        "period" => "Sep 2019 - Current",
        "location" => "Toronto, Canada",
        "link" => "https://www.rciis.ca/",
        "description" => [
            "Led the implementation of a new sales management system, transitioning the school from paper-based processes to digital operations, driving business growth and scalability.",
            "Designed and developed the school’s institutional website, creating a modern, user-friendly interface to enhance online visibility and improve user experience.",
            "Built a custom CRM system that became the central tool for lead generation and management, improving the efficiency of the sales team.",
            "Developed a Learning Management System (LMS) for students and teachers, enabling seamless management of classes, materials, attendance, and academic resources.",
            "Collaborated with the marketing team to create promotional campaigns and foster partnerships with international agencies, boosting customer acquisition and expanding brand presence.",
            "Utilized expertise in PHP, MySQL, HTML, CSS, JavaScript, jQuery, and Bootstrap to deliver effective, scalable solutions that met business requirements."
        ]
    ],
    [
        "img" => "img/experience-woori.png",
        "position" => "Web Developer",
        "company" => "Woori Education Group",
        "period" => "Dec 2016 - Sep 2019",
        "location" => "Toronto, Canada",
        "link" => "https://www.woori.ca/",
        "description" => [
            "Designed and launched a new company website focused on lead generation, significantly boosting online inquiries and expanding the customer base.",
            "Developed an internal CRM system integrated with the website, streamlining lead management and providing the sales team with a centralized tool to convert leads more effectively.",
            "Collaborated with the marketing team to design targeted campaigns, driving seasonal sales growth and enhancing brand visibility.",
            "Partnered with other departments to replicate successful web and CRM strategies, improving operational efficiency across the organization.",
            "Applied technical expertise in PHP, MySQL, HTML, CSS, JavaScript, and jQuery to deliver innovative, business-focused solutions."
        ]
    ],
    [
        "img" => "img/experience-innovative_vision.png",
        "position" => "Technical Support",
        "company" => "Innovative Vision",
        "period" => "Sep 2016 - Jan 2017",
        "location" => "Toronto, Canada",
        "link" => "http://www.innovativevision.ca/",
        "description" => [
            "Provided exceptional customer support for KOBO e-reader users via phone, email, and live chat, consistently meeting and exceeding daily resolution targets.",
            "Earned rapid advancement to multi-channel support responsibilities due to strong performance and positive customer feedback."
        ]
    ],
    [
        "img" => "img/experience-bloor_importacao.png",
        "position" => "Web Developer",
        "company" => "Bloor Importação",
        "period" => "Jan 2015 - Apr 2016",
        "location" => "Recife, Brazil",
        "link" => "https://www.bloor.ca/",
        "description" => [
            "Developed an institutional website and a management system to manage purchasing and sales of imported products from China for the Brazilian market.",
            "Built a user-friendly CMS application with WordPress, providing technical training and support to producers.",
            "Conducted data modeling and managed database administration efficiently.",
            "Designed creative assets including the company logo, responsive website templates, system interface, banners, and advertisements.",
            "Contributed to business strategies by engaging in client discussions to ensure a clear understanding of requirements and drive sales growth.",
            "Applied a wide range of technologies including PHP5, MySQL, WordPress, Apache, JavaScript, JSON, jQuery, AJAX, XML, HTML5, CSS3, and Bootstrap to deliver robust, dynamic solutions."
        ]
    ],
    [
        "img" => "img/experience-google.png",
        "position" => "Special Collects",
        "company" => "Google",
        "period" => "Apr 2014 - Nov 2014",
        "location" => "São Paulo, Brazil",
        "link" => "https://www.rciis.ca/",
        "description" => [
            "Joined a dedicated team curating and publishing special collections to Google Maps, showcasing captivating images on the web.",
            "Led the planning and execution of large-scale mapping initiatives across the national territory, ensuring accurate and up-to-date geographical data.",
            "Delivered remote technical training and support to employees in South America using Google Hangouts as the primary communication platform.",
            "Collaborated closely with team members to ensure smooth operations and effective implementation of mapping projects.",
            "Proactively identified opportunities for process improvement and recommended innovative solutions to enhance the overall mapping experience."
        ]
    ],
    [
        "img" => "img/experience-cidiz.png",
        "position" => "Web Developer",
        "company" => "Cidiz",
        "period" => "Jan 2013 - Mar 2014",
        "location" => "Recife, Brazil",
        "link" => "https://www.cidiz.com.br/",
        "description" => [
            "Developed an e-commerce system and updated the company website for clothing sales through multi-level direct selling.",
            "Contributed to back-end development of an online system for managing purchases, sales, customers, and producers.",
            "Developed and implemented the complete front-end for both major projects.",
            "Designed the website, e-commerce platform, banners, and product photography.",
            "Utilized technologies including PHP, MySQL, WordPress, Laravel, HTML, CSS, JavaScript, jQuery, AJAX, and Adobe Photoshop to deliver effective solutions."
        ]
    ],
    [
        "img" => "img/experience-funase.png",
        "position" => "Web Developer",
        "company" => "Funase",
        "period" => "Apr 2010 - Apr 2011",
        "location" => "Recife, Brazil",
        "link" => "http://www.funase.pe.gov.br/",
        "description" => [
            "Created multiple web applications for a social and educational child care foundation, a public company.",
            "Identified issues with the existing website and gained approval to fully rebuild it, improving accessibility and information delivery.",
            "Designed banners, workflows, sitemaps, and website/system templates using Adobe Photoshop and Fireworks.",
            "Developed database-driven systems to support internal processes across multiple sectors, including hiring and dismissal, food supply, warehouse management, and procurement, while providing technical training and user support.",
            "Applied technologies including PHP, MySQL, HTML, CSS, JavaScript, jQuery, Java, J2EE, Apache, SQL Server, and Oracle Database to deliver scalable solutions."
        ]
    ],
];

// Define educations
$educations = [
	[
        "img" => "",
        "period" => "Oct 2025 (expected)",
        "title" => "Developing Back-End Apps with Node.js and Express",
        "link" => "https://www.coursera.org/learn/developing-backend-apps-with-nodejs-and-express",
        "provider" => "IBM",
        "platform" => "(via Coursera)"
    ],
    [
        "img" => "",
        "period" => "Sep 2025",
        "title" => "Troubleshooting and Debugging Techniques",
        "link" => "https://www.coursera.org/professional-certificates/google-it-automation",
        "provider" => "Google",
        "platform" => "(via Coursera)"
    ],
    [
        "img" => "education-introduction_to_git_and_github-google-2025-02.jpg",
        "period" => "Feb 2025",
        "title" => "Introduction to Git and GitHub",
        "link" => "https://www.coursera.org/professional-certificates/google-it-automation",
        "provider" => "Google",
        "platform" => "(via Coursera)"
    ],
    [
        "img" => "education-using_python_to_interact_with_the_operating_system-google-2025-01.jpg",
        "period" => "Jan 2025",
        "title" => "Using Python to Interact with the Operating System",
        "link" => "https://www.coursera.org/professional-certificates/google-it-automation",
        "provider" => "Google",
        "platform" => "(via Coursera)"
    ],
    [
        "img" => "education-crash_course_on_python-google-2024-12.jpg",
        "period" => "Dec 2024",
        "title" => "Crash Course on Python",
        "link" => "https://www.coursera.org/professional-certificates/google-it-automation",
        "provider" => "Google",
        "platform" => "(via Coursera)"
    ],
    [
        "img" => "education-graduate_certificate_in_software_engineering-ufpr-2010-12.jpg",
        "period" => "Jan 2009 - Dec 2010",
        "title" => "Graduate Certificate in Software Engineering",
        "link" => "https://das.ufpr.br/",
        "provider" => "UFPR",
        "platform" => ""
    ],
    [
        "img" => "education-undergraduate_degree_in_internet_systems_technology-fmr-2008-12.jpg",
        "period" => "Jan 2006 - Dec 2008",
        "title" => "Undergraduate Degree in Internet Systems Technology",
        "link" => "https://das.ufpr.br/",
        "provider" => "FMR",
        "platform" => ""
    ],
];

?>

<!doctype html>
<html lang="en">
 	
 	<head>

 		<?php require_once __DIR__ . '/src/includes/header.php' ?>

 		<!-- JS: Google reCAPTCHA -->
 		<script src="https://www.google.com/recaptcha/api.js" defer></script>

 		<!-- JS: Custom -->
 		<script src="js/index.js?v=<?= filemtime(__DIR__ . '/js/index.js') ?>" defer></script>

	</head>
	
	<body>

		<!-- Wrapper -->
		<div class="d-flex vh-100">

			<?php require_once __DIR__ . '/src/includes/sidebar.php' ?>

			<!-- Main -->
			<main class="flex-grow-1 overflow-auto" data-bs-spy="scroll" data-bs-target="#sidebar-nav" data-bs-smooth-scroll="true" tabindex="0">

				<?php require_once __DIR__ . '/src/includes/navbar.php' ?>

				<!-- Intro -->
				<section id="intro" class="bg-light py-10">

					<div class="container">

						<div class="row justify-content-center">

							<div class="col-11 col-xl-8">

								<h1 class="fw-bolder">Hi, I'm Daniel Valenca</h1>

								<p class="fs-5 mt-3 mt-lg-4">
									Full Stack Developer with <?= date('Y') - 2011 ?>+ years of experience in PHP, MySQL, and Bootstrap, focused on building scalable, user-friendly web applications. I’m passionate about clean code, great UX, and solving real-world problems through technology.
								</p>

								<div class="d-flex flex-column gap-1 fs-5 mt-3 mt-lg-4">
									<p>💻 Full-Time Web Developer at <a href="https://rciis.ca/" class="link-primary text-decoration-none fw-bold" target="_blank">RCIIS</a></p>
									<p>🚀 Building <a href="https://app.studhub.ca/" class="link-primary text-decoration-none fw-bold" target="_blank">Studhub</a>, a platform for education & immigration agencies</p>
									<p>📚 Earning a <a href="https://www.coursera.org/professional-certificates/google-it-automation" class="link-primary text-decoration-none fw-bold" target="_blank">IT Automation with Python Certificate</a> by Google (Coursera)</p>
								</div>

                                <div class="card border-light-subtle rounded-4 p-4 mt-3 mt-lg-4">

                                    <div class="row text-center g-3">

                                        <div class="col-4 col-md border-end border-light-subtle">
                                            <p class="fs-4 fw-semibold"><?= date('Y') - 2011 ?>+</p>
                                            <p class="text-body-secondary">Years</p>
                                        </div>

                                        <div class="col-4 col-md border-end border-light-subtle">
                                            <p class="fs-4 fw-semibold">30+</p>
                                            <p class="text-body-secondary">Projects</p>
                                        </div>

                                        <div class="col-4 col-md border-end border-light-subtle">
                                            <p class="fs-4 fw-semibold">26+</p>
                                            <p class="text-body-secondary">Clients</p>
                                        </div>

                                        <div class="col-4 col-md border-end border-light-subtle">
                                            <p class="fs-4 fw-semibold"><?= count($educations) ?>+</p>
                                            <p class="text-body-secondary">Certificates</p>
                                        </div>

                                        <div class="col-4 col-md">
                                            <p class="fs-4 fw-semibold">22</p>
                                            <p class="text-body-secondary">Countries</p>
                                        </div>

                                    </div>

                                </div>

								<div class="d-flex gap-3">
									<a href="#contact" class="btn btn-primary mt-4 mt-lg-5">Contact Me</a>
									<a href="#projects" class="btn btn-light-primary mt-4 mt-lg-5">Resume</a>
								</div>
								
							</div>
							
						</div>
						
					</div>

				</section>
				<!-- Intro -->

				<!-- Skills -->
				<section id="skills" class="py-10">

					<div class="container">

						<div class="row justify-content-center">

							<div class="col-11 col-xl-8">

								<h2 class="fw-bold">Skills</h2>

								<div class="row g-lg-5">

									<div class="col-lg-6 d-flex">

										<div class="card bg-light border-light rounded-4 p-4 p-lg-5 mt-4 mt-lg-5 flex-fill">

											<h3 class="fs-4 fw-semibold">What I Do Best</h3>

											<p class="mt-2">Technologies I use every day and feel comfortable with when building apps and websites.</p>

											<div class="row text-center">

												<?php foreach ($best_skills as $best_skill): ?>

													<div class="col-4">

														<div class="card border-light-subtle border-light rounded-4 p-3 mt-3 mt-lg-4">

															<div class="ratio ratio-1x1">
																<img src="<?= $best_skill['logo'] ?>"
																     alt="<?= htmlspecialchars($best_skill['name']) ?> logo"
																     class="w-100 h-100 object-fit-contain" loading="lazy">
															</div>

														</div>

														<p class="mt-2"><?= htmlspecialchars($best_skill['name']) ?></p>

													</div>
												
												<?php endforeach; ?>

											</div>
											
										</div>
										
									</div>

									<div class="col-lg-6 d-flex">

										<div class="card bg-light border-light rounded-4 p-4 p-lg-5 mt-4 mt-lg-5 flex-fill">

											<h3 class="fs-4 fw-semibold">What I'm Working On</h3>

											<p class="mt-2">Technologies I've worked with in projects and others I'm exploring as I continue growing my skill set.</p>

											<div class="row text-center">

												<?php foreach ($working_skills as $working_skill): ?>

													<div class="col-4">

														<div class="card border-light-subtle border-light rounded-4 p-3 mt-3 mt-lg-4">

															<div class="ratio ratio-1x1">
																<img src="<?= $working_skill['logo'] ?>"
																     alt="<?= htmlspecialchars($working_skill['name']) ?> logo"
																     class="w-100 h-100 object-fit-contain" loading="lazy">
															</div>

														</div>

														<p class="mt-2"><?= htmlspecialchars($working_skill['name']) ?></p>

													</div>
												
												<?php endforeach; ?>

											</div>
											
										</div>
										
									</div>

								</div>

							</div>

						</div>

					</div>

				</section>
				<!-- Skills -->

				<!-- Projects -->
				<section id="projects" class="bg-light py-10">

					<div class="container">

						<div class="row justify-content-center">

							<div class="col-11 col-xl-8">

								<h2 class="fw-bold">Projects</h2>

								<?php foreach ($projects as $project): ?>

									<div class="card border-light-subtle rounded-4 mt-4 mt-lg-5">

										<div class="row g-0">

											<div class="col-lg-4">

												<div class="ratio ratio-1x1 d-none d-lg-block">
													<img src="<?= htmlspecialchars($project['img']) ?>"
				   									alt="<?= htmlspecialchars($project['name']) ?>"
				     								class="w-100 h-100 object-fit-cover rounded-start-4"
				     								loading="lazy">
												</div>

                                                <div class="ratio ratio-4x3 d-block d-lg-none">
                                                    <img src="<?= htmlspecialchars($project['img']) ?>"
                                                    alt="<?= htmlspecialchars($project['name']) ?>"
                                                    class="w-100 h-100 object-fit-cover rounded-top-4"
                                                    loading="lazy">
                                                </div>

											</div>

											<div class="col">

												<div class="p-4 p-lg-5 h-100">

													<div class="d-flex flex-column h-100">
														
														<div class="flex-grow-1">

															<h3 class="fs-4 fw-semibold"><?= htmlspecialchars($project['name']) ?></h3>

															<p class="mt-2"><?= htmlspecialchars($project['description']) ?></p>
															
														</div>

														<div class="d-inline-block d-lg-flex gap-3">
															
															<p class="mt-3 mt-lg-0"><a href="<?= htmlspecialchars($project['link']) ?>" class="btn btn-primary">Live Preview</a></p>
															<p class="mt-3 mt-lg-0"><a href="#" class="btn btn-light-primary">Technologies Used</a></p>

														</div>
														
													</div>

												</div>
												
											</div>
											
										</div>
										
									</div>

								<?php endforeach; ?>
								
							</div>
							
						</div>
						
					</div>

				</section>
				<!-- Projects -->

				<!-- Working Experience -->
                <section id="work-experience" class="py-10">

                    <div class="container">

                        <div class="row justify-content-center">

                            <div class="col-11 col-xl-8">

                                <h2 class="fw-bold">Working Experience</h2>

                                <p class="fs-5 mt-2">I’ve built solutions for companies in Canada and Brazil, ranging from websites and e-commerce to CRMs and learning management systems.</p>

                                <?php if ($experiences): ?>

                                    <div class="accordion mt-3 mt-lg-4 rounded-4 border-0 overflow-hidden" id="accordion-work-experience">

                                        <?php foreach ($experiences as $index => $experience): ?>

                                            <div class="accordion-item border-0 <?= $index === 0 ? '' : 'border-top border-light-subtle' ?>">

                                                <h2 class="accordion-header">

                                                    <button class="accordion-button p-0 py-4 collapsed" 
                                                    type="button" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#collapse-<?= $index ?>" 
                                                    aria-expanded="false" 
                                                    aria-controls="collapse-<?= $index ?>">

                                                        <div class="d-flex align-items-center w-100 me-2 me-lg-0">

                                                            <div class="card bg-light border-light p-3 rounded-4 flex-shrink-0">
                                                                <img src="<?= htmlspecialchars($experience['img']) ?>"
                                                                alt="<?= htmlspecialchars($experience['position']) ?>"
                                                                class="object-fit-contain"
                                                                loading="lazy"
                                                                style="width: 64px; height: 64px;">
                                                            </div>

                                                            <div class="ms-3 text-start">
                                                                <h4 class="fs-5" style="line-height: 1.7rem;">
                                                                    <?= htmlspecialchars($experience['position']) ?>
                                                                    at <strong><?= htmlspecialchars($experience['company']) ?></strong>
                                                                </h4>
                                                                <p class="mt-1 mt-lg-2"><?= htmlspecialchars($experience['period']) ?></p>
                                                                <p class="mt-1 mt-lg-2"><?= htmlspecialchars($experience['location']) ?></p>
                                                            </div>

                                                        </div>

                                                    </button>

                                                </h2>

                                                <div id="collapse-<?= $index ?>" 
                                                class="accordion-collapse collapse" 
                                                data-bs-parent="#accordion-work-experience">

                                                    <?php if (!empty($experience['description'])): ?>

                                                        <div class="p-0 pb-4">

                                                            <ul class="mb-0 ps-4">
                                                                <?php foreach ($experience['description'] as $i => $desc): ?>
                                                                    <li class="<?= $i > 0 ? 'mt-2' : '' ?>">
                                                                        <?= htmlspecialchars($desc) ?>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>

                                                        </div>

                                                    <?php endif; ?>

                                                </div>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </section>
                <!-- Working Experience -->

				<!-- Education -->
				<section id="education" class="bg-light py-10">

					<div class="container">

						<div class="row justify-content-center">

							<div class="col-11 col-xl-8">

								<h2 class="fw-bold">Education</h2>

								<p class="fs-5 mt-2">Technology learning doesn't stop after graduation. I am always seeking new certificates and continuously improving my skills.</p>

								<div class="row flex-nowrap overflow-x-auto overflow-y-hidden">

									<?php foreach ($educations as $education): ?>

									    <div class="col-6 col-lg-4">

									        <div class="card border-light-subtle rounded-4 p-3 mt-4 mt-lg-5">

									            <div class="ratio ratio-4x3">
									                <?php if (!empty($education['img']) && file_exists("img/{$education['img']}")): ?>
									                    <img src="img/<?= htmlspecialchars($education['img']) ?>" 
									                    alt="<?= htmlspecialchars($education['title']) ?>"
									                    class="w-100 h-100 object-fit-contain">
									                <?php else: ?>
									                    <div class="bg-light"></div>
									                <?php endif; ?>
									            </div>
									            
									        </div>

									        <div class="text-center mt-3">
									            <p class="text-body-secondary"><?= htmlspecialchars($education['period']) ?></p>
									            <h3 class="fs-6" style="line-height: 1.5rem;">
									                <a href="<?= htmlspecialchars($education['link']) ?>" 
									                class="link-primary text-decoration-none" 
									                target="_blank">
									                	<?= htmlspecialchars($education['title']) ?>
									                </a> – 
									                <strong><?= htmlspecialchars($education['provider']) ?></strong>
									                <?php if (!empty($education['platform'])): ?>
									                    <?= htmlspecialchars($education['platform']) ?>
									                <?php endif; ?>
									            </h3>
									        </div>
									        
									    </div>

									<?php endforeach; ?>
									
								</div>

							</div>

						</div>

					</div>
					
				</section>
				<!-- Education -->

				<!-- Contact -->
				<section id="contact" class="py-10">

					<div class="container">

						<div class="row justify-content-center">

							<div class="col-11 col-xl-8">

								<h2 class="fw-bold">Contact</h2>

								<p class="fs-5 mt-2">Let’s get in touch — I’d love to hear from you.</p>

								<div class="card bg-light border-light rounded-4 mt-4 mt-lg-5">

									<div class="row g-0">

										<div class="col-lg-6 order-1 order-lg-0">

											<div class="p-4 p-lg-5">

												<form action="src/controllers/contacts.php?action=create" method="post">

													<!-- Fields -->
													<div class="mb-3">
													    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
													    <input type="text" name="name" id="name" class="form-control" autocomplete="name" required>
													</div>

													<div class="mb-3">
													    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
													    <input type="email" name="email" id="email" class="form-control" autocomplete="email" required>
													</div>

													<div class="mb-3">
													    <label for="phone" class="form-label">Phone</label>
													    <input type="tel" name="phone" id="phone" class="form-control" autocomplete="tel" pattern="[\d\s\-\+\(\)]*" maxlength="15">
													</div>

													<div class="mb-3">
													    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
													    <textarea name="message" id="message" class="form-control" rows="4" autocomplete="off" required></textarea>
													</div>

													<!-- reCAPTCHA token -->
												    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

													<!-- Actions -->
													<button type="submit" class="btn btn-primary w-100 mt-3">Send</button>

													<!-- reCAPTCHA disclaimer -->
												    <p class="small text-body-secondary mt-2">
												        This site is protected by reCAPTCHA and the Google
												        <a class="link-primary text-decoration-none" href="https://policies.google.com/privacy" target="_blank" rel="noopener">Privacy Policy</a> and
												        <a class="link-primary text-decoration-none" href="https://policies.google.com/terms" target="_blank" rel="noopener">Terms of Service</a> apply.
												    </p>

												</form>
												
											</div>
											
										</div>

										<div class="col-lg-6 order-0 order-lg-1">

											<div class="h-100 rounded-top-4 d-block d-lg-none" 
										    	 style="background: url('https://images.pexels.com/photos/2046790/pexels-photo-2046790.jpeg') center/cover no-repeat; min-height: 200px;">
										 	</div>

										 	<div class="h-100 rounded-end-4 d-none d-lg-block" 
										    	 style="background: url('https://images.pexels.com/photos/2046790/pexels-photo-2046790.jpeg') center/cover no-repeat; min-height: 200px;">
										 	</div>

										</div>

									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>

				</section>
				<!-- Contact -->
				
			</main>
			<!-- Main -->
			
		</div>
		<!-- Wrapper -->

		<!-- Contact Modal: Confirmation -->
		<div class="modal fade" id="modal-contact-confirmation" tabindex="-1" aria-labelledby="modal-contact-confirmation-label" aria-hidden="true">

		    <div class="modal-dialog modal-sm modal-dialog-centered">

		        <div class="modal-content text-center">

		            <div class="modal-body p-5">

		                <i class="bi bi-check-circle-fill text-success display-4"></i>
		                <h3 class="fs-4 fw-semibold mt-3">Email sent!</h3>
		                <p class="mt-2">Thank you for reaching out. I'll get back to you very soon.</p>

		            </div>

		        </div>

		    </div>

		</div>
		<!-- Contact Modal: Confirmation -->

    	<?php require_once __DIR__ . '/src/includes/footer.php' ?>

	</body>

</html>