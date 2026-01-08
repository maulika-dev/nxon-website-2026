
@extends('layouts.layout')
@section('content')
<div></div>
<section class="hero">
    <!-- Ellipse background shapes -->
    <div class="ellipse ellipse-5"></div>
    <div class="ellipse ellipse-6"></div>
    <div class="ellipse ellipse-7"></div>
    <div class="carousel-container">
        <!-- Slide 1 -->
        <div class="carousel-slide active">
            <!-- <img src="./Image/gif2.gif" alt="Carousel Image" class="carousel-image" /> -->
            <video class="carousel-video" autoplay muted loop playsinline>
                <source src="<?=  VIDEO_PATH .'/slide1.webm' ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-overlay"></div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-slide">
            <!-- <video autoplay muted loop playsinline>
                <source src="./Image/video.mp4" type="video/mp4"></video> -->
            <video class="carousel-video" autoplay muted loop>
                <source src="<?=  VIDEO_PATH .'/v3.webm' ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- <img src="./Image/gif3.gif" alt="Carousel Image" class="carousel-image-2" /> -->
            <div class="carousel-overlay"></div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-slide">
            <!-- <img src="./Image/gif5.gif" alt="Carousel Image" class="carousel-image-2" /> -->
            <video class="carousel-video" autoplay muted loop>
                <source src="<?=  VIDEO_PATH .'/nvr_v.webm' ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-overlay"></div>
        </div>
        <!-- Slide 4 -->
        <div class="carousel-slide">
            <!-- <img src="./Image/gif6.gif" alt="Carousel Image" class="carousel-image-3" /> -->
            <video class="carousel-video" autoplay muted loop>
                <source src="<?=  VIDEO_PATH .'/sdkvi.webm' ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-overlay"></div>
        </div>
        <!-- Slide 5 -->
        <div class="carousel-slide">
            <video class="carousel-video" autoplay muted loop>
                <source src="<?=  VIDEO_PATH .'/slide5.webm' ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-overlay"></div>
        </div>
    </div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <h1 class="hero-title" id="hero-title" data-aos="fade-right" data-aos-delay="200">Next-Gen IP
                Camera,
                <br><span>Solutions in Progress</span>
            </h1>
            <p class="hero-subtitle" id="hero-subtitle" data-aos="fade-left" data-aos-delay="400">NXON AI is a
                high-tech
                design house and product company, building
                the future of Edge AI cameras, intelligent NVRs, and surveillance ecosystems.
            </p>
            <div class="hero-buttons" data-aos="zoom-in" data-aos-delay="600">
                <a href="./solution.html" class="btn btn-primary">Explore Solutions</a>
                <a href="./contact.html" class="btn btn-outline">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- Carousel Navigation -->
    <div class="carousel-dots">
        <div class="dot active" data-index="0">
            <span class="progress"></span>
            <span class="time">5</span>
        </div>
        <div class="dot" data-index="1">
            <span class="progress"></span>
            <span class="time">5</span>
        </div>
        <div class="dot" data-index="2">
            <span class="progress"></span>
            <span class="time">5</span>
        </div>
        <div class="dot" data-index="3">
            <span class="progress"></span>
            <span class="time">5</span>
        </div>
        <div class="dot" data-index="4">
            <span class="progress"></span>
            <span class="time">5</span>
        </div>
    </div>
</section>

