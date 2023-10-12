<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="assets/style/styles.css">
    <link rel="stylesheet" href="assets/style/swiper-bundle.min.css">
    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">
    <title>Charles.</title>
</head>
<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
             <a href="#" class="nav__logo">Charles</a>

             <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                           <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link"> 
                            <i class="uil uil-user nav__icon"></i> About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i> Services
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Portfolio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                           <i class="uil uil-message nav__icon"></i> Contact
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
             </div>

             <div class="nav__btns">
                <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
             </div>
        </nav>
    </header>

    <main class="main">
        <!-- HOME -->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/charles-ignacio-0a8871293/" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://fb.me/chaaarles.ei/" target="_blank" class="home__social-icon">
                            <i class="uil uil-facebook-f    "></i>
                        </a>
                        <a href="https://instagr.am/_charlesei/" target="_blank" class="home__social-icon">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="https://github.com/chaaarlesei" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>

                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                <image class="home__blob-img" x="0" y="-10" href="assets/media/profile.png"/>
                            </g>
                        </svg>
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Hi! I am Charles.</h1>
                        <h3 class="home__subtitle">Backend Developer</h3>
                        <p class="home__description">Skilled in the realm of backend development, prioritizing the delivery of top-notch solutions and the establishment of robust functionality</p>
                        <a href="#contact" class="button button--flex">
                            Contact Me <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>

                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll_arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My introduction</span>

            <div class="about__container container grid">
                <img src="assets/media/about.jpg" alt="" class="about__img">

                <div class="about__data">
                    <p class="about__description">I'm a backend deleveoper, a experienced backend developer who thrives on creating resilient and scalable solutions to drive smooth user interactions.</p>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">0</span>
                            <span class="about__info-name">Years <br> experience</span>
                        </div>

                        <div>
                            <span class="about__info-title">1</span>
                            <span class="about__info-name">Completed <br> project</span>
                        </div>

                        <div>
                            <span class="about__info-title">1</span>
                            <span class="about__info-name">Companies <br> worked</span>
                        </div>
                    </div>

                    <div class="about__buttons">
                        <a download="" href="cv/myCV.pdf" class="button button--flex">
                            Download CV<i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>

            <div class="skills__container container grid">
                <div>
                    <!-- SKILLS 1 -->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills_title">Frontend Developer</h1>
                                <span class="skills__subtitle">More than # years</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__number">20%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">React</h3>
                                    <span class="skills__number">10%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__react"></span>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>

                <div>
                    <!-- SKILL 2 -->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>

                            <div>
                                <h1 class="skills_title">Backend Developer</h1>
                                <span class="skills__subtitle">More than # years</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Node Js</h3>
                                    <span class="skills__number">10%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__node"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">SQL</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__sql"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Python</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__python"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <!-- SKILL 3 -->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-swatchbook skills__icon"></i>

                            <div>
                                <h1 class="skills_titles">Designer</h1>
                                <span class="skills__subtitle">More than # years</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Figma</h3>
                                    <span class="skills__number">15%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__figma"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Sketch</h3>
                                    <span class="skills__number">10%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__sketch"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Photoshop</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__photoshop"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Canva</h3>
                                    <span class="skills__number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__canva"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- QUALIFICATION -->
        <section class="qualification section">
            <h2 class="section__title">Qualifications</h2>
            <span class="section__subtitle">My personal journey</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                    <div class="qualification__button button--flex" data-target='#work'>
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Experience
                    </div>
                </div>
                
                <div class="qualification__sections">
                    <!-- Q. Content 1 -->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!-- Q1 -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">College</h3>
                                <span class="qualification__subtitle">Rizal Technological University</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020 - 2024
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">Senior High School</h3>
                                <span class="qualification__subtitle">Access Computer College</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - 2020
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Junior High School</h3>
                                <span class="qualification__subtitle">Nagpayong High School</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2014 - 2018
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>

                            <div>
                                <h3 class="qualification__title">Elementary</h3>
                                <span class="qualification__subtitle">Nagpayong Elementary School</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2008 - 2014
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Q. Content 2 -->
                    <div class="qualification__content" data-content id="work">
                        <!-- Q1 -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Backed Web Developer</h3>
                                <span class="qualification__subtitle">Center for Data Science and Smart Analytics</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2023
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">Backend Web Developer</h3>
                                <span class="qualification__subtitle">Hackaton: Converge's Software Solutions</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2023
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Work Title</h3>
                                <span class="qualification__subtitle">Work Subtitle</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    Year
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What I offer</span>

            <div class="services__container container grid">
                <!-- S1 -->
                <div class="services__content">
                    <div>
                        <i class="uil uil-server services__icon"></i>
                        <h3 class="services__title">Backend <br> Development</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        View More <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Backend <br> Development</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Lorem ipsum dolor.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Lorem ipsum dolor.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Lorem ipsum dolor.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- S1 -->
                <div class="services__content">
                    <div>
                        <i class="uil uil-server services__icon"></i>
                        <h3 class="services__title">Backend <br> Development</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        View More <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Backend <br> Development</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Lorem ipsum dolor.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Lorem ipsum dolor.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Lorem ipsum dolor.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- S1 -->
                <div class="services__content">
                    <div>
                        <i class="uil uil-server services__icon"></i>
                        <h3 class="services__title">Backend <br> Development</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        View More <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Backend <br> Development</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Lorem ipsum dolor.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Lorem ipsum dolor.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Lorem ipsum dolor.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO -->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">My recent work</span>

            <div class="portfolio__container container swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- P1 -->
                    <div class="portfolio__content grid swiper-slide">
                        <center><img src="assets/media/portfolio1.jpg" alt="" class="portfolio__img"></center>

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Facial Recognition</h3>
                            <p class="portfolio__description">Lorem ipsum dolor.</p>
                            <a href="#" class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <!-- P2 -->
                    <div class="portfolio__content grid swiper-slide">
                        <center><img src="assets/media/portfolio2.jpg" alt="" class="portfolio__img"></center>

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Information System</h3>
                            <p class="portfolio__description">Lorem ipsum dolor.</p>
                            <a href="#" class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <!-- P3 -->
                    <div class="portfolio__content grid swiper-slide">
                        <center><img src="assets/media/portfolio3.jpg" alt="" class="portfolio__img"></center>

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Website Backend Development</h3>
                            <p class="portfolio__description">Lorem ipsum dolor.</p>
                            <a href="#" class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div> 
                    </div>
                </div>
                
                <div class="swiper-button-next" id="sn"></div>
                <div class="swiper-button-prev" id="sp"></div>
                <div class="swiper-pagination" id="sp"></div>
            </div>  
        </section>

        <!-- PROJECT -->
        <section class="project section">
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">You have a new project?</h2>
                        <p class="project__description">Contact me and get a 30% discount on your new project!</p>
                        <a href="#contact" class="button button--flex button--white">
                            Contact Me <i class="uil uil-message project__icon button__icon"></i>
                        </a>
                    </div>

                    <img src="assets/media/project.png" alt="" class="project__img">
                </div>
            </div>
        </section>

        <!-- TESTIMONIAL -->
        <section class="testimonial section">
            <h2 class="section__title">Testimonial</h2>
            <span class="section__subtitle">Client's statement</span>

            <div class="testimonial__container container swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- T1 -->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/media/avatar.png" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Testimonial Name</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <!-- T2 -->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/media/avatar.png" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Testimonial Name</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <!-- T3 -->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data">
                            <div class="testimonial__header">
                                <img src="assets/media/avatar.png" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Testimonial Name</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                    </div>
                </div>

                <div class="swiper-button-next" id="sn"></div>
                <div class="swiper-button-prev" id="sp"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contact Me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact__container container grid">
                <div>
                    <!-- C1 -->
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Send me a Message</h3>
                            <span class="contact__subtitle">+639xxxxxxxxx</span>
                        </div>
                    </div>

                    <!-- C2 -->
                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Send me an Email</h3>
                            <span class="contact__subtitle"><a href="mailto:charlesignacio6@gmail.com">charlesignacio6@gmail.com</a></span>
                        </div>
                    </div>

                    <!-- C3 -->
                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__subtitle">Taytay, Rizal - Philippines</span>
                        </div>
                    </div>
                </div>

                <form action="controller.php" class="contact__form grid" method="POST">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="" class="contact__label">Name</label>
                            <input type="text" class="contact__input" name="name" required>
                        </div>

                        <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input type="email" class="contact__input" name="email" required>
                        </div>
                    </div>

                    <div class="contact__content">
                        <label for="" class="contact__label">Project</label>
                        <input type="text" class="contact__input" name="project" required>
                    </div>

                    <div class="contact__content">
                        <label for="" class="contact__label">Message</label>
                        <textarea id="" cols="0" rows="7" class="contact__input" name="message" required></textarea>
                    </div>

                    <div>
                        <button name="contact_btn" class="button button--flex">
                            Send Message
                            <i class="uil uil-message button__icon"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Charles</h1>
                    <span class="footer__subtitle">Backend Developer</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>

                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>

                    <li>
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://fb.me/chaaarles.ei/" target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>

                    <a href="https://instagr.am/_charlesei/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>

                    <a href="https://twitter.com/_charlesei/" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">&#169; Charles. All right reserved</p>
        </div>
    </footer>

    <!-- SCROLL TOP -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!-- JS -->
    <script src="assets/script/swiper-bundle.min.js"></script>
    <script src="assets/script/main.js"></script>
    <script src="assets/script/sweetalert.min.js"></script>
</body>
</html> 

<?php

include('alert.php');

?>