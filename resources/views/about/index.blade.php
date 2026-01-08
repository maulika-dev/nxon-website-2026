@extends('layouts.layout')
@section('content')
    <div></div>
    <section class="aboutpage-hero about-hero">
        <div class="aboutpage-hero-bg">
            <div class="aboutpage-hero-bg-image"></div>
            <div class="aboutpage-network-lines"></div>
        </div>

        <div class="aboutpage-hero-content">
            <h2>About <span class="lightBlue">NXON AI</span></h2>
            <h1>Powering the Next Generation of AI Camera Intelligence</h1>
            <div class="divider"></div>

            <p>Innovation at the <span class="lightBlue">Edge</span>.<br>
                Intelligent Systems for the Real World.</p>
        </div>
    </section>

     <section>
        <div class="container-2">
            <div class="left-section">

                <div class="image-grid">
                    <div class="star-decoration star-1">✦</div>
                    <div class="star-decoration star-2">✦</div>
                    <div class="star-decoration star-3">✦</div>

                    <div class="grid-container">
                        <div class="image-box image-box-1">
                            <img src="<?= IMAGE_PATH.'/about/ab-2.webp' ?>" alt="Team collaboration">
                        </div>
                        <div class="image-box image-box-2">
                            <img src="<?= IMAGE_PATH.'/about/ab-5.webp' ?>" alt="Business professional">
                        </div>
                        <div class="image-box image-box-3">
                            <img src="<?= IMAGE_PATH.'/about/ab-4.webp' ?>" alt="Team meeting">
                        </div>
                        <div class="image-box image-box-4">
                            <img src="<?= IMAGE_PATH.'/about/ab-1.webp' ?>" alt="Team discussion">
                        </div>
                    </div>

                    <div class="center-badge">
                        <div class="badge-icon">+</div>
                    </div>
                </div>
            </div>

            <div class="right-section">
                <div class="about-tag">WHO WE ARE</div>

                <h1>From Silicon to Software, Powering Edge Intelligence.</h1>

                <p class="description">
                    NXON AI specializes in designing and developing next-generation AI camera platforms for OEMs and
                    ODMs, offering optimized hardware, robust SDKs, and intelligent edge-AI capabilities to shape the
                    core infrastructure of India’s modern surveillance ecosystem. </p>

                <div class="feature">
                    <div class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/cctv-camera.png'?>" /></div>
                    <div class="feature-dec">
                        <h3>Unified Ecosystem</h3>
                        <p>We combine camera hardware, embedded AI, and cloud control into one seamless ecosystem for AI
                            Cameras, Vision SDKs, and Edge NVRs.</p>
                    </div>
                </div>

                <div class="feature">
                    <div class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/digital-ecosystem.png'?>" /></div>
                    <div class="feature-dec">
                        <h3>Edge Efficiency</h3>
                        <p>Edge processing cuts cloud costs and reduces latency with on-device intelligence.</p>
                    </div>
                </div>

                <a href="#" class="cta-button">More About Us</a>
            </div>
        </div>
    </section>

     <section class="scroll-stack">
        <div class="about-card mission active">
            <div class="about-card-content">
                <div class="about-card-image left">
                    <img src="<?= IMAGE_PATH.'/about/card1.webp' ?>" alt="Mission Image" />
                </div>
                <div class="about-card-text right">
                    <h2>Our Vision</h2>
                    <p>To enable a safer, smarter, and more connected world by bringing Artificial Intelligence to the
                        Edge — reducing cloud dependency, increasing efficiency, and unlocking real-time insights across
                        industries. </p>

                </div>
            </div>
        </div>
        <div class="about-card vision">
            <div class="about-card-content row-reverse">
                <div class="about-card-text-mission left">
                    <h2>Our Mission</h2>
                    <p>At NXON AI, we deliver end-to-end engineering services and edge AI platforms that empower
                        enterprises, OEMs, and partners to accelerate innovation. From silicon-level design to
                        full-scale AI-enabled products, we bridge the gap between hardware and intelligence. </p>
                </div>
                <div class="about-card-image-mission right">
                    <img src="<?= IMAGE_PATH.'/about/card2.webp'?>" alt="Vision Image" />
                </div>
            </div>
        </div>
        <div class="about-card goals">
            <div class="about-card-content">
                <div class="about-card-image-goal left">
                    <img src="<?= IMAGE_PATH.'/about/goal.webp'?>" alt="Goals Image" />
                </div>
                <div class="about-card-text-goal right">
                    <h2>Our Core values</h2>
                    <div class="goals-grid">

                        <div class="box cardlarge"> <img src="<?= IMAGE_PATH.'/icon/quality.png'?>" class="core-icon" alt="">
                            <h3>Quality</h3>
                            <p>We ensure top-notch engineering with precision and reliability.</p>
                        </div>
                        <div class="box square"><img src="<?= IMAGE_PATH.'/icon/honesty.png'?>" class="core-icon" alt="">
                            <h3>Honesty</h3>
                            <p>Transparent communication and genuine commitment.</p>
                        </div>

                        <div class="box square"> <img src="<?= IMAGE_PATH.'/icon/team1.png'?>" class="core-icon" alt="">
                            <h3>Teamwork</h3>
                            <p>Collaborating to build powerful AI-driven solutions.</p>
                        </div>
                        <div class="box square"> <img src="<?= IMAGE_PATH.'/icon/customer.png'?>" class="core-icon" alt="">
                            <h3>Customer</h3>
                            <p>Delivering solutions tailored to real-world needs.</p>
                        </div>
                        <div class="box square"> <img src="<?= IMAGE_PATH.'/icon/innovation3.png'?>" class="core-icon" alt="">
                            <h3>Innovation</h3>
                            <p>Pushing boundaries to shape the future of Edge-AI.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section techwix-about-section-05 section-padding-small mb-100">
        <div class="container-why">
            <div class="about-wrap">
                <div class="homeContentWrapper text-center">
                    <h5 class="sub-title">Why Choose Us</h5>
                    <h2 class="h2-why">Empowering Innovation, Engineering Excellence: Choose Us for Your Embedded
                        Solutions</h2>
                </div>

                <div class="circular-layout">
                    <div class="connector"></div>

                    <div class="central-circle">
                        Why Choose Us
                    </div>

                    <div class="crm-module module-1">
                        <div class="icon"><i class="fa fa-building"></i></div>
                        <div class="title">Industry Expertise</div>
                        <div class="descr">Deep understanding of diverse industries for tailored solutions</div>
                    </div>

                    <div class="crm-module module-2">
                        <div class="icon"><i class="fa-solid fa-robot"></i></div>
                        <div class="title">Cutting-edge Technologies</div>
                        <div class="descr">Expertise in IoT, AI, machine learning, and more intelligently</div>
                    </div>

                    <div class="crm-module module-3">
                        <div class="icon"><i class="fa fa-handshake"></i></div>
                        <div class="title">Collaborative Partnership</div>
                        <div class="descr">Communication, transparency and teamwork throughout</div>
                    </div>

                    <div class="crm-module module-4">
                        <div class="icon"><i class="fa-solid fa-shield-alt"></i></div>
                        <div class="title">Quality Assurance</div>
                        <div class="descr">Built to the highest standards of quality, reliability.</div>
                    </div>

                    <div class="crm-module module-5">
                        <div class="icon"><i class="fa fa-sliders-h"></i></div>
                        <div class="title">Customized Solutions</div>
                        <div class="descr">Tailored to align with your vision and innovative solutions</div>
                    </div>

                    <div class="crm-module module-6">
                        <div class="icon"><i class="fa fa-route"></i></div>
                        <div class="title">End-to-end Solutions</div>
                        <div class="descr">From concept to deployment for successful outcomes</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="new-stats-section">
        <!-- LEFT SIDE (Title + Text) -->
        <div class="stats-left">
            <h4>CREDIBILITY</h4>
            <h1>Intelligent AI Cameras for <br>Modern Surveillance</h1>
            <p>
                We are actively working on advanced IP-based AI
                cameras. Our focus is on developing intelligent, high-performance camera systems that offer real-time
                monitoring, smart analytics, and enhanced security. With cutting-edge AI technology and reliable design,
                we aim to deliver fast, accurate, and seamless solutions for modern surveillance and safety
                environments.
            </p>
        </div>

        <!-- RIGHT SIDE (Cards / Stats / Pricing) -->
        <div class="stats-right">
            <div class="price-box large">
                <h2>200K+</h2>
                <span>Active Users</span>
            </div>

            <div class="price-box">
                <h2>50%</h2>
                <span>AI Speed Boost</span>
            </div>

            <div class="price-box">
                <h2>98%</h2>
                <span>Accuracy Rate</span>
            </div>

            <div class="price-box large">
                <h2>6 Months</h2>
                <span>Growth Timeline</span>
            </div>
        </div>
    </section>

    <section class="section-team teams section-padding">
        <div class="container-team">
            <div class="team-wrap">
                <div class="homeContentWrapper text-center mb-60">
                    <h2 class="team-h2"> Meet the <span class="yellowPurpelGradient">Brains</span> </h2>
                    <p class="team-subtitle">These people work on making our product best.</p>
                </div>

                <div class="team-grid">
                    <!-- Top Row with Two Profiles -->
                    <div class="team-row-top">
                        <!-- Darshak Patel -->
                        <div class="team-member">
                            <div class="member-image">
                                <img src="<?= IMAGE_PATH.'/team/darshak.png'?>" alt="Darshak Patel">
                            </div>
                            <div class="member-details">
                                <div class="member-info">
                                    <div class="member-name">
                                        Darshak Patel
                                    </div>
                                    <div class="member-position">Founder & CEO</div>
                                </div>
                                <div class="member-bio">
                                    <p>Ex-eInfochips, 14+ years in embedded systems and product strategy.</p>
                                    <!-- <p>The visionary Founder of NXON. With a profound 13-year journey in embedded systems and entrepreneurship, Darshak is the driving force behind NXON's growth.</p>
                                <p>His strategic acumen, coupled with a commitment to innovation and partnership building, shapes the company's trajectory.</p> -->
                                </div>
                                <div class="member-social">
                                    <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://in.linkedin.com/in/darsh-dev" target="_blank"
                                        aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-square" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Pratik Panchal -->
                        <div class="team-member">
                            <div class="member-image">
                                <img src="<?= IMAGE_PATH.'/team/pratik.png'?>" alt="Pratik Panchal">
                            </div>
                            <div class="member-details">
                                <div class="member-info">
                                    <div class="member-name">
                                        Pratik Panchal
                                    </div>
                                    <div class="member-position">Co-Founder & CTO</div>
                                </div>
                                <div class="member-bio">
                                    <p>Ex-eInfochips, 12+ years as product architect and AI systems expert.</p>
                                    <!-- <p>Chief Technology Officer at NXON. With a remarkable 12 years of experience in IoT and embedded systems, Pratik is a seasoned leader with a proven track record of delivering complex projects.</p>
                                <p>He not only leads but also mentors our talented team, ensuring timely project deliverables enriched with value addition.</p> -->
                                </div>
                                <div class="member-social">
                                    <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/pratikpanchal4/" target="_blank"
                                        aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-square" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Row with Centered Profile -->
                    <div class="team-row-bottom">
                        <!-- Mitesh Patel -->
                        <div class="team-member">
                            <div class="member-image">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                    alt="Mitesh Patel">
                            </div>
                            <div class="member-details">
                                <div class="member-info">
                                    <div class="member-name">
                                        Mitesh Patel
                                    </div>
                                    <div class="member-position">Solution Architect</div>
                                </div>
                                <div class="member-bio">
                                    <p>Ex-Quantify, Ex-eInfochips, strong background in embedded product design and
                                        scalable solutions.</p>
                                </div>
                                <div class="member-social">
                                    <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-square" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')