<section class="who-we-are">  
    <div class="content-container">
        <div class="section-header">
            <div class="about-content">
                <div class="about-text">
                    <div class="about-label">Who We Are</div>
                    <h2>Shaping Our Journey with Innovation and Dedication</h2>
                    <p>NXON.AI is an Indian-born engineering powerhouse with a global vision. With 14+ years of
                        embedded
                        product
                        development expertise, we help accelerate innovation — from chip-level design to
                        AI-enabled
                        platforms
                        at
                        the edge.
                    </p>
                </div>
                <div class="about-image">
                    <img src="<?= IMAGE_PATH.'/home/office.webp' ?>" alt="Innovation Cityscape">
                </div>
            </div>
            
            <div class="pillars-wrapper">
                <div class="header-piller">
                    <h1>Our Four Pillars of Edge Intelligence</h1>
                    <p>At NXON, every product — from the smallest camera module to the most complex analytics
                        platform — is
                        built on four engineering pillars that define our philosophy and technology stack.
                    </p>
                </div>
                <!-- Pillar 1: AI Camera Design - Image Left, Content Right -->
                <div class="pillar-container pillar-layout-left" data-pillar="1">
                    <div class="pillar-visual-section">
                        <img src="<?= IMAGE_PATH.'/home/AIdesign.webp' ?>" alt="AI Camera Design">
                    </div>
                    <div class="pillar-text-section">
                        <!-- <div class="pillar-icon-badge">📷</div> -->
                        <h2>AI Camera Design & Engineering</h2>
                        <p>We specialize in end-to-end camera design — from sensor selection and ISP tuning to
                            firmware, AI integration, and field testing.
                        </p>
                        
                    </div>
                </div>
                <!-- Pillar 2: Edge AI Intelligence - Content Left, Image Right -->
                <div class="pillar-container pillar-layout-right" data-pillar="2">
                    <div class="pillar-visual-section">
                        <img src="<?= IMAGE_PATH.'/home/Edgeai.webp' ?>" alt="Edge AI Intelligence">
                    </div>
                    <div class="pillar-text-section">
                        <!-- <div class="pillar-icon-badge">⚙️</div> -->
                        <h2>Edge AI Intelligence</h2>
                        <p>Intelligence at the edge — NXON cameras and NVRs process vision AI on-device for
                            real-time insights, faster response, minimal bandwidth, and lower costs.
                        </p>
                        
                    </div>
                </div>
                <!-- Pillar 3: Unified SDK - Image Left, Content Right -->
                <div class="pillar-container pillar-layout-left" data-pillar="3">
                    <div class="pillar-visual-section">
                        <img src="<?= IMAGE_PATH.'/home/SDK.webp' ?>" alt="Unified SDK">
                    </div>
                    <div class="pillar-text-section">
                        <!-- <div class="pillar-icon-badge">🧠</div> -->
                        <h2>Unified SDK Ecosystem</h2>
                        <p>NXON’s three SDKs — NX-CAM, NX-VISION, and NX-EDGE — enable fast integration,
                            efficient
                            deployment, and reduced development costs.
                        </p>
                        
                    </div>
                </div>
                <!-- Pillar 4: Hybrid Cloud - Content Left, Image Right -->
                <div class="pillar-container pillar-layout-right" data-pillar="4">
                    <div class="pillar-visual-section">
                        <img src="<?= IMAGE_PATH.'/home/ant1.webp' ?>" alt="Hybrid Cloud">
                    </div>
                    <div class="pillar-text-section">
                        <!-- <div class="pillar-icon-badge">☁️</div> -->
                        <h2>Hybrid Edge-Cloud Platform</h2>
                        <p>ANTARIX AI unifies edge devices, NVRs, and analytics into one platform — processing
                            video
                            locally, cutting cloud costs by up to 70%, and enabling secure, fleet-scale insights
                            and
                            dashboards.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="solutions-section">
    <div class="section-header-solution">
        <h1>The solutions you need the intelligence you deserve.</h1>
    </div>
    <div class="content-wrapper">
        <div class="sidebar-menu-solution">
            <div class="menu-option active" data-target="ai-cameras">AI Cameras</div>
            <div class="menu-option" data-target="edge-nvr">Edge NVR Range</div>
        </div>
        <div class="display-area">
            <!-- AI Cameras Panel -->
            <div class="content-panel active" id="ai-cameras">
                <div class="camera-grid">
                    <div class="camera-card">
                        <a href="./bodycamfinal.html">
                            
                            <img src="<?= IMAGE_PATH.'/home/bodycam1.webp' ?>" alt="Bodycam"
                                class="camera-image" />
                            <div class="camera-overlay">
                                <h3>Bodycam</h3>
                                <p>Wearable camera for law enforcement and security personnel</p>
                            </div>
                        </a>
                    </div>
                    <div class="camera-card">
                        <a href="./dashcam.html">
                            
                            <img src="<?= IMAGE_PATH.'/home/Dashcam.webp' ?>" alt="Dashcam"
                                class="camera-image">
                            <div class="camera-overlay">
                                <h3>Dashcam</h3>
                                <p>Vehicle-mounted camera with AI-powered incident detection</p>
                            </div>
                        </a>
                    </div>
                    <div class="camera-card">
                        
                        <img src="<?= IMAGE_PATH.'/home/dorball.webp' ?>" alt="Doorbell" class="camera-image">
                        <div class="camera-overlay">
                            <h3>Doorbell Camera</h3>
                            <p>Smart doorbell with facial recognition and visitor alerts</p>
                        </div>
                    </div>
                    <div class="camera-card">
                        <a href="./droncam.html">
                            
                            <img src="<?= IMAGE_PATH.'/home/droncam1.webp' ?>" alt="DroneCam"
                                class="camera-image">
                            <div class="camera-overlay">
                                <h3>DroneCam</h3>
                                <p>Aerial surveillance with real-time AI object tracking</p>
                            </div>
                        </a>
                    </div>
                    <div class="camera-card">
                        
                        <img src="<?= IMAGE_PATH.'/home/IPCam.webp' ?>" alt="IP Camera" class="camera-image">
                        <div class="camera-overlay">
                            <h3>IP Camera</h3>
                            <p>Network-connected camera for commercial surveillance</p>
                        </div>
                    </div>
                    <div class="camera-card">
                        
                        <img src="<?= IMAGE_PATH.'/home/wificam.webp' ?>" alt="WiFi Camera" class="camera-image">
                        <div class="camera-overlay">
                            <h3>Wi-Fi / 4G Camera</h3>
                            <p>Wireless camera with cloud connectivity and remote access</p>
                        </div>
                    </div>
                    <div class="camera-card">
                        
                        <img src="<?= IMAGE_PATH.'/home/PTZcam.webp' ?>" alt="PTZ Camera" class="camera-image">
                        <div class="camera-overlay">
                            <h3>PTZ Camera</h3>
                            <p>Pan-Tilt-Zoom camera with intelligent auto-tracking</p>
                        </div>
                    </div>
                    <div class="camera-card">
                        <img src="<?= IMAGE_PATH.'/home/acsesscam.webp' ?>" alt="Access Control" class="camera-image">
                        <div class="camera-overlay">
                            <h3>Access Control Camera</h3>
                            <p>Integrated camera for secure entry and facial authentication</p>
                        </div>
                    </div>
                    <div class="camera-card">
                    
                        <img src="<?= IMAGE_PATH.'/home/defensecam.webp' ?>" alt="Defense Camera" class="camera-image">
                        <div class="camera-overlay">
                            <h3>Defence Camera</h3>
                            <p>Military-grade surveillance with thermal and night vision</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Edge NVR Range Panel -->
            <div class="content-panel" id="edge-nvr">
                <div class="nvr-card">
                    <div class="NVR-left">
                        <h2>Edge NVR Range</h2>
                        <div class="nvr-image-wrapper">
                            
                            <img src="<?= IMAGE_PATH.'/home/edgenvr_resized.webp' ?>" alt="Edge NVR Device" class="nvr-image">
                        </div>
                    </div>
                    <div class="NVR-right">
                        <p>4 / 8 / 16 / 32+ Channel Edge NVRs with integrated analytics, timeline search, and
                            hybrid
                            storage.
                        </p>
                        <div class="nvr-features">
                            <div class="nvr-feature">
                                <h4><i class="fas fa-brain"></i>Integrated Analytics</h4>
                                <p>Real-time AI processing on-device for instant insights</p>
                            </div>
                            <div class="nvr-feature">
                                <h4><i class="fas fa-search"></i>Timeline Search</h4>
                                <p>Intelligent video search with event-based indexing</p>
                            </div>
                            <div class="nvr-feature">
                                <h4><i class="fas fa-cloud"></i>Hybrid Storage</h4>
                                <p>Local and cloud storage with automatic failover</p>
                            </div>
                            <div class="nvr-feature">
                                <h4><i class="fas fa-layer-group"></i>Multi-Channel Support</h4>
                                <p>Scalable from 4 to 32+ camera channels</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slide-section section-blue sdk-layer snap-section">
    <!-- Animated chip layout -->
    <div class="slide-content">
        <h1>Build Faster with NX-SDKs</h1>
        <p>
            Our SDK suite empowers partners to create AI-driven cameras and NVRs rapidly,
            with reduced cost and maximum flexibility.
        </p>
        <a href="#" class="btn btn-outline">→ Get SDK Access</a>
    </div>
    <div class="layout-container">
        
        <div class="img img1"><img src="<?= IMAGE_PATH.'/home/sdk2.webp' ?>" alt=""></div>
    </div>
