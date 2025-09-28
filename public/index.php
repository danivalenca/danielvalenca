<?php 

require_once __DIR__ . '/src/includes/config.php';

// Define skills
$skills_best = [
    // Front-end
    [ "name" => "HTML", "logo" => "img/skills-html.png"],
    [ "name" => "CSS", "logo" => "img/skills-css.png"],
    [ "name" => "Bootstrap", "logo" => "img/skills-bootstrap.png"],
    [ "name" => "JavaScript", "logo" => "img/skills-javascript.png"],
    [ "name" => "jQuery", "logo" => "img/skills-jquery.png"],
    [ "name" => "AJAX", "logo" => "img/skills-ajax.png"],

    // Back-end
    [ "name" => "PHP", "logo" => "img/skills-php.png"],

    // Database
    [ "name" => "MySQL", "logo" => "img/skills-mysql.png"],

    // Tools
    [ "name" => "Git", "logo" => "img/skills-git.png"],
    [ "name" => "GitHub", "logo" => "img/skills-github.png"],

    // Other
    [ "name" => "SEO", "logo" => "img/skills-seo.png"],
    [ "name" => "Analytics", "logo" => "img/skills-google-analytics.png" ],
    [ "name" => "Canva", "logo" => "img/skills-canva.png"],
];

$skills_working = [
    // Front-end
    [ "name" => "Tailwind", "logo" => "img/skills-tailwind.png"],
    [ "name" => "React", "logo" => "img/skills-react.png" ],

    // Back-end
    [ "name" => "Laravel", "logo" => "img/skills-laravel.png"],
    [ "name" => "Node.js", "logo" => "img/skills-node-js.png" ],
    [ "name" => "Express.js", "logo" => "img/skills-express-js.png" ],
    [ "name" => "Python", "logo" => "img/skills-python.png" ],
    [ "name" => "Django", "logo" => "img/skills-django.png" ],
    [ "name" => "Java", "logo" => "img/skills-java.png" ],
    [ "name" => ".NET", "logo" => "img/skills-.net.png" ],

    // Database / Infra
    [ "name" => "Oracle", "logo" => "img/skills-oracle.png" ],
    [ "name" => "Linux", "logo" => "img/skills-linux.png" ], 
    [ "name" => "Cloud AWS", "logo" => "img/skills-cloud-aws.png" ],

    // Other
    [ "name" => "Figma", "logo" => "img/skills-figma.png"],
    [ "name" => "Photoshop", "logo" => "img/skills-photoshop.png"],
];