<script>
    gsap.registerPlugin(ScrollTrigger);

    const cardes = document.querySelectorAll(".about-card");

    cardes.forEach((card) => {
        ScrollTrigger.create({
            trigger: card,
            start: "top center",
            end: "bottom center",
            onEnter: () => {
                cardes.forEach(c => {
                    c.classList.remove("active");
                });
                card.classList.add("active");
            },
            onEnterBack: () => {
                cardes.forEach(c => {
                    c.classList.remove("active");
                });
                card.classList.add("active");
            },
        });
    });

    //container3
    document.addEventListener('mousemove', (e) => {
        const cards = document.querySelectorAll('.card');
        const x = e.clientX / window.innerWidth;
        const y = e.clientY / window.innerHeight;

        cards.forEach((card, index) => {
            const speed = (index + 1) * 2;
            const xOffset = (x - 0.5) * speed;
            const yOffset = (y - 0.5) * speed;

            card.style.transform = `translateX(${xOffset}px) translateY(${yOffset}px)`;
        });
    });

    // Reset transform on hover
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-15px) scale(1.02)';
        });

        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateX(0) translateY(0)';
        });
    });

    // Add intersection observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    cards.forEach(card => {
        observer.observe(card);
    });

    //our team
    document.addEventListener('DOMContentLoaded', function () {
        // Intersection Observer for triggering animations when elements come into view
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver(function (entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-team');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all team members
        const teamMembers = document.querySelectorAll('.team-member');
        teamMembers.forEach(member => {
            observer.observe(member);
        });

        // Add interactive hover effect to team cards
        const teamCards = document.querySelectorAll('.team-member');
        teamCards.forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-10px)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0)';
            });
        });

    });

    </script>

@endsection