</section>

<section class="slide-section section-purple ">
    <div class="slide-content-ANTARIX">
        <h1>ANTARIX AI — Prompt It and Seek It</h1>
        <p>
            ANTARIX AI is a unified surveillance intelligence platform that connects cameras, NVRs, and
            analytics
            modules to transform video into searchable, actionable insights. With a hybrid edge-cloud
            architecture,
            it delivers instant on-device intelligence, optimizes cloud storage, and scales effortlessly across
            smart cities, enterprises, and defense networks—all backed by real-time dashboards, multi-site
            device
            management, seamless API integrations, and secure low-latency data flow with full audit logging.
        </p>
        <a href="#" class="btn btn-outline">→ Discover ANTARIX AI Platform</a>
    </div>
</section>

<section id="why-nxon" class="nxon-section ">
    <!-- Blue Neon Curved Background -->
    <div class="nxon-bg-wrapper">
        
        <img src="<?= IMAGE_PATH.'/home/why-bg.webp' ?>" alt="Blue neon curved background" />
        <div class="nxon-overlay"></div>
    </div>
    <div class="nxon-container">
        <div class="nxon-text-center">
            <h2 class="nxon-title">
                <span class="nxon-gradient-text">Why Choose</span> NXON AI?
            </h2>
            <p class="nxon-subtitle">
                We bridge the gap between cloud-dependent AI and real-world embedded applications, delivering
                unprecedented
                performance and cost efficiency.
            </p>
        </div>
        <!-- 4 Cards Grid -->
        <div class="nxon-grid">
            <!-- Card 1 -->
            <div class="nxon-card">
                <div class="nxon-icon">
                    
                    <img src="<?= IMAGE_PATH.'/icon/ai-application.png' ?>" />
                </div>
                <!-- <h3 class="nxon-card-title">Smart AI,Smarter Savings</h3> -->
                <p class="nxon-card-text">Reduce your cloud expenses effortlessly
                    with smart Edge AI storage and computing solutions.
                </p>
            </div>
            <!-- Card 2 -->
            <div class="nxon-card">
                <div class="nxon-icon"> 
                                
                    <img src="<?= IMAGE_PATH.'/icon/ai-chip.png' ?>" />
                </div>
                <!-- <h3 class="nxon-card-title">AI at the Edge</h3> -->
                <p class="nxon-card-text">Experience instant intelligence at the edge
                    with AI running directly on your device, not the cloud.
                </p>
            </div>
            <!-- Card 3 -->
            <div class="nxon-card">
                <div class="nxon-icon">
                    
                    <img src="<?= IMAGE_PATH.'/icon/cloud-api.png' ?>" />
                </div>
                <!-- <h3 class="nxon-card-title">SDKs & APIs for the Future</h3> -->
                <p class="nxon-card-text">Flexible SDKs and powerful APIs for OEMs and partners
                    to build, connect, and innovate faster at the edge.
                </p>
            </div>
            <!-- Card 4 -->
            <div class="nxon-card">
                <div class="nxon-icon">  
                    <img src="<?= IMAGE_PATH.'/icon/global-solution.png' ?>" />
                </div>
                <!-- <h3 class="nxon-card-title">Innovating for a Smarter World</h3> -->
                <p class="nxon-card-text">Driven by India-based innovation,
                    delivering AI solutions that scale across the world.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="custom-container">
    
    <img src="<?= IMAGE_PATH.'/home/Ellipse 13.webp' ?>" alt="ellipse" class="ellipse-bg">
    <h1 class="custom-title">Testimonials</h1>
    <div class="custom-testimonial-slider custom-slider autoplay">
        <div class="custom-testimonial-card">
            <p class="custom-testimonial-text">"Their team went above and beyond to understand our unique
                requirements
                in
                embedded design. The communication was transparent, the delivery was on point, and the results
                spoke
                for
                themselves."
            </p>
            <div class="author">
                
                <img src="<?= IMAGE_PATH.'/home/user.png' ?>" alt="Sharad Sharma" class="custom-testimonial-image">
                <p class="custom-testimonial-author">Sharad Sharma</p>
            </div>
            <div class="custom-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="custom-testimonial-card">
            <p class="custom-testimonial-text">"Working with this team has been an absolute pleasure. Their
                expertise
                and
                attention to detail helped us achieve our project goals ahead of schedule."
            </p>
            <div class="author">
                <img src="<?= IMAGE_PATH.'/home/user.png' ?>" alt="Sharad Sharma" class="custom-testimonial-image">
                <p class="custom-testimonial-author">Jennifer Lee</p>
            </div>
            <div class="custom-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="custom-testimonial-card">
            <p class="custom-testimonial-text">"The innovative solutions they provided exceeded our
                expectations. I
                highly
                recommend their services for any complex technical challenges."
            </p>
            <div class="author">
                <img src="<?= IMAGE_PATH.'/home/user.png' ?>" alt="Sharad Sharma" class="custom-testimonial-image">
                <p class="custom-testimonial-author">Michael Chen</p>
            </div>
            <div class="custom-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="custom-testimonial-card">
            <p class="custom-testimonial-text">"I was impressed by their professionalism and technical
                knowledge.
                They
                delivered a solution that perfectly matched our vision and requirements."
            </p>
            <div class="author">
                <img src="<?= IMAGE_PATH.'/home/user.png' ?>" alt="Sharad Sharma" class="custom-testimonial-image">
                <p class="custom-testimonial-author">Sarah Johnson</p>
            </div>
            <div class="custom-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="custom-testimonial-card">
            <p class="custom-testimonial-text">"Their team consistently delivers high-quality work on time.
                They've
                become
                our trusted partner for all our technical development needs."
            </p>
            <div class="author">
                <img src="<?= IMAGE_PATH.'/home/user.png' ?>" alt="David Wilson" class="custom-testimonial-image">
                <p class="custom-testimonial-author">David Wilson</p>
            </div>
            <div class="custom-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
    </div>
    <div class="custom-contact-section">
        <button class="btn btn-outline">
        Contact Us
        <i class="fas fa-comment-dots"></i>
        </button>
    </div>