// Define projects
$projects = [
    [
        "img" => "https://cdn.dribbble.com/userupload/17719501/file/original-fe25b3f94b2b4a9f29c0fb8c789fea65.png?resize=752x564&vertical=center",
        "name" => "Playground",
        "description" => "An experimental platform where I test and prototype new web technologies, frameworks, and design ideas before applying them in production projects.",
        "tech" => ["HTML", "CSS", "Bootstrap", "JavaScript", "AJAX", "Node.js", "Express.js", "MySQL", "Git", "GitHub", "Google Analytics"],
        "button" => "Live Preview",
        "link" => "https://app.playground.ca/"
    ],
    [
        "img" => "img/projects-studhub.jpg",
        "name" => "Studhub",
        "description" => "A CRM platform built to help agencies and schools manage leads, students, and applications with smart automation and user-friendly workflows.",
        "tech" => ["HTML", "CSS", "Bootstrap", "JavaScript", "AJAX", "PHP", "MySQL", "Git", "GitHub", "Google Analytics"],
        "button" => "View Images",
        "link" => "https://app.studhub.ca/"
    ],
    [
        "img" => "img/projects-good-shepherd-parish.jpg",
        "name" => "Good Shepherd Parish",
        "description" => "A CRM platform built to help agencies and schools manage leads, students, and applications with smart automation and user-friendly workflows.",
        "tech" => ["HTML", "CSS", "Bootstrap", "JavaScript", "jQuery", "AJAX", "PHP", "MySQL", "Google Analytics"],
        "button" => "Live Preview",
        "link" => "https://cecbrazil.ca/"
    ],
    [
        "img" => "img/projects-myrciis.jpg",
        "name" => "MyRCIIS",
        "description" => "A dedicated student portal for RCIIS that provides international students with access to resources, events, and communication tools during their studies.",
        "tech" => ["HTML", "CSS", "Bootstrap", "JavaScript", "jQuery", "AJAX", "PHP", "Laravel", "MySQL", "Git", "GitHub", "Google Analytics"],
        "button" => "View Images",
        "link" => "https://app.rciis.ca/"
    ],
    [
        "img" => "img/projects-rciis.jpg",
        "name" => "RCIIS",
        "description" => "The official website of RCIIS, designed to showcase programs, events, and school culture while providing a seamless experience for prospective students.",
        "tech" => ["HTML", "CSS", "Bootstrap", "JavaScript", "jQuery", "AJAX", "PHP", "Laravel", "MySQL", "Git", "GitHub", "Figma", "Canva", "Google Analytics"],
        "button" => "Live Preview",
        "link" => "https://rciis.ca/"
    ],
    [
        "img" => "img/projects-woori-italy-fair.jpg",
        "name" => "Woori Italy Fair",
        "description" => "A suite of web applications developed for FUNASE, a public child care foundation in Brazil, streamlining operations and improving accessibility.",
        "tech" => ["HTML", "CSS", "Bootstrap", "JavaScript", "jQuery", "AJAX", "PHP", "WordPress", "MySQL", "Photoshop", "Google Analytics"],
        "button" => "Live Preview",
        "link" => "https://www.funase.pe.gov.br/"
    ],
    [
        "img" => "img/projects-wooriapp.jpg",
        "name" => "WooriApp",
        "description" => "A suite of web applications developed for FUNASE, a public child care foundation in Brazil, streamlining operations and improving accessibility.",
        "tech" => ["HTML", "CSS", "Bootstrap", "JavaScript", "jQuery", "AJAX", "PHP", "MySQL"],
        "button" => "View Images",
        "link" => "https://www.funase.pe.gov.br/"
    ],
    [
        "img" => "img/projects-woori.jpg",
        "name" => "Woori",
        "description" => "A suite of web applications developed for FUNASE, a public child care foundation in Brazil, streamlining operations and improving accessibility.",
        "tech" => ["HTML", "CSS", "Bootstrap", "JavaScript", "jQuery", "AJAX", "PHP", "WordPress", "MySQL", "Photoshop", "Google Analytics"],
        "button" => "Live Preview",
        "link" => "https://www.funase.pe.gov.br/"
    ],
    [
        "img" => "img/projects-funase.jpg",
        "name" => "Funase",
        "description" => "A suite of web applications developed for FUNASE, a public child care foundation in Brazil, streamlining operations and improving accessibility.",
        "tech" => ["HTML", "CSS", "JavaScript", "Java", ".NET", "Oracle"],
        "button" => "Live Preview",
        "link" => "https://www.funase.pe.gov.br/"
    ],
];

