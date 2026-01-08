@extends('layouts.layout')
@section('content')
    <div></div>

     <section class="drone-hero-pro">
        <!-- Optional dark overlay for readability -->
        <div class="drone-hero-overlay"></div>
        <div class="drone-hero-inner">

            <!-- LEFT CONTENT -->
            <div class="drone-hero-text">
                <span class="drone-hero-badge">ENGINEERING EXCELLENCE</span>

                <h1>
                    Custom Drone<br />
                    Camera Engineering<br />
                    Services
                </h1>

                <p>
                    Precision-driven custom engineering solutions for high-performance
                    aerial imaging. From sensor integration to ISP tuning.
                </p>

                <div class="drone-hero-cta">
                    <a href="#" class="btn btn-primary">Start Your Project </a>
                    <a href="#" class="btn btn-outline">Discuss Requirements </a>
                </div>
            </div>
        </div>
    </section>

    <section class="drone-engineering-architecture">
        <div class="container">

            <div class="drone-arch-left">
                <img src="<?= IMAGE_PATH.'/solutions/dronecam/droneeng3.webp'?>" alt="Exploded Drone Camera Architecture">
            </div>

            <div class="drone-arch-right">
                <span class="eyebrow">ENGINEERING ARCHITECTURE</span>
                <h2>Designed From the Inside Out</h2>
                <p>
                    Our drone camera systems are architected at component level —
                    optics, sensors, processing boards, and mechanical housing
                    engineered as one integrated system.
                </p>
                <ul>
                    <li>Custom optics & sensor selection</li>
                    <li>ISP & processing board design</li>
                    <li>Thermal & vibration optimization</li>
                    <li>Modular, flight-ready architecture</li>
                </ul>
            </div>

        </div>
    </section>

    <section class="drone-engineering-process">
        <div class="container">

            <div class="drone-process-text">
                <span class="eyebrow">ENGINEERING PROCESS</span>
                <h2>Built, Tuned & Validated In-House</h2>
                <p>
                    From PCB design to lens calibration and flight testing,
                    every camera system is engineered, assembled, and validated
                    by our in-house team.
                </p>

                <div class="drone-process-points">
                    <div>PCB design & bring-up</div>
                    <div>Lens calibration & alignment</div>
                    <div>Image tuning & ISP optimization</div>
                    <div>Environmental & flight testing</div>
                </div>
            </div>

            <div class="drone-process-image">
                <img src="<?= IMAGE_PATH.'/solutions/dronecam/engineersolution3.webp'?>"
                    alt="Engineer working on camera calibration">
            </div>

        </div>
    </section>

    <section class="drone-case-scroll">

        <h1 class="drone-case-title">
            We Engineer <span class="drone-blue-text">Custom Imaging Systems</span>
        </h1>

        <div class="drone-case-card">
            <div class="drone-case-left">

                <span class="mini-tag">Hardware Engineering</span>

                <h3>Camera Hardware Design</h3>

                <p class="card-intro">
                    We engineer camera hardware that fits your drone platform, power budget,
                    and mission constraints — not off-the-shelf modules.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"> <img src="<?= IMAGE_PATH.'/icon/circuit-board.png'?>" alt="PCB Design">
                        </span>
                        <div class="feature-text">
                            <strong>Custom Camera PCB</strong>
                            <small>Compact, lightweight & EMI-aware layouts</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/thunderbolt.png'?>" alt="power"></span>
                        <div class="feature-text">
                            <strong>Power Optimization</strong>
                            <small>Designed for drone battery limitations</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/deadline.png'?>" alt="speed"></span>
                        <div class="feature-text">
                            <strong>High-Speed Interfaces</strong>
                            <small>MIPI, USB, Ethernet data paths</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/mechanical-gears-.png'?>"
                                alt="mechanical"></span>
                        <div class="feature-text">
                            <strong>Mechanical Integration</strong>
                            <small>Housing & mounts designed for drones</small>
                        </div>
                    </div>

                </div>

            </div>

            <div class="drone-case-right drone-img1"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Image Quality Engineering</span>

                <h3>Image Sensor & ISP Tuning</h3>

                <p class="card-intro">
                    High resolution alone is not enough. We tune the complete imaging pipeline
                    to deliver clear, reliable data during real flight conditions.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/sensor.png'?>" alt="sensor"></span>
                        <div class="feature-text">
                            <strong>Sensor Selection</strong>
                            <small>Sony, Omnivision, Onsemi based on mission needs</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/isp.png'?>" alt="ISP"></span>
                        <div class="feature-text">
                            <strong>ISP Pipeline Tuning</strong>
                            <small>Exposure, white balance, noise reduction</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/eco-bulb.png'?>" alt="low-light"></span>
                        <div class="feature-text">
                            <strong>Low-Light Optimization</strong>
                            <small>Clear imaging in night & low-visibility scenarios</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/motion.png'?>" alt="motion"></span>
                        <div class="feature-text">
                            <strong>Motion Optimization</strong>
                            <small>Reduced blur & rolling shutter artifacts</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right drone-img2"></div>
        </div>

        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Optical Engineering</span>

                <h3>Lens Selection & Optical Calibration</h3>

                <p class="card-intro">
                    Optical performance must match mission distance, field-of-view and environment.
                    We engineer optics for accuracy, not assumptions.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/lens2.png'?>" alt="lens"></span>
                        <div class="feature-text">
                            <strong>Lens Selection</strong>
                            <small>FOV, aperture & distortion based on use case</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/optical-fiber.png'?>"
                                alt="optical-alignment"></span>
                        <div class="feature-text">
                            <strong>Optical Alignment</strong>
                            <small>Precise sensor-lens alignment & focus tuning</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/measurement.png'?>" alt="calibrations"></span>
                        <div class="feature-text">
                            <strong>Calibration Workflows</strong>
                            <small>Factory-ready calibration procedures</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/cognitive-distortion.png'?>"
                                alt="distortion"></span>
                        <div class="feature-text">
                            <strong>Distortion Correction</strong>
                            <small>Shading & geometric correction profiles</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right drone-img3"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Stabilization Systems</span>

                <h3>Gimbal & Stabilization Integration</h3>

                <p class="card-intro">
                    Smooth footage is critical for analysis and AI. We engineer camera and gimbal
                    systems to perform as a single synchronized unit.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/Camera-Gimbal.png'?>" alt="Camera–Gimbal"></span>
                        <div class="feature-text">
                            <strong>Camera–Gimbal Integration</strong>
                            <small>Mechanical & electronic system alignment</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/music.png'?>" alt="Vibration"></span>
                        <div class="feature-text">
                            <strong>Vibration Damping</strong>
                            <small>Reduced jello & motion artifacts</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/sensor.png'?>"
                                alt="Sensor-Synchronization"></span>
                        <div class="feature-text">
                            <strong>Sensor Synchronization</strong>
                            <small>Sync with gimbal motors & IMU data</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/stabilizer.png'?>"
                                alt="electronic-Stabilization"></span>
                        <div class="feature-text">
                            <strong>Electronic Stabilization</strong>
                            <small>EIS for smoother usable footage</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right drone-img4"></div>
        </div>

        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Embedded Software</span>

                <h3>Embedded Firmware & Drivers</h3>

                <p class="card-intro">
                    Reliable camera systems require robust low-level software.
                    We develop firmware that keeps hardware fast, stable and controllable.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/sensor.png'?>" alt="sensor-drivers"></span>
                        <div class="feature-text">
                            <strong>Sensor Drivers</strong>
                            <small>Low-level drivers for stable operation</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/low-price.png'?>" alt="Low-Latency"></span>
                        <div class="feature-text">
                            <strong>Low-Latency Streaming</strong>
                            <small>Real-time video pipelines</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png'?>"
                                alt="camera-control"></span>
                        <div class="feature-text">
                            <strong>Camera Control APIs</strong>
                            <small>Full control over camera parameters</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/web-settings.png'?>"
                                alt="platform-support"></span>
                        <div class="feature-text">
                            <strong>Platform Support</strong>
                            <small>Linux, RTOS, bare-metal systems</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right drone-img5"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">AI & Vision</span>

                <h3>AI & Computer Vision Integration</h3>

                <p class="card-intro">
                    We convert video streams into actionable intelligence using optimized
                    on-board AI and computer vision pipelines.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/knowledge.png'?>" alt="AI-Inference"></span>
                        <div class="feature-text">
                            <strong>On-Board AI Inference</strong>
                            <small>Edge-based processing without cloud delay</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/face-scanner.png'?>"
                                alt="object-detection"></span>
                        <div class="feature-text">
                            <strong>Object Detection & Tracking</strong>
                            <small>Real-time visual intelligence</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/body.png'?>" alt="thermal"></span>
                        <div class="feature-text">
                            <strong>Thermal + RGB Fusion</strong>
                            <small>Multi-sensor data integration</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/content-delivery-network.png'?>"
                                alt="Edge-Optimization"></span>
                        <div class="feature-text">
                            <strong>Edge Optimization</strong>
                            <small>Efficient models for NPUs & GPUs</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right drone-img6"></div>
        </div>

        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Reliability Engineering</span>

                <h3>Environmental Hardening & Testing</h3>

                <p class="card-intro">
                    Drone cameras operate in harsh environments.
                    We engineer systems to survive vibration, temperature and long flight cycles.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/music.png'?>" alt="Vibration"></span>
                        <div class="feature-text">
                            <strong>Vibration & Shock Resistance</strong>
                            <small>Designed for aggressive flight conditions</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/body.png'?>" alt="thermal-mangment"></span>
                        <div class="feature-text">
                            <strong>Thermal Management</strong>
                            <small>Stable operation across temperature ranges</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png'?>" alt="emi-shielding"></span>
                        <div class="feature-text">
                            <strong>EMI Shielding</strong>
                            <small>Reduced interference & signal noise</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/approval.png'?>" alt="testing"></span>
                        <div class="feature-text">
                            <strong>Flight & Stress Testing</strong>
                            <small>Validation in real-world conditions</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right drone-img7"></div>
        </div>
    </section>

    <section class="stages-of-work bg-glow">
        <div class="stages-dronetitle">
            <h2 class="stages-title">Our Engineering <span>Process</span></h2>
            <p class="stages-subtitle">
                Our comprehensive design process ensures every detail is crafted to perfection.
            </p>
        </div>

        <div class="stages-grid">

            <!-- 1 -->
            <div class="stage-item lg-order-1">
                <div class="stage-dot">1</div>
                <div class="stage-line right"></div>
                <h3>Requirement Discovery</h3>
                <p>Use case, altitude, payload, resolution, latency.</p>
            </div>

            <!-- 2 -->
            <div class="stage-item lg-order-2">
                <div class="stage-dot">2</div>
                <div class="stage-line right"></div>
                <h3>System Architecture</h3>
                <p>Sensor, optics, processing, power budget.</p>
            </div>

            <!-- 3 -->
            <div class="stage-item lg-order-3">
                <div class="stage-dot">3</div>
                <div class="stage-line right"></div>
                <h3>Design & Prototyping</h3>
                <p>Schematics, PCB, mechanical housing.</p>
            </div>

            <!-- 4 -->
            <div class="stage-item lg-order-4 stage-corner">
                <div class="stage-dot">4</div>
                <h3>Firmware & Software</h3>
                <p>ISP tuning, drivers, streaming, AI.</p>
            </div>

            <!-- 5 -->

            <div class="stage-item lg-order-8">
                <div class="stage-dot">8</div>
                <div class="stage-line left"></div>
                <h3>Lifecycle Support</h3>
                <p>Field telemetry, updates, performance tuning.</p>
            </div>
            <div class="stage-item lg-order-7">
                <div class="stage-dot">7</div>
                <div class="stage-line left"></div>
                <h3>Production Support</h3>
                <p>DFM, BOM optimization, scaling.</p>
            </div>
            <div class="stage-item lg-order-6">
                <div class="stage-dot">6</div>
                <div class="stage-line left"></div>
                <h3>Iteration & Optimization</h3>
                <p>Performance tuning based on results.</p>
            </div>
            <div class="stage-item lg-order-5">
                <div class="stage-dot">5</div>
                <h3>Integration & Testing</h3>
                <p>Flight tests, vibration, thermal, EMI.</p>
            </div>

        </div>
    </section>

    <section class="usecases-visual">

        <h2 class="usecases-title">Engineering <span>Use Cases</span></h2>
        <p class="usecases-subtitle">
            Real-world constraints. Real engineering solutions.
        </p>

        <div class="usecases-grid">

            <div class="usecase-card large">
                <img src="<?= IMAGE_PATH.'/solutions/dronecam/usecases4_3.webp'?>" alt="Long Range Surveillance"
                    class="usecase-image">
                <h3>Thermal + RGB Fusion</h3>
                <p>Dual-sensor capture, calibration alignment, and real-time fusion algorithms.</p>

            </div>

            <div class="usecase-card small">
                <img src="<?= IMAGE_PATH.'/solutions/dronecam/usecases2_1.webp'?>" alt="Low Light Camera" class="usecase-image">
                <h3>Low-Light / Night Vision</h3>
                <p>Large-pixel sensors, optimized ISP, adaptive IR illumination for near-dark flight.</p>
            </div>

            <div class="usecase-card small">
                <img src="<?= IMAGE_PATH.'/solutions/dronecam/usecases3_1.webp'?>" alt="AI Detection Camera" class="usecase-image">
                <h3>AI Object Detection</h3>
                <p>Edge AI inference, metadata streaming, and optimized thermal-aware processing.</p>
            </div>

            <div class="usecase-card medium usecase-horizontal">
                <img src="<?= IMAGE_PATH.'/solutions/dronecam/usecases1_2.webp'?>" alt="Thermal RGB Fusion" class="usecase-image">
                <div class="usecase-text">
                    <h3>Long-Range Surveillance Camera</h3>
                    <p>High-Performance Long-Range Aerial Surveillance Camera System for Reliable Long-Distance
                        Monitoring
                        and Observation.</p>

                </div>
            </div>

        </div>
    </section>

    <section class="dron-why-section">
        <h2 class="dron-why-heading">Why <span>Choose Us?</span></h2>

        <div class="dron-why-grid">

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/travel.png'?>" alt="End to End"></div>
                <h3>End-to-End Development</h3>
                <p>From idea discovery to working prototypes, we handle the full journey.</p>
            </div>

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/relations.png'?>" alt="investor-ready solution"></div>
                <h3>Investor-Ready Solutions</h3>
                <p>POCs and MVPs designed to win stakeholder and investor confidence.</p>
            </div>

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/agile.png'?>" alt="Agile"></div>
                <h3>Agile & Fast Delivery</h3>
                <p>Lean prototyping to build, test, and refine quickly.</p>
            </div>

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/cyborg.png'?>" alt="AI expertise"></div>
                <h3>AI Expertise, Simplified</h3>
                <p>Turning complex AI concepts into production-ready systems.</p>
            </div>

            <div class="dron-why-card ">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/gear.png'?>" alt="Engineering"></div>
                <h3>Engineering Reliability</h3>
                <p>Designed for real-world performance, security, and long-term stability.</p>
            </div>

        </div>
    </section>

    <section class="dron-why-choose">

        <h2 class="dron-why-title">Industries <span>We Serve</span></h2>
        <p class="dron-why-subtitle">
            We provide custom camera and imaging engineering services across industries where performance, reliability,
            and mission-specific design are critical.
        </p>

        <div class="dron-why-layout">

            <div class="dron-why-list">
                <button class="dron-why-item active" data-id="1">Aerospace & Unmanned Systems</button>
                <button class="dron-why-item" data-id="2">Defense & Security</button>
                <button class="dron-why-item" data-id="3">Industrial Inspection & Automation</button>
                <button class="dron-why-item" data-id="4">Public Safety & Law Enforcement</button>
                <button class="dron-why-item" data-id="5">Agriculture & Environmental Monitoring</button>
                <button class="dron-why-item" data-id="6">AI, Robotics & Autonomous Platforms</button>
            </div>

            <div class="dron-why-detail">

                <div class="dron-why-content active" data-id="1">

                    <div class="why-cover">
                        <img src="<?= IMAGE_PATH.'/solutions/dronecam/aerospace1.webp'?>" alt="">
                    </div>

                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon">
                                <img src="<?= IMAGE_PATH.'/icon/satellite.png'?>" alt="">
                            </div>
                            <div>
                                <h3>Aerospace & Unmanned Systems</h3>
                                <p class="why-context">Flight-ready imaging systems designed for airborne platforms</p>
                            </div>
                        </div>

                        <div class="why-features">
                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/ai-application.png'?>">
                                <span>SWaP optimized for airborne reliability</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png'?>">
                                <span>Designed for vibration, altitude & thermal variation</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/Camera-Gimbal.png'?>">
                                <span>Flight-ready real-time imaging pipelines</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/cloud-api.png'?>">
                                <span>Surveillance, inspection & mapping use-cases</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="dron-why-content" data-id="2">

                    <div class="why-cover">
                        <img src="<?= IMAGE_PATH.'/solutions/dronecam/defencesecurity.webp'?>" alt="">
                    </div>

                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon">
                                <img src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png'?>" alt="">
                            </div>
                            <div>
                                <h3>Defense & Security</h3>
                                <p class="why-context">Mission-critical imaging systems built for secure and hostile
                                    environments</p>
                            </div>
                        </div>

                        <div class="why-features">
                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/cloud-api.png'?>">
                                <span>NDA-first, IP-protected development model</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/cyborg.png'?>">
                                <span>Designed for harsh and confidential environments</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/deadline.png'?>">
                                <span>Mission-critical robustness and precision</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/eco-bulb.png'?>">
                                <span>ISR, border surveillance & tactical drones</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dron-why-content" data-id="3">

                    <div class="why-cover">
                        <img src="<?= IMAGE_PATH.'/solutions/dronecam/industriesdrone.webp'?>" alt="">
                    </div>

                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon">
                                <img src="<?= IMAGE_PATH.'/icon/gear.png'?>" alt="">
                            </div>
                            <div>
                                <h3>Industrial Inspection & Automation</h3>
                                <p class="why-context">Precision vision systems for automated inspection and quality
                                    assurance</p>
                            </div>
                        </div>

                        <div class="why-features">
                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/cognitive-distortion.png'?>" alt="">
                                <span>High-speed, high-accuracy machine vision systems</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png'?>" alt="">
                                <span>Seamless integration with AI and automation workflows</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/mechanical-gears-.png'?>" alt="">
                                <span>Designed for repeatability and long-term reliability</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/relations.png'?>" alt="">
                                <span>Defect detection & quality control use cases</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dron-why-content" data-id="4">

                    <div class="why-cover">
                        <img src="<?= IMAGE_PATH.'/solutions/dronecam/publicsaftey.webp'?>" alt="">
                    </div>

                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon">
                                <img src="<?= IMAGE_PATH.'/icon/relations.png'?>" alt="">
                            </div>
                            <div>
                                <h3>Public Safety & Law Enforcement</h3>
                                <p class="why-context">Real-time, low-light imaging systems for situational awareness
                                    and
                                    response</p>
                            </div>
                        </div>

                        <div class="why-features">
                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/knowledge.png'?>" alt="">
                                <span>Low-light optimized and real-time streaming capable</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/mechanical-gears-.png'?>" alt="">
                                <span>Reliable performance in dynamic environments</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/motion.png'?>" alt="">
                                <span>Supports situational awareness and rapid response</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/ai-chip.png'?>" alt="">
                                <span>Aerial monitoring & command center feeds</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dron-why-content" data-id="5">

                    <div class="why-cover">
                        <img src="<?= IMAGE_PATH.'/solutions/dronecam/agriculturedrone1.webp'?>" alt="">
                    </div>

                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon">
                                <img src="<?= IMAGE_PATH.'/icon/food-processing.png'?>" alt="">
                            </div>
                            <div>
                                <h3>Agriculture & Environmental Monitoring</h3>
                                <p class="why-context">Data-driven imaging systems for large-scale environmental insight
                                </p>
                            </div>
                        </div>

                        <div class="why-features">
                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/sensor.png'?>" alt="">
                                <span>Multispectral and thermal data-driven imaging</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/isp.png'?>" alt="">
                                <span>Optimized for large-area coverage and analytics</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/thunderbolt.png'?>" alt="">
                                <span>Supports environmental and crop health analysis</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/web-settings.png'?>" alt="">
                                <span>Crop stress, land and water monitoring use cases</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="dron-why-content" data-id="6">

                    <div class="why-cover">
                        <img src="<?= IMAGE_PATH.'/solutions/dronecam/aidrone3.webp'?>" alt="">
                    </div>

                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon">
                                <img src="<?= IMAGE_PATH.'/icon/cyborg.png'?>" alt="">
                            </div>
                            <div>
                                <h3>AI, Robotics & Autonomous Platforms</h3>
                                <p class="why-context">Edge-optimized vision systems powering intelligent autonomous
                                    platforms</p>
                            </div>
                        </div>

                        <div class="why-features">
                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/face-scanner.png'?>" alt="">
                                <span>Designed for low-latency edge processing</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/cyborg.png'?>" alt="">
                                <span>Efficient integration with onboard AI compute</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/digital-ecosystem.png'?>" alt="">
                                <span>Optimized for perception and navigation</span>
                            </div>

                            <div class="why-feature">
                                <img src="<?= IMAGE_PATH.'/icon/cognitive-distortion.png'?>" alt="">
                                <span>Object detection & autonomous navigation use cases</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="tech-specs">

        <div class="tech-specs-inner">

            <!-- LEFT SIDE -->
            <div class="tech-specs-left">
                <h2>Technical <span>Specifications</span></h2>
                <p class="tech-intro">
                    Representative capabilities and configurable parameters across our custom drone camera engineering
                    solutions.
                    Specifications vary based on mission requirements, payload constraints, and operating environment.
                </p>

                <div class="tech-grid">

                    <div class="tech-card">
                        <h4>Sensors</h4>
                        <p>Sony IMX, Global/Rolling Shutter, Thermal, SWIR, Multispectral</p>
                    </div>

                    <div class="tech-card">
                        <h4>Optics & Imaging</h4>
                        <p>Wide to telephoto lenses, M12/C mounts, filters, calibration</p>
                    </div>

                    <div class="tech-card">
                        <h4>Processing Platforms</h4>
                        <p>NVIDIA Jetson, Qualcomm RB5, Ambarella, FPGA</p>
                    </div>

                    <div class="tech-card">
                        <h4>Software & ISP</h4>
                        <p>Firmware, ISP tuning, HDR, synchronization, AI integration</p>
                    </div>

                    <div class="tech-card">
                        <h4>Interfaces</h4>
                        <p>MIPI, USB, Ethernet, HDMI/SDI, UART, SPI, I²C</p>
                    </div>

                    <div class="tech-card">
                        <h4>Power & Thermal</h4>
                        <p>Low power design, thermal simulation, active/passive cooling</p>
                    </div>

                    <div class="tech-card">
                        <h4>Mechanical</h4>
                        <p>Lightweight housings, micro-gimbals, vibration aware design</p>
                    </div>

                    <div class="tech-card">
                        <h4>Environmental</h4>
                        <p>Vibration, thermal cycling, EMI/EMC, IP-rated sealing</p>
                    </div>

                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="tech-specs-right">
                <img src="<?= IMAGE_PATH.'/solutions/dronecam/specification1.webp'?>" alt="Camera System Architecture">
            </div>

        </div>
    </section>

    