</section>

<section class="infinity-section">
    <h2 class="infinity-title">Our Trusted Brands</h2>
    <div class="infinity-row row-1">
        <div class="infinity-track">
            <img src="<?= IMAGE_PATH.'/logo/Qualcomm-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/alphawire-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/Synaptics-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/alphanumeroremovebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/bosch-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/kyocera-bgremove.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/espressif-bgremove.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/microchip-1-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/infineon-bgremove.png' ?>" />
            
        </div>
    </div>
    <div class="infinity-row row-2">
        <div class="infinity-track">
            <img src="<?= IMAGE_PATH.'/logo/logo_brainchip-bgremove.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/NXP-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/Qualcomm-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/winbond-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/infineon-bgremove.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/Renesas-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/Synaptics-removebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/alphanumeroremovebg.png' ?>" />
            <img src="<?= IMAGE_PATH.'/logo/bosch-removebg.png' ?>" />
        </div>
    </div>
</section>

<section class="cta" id="appointmentSection">
    <div class="container cta-container">
        <h2 class="cta-title">Let's Build the Future Together</h2>
        <p class="cta-subtitle">Join us in building solutions that transform industries and redefine security
            with
            Edge
            Intelligence.
        </p>
        <a href="#" class="btn">Talk to Our Experts</a>
    </div>
</section>