// Define work experiences
$work_experiences = [
    [
        "img" => "img/work-experience-rciis.png",
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
        "img" => "img/work-experience-woori.png",
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
        "img" => "img/work-experience-innovative-vision.png",
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
        "img" => "img/work-experience-bloor-importacao.png",
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
        "img" => "img/work-experience-google.png",
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
        "img" => "img/work-experience-cidiz.png",
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
        "img" => "img/work-experience-funase.png",
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
        "img" => "education-troubleshooting-and-debugging-techniques-2025-09.jpg",
        "period" => "Sep 2025",
        "title" => "Troubleshooting and Debugging Techniques",
        "link" => "https://www.coursera.org/learn/troubleshooting-debugging-techniques",
        "provider" => "Google",
        "platform" => "(via Coursera)"
    ],
    [
        "img" => "education-introduction-to-git-and-github-google-2025-02.jpg",
        "period" => "Feb 2025",
        "title" => "Introduction to Git and GitHub",
        "link" => "https://www.coursera.org/learn/introduction-git-github",
        "provider" => "Google",
        "platform" => "(via Coursera)"
    ],
    [
        "img" => "education-using-python-to-interact-with-the-operating-system-google-2025-01.jpg",
        "period" => "Jan 2025",
        "title" => "Using Python to Interact with the Operating System",
        "link" => "https://www.coursera.org/learn/python-operating-system",
        "provider" => "Google",
        "platform" => "(via Coursera)"
    ],
    [
        "img" => "education-crash-course-on-python-google-2024-12.jpg",
        "period" => "Dec 2024",
        "title" => "Crash Course on Python",
        "link" => "https://www.coursera.org/learn/python-crash-course",
        "provider" => "Google",
        "platform" => "(via Coursera)"
    ],
    [
        "img" => "education-graduate-certificate-in-software-engineering-ufpr-2010-12.jpg",
        "period" => "Jan 2009 - Dec 2010",
        "title" => "Graduate Certificate in Software Engineering",
        "link" => "https://das.ufpr.br/",
        "provider" => "UFPR",
        "platform" => ""
    ],
    [
        "img" => "education-undergraduate-degree-in-internet-systems-technology-fmr-2008-12.jpg",
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
 		<script src="https://www.google.com/recaptcha/api.js?render=6LcIxcsrAAAAALKFdPEmXPkusdFiBOOnJm_WPKKL"></script>

 		<!-- JS: Custom -->
 		<script src="js/index.js?v=<?= filemtime(__DIR__ . '/js/index.js') ?>" defer></script>

	</head>
	
	<body>

		<!-- Wrapper -->
		<div class="d-flex vh-100">

			<?php require_once __DIR__ . '/src/includes/sidebar.php' ?>

			<!-- Main -->
			<main class="flex-grow-1 overflow-auto" data-bs-spy="scroll" data-bs-target=".scrollspy-nav" data-bs-smooth-scroll="true" tabindex="0">

				<?php require_once __DIR__ . '/src/includes/navbar.php' ?>

				<!-- Intro -->
				<section id="intro" class="bg-light py-10">

					<div class="container">

						<div class="row justify-content-center">

							<div class="col-11 col-xl-8">

								<h1 class="fw-bolder">Hi, I'm Daniel Valenca</h1>

                                <p class="fs-5 mt-3 mt-lg-4">
                                    Full Stack Web Developer with <?= date('Y') - 2011 ?>+ years of experience, focused on creating solutions that solve real problems, help people work more efficiently, save time, and achieve better results. Beyond work, I am always pursuing new certificates and studies to continuously expand my knowledge.
                                </p>

								<div class="d-flex flex-column gap-1 fs-5 mt-3 mt-lg-4">
									<p>💻 Full-Time Web Developer at <a href="https://rciis.ca/" class="link-primary text-decoration-none fw-bold" target="_blank">RCIIS</a></p>
									<p>📚 Earning a <a href="https://www.coursera.org/professional-certificates/google-it-automation" class="link-primary text-decoration-none fw-bold" target="_blank">IT Automation with Python Certificate</a> by Google (via Coursera)</p>
                                    <p>🚀 Building <a href="https://app.studhub.ca/" class="link-primary text-decoration-none fw-bold" target="_blank">Studhub</a>, a platform for education & immigration agencies</p>
								</div>

                                <div class="card border-light-subtle rounded-4 p-4 mt-3 mt-lg-4">

                                    <div class="row text-center g-3">

                                        <div class="col-4 col-md border-end border-light-subtle">
                                            <p class="fs-4 fw-semibold"><?= date('Y') - 2011 ?>+</p>
                                            <p class="text-body-secondary">Experience</p>
                                        </div>

                                        <div class="col-4 col-md border-end border-light-subtle">
                                            <p class="fs-4 fw-semibold">30+</p>
                                            <p class="text-body-secondary">Projects</p>
                                        </div>

                                        <div class="col-4 col-md border-end border-light-subtle">
                                            <p class="fs-4 fw-semibold"><?= count($educations) ?>+</p>
                                            <p class="text-body-secondary">Certificates</p>
                                        </div>

                                        <div class="col-4 col-md border-end border-light-subtle">
                                            <p class="fs-4 fw-semibold">26+</p>
                                            <p class="text-body-secondary">Technologies</p>
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

												<?php foreach ($skills_best as $skill_best): ?>

													<div class="col-4">

														<div class="card border-light-subtle border-light rounded-4 p-3 mt-3 mt-lg-4">

															<div class="ratio ratio-1x1">
																<img src="<?= $skill_best['logo'] ?>"
																     alt="<?= htmlspecialchars($skill_best['name']) ?> logo"
																     class="w-100 h-100 object-fit-contain" loading="lazy">
															</div>

														</div>

														<p class="mt-2"><?= htmlspecialchars($skill_best['name']) ?></p>

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

												<?php foreach ($skills_working as $skill_working): ?>

													<div class="col-4">

														<div class="card border-light-subtle border-light rounded-4 p-3 mt-3 mt-lg-4">

															<div class="ratio ratio-1x1">
																<img src="<?= $skill_working['logo'] ?>"
																     alt="<?= htmlspecialchars($skill_working['name']) ?> logo"
																     class="w-100 h-100 object-fit-contain" loading="lazy">
															</div>

														</div>

														<p class="mt-2"><?= htmlspecialchars($skill_working['name']) ?></p>

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

                                <?php foreach ($projects as $index => $project): ?>

                                    <?php if ($index < 4): ?> 

                                        <!-- Always visible projects -->
                                        <div class="card border-light-subtle rounded-4 mt-4 mt-lg-5">

                                            <div class="row g-0">

                                                <div class="col-lg-5">

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

                                                            <?php if (!empty($project['tech'])): ?>

                                                                <p class="small text-body-secondary mt-2">
                                                                    <?php foreach ($project['tech'] as $i => $tech): ?>
                                                                        <?php if ($i > 0): ?>
                                                                            <i class="bi bi-dot text-secondary small"></i>
                                                                        <?php endif; ?>
                                                                        <?= htmlspecialchars($tech) ?>
                                                                    <?php endforeach; ?>
                                                                </p>

                                                            <?php endif; ?>

                                                            <p class="mt-3 mt-lg-4">
                                                                <a href="<?= htmlspecialchars($project['link']) ?>" class="btn btn-primary" target="_blank">
                                                                    <?= htmlspecialchars($project['button']) ?>
                                                                </a>
                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    <?php endif; ?>

                                <?php endforeach; ?>

                                <!-- Collapsed section -->
                                <div class="collapse" id="more-projects">

                                    <?php foreach ($projects as $index => $project): ?>

                                        <?php if ($index >= 4): ?>

                                            <div class="card border-light-subtle rounded-4 mt-4 mt-lg-5">

                                                <div class="row g-0">

                                                    <div class="col-lg-5">

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

                                                                <?php if (!empty($project['tech'])): ?>

                                                                    <p class="small text-body-secondary mt-2">
                                                                        <?php foreach ($project['tech'] as $i => $tech): ?>
                                                                            <?php if ($i > 0): ?>
                                                                                <i class="bi bi-dot text-secondary small"></i>
                                                                            <?php endif; ?>
                                                                            <?= htmlspecialchars($tech) ?>
                                                                        <?php endforeach; ?>
                                                                    </p>

                                                                <?php endif; ?>

                                                                <p class="mt-3 mt-lg-4">
                                                                    <a href="<?= htmlspecialchars($project['link']) ?>" class="btn btn-primary" target="_blank">
                                                                        <?= htmlspecialchars($project['button']) ?>
                                                                    </a>
                                                                </p>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        <?php endif; ?>

                                    <?php endforeach; ?>

                                </div>

                                <!-- Toggle button -->
                                <div class="text-center mt-4 mt-lg-5">
                                    <button id="toggle-projects" 
                                            class="btn btn-light-primary" 
                                            type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#more-projects" 
                                            aria-expanded="false" 
                                            aria-controls="more-projects">
                                        View More
                                    </button>
                                </div>
                                
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

                                <?php if ($work_experiences): ?>

                                    <div class="accordion mt-3 mt-lg-4 rounded-4 border-0 overflow-hidden" id="accordion-work-experience">

                                        <?php foreach ($work_experiences as $index => $work_experience): ?>

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
                                                                <img src="<?= htmlspecialchars($work_experience['img']) ?>"
                                                                alt="<?= htmlspecialchars($work_experience['company']) ?> logo"
                                                                class="object-fit-contain"
                                                                loading="lazy"
                                                                style="width: 48px; height: 48px;">
                                                            </div>

                                                            <div class="ms-3 text-start">
                                                                <h4 class="fs-5" style="line-height: 1.7rem;">
                                                                    <?= htmlspecialchars($work_experience['position']) ?>
                                                                    at <strong><?= htmlspecialchars($work_experience['company']) ?></strong>
                                                                </h4>
                                                                <p class="text-body-secondary mt-1 mt-lg-2">
                                                                    <?= htmlspecialchars($work_experience['period']) ?>
                                                                    <i class="bi bi-dot text-secondary small"></i> 
                                                                    <?= htmlspecialchars($work_experience['location']) ?>
                                                                </p>
                                                            </div>

                                                        </div>

                                                    </button>

                                                </h2>

                                                <div id="collapse-<?= $index ?>" 
                                                class="accordion-collapse collapse" 
                                                data-bs-parent="#accordion-work-experience">

                                                    <?php if (!empty($work_experience['description'])): ?>

                                                        <div class="p-0 pb-4">

                                                            <ul class="mb-0 ps-4">
                                                                <?php foreach ($work_experience['description'] as $i => $description): ?>
                                                                    <li class="<?= $i > 0 ? 'mt-2' : '' ?>">
                                                                        <?= htmlspecialchars($description) ?>
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
										    	 style="background: url('img/contact.jpeg') center/cover no-repeat; min-height: 200px;">
										 	</div>

										 	<div class="h-100 rounded-end-4 d-none d-lg-block" 
										    	 style="background: url('img/contact.jpeg') center/cover no-repeat; min-height: 200px;">
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