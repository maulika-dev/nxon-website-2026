
<header id="header">
    <div class="container header-container">
        <a href="index.html" class="logo">
        
        <img src="<?= IMAGE_PATH.'/navbar/nxon_white_logo.webp' ?>" class="logo-icon logo-light">
        <img src="<?= IMAGE_PATH.'/navbar/logo.webp' ?>" class="logo-icon logo-dark">
        </a>
        <ul class="nav-menu">
            <li><a href="<?= route('about') ?>" data-link="<?= route('about') ?>">About Us</a></li>
            <li class="has-mega-menu">
                <a href="#">Services</a>
                <!-- MEGA MENU -->
                <div class="mega-menu">
                    <div class="mega-left">
                        <!-- COLUMN 1 -->
                        <div class="mega-column">
                            <h3>Cameras & Sensors</h3>
                            <ul class="mega-list">
                                <li><a href="./bodycamfinal.html" class="default-item" data-img="<?= IMAGE_PATH.'/home/bodycam1.webp' ?>">Bodycam</a></li>
                                <li><a href="./dashcam.html" data-img="<?= IMAGE_PATH.'/home/Dashcam.webp' ?>">Dashcam</a>
                                </li>   
                                <li><a href="./droncam.html" data-img="<?= IMAGE_PATH.'/home/droncam1.webp' ?>">DroneCam</a>
                                </li>
                                <li><a href="./IPcamera.html" data-img="<?= IMAGE_PATH.'/home/IPCam.webp' ?>">IP Camera</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                        <!-- COLUMN 2 -->
                        <div class="mega-column">
                            <h3>Network Video Recorders</h3>
                            <ul class="mega-list">
                                <li><a href="./NVR.html">NVR</a></li>
                            </ul>
                            <h3 style="margin-top:25px;">VMS Integration</h3>
                            <ul class="mega-list">
                                <li><a href="#">Milestone VMS</a></li>
                                <li><a href="#">Genetec VMS</a></li>
                            </ul>
                        </div>
                        <!-- COLUMN 3 -->
                        <div class="mega-column">
                            <h3>Vision & Edge AI</h3>
                            <ul class="mega-list">
                                <li><a href="#">Vision SDK</a></li>
                            </ul>
                            <h3 style="margin-top:25px;">All Products</h3>
                        </div>
                    </div>
                    <div class="mega-right">
                        <img id="previewImg" src="<?= IMAGE_PATH.'/navbar/logo.webp' ?>" alt="NXON preview">
                    </div>
                </div>
                <!-- RIGHT IMAGE PREVIEW -->
            </li>
            <li><a href="#" data-link="solution.html">Solution</a></li>
            <li><a href="#" data-link="career.html">Career</a></li>
            <li><a href="#" data-link="blog.html">Blog</a></li>
        </ul>
        <button class="contact-btn"><a href="contact.html">Contact us</a></button>
        <button class="mobile-menu-btn">
        <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<div class="sidebar-menu" id="sidebarMenu">
    <div class="sidebar-header">
        <a href="index2.html">
        
        <img src="<?= IMAGE_PATH.'/navbar/logo.webp' ?>" alt="NXON Logo" class="sidebar-logo" />
        </a>
        <button class="close-btn" onclick="toggleMenu()">×</button>
    </div>
    <ul class="sidebar-links" id="mainMenu">
        <li><a href="about.html"><i class="fa-solid fa-chevron-right"></i> About Us</a></li>
        <!-- OPEN SERVICES PAGE -->
        <li class="has-dropdown">
            <a onclick="toggleServicesDropdown()">
            <i class="fa-solid fa-chevron-right"></i> Services
            </a>
            <ul class="services-dropdown" id="servicesDropdown">
                <li onclick="openPage('camerasPage')">Cameras & Sensors</li>
                <li onclick="openPage('edgenvrPage')">Network Video Recorders</li>
                <li onclick="openPage('vmsPage')">VMS Integration</li>
                <li onclick="openPage('visionPage')">Vision & Edge AI</li>
                <li onclick="openPage('allProductsPage')">All Products</li>
            </ul>
        </li>
        <!-- OPEN SOLUTIONS PAGE -->
        <li onclick="openPage('solutionsPage')">
            <a><i class="fa-solid fa-chevron-right"></i> Solutions</a>
        </li>
        <li><a href="career.html"><i class="fa-solid fa-chevron-right"></i> Career</a></li>
        <li><a href="blog.html"><i class="fa-solid fa-chevron-right"></i> Blog</a></li>
    </ul>
    <div class="sidebar-page subpage" id="camerasPage">
        <div class="sub-header">
            <button class="back-btn" onclick="backToMain()">←</button>
            <h3>Cameras & Sensors</h3>
        </div>
        <div class="sub-content">
            <a href="./bodycamfinal.html">
                <div class="sub-item">Bodycam</div>
            </a>
            <a href="./dashcam.html">
                <div class="sub-item">Dashcam</div>
            </a>
            <a href="./droncam.html">
                <div class="sub-item">DroneCam</div>
            </a>
            <a href="./IPcamera.html">
                <div class="sub-item">IP Camera</div>
            </a>
        </div>
    </div>
    <div class="sidebar-page subpage" id="edgenvrPage">
        <div class="sub-header">
            <button class="back-btn" onclick="backToMain()">←</button>
            <h3>Network Video Recorders</h3>
        </div>
        <div class="sub-content">
            <a href="./NVR.html">
                <div class="sub-item">NVR</div>
            </a>
        </div>
    </div>
    <div class="sidebar-page subpage" id="vmsPage">
        <div class="sub-header">
            <button class="back-btn" onclick="backToMain()">←</button>
            <h3>VMS Integration</h3>
        </div>
        <div class="sub-content">
            <div class="sub-item">Milestone VMS</div>
            <div class="sub-item">Genetec VMS</div>
        </div>
    </div>
    <div class="sidebar-page subpage" id="visionPage">
        <div class="sub-header">
            <button class="back-btn" onclick="backToMain()">←</button>
            <h3>Vision & Edge AI</h3>
        </div>
        <div class="sub-content">
            <div class="sub-item">Vision SDK</div>
            <div class="sub-item">Edge AI Models</div>
        </div>
    </div>
    <div class="sidebar-page subpage" id="allProductsPage">
        <div class="sub-header">
            <button class="back-btn" onclick="backToMain()">←</button>
            <h3>All Products</h3>
        </div>
        <div class="sub-content">
            <div class="sub-item">Camera Hardware</div>
            <div class="sub-item">Edge Devices</div>
            <div class="sub-item">VMS Software</div>
        </div>
    </div>
    <!-- SOLUTIONS PAGE (LEVEL 2) -->
    <div class="sidebar-page subpage" id="solutionsPage">
        <div class="sub-header">
            <button class="back-btn" onclick="backToMain()">←</button>
        </div>
        <div class="sub-content">
            <h3>Solutions</h3>
            <a href="./bodycamfinal.html">
                <div class="sub-item">
                    <img src="<?= IMAGE_PATH.'/navbar/navbodycam.png' ?>">
                    <span>Bodycam</span>
                </div>
            </a>
            <a href="./dashcam.html">
                <div class="sub-item">
                    <img src="<?= IMAGE_PATH.'/navbar/dashcam.png' ?>">
                    <span>Dashcam</span>
                </div>
            </a>
            <a href="./droncam.html">
                <div class="sub-item">
                    <img src="<?= IMAGE_PATH.'/navbar/droncam1.png' ?>">
                    <span>DroneCam</span>
                </div>
            </a>
            <a href="./IPcamera.html">
                <div class="sub-item">
                    <img src="<?= IMAGE_PATH.'/navbar/IP.png' ?>">
                    <span>IP Camera</span>
                </div>
            </a>
        </div>
    </div>
</div