@endsection
@section('script')

<script>
        gsap.registerPlugin(ScrollTrigger);

       const cards = gsap.utils.toArray(".drone-case-card");

        let activeIndex = 0;

        function updateDepth() {
            cards.forEach((card, i) => {
                const diff = activeIndex - i;

                if (diff === 0) {
                    gsap.to(card, { filter: "blur(0px)", scale: 1, opacity: 1, zIndex: 3, duration: 0.4 });
                }
                else if (diff === 1) {
                    gsap.to(card, { filter: "blur(4px)", scale: 0.96, opacity: 0.6, zIndex: 2, duration: 0.4 });
                }
                else if (diff === 2) {
                    gsap.to(card, { filter: "blur(8px)", scale: 0.92, opacity: 0.35, zIndex: 1, duration: 0.4 });
                }
                else if (diff > 2) {
                    gsap.to(card, { filter: "blur(12px)", scale: 0.88, opacity: 0.2, zIndex: 0, duration: 0.4 });
                }
                else {
                    // cards below active
                    gsap.to(card, { filter: "blur(0px)", scale: 1, opacity: 1, zIndex: 3, duration: 0.4 });
                }
            });
        }

        cards.forEach((card, i) => {
            ScrollTrigger.create({
                trigger: card,
                start: "top top+=65%",
                onEnter: () => {
                    activeIndex = i;
                    updateDepth();
                },
                onEnterBack: () => {
                    activeIndex = i;
                    updateDepth();
                }
            });
        });


        /* Dynamic scroll height */
        function setScrollHeight(sectionSelector, cardSelector) {
            const section = document.querySelector(sectionSelector);
            const cards = section.querySelectorAll(cardSelector);

            if (!section || !cards.length) return;

            const vh = window.innerHeight;
            const scrollHeight = vh + (cards.length - 1) * vh * 0.80; // tuned multiplier

            section.style.height = scrollHeight + "px";
        }

        // Apply once
        setScrollHeight(".drone-case-scroll", ".drone-case-card");

        // Recalculate on resize
        window.addEventListener("resize", () => {
            setScrollHeight(".drone-case-scroll", ".drone-case-card");
        });

        // Refresh ScrollTrigger after layout changes
        ScrollTrigger.refresh();


        document.addEventListener("DOMContentLoaded", () => {

            const items = document.querySelectorAll(".dron-why-item");
            const contents = document.querySelectorAll(".dron-why-content");

            items.forEach(item => {
                item.addEventListener("click", () => {

                    items.forEach(i => i.classList.remove("active"));
                    contents.forEach(c => c.classList.remove("active"));

                    item.classList.add("active");

                    const target = document.querySelector(
                        '.dron-why-content[data-id="' + item.dataset.id + '"]'
                    );

                    if (target) {
                        target.classList.add("active");
                    }
                });
            });

        });

    </script>

@endsection