<div class="contact-popup" id="contactPopup">
    <div class="popup-content two-col-popup">
        <span class="close-popup" id="closePopup">&times;</span>
        <!-- LEFT SIDE -->
        <div class="popup-left">
            <div class="popup-window-dots">
                <span class="p-dot red"></span>
                <span class="p-dot yellow"></span>
                <span class="p-dot green"></span>
            </div>
            <h2>Meet with Our Expert</h2>
            <p>Let us show you how our platform can transform the way you work.</p>
            <!-- NEW ANIMATED ICON + TEXT -->
            <!-- <div class="contact-animate-box">
                <i class="fas fa-headset contact-animate-icon"></i>
                <span>Contact Us</span>
                </div> -->
            <div class="contact-badge">
                <i class="fas fa-headset contact-animate-icon"></i>
                <!-- Contact Us -->
            </div>
            <div class="contact-numbers">
                <p>
                    <img src="./Image/home/indiaflag.webp" alt="India Flag" class="flag-icon">
                    079 4039 97389
                </p>
            </div>
            <div class="contact-icons">
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/" target="_blank" class="icon-circle">
                <i class="fab fa-linkedin-in"></i>
                </a>
                <!-- Phone / Call -->
                <a href="tel:+919999999999" class="icon-circle">
                <i class="fas fa-phone"></i>
                </a>
                <!-- Email -->
                <a href="mailto:hello@example.com" class="icon-circle">
                <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
        <!-- RIGHT SIDE -->
        <div class="popup-right">
            <form class="popup-form">
                <div class="form-row">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <input type="text" placeholder="Company">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Phone--</label>
                        <input type="text" id="phone" placeholder="Phone" required pattern="[0-9]{10}">
                    </div>
                    <div class="form-group">
                        <label>Email---</label>
                        <input type="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group full">
                    <label>Subject</label>
                    <input type="text" placeholder="Subject">
                </div>
                <div class="form-group full">
                    <label>Message</label>
                    <textarea placeholder="Message"></textarea>
                </div>
                <button class="submit-btn">Send</button>
            </form>
            <div class="success-message" id="successMessage">
                <i class="fas fa-check-circle"></i>
                Message sent successfully!
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    // for animation  
    document.addEventListener("DOMContentLoaded", () => {
        gsap.registerPlugin(ScrollTrigger);

        const hasAny = (selector) => document.querySelectorAll(selector).length > 0;
        const safeFrom = (selector, vars) => { if (hasAny(selector)) gsap.from(selector, vars); };
        const safeTo = (selector, vars) => { if (hasAny(selector)) gsap.to(selector, vars); };
        const safeScrollTrigger = (config) => {
            if (config.trigger && !hasAny(config.trigger)) return;
            ScrollTrigger.create(config);
        };
    
        gsap.utils.toArray(".snap-section").forEach((sec) => {
            ScrollTrigger.create({
                trigger: sec,
                start: "top top",
                end: "bottom top",
                scrub: true,
                snap: 1,          // 0 → no snap, 1 → fully snap to next
                ease: "power1.inOut"
            });
        });

        safeScrollTrigger({
            trigger: ".solutions-section",
            start: "top top",
            end: "bottom top",
            scrub: true,
            pin: false
        });

        if (hasAny(".smoke-overlay") && hasAny(".sdk-layer")) {
            safeTo(".smoke-overlay", {
                opacity: 1,
                scrollTrigger: {
                    trigger: ".sdk-layer",   // first slide
                    start: "top top",
                    end: "bottom top",
                    scrub: true
                }
            });
        }
    
        gsap.utils.toArray(".slide-section").forEach((sec) => {
            ScrollTrigger.create({
                trigger: sec,
                start: "top top",
                pin: true,
                pinSpacing: false, // disables extra space, so next slide overlaps
            });
    
            gsap.from(sec.querySelector(".slide-content"), {
                opacity: 0,
                y: 100,
                duration: 1,
    
                scrollTrigger: {
                    trigger: sec,
                    start: "top center",
                    toggleActions: "play none none reverse"
                }
            });
    
        });

        safeTo(".img1 img", {
            rotation: -15,
            ease: "none",
            scrollTrigger: {
                trigger: ".layout-container",
                start: "top bottom",
                end: "bottom top",
                scrub: true
            }
        });
    
        if (hasAny(".layer") && hasAny(".slide-section")) {
            gsap.utils.toArray(".layer").forEach((layer, i) => {
                gsap.to(layer, {
                    opacity: 1,
                    y: -20 * i,
                    scale: 1 + i * 0.02,
                    scrollTrigger: {
                        trigger: ".slide-section",
                        start: "top center",
                        end: "bottom top",
                        scrub: true
                    }
                });
            });
        }
    
        // Animate "Who We Are" text
        safeFrom(".about-text", {
            scrollTrigger: {
                trigger: ".about-text",
                start: "top 80%",
                toggleActions: "play none none reverse"
            },
            opacity: 0,
            y: 50,
            duration: 1
        });
    
        // Animate image
        safeFrom(".about-image img", {
            scrollTrigger: {
                trigger: ".about-image",
                start: "top 80%",
                toggleActions: "play none none reverse"
            },
            scale: 0.8,
            opacity: 0,
            duration: 1
        });
    
        // Animate cards one by one
        safeFrom(".card", {
            scrollTrigger: {
                trigger: ".cards-container",
                start: "top 80%",
                toggleActions: "play none none reverse"
    
            },
            opacity: 0,
            y: 50,
            duration: 0.6,
            stagger: 0.2
        });
    
    
        safeFrom(".stat-item", {
            scrollTrigger: {
                trigger: ".stats-container",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            opacity: 0,
            y: 40,
            duration: 0.5,
            stagger: 0.2
        });
    
    
        safeFrom(".nxon-title", {
            scrollTrigger: {
                trigger: ".nxon-title",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            opacity: 0,
            y: 40,
            duration: 1
        });
    
        safeFrom(".nxon-subtitle", {
            scrollTrigger: {
                trigger: ".nxon-subtitle",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            opacity: 0,
            y: 40,
            duration: 1,
            delay: 0.2
        });
    
        gsap.from(".nxon-card", {
            scrollTrigger: {
                trigger: ".nxon-grid",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            opacity: 0,
            y: 30,
            duration: 0.6,
            stagger: 0.2
        });
    
        safeFrom(".custom-title", {
            scrollTrigger: {
                trigger: ".custom-title",
                start: "top 80%",
                toggleActions: "play none none reverse",
    
            },
            opacity: 0,
            y: 50,
            duration: 0.6
        });
    
        // Animate Contact Button
        if (hasAny(".custom-contact-section")) {
            safeFrom(".btn.btn-outline", {
                scrollTrigger: {
                    trigger: ".custom-contact-section",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
    
                },
                opacity: 0,
                y: 50,
                duration: 0.6
            });
        }
    
        // Animate CTA Section
        if (hasAny(".cta-container")) {
            safeFrom([".cta-title", ".cta-subtitle", ".cta .btn"], {
                scrollTrigger: {
                    trigger: ".cta-container",
                    start: "top 80%",
                    toggleActions: "play none none reverse",
    
                },
                opacity: 0,
                y: 50,
                duration: 0.6,
                stagger: 0.2
            });
        }
    
    
        if (hasAny(".header-piller")) {
            gsap.fromTo(".header-piller",
                { opacity: 0, scale: 0.9, y: 50 },   // starting state
                {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    duration: 1.2,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: ".header-piller",
                        start: "top 80%",   // animation starts when header enters viewport
                        toggleActions: "play none none reverse"
                    }
                }
            );
        }
    
        gsap.utils.toArray(".pillar-container").forEach((pillar) => {
            gsap.fromTo(pillar,
                { opacity: 0, scale: 0.8, y: 50 },   // initial state
                {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    duration: 1,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: pillar,
                        start: "top 80%",   // when pillar enters viewport
                        toggleActions: "play none none reverse"
                    }
                }
            );

            gsap.from(pillar.querySelectorAll(".pillar-text-section, .pillar-visual-section"), {
                opacity: 0,
                y: 30,
                duration: 0.8,
                stagger: 0.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: pillar,
                    start: "top 80%"
                }
            });
        });
    
        safeFrom(".sdk-visual img", {
            opacity: 0,
            y: 80,
            scale: 0.8,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".sdk-visual",
                start: "top 85%"
            }
        });
    
    });
    
    document.querySelectorAll('.about-image img').forEach(card => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
    });
    
    document.querySelectorAll('.nxon-card').forEach(card => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
    });
    document.querySelectorAll('.custom-title').forEach(card => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
    });
    
    document.querySelectorAll('.btn.btn-outline').forEach(card => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
    });
    document.querySelectorAll(".cta-title").forEach(card => {
        card.style.opacity = '1';
    
    });
    document.querySelectorAll(".cta-subtitle").forEach(card => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
    });
    document.querySelectorAll(".cta .btn").forEach(card => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
    });
    document.querySelectorAll(".cta").forEach(card => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
    });
    
    //----------------------------pop logic ----------------------------------------- 
    
    // ---------- Popup Elements ----------
    const popup = document.getElementById("contactPopup");
    const closePopup = document.getElementById("closePopup");
    const ctaSection = document.querySelector(".cta");
    const ctaBtn = document.querySelector(".cta .btn");
    const form = document.querySelector(".popup-form");
    const successBox = document.getElementById("successMessage");
    const phoneField = document.getElementById("phone");
    
    
    if (popup) {
        let lastScrollY = window.scrollY;
        let hasEnteredCTA = false;
        let popupShown = false;
        let isManualOpen = false;
        let autoCloseTimer = null;
        let typingTimer = null;
        let userTyping = false;
    
        // ---------- Helpers ----------
        const clearTimers = () => {
            clearTimeout(autoCloseTimer);
            clearTimeout(typingTimer);
        };
    
        const checkClose = () => {
            if (isManualOpen || userTyping) {
                autoCloseTimer = setTimeout(checkClose, 3000);
                return;
            }
            popup.classList.remove("show");
            clearTimers();
        };
    
        // ---------- Open Popup ----------
        function openPopup(auto = true) {
            popup.classList.add("show");
            popupShown = true;
            clearTimers();
            if (auto) autoCloseTimer = setTimeout(checkClose, 10000);
        }
    
        const section = document.getElementById("appointmentSection");
    
        window.addEventListener("scroll", () => {
            if (!section) return;
    
            const goingDown = window.scrollY > lastScrollY;
            lastScrollY = window.scrollY;
    
            const sectionTop = section.getBoundingClientRect().top;
    
            // when scrolling DOWN and entering section top region 0-150px
            if (goingDown && sectionTop <= 400 && sectionTop > -400 && !hasEnteredCTA) {
                hasEnteredCTA = true;   // lock when triggered
                openPopup(true);        // your existing function
            }
    
            // if section fully leaves upward view → reset permission
            if (sectionTop > window.innerHeight) {
                hasEnteredCTA = false;  // unlock trigger again
            }
        });
    
    
        // ---------- Close Button ----------
        closePopup?.addEventListener("click", () => {
            popup.classList.remove("show");
            isManualOpen = false;
            userTyping = false;
            clearTimers();
        });
    
        // ---------- Manual Open ----------
        ctaBtn?.addEventListener("click", (e) => {
            e.preventDefault();
            isManualOpen = true;
            openPopup(false);
        });
    
        // ---------- Phone Only Numbers ----------
        phoneField?.addEventListener("input", function () {
            this.value = this.value.replace(/[^0-9]/g, "");
        });
    
        // ---------- Detect Typing ----------
        if (form) {
            form.querySelectorAll("input, textarea").forEach(f => {
                f.addEventListener("input", () => {
                    userTyping = true;
                    clearTimers();
                    typingTimer = setTimeout(() => {
                        userTyping = false;
                        if (!isManualOpen) autoCloseTimer = setTimeout(checkClose, 5000);
                    }, 3000);
                });
    
                f.addEventListener("focus", () => {
                    userTyping = true;
                    clearTimers();
                });
    
                f.addEventListener("blur", () => {
                    typingTimer = setTimeout(() => {
                        userTyping = false;
                        if (!isManualOpen) autoCloseTimer = setTimeout(checkClose, 5000);
                    }, 1500);
                });
            });
    
            // ---------- On Submit ----------
            form.addEventListener("submit", (e) => {
                e.preventDefault();
    
                successBox?.classList.add("show");
    
                setTimeout(() => {
                    popup.classList.remove("show");
                    form.reset();
                    isManualOpen = false;
                    popupShown = false;
                    userTyping = false;
                    clearTimers();
                    successBox?.classList.remove("show");
                }, 3000);
            });
        }
    }
    
    //piller section 
    
    // Scroll reveal animation
    const observerConfig = {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
    };
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerConfig);
    
    document.querySelectorAll('.pillar-container').forEach(container => {
        revealObserver.observe(container);
    });
    
    // Parallax scroll effect
    window.addEventListener('scroll', () => {
        const containers = document.querySelectorAll('.pillar-container.animate-in');
    
        containers.forEach(container => {
            const rect = container.getBoundingClientRect();
            const scrollProgress = (window.innerHeight - rect.top) / window.innerHeight;
    
            if (scrollProgress > 0 && scrollProgress < 1.2) {
                const img = container.querySelector('.pillar-visual-section img');
                if (img) {
                    const scale = 1 + (scrollProgress * 0.06);
                    img.style.transform = `scale(${Math.min(scale, 1.08)})`;
                }
            }
        });
    });
    
    
    //solution section
    // Menu switching functionality
    const menuOptions = document.querySelectorAll('.menu-option');
    const contentPanels = document.querySelectorAll('.content-panel');
    
    menuOptions.forEach(option => {
        option.addEventListener('click', () => {
            const targetId = option.getAttribute('data-target');
    
            // Switch active menu
            menuOptions.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');
    
            // Switch content
            contentPanels.forEach(panel => panel.classList.remove('active'));
            document.getElementById(targetId).classList.add('active');
    
            // Refresh GSAP once height naturally changes
            setTimeout(() => {
                ScrollTrigger.refresh();
            }, 150);
        });
    });
    
    const observerOption = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observered = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 50);
            }
        });
    }, observerOption);
    
    // Observe all camera cards
    document.querySelectorAll('.camera-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.5s ease';
        observered.observe(card);
    });
    document.querySelectorAll('.nvr-feature').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.5s ease';
        observered.observe(card);
    });

    // Loading screen
    const loader = document.getElementById('loader');
    const mainContent = document.getElementById('main-contant');
    if (loader && mainContent) {
        setTimeout(() => {
            loader.classList.add('hidden');
        
            // SHOW WEBSITE CONTENT
            mainContent.style.opacity = "1";
            mainContent.style.pointerEvents = "auto";
        }, 1000);
    }

    document.addEventListener("scroll", () => {
        const elements = document.querySelectorAll(".fade-in-up, .slide-from-left, .slide-from-right");
        elements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                el.classList.add("active");
            }
        });
    });
    
    
    const heroTitle = document.getElementById("hero-title");
    const heroSubtitle = document.getElementById("hero-subtitle");

    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot'); // ✅ updated
    
    // const heroTitle = document.getElementById('hero-title');
    // const heroSubtitle = document.getElementById('hero-subtitle');
    
    let currentSlide = 0;
    let slideInterval;
    const slideDuration = 4; // seconds per slide
    let countdownTimer;
    
    // Slide content data
    const slideContent = [
        {
            title: `<span class="highlight">Next-Gen</span> IP Camera<br><span>Solutions in Progress</span>`,
            subtitle: "NXON AI is a high-tech design house and product company, building the future of Edge AI cameras, intelligent NVRs, and surveillance ecosystems."
        },
    
        {
            title: `<span class="highlight">Edge AI</span> Cameras,<br><span>Revolutionizing Surveillance</span>`,
            subtitle: "Our intelligent cameras process data at the edge, reducing latency and bandwidth requirements while enhancing security with real-time analytics."
        },
        {
            title: `<span class="highlight">Intelligent</span> NVRs<br><span>Next-Gen Recording Solutions</span>`,
            subtitle: "Hybrid storage systems with built-in AI processing capabilities, providing smarter, more efficient video management and analytics."
        },
        {
            title: `<span class="highlight">AI SDK </span> & Platform<br><span>Developer-Ready Tools</span>`,
            subtitle: "Comprehensive frameworks and APIs that enable developers to quickly integrate edge AI capabilities into their applications and devices."
        },
        {
            title: `<span class="highlight">Complete</span> Ecosystem<br><span>End-to-End </span>`,
            subtitle: "From hardware design to software development, we provide a complete stack of solutions for enterprise-grade surveillance systems."
        }
    ];
    
    
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            const video = slide.querySelector('video');
            if (video && i !== index) video.pause(); // Only pause non-active videos
        });
    
        const current = slides[index];
        current.classList.add('active');
        const video = current.querySelector('video');
        if (video) {
    
            requestAnimationFrame(() => {
                video.play().catch((err) => {
                    if (err.name === 'AbortError') {
                        console.warn('Video play aborted due to pause:', err);
                    } else {
                        console.error('Video play error:', err);
                    }
                });
            });
    
        }
        dots.forEach((dot, i) => {
            dot.classList.remove('active');
            dot.querySelector('.time').textContent = slideDuration;
            dot.querySelector('.progress').style.width = "0%";
            dot.style.background = "rgba(255,255,255,0.3)"; // inactive
        });
    
        const activeDot = dots[index];
        activeDot.classList.add('active');
        activeDot.style.background = "white"; // active
        animateDotProgress(activeDot);
    
        // Fade hero text
        heroTitle.style.opacity = 0;
        heroSubtitle.style.opacity = 0;
        setTimeout(() => {
            heroTitle.innerHTML = slideContent[index].title;
            heroSubtitle.textContent = slideContent[index].subtitle;
            heroTitle.style.opacity = 1;
            heroSubtitle.style.opacity = 1;
        }, 300);
    
        currentSlide = index;
    }
    
    function animateDotProgress(dot) {
        clearInterval(countdownTimer);
        let remaining = slideDuration;
        const timeEl = dot.querySelector('.time');
        const progressEl = dot.querySelector('.progress');
    
        progressEl.style.transition = "width linear";
        progressEl.style.width = "0%";
    
        setTimeout(() => {
            progressEl.style.transitionDuration = `${slideDuration}s`;
            progressEl.style.width = "100%";
        });
    
        timeEl.textContent = remaining;
        countdownTimer = setInterval(() => {
            remaining--;
            timeEl.textContent = remaining;
            if (remaining <= 0) {
                clearInterval(countdownTimer);
    
            }
        }, 1000);
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
    
    function startSlideInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, slideDuration * 1000);
    }
    
    function stopSlideInterval() {
        clearInterval(slideInterval);
        clearInterval(countdownTimer);
    }
    
    
    // Dot clicks & hover
    // Dot clicks
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => { showSlide(index); stopSlideInterval(); startSlideInterval(); });
    });
    // Start
    
    
    setTimeout(() => {
        showSlide(currentSlide);
        startSlideInterval();
    }, 2000);
    
    // Scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    // Animate stats counter
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
    
        function updateCounter() {
            start += increment;
            if (start < target) {
                element.textContent = Math.floor(start) + (element.textContent.includes('+') ? '+' : '');
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target + (element.textContent.includes('+') ? '+' : '');
            }
        }
    
        updateCounter();
    }
    
    // Counter animation when stats section is visible
    const statsObserver = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statValues = entry.target.querySelectorAll('.stat-value');
                statValues.forEach(stat => {
                    const target = parseInt(stat.textContent);
                    animateCounter(stat, target);
                });
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    const statsSection = document.querySelector('.stats');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    //testimonial
    $(document).ready(function () {
        $('.autoplay').slick({
            slidesToShow: 1,             // show 1 main slide
            centerMode: true,            // 👈 enables center alignment
            centerPadding: '400px',      // 👈 controls how much of side slides are visible
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            dots: true,
            arrows: true,
            adaptiveHeight: true,
            pauseOnHover: false,
            speed: 600,
            cssEase: 'ease',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        centerPadding: '100px'
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        centerPadding: '50px'
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerPadding: '20px'
                    }
                }
            ]
        });
    });
</script>

@endsection
