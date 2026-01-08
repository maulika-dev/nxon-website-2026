@extends('layouts.layout')
@section('content')
    <div></div>

    <section class="dash-hero-pro">

        <div class="drone-hero-overlay"></div>
        <div class="drone-hero-inner">

            <!-- LEFT CONTENT -->
            <div class="drone-hero-text">
                <span class="drone-hero-badge">ENGINEERING EXCELLENCE</span>

                <h1>
                    Dash Camera System<br />
                    Design & Engineering

                </h1>

                <p>
                    Engineering dash camera solutions tailored to vehicle platforms, operating conditions, and
                    real-world use cases.
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
                <img src="<?= IMAGE_PATH.'/solutions/dashcam/dashsystem.webp' ?>" alt="Exploded Dash Camera System Architecture">
            </div>

            <div class="drone-arch-right">
                <span class="eyebrow">SYSTEM ARCHITECTURE</span>
                <h2>Exploded Dash Camera System Visual</h2>
                <p>
                    A detailed exploded view of a dash camera system where each core component
                    is separated and clearly visible — showing how optics, electronics, thermal
                    elements, and mechanical parts come together as a complete system.
                </p>

                <ul>
                    <li>Lens Assembly — Automotive optics</li>
                    <li>Image Sensor — CMOS capture</li>
                    <li>Processing PCB — SoC, ISP, memory</li>
                    <li>Thermal & Mounts — Heat & vibration control</li>
                    <li>Housing — Protective enclosure</li>
                </ul>

            </div>

        </div>
    </section>

    <section class="drone-engineering-process">
        <div class="container">

            <div class="drone-process-text">
                <span class="eyebrow">ENGINEERING PROCESS</span>
                <h2>Engineered & Validated for Automotive Use</h2>
                <p>
                    Our engineers design, debug, and validate dash camera systems in a professional
                    automotive electronics lab environment.
                </p>

                <div class="drone-process-points">
                    <div>PCB debugging & power analysis</div>
                    <div>Oscilloscope & signal integrity testing</div>
                    <div>Camera module calibration & tuning</div>
                    <div>Firmware validation & system testing</div>
                </div>
            </div>

            <div class="drone-process-image">
                <img src="<?= IMAGE_PATH.'/solutions/dashcam/dashengineer1.png' ?>"
                    alt="Engineers working on automotive camera electronics">
            </div>

        </div>
    </section>

    <section class="dash-case-scroll">
        <h1 class="drone-case-title">
            We Engineer <span class="drone-blue-text">Custom Imaging Systems</span>
        </h1>

        <div class="drone-case-card">
            <div class="drone-case-left">

                <span class="mini-tag">Hardware Engineering</span>

                <h3>Camera Hardware & PCB Design</h3>

                <p class="card-intro">
                    We design compact, high-reliability electronics optimized for wearable form factors,
                    power efficiency, and long-term field operation.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/circuit-board.png' ?>" alt="PCB Design">
                        </span>
                        <div class="feature-text">
                            <strong>Custom Camera PCB</strong>
                            <small>Compact, low-noise, EMI-aware layouts</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/thunderbolt.png' ?>" alt="power">
                        </span>
                        <div class="feature-text">
                            <strong>Power Optimization</strong>
                            <small>Low-power design for all-day operation</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/deadline.png' ?>" alt="speed">
                        </span>
                        <div class="feature-text">
                            <strong>High-Speed Interfaces</strong>
                            <small>MIPI CSI-2, USB, secure data paths</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/mechanical-gears-.png' ?>" alt="mechanical">
                        </span>
                        <div class="feature-text">
                            <strong>Mechanical Integration</strong>
                            <small>Wearable housing and mount compatibility</small>
                        </div>
                    </div>

                </div>

            </div>

            <div class="drone-case-right dash-img1"></div>
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
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/sensor.png' ?>" alt="sensor"></span>
                        <div class="feature-text">
                            <strong>Sensor Selection</strong>
                            <small>Sony, Omnivision, Onsemi based on mission needs</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/isp.png' ?>" alt="ISP"></span>
                        <div class="feature-text">
                            <strong>ISP Pipeline Tuning</strong>
                            <small>Exposure, white balance, noise reduction</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/eco-bulb.png' ?>" alt="low-light"></span>
                        <div class="feature-text">
                            <strong>Low-Light Optimization</strong>
                            <small>Clear imaging in night & low-visibility scenarios</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/motion.png' ?>" alt="motion"></span>
                        <div class="feature-text">
                            <strong>Motion Optimization</strong>
                            <small>Reduced blur & rolling shutter artifacts</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right dash-img2"></div>
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
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/lens2.png' ?>" alt="lens"></span>
                        <div class="feature-text">
                            <strong>Lens Selection</strong>
                            <small>FOV, aperture & distortion based on use case</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/optical-fiber.png' ?>"
                                alt="optical-alignment"></span>
                        <div class="feature-text">
                            <strong>Optical Alignment</strong>
                            <small>Precise sensor-lens alignment & focus tuning</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/measurement.png' ?>" alt="calibrations"></span>
                        <div class="feature-text">
                            <strong>Calibration Workflows</strong>
                            <small>Factory-ready calibration procedures</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/cognitive-distortion.png' ?>"
                                alt="distortion"></span>
                        <div class="feature-text">
                            <strong>Distortion Correction</strong>
                            <small>Shading & geometric correction profiles</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right dash-img3"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Embedded Software</span>

                <h3>Embedded Firmware & Drivers</h3>

                <p class="card-intro">
                    We develop low-level firmware that ensures reliable, deterministic operation of the entire camera
                    system.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/sensor.png' ?>" alt="Sensor & ISP Drivers"></span>
                        <div class="feature-text">
                            <strong>Sensor & ISP Drivers</strong>
                            <small>Low-level drivers for stable sensor and image pipeline control</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/circuit-board.png' ?>"
                                alt="Bootloader & Bring-up"></span>
                        <div class="feature-text">
                            <strong>Bootloader & Board Bring-up</strong>
                            <small>Hardware initialization and early-stage system validation</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/thunderbolt.png' ?>" alt="Power & Thermal"></span>
                        <div class="feature-text">
                            <strong>Power & Thermal Management</strong>
                            <small>Sequencing, monitoring, and protection mechanisms</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png' ?>"
                                alt="RT Performance"></span>
                        <div class="feature-text">
                            <strong>Real-Time Performance Optimization</strong>
                            <small>Latency tuning and deterministic pipeline behavior</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right dash-img4"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Video Pipeline</span>

                <h3>Video Compression & Storage</h3>

                <p class="card-intro">
                    We optimize video pipelines for quality, bandwidth efficiency, and reliable long-term storage.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/video.png' ?>" alt="video-codec"></span>
                        <div class="feature-text">
                            <strong>H.264 / H.265 / MJPEG Pipelines</strong>
                            <small>Optimized encoding for performance and quality</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/thunderbolt.png' ?>" alt="bitrate"></span>
                        <div class="feature-text">
                            <strong>Bitrate Optimization</strong>
                            <small>Adaptive streaming based on network and storage limits</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/hard-disk.png' ?>" alt="storage"></span>
                        <div class="feature-text">
                            <strong>Local Storage Management</strong>
                            <small>eMMC, SD, and SSD recording support</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/record.png' ?>" alt="recording-logic"></span>
                        <div class="feature-text">
                            <strong>Recording Logic</strong>
                            <small>Event-based and continuous recording modes</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right dash-img5"></div>
        </div>



        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">AI & ADAS</span>

                <h3>AI / ADAS / Computer Vision Pipelines</h3>

                <p class="card-intro">
                    We enable intelligent video systems by integrating AI and computer vision
                    capabilities directly at the edge.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/face-scanner.png' ?>"
                                alt="object-detection"></span>
                        <div class="feature-text">
                            <strong>Object Detection & Classification</strong>
                            <small>Real-time identification of vehicles, people, and objects</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/knowledge.png' ?>" alt="driver-monitoring"></span>
                        <div class="feature-text">
                            <strong>Driver Monitoring & Behavior Analysis</strong>
                            <small>Fatigue, distraction, and safety event detection</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/motion.png' ?>" alt="lane-detection"></span>
                        <div class="feature-text">
                            <strong>Lane, Vehicle & Pedestrian Detection</strong>
                            <small>Perception pipelines for ADAS and navigation</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/content-delivery-network.png' ?>"
                                alt="edge-ai"></span>
                        <div class="feature-text">
                            <strong>Edge AI Optimization</strong>
                            <small>Low-latency inference on embedded NPUs and GPUs</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png' ?>"
                                alt="model-integration"></span>
                        <div class="feature-text">
                            <strong>Model Integration</strong>
                            <small>Custom or third-party AI model deployment</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right dash-img6"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Mechanical Engineering</span>

                <h3>Automotive-Grade Mechanical Design</h3>

                <p class="card-intro">
                    We design camera enclosures and mechanical structures that survive
                    real automotive operating conditions over long service lifetimes.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/music.png' ?>" alt="vibration"></span>
                        <div class="feature-text">
                            <strong>Vibration-Resistant Housing</strong>
                            <small>Compact enclosures designed to withstand vehicle vibration</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/body.png' ?>" alt="thermal-design"></span>
                        <div class="feature-text">
                            <strong>Thermal Design & Heat Dissipation</strong>
                            <small>Passive cooling and thermal paths for stable operation</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png' ?>"
                                alt="material-selection"></span>
                        <div class="feature-text">
                            <strong>Material Selection</strong>
                            <small>Automotive-grade plastics and metals for long-term durability</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/approval.png' ?>" alt="mounting"></span>
                        <div class="feature-text">
                            <strong>Vehicle Mounting Integration</strong>
                            <small>Mounting strategies for secure in-vehicle installation</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right dash-img7"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Compliance Engineering</span>

                <h3>Environmental & Automotive Compliance</h3>

                <p class="card-intro">
                    We engineer systems to meet automotive and environmental standards from day one,
                    reducing risk and ensuring reliable operation in regulated environments.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/body.png' ?>" alt="thermal"></span>
                        <div class="feature-text">
                            <strong>Thermal, Vibration & Shock Design</strong>
                            <small>Engineered for harsh automotive operating conditions</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/music.png' ?>" alt="vibration"></span>
                        <div class="feature-text">
                            <strong>Mechanical Stress Consideration</strong>
                            <small>Survives road vibration and mechanical fatigue</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png' ?>" alt="emi"></span>
                        <div class="feature-text">
                            <strong>EMI / EMC Best Practices</strong>
                            <small>Noise reduction and signal integrity protection</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/approval.png' ?>" alt="validation"></span>
                        <div class="feature-text">
                            <strong>Regulatory & Validation Support</strong>
                            <small>Pre-compliance reviews and test support</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right dash-img8"></div>
        </div>
    </section>

    <section class="dash-stages-of-work bg-glow">
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

            <!-- 6 -->


            <!-- 7 -->


            <!-- 8 -->


        </div>
    </section>

    <section class="usecases-visual">

        <h2 class="usecases-title">Dash Camera <span>Engineering Use Cases</span></h2>
        <p class="usecases-subtitle">
            Real engineering challenges. Real in-vehicle imaging solutions.
        </p>

        <div class="usecases-grid">

            <!-- LARGE CARD -->
            <div class="usecase-card large">
                <img src="<?= IMAGE_PATH.'/solutions/dashcam/font-rare1.webp' ?>" alt="Front & Rear Camera Systems"
                    class="usecase-image">
                <h3>Front & Rear Camera Systems</h3>
                <p>
                    Synchronized multi-camera systems engineered for wide field-of-view coverage, varying lighting,
                    and reliable front-rear video alignment in real driving environments.
                </p>
            </div>

            <!-- SMALL CARD -->
            <div class="usecase-card small">
                <img src="<?= IMAGE_PATH.'/solutions/dashcam/dms3.webp' ?>" alt="Driver Monitoring System" class="usecase-image">
                <h3>Driver Monitoring Systems (DMS)</h3>
                <p>
                    Low-light cabin imaging with infrared sensors and real-time AI for driver awareness,
                    fatigue detection, and behavior analysis.
                </p>
            </div>

            <!-- SMALL CARD -->
            <div class="usecase-card small">
                <img src="<?= IMAGE_PATH.'/solutions/dashcam/fleetmangment.webp' ?>" alt="Fleet Monitoring Cameras"
                    class="usecase-image">
                <h3>Fleet Monitoring Cameras</h3>
                <p>
                    Power-efficient, always-on camera systems optimized for long operating hours,
                    data reliability, and scalable fleet deployment.
                </p>
            </div>

            <!-- MEDIUM HORIZONTAL CARD -->
            <div class="usecase-card medium usecase-horizontal">
                <img src="<?= IMAGE_PATH.'/solutions/dashcam/aicamerasystem.webp' ?>" alt="AI Enabled Safety Cameras"
                    class="usecase-image">
                <div class="usecase-text">
                    <h3>AI-Enabled Safety & Event Cameras</h3>
                    <p>
                        Event-triggered and AI-powered video systems engineered for real-time detection,
                        edge processing, and efficient storage — capturing only what matters.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="isp-sticky-section">
        <div class="isp-left">
            <h2>Image Quality & <span>ISP Expertise</span></h2>
            <p>
                We tune and engineer imaging pipelines for real-world environments —
                balancing physics, silicon, and algorithms to deliver reliable vision
                across lighting, motion, and environmental extremes.
            </p>
        </div>

        <div class="isp-right">

            <div class="isp-grid">

                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/dashcam/lowlight.webp' ?>">
                    <h4>Low-Light & HDR</h4>
                    <p>Noise reduction, dynamic range and exposure optimization.</p>
                </div>

                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/dashcam/nightdriving.webp' ?>">
                    <h4>Night Drive</h4>
                    <p>Contrast, glare suppression and tuning for night driving.</p>
                </div>

                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/dashcam/motionblur.webp' ?>">
                    <h4>Motion Blur</h4>
                    <p>High-speed tuning and rolling shutter mitigation.</p>
                </div>

                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/dashcam/glare.webp' ?>">
                    <h4>Glare Control</h4>
                    <p>Headlight flare suppression and highlight recovery.</p>
                </div>

                <div class="isp-card center">
                    <img src="<?= IMAGE_PATH.'/solutions/dashcam/Lens Pairing Strategy.webp' ?>">
                    <h4>Sensor Pairing</h4>
                    <p>Matching optics, sensors and ISP parameters for best results.</p>
                </div>

            </div>

        </div>
    </section>

    <section class="isp-architecture">
        <div class="isp-container">

            <h2 class="isp-title"><span>Smart Feature</span> Engineering Examples</h2>
            <p class="isp-subtitle">
                Real-world AI features engineered for embedded, automotive, and safety-critical environments.
            </p>

            <div class="isp-diagram">

                <div class="isp-top">
                    <div class="isp-core">Engineering Focus Areas</div>
                </div>

                <div class="isp-line"></div>

                <div class="isp-branches">

                    <div class="isp-branch" data-content="driver">
                        <img src="<?= IMAGE_PATH.'/icon/driver.png' ?>" class="isp-icon">
                        <span>Driver<br>Behavior</span>
                        <p>Vision-based behavior detection under motion, occlusion, and lighting variation.</p>
                    </div>

                    <div class="isp-branch" data-content="lane">
                        <img src="<?= IMAGE_PATH.'/icon/lane-assist.png' ?>" class="isp-icon">
                        <span>Lane &<br>Collision</span>
                        <p>Real-time detection of lanes, vehicles, and collision risks with low latency.</p>
                    </div>

                    <div class="isp-branch" data-content="fatigue">
                        <img src="<?= IMAGE_PATH.'/icon/face-scanner.png' ?>" class="isp-icon">
                        <span>Face &<br>Fatigue</span>
                        <p>Robust fatigue, distraction, and face analysis across real-world conditions..</p>
                    </div>

                    <div class="isp-branch" data-content="event">
                        <img src="<?= IMAGE_PATH.'/icon/harmful.png' ?>" class="isp-icon">
                        <span>Event<br>Recording</span>
                        <p>AI-triggered capture of critical moments with minimal false positives.</p>
                    </div>

                    <div class="isp-branch" data-content="edge">
                        <img src="<?= IMAGE_PATH.'/icon/sensorcore.png' ?>" class="isp-icon">
                        <span>Edge AI<br>Optimization</span>
                        <p>Optimized AI pipelines for embedded SoCs under power and thermal limits.</p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="dron-why-section">
        <h2 class="dron-why-heading">Why <span>Choose Us?</span></h2>

        <div class="dron-why-grid">

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/travel.png' ?>" alt="End to End"></div>
                <h3>End-to-End Development</h3>
                <p>From idea discovery to working prototypes, we handle the full journey.</p>
            </div>

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/relations.png' ?>" alt="investor-ready solution">
                </div>
                <h3>Investor-Ready Solutions</h3>
                <p>POCs and MVPs designed to win stakeholder and investor confidence.</p>
            </div>

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/agile.png' ?>" alt="Agile"></div>
                <h3>Agile & Fast Delivery</h3>
                <p>Lean prototyping to build, test, and refine quickly.</p>
            </div>

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/cyborg.png' ?>" alt="AI expertise"></div>
                <h3>AI Expertise, Simplified</h3>
                <p>Turning complex AI concepts into production-ready systems.</p>
            </div>

            <div class="dron-why-card ">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/gear.png' ?>" alt="Engineering"></div>
                <h3>Engineering Reliability</h3>
                <p>Designed for real-world performance, security, and long-term stability.</p>
            </div>

        </div>
    </section>

    <section class="dron-why-choose">

        <h2 class="dron-why-title">Industries <span>We Serve</span></h2>
        <p class="dron-why-subtitle">
            We engineer dash camera systems to meet industry-specific technical, regulatory, and operational
            challenges.
        </p>

        <div class="dron-why-layout">

            <div class="dron-why-list">
                <button class="dron-why-item active" data-id="1">Fleet Management & Logistics</button>
                <button class="dron-why-item" data-id="2">Ride-Hailing & Mobility Platforms</button>
                <button class="dron-why-item" data-id="3">Public Transport Systems</button>
                <button class="dron-why-item" data-id="4">Law Enforcement & Emergency Services</button>
                <button class="dron-why-item" data-id="5">Commercial & Industrial Vehicles</button>
                <button class="dron-why-item" data-id="6">Automotive OEMs & Tier Suppliers</button>
                <button class="dron-why-item" data-id="7">Insurance & Telematics Providers</button>
                <button class="dron-why-item" data-id="8">Startups & R&D Teams</button>
            </div>

            <div class="dron-why-detail">

                <!-- 1 -->
                <div class="dron-why-content active" data-id="1">
                    <div class="why-cover">
                        <img src="<?= IMAGE_PATH.'/solutions/dashcam/fleetserve.webp' ?>" alt="">
                    </div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/satellite.png' ?>"></div>
                            <div>
                                <h3>Fleet Management & Logistics</h3>
                                <p class="why-context">Engineering dash camera systems for high-uptime commercial
                                    fleets</p>
                            </div>
                        </div>
                        <div class="why-features">
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/ai-application.png' ?>"><span>Power-optimized
                                    camera
                                    hardware</span></div>
                            <div class="why-feature"><img
                                    src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png' ?>"><span>Event-based recording
                                    pipelines</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/Camera-Gimbal.png' ?>"><span>Secure video
                                    storage & remote upload</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/cloud-api.png' ?>"><span>OTA firmware update
                                    architecture</span></div>
                        </div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="dron-why-content" data-id="2">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/dashcam/RideHailing.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png' ?>"></div>
                            <div>
                                <h3>Ride-Hailing & Mobility Platforms</h3>
                                <p class="why-context">Dual-camera and privacy-aware imaging for shared mobility</p>
                            </div>
                        </div>
                        <div class="why-features">
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/cloud-api.png' ?>"><span>Front + cabin
                                    camera architectures</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/cyborg.png' ?>"><span>ISP tuning for mixed
                                    lighting</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/deadline.png' ?>"><span>Privacy-aware
                                    firmware controls</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/eco-bulb.png' ?>"><span>Compact
                                    vehicle-friendly form factors</span></div>
                        </div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="dron-why-content" data-id="3">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/dashcam/PublicTransport.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/gear.png' ?>"></div>
                            <div>
                                <h3>Public Transport Systems</h3>
                                <p class="why-context">Multi-camera synchronized systems for buses and metro fleets
                                </p>
                            </div>
                        </div>
                        <div class="why-features">
                            <div class="why-feature"><img
                                    src="<?= IMAGE_PATH.'/icon/cognitive-distortion.png' ?>"><span>Automotive-grade
                                    hardware</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png' ?>"><span>Multi-channel
                                    synchronization</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/mechanical-gears-.png' ?>"><span>Thermal &
                                    vibration resistance</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/relations.png' ?>"><span>Centralized
                                    recording systems</span></div>
                        </div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="dron-why-content" data-id="4">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/dashcam/LawEnforcement.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/relations.png' ?>"></div>
                            <div>
                                <h3>Law Enforcement & Emergency Services</h3>
                                <p class="why-context">Evidence-grade secure video systems for emergency response
                                </p>
                            </div>
                        </div>
                        <div class="why-features">
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/knowledge.png' ?>"><span>Fast-boot
                                    firmware</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/mechanical-gears-.png' ?>"><span>Encrypted
                                    pipelines</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/motion.png' ?>"><span>Event-triggered
                                    recording</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/ai-chip.png' ?>"><span>Tamper-resistant
                                    hardware</span></div>
                        </div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="dron-why-content" data-id="5">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/dashcam/Commercial.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/food-processing.png' ?>"></div>
                            <div>
                                <h3>Commercial & Industrial Vehicles</h3>
                                <p class="why-context">Rugged dash cameras for construction, mining and utilities
                                </p>
                            </div>
                        </div>
                        <div class="why-features">
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/sensor.png' ?>"><span>Ruggedized camera
                                    systems</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/isp.png' ?>"><span>Power surge
                                    protection</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/thunderbolt.png' ?>"><span>HDR & glare
                                    handling</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/web-settings.png' ?>"><span>Sealed
                                    enclosures</span></div>
                        </div>
                    </div>
                </div>

                <!-- 6 -->
                <div class="dron-why-content" data-id="6">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/dashcam/Automotive.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/cyborg.png' ?>"></div>
                            <div>
                                <h3>Automotive OEMs & Tier Suppliers</h3>
                                <p class="why-context">Platform-ready camera engineering for vehicle integration</p>
                            </div>
                        </div>
                        <div class="why-features">
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/face-scanner.png' ?>"><span>Custom reference
                                    designs</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/cyborg.png' ?>"><span>ECU & CAN
                                    integration</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/digital-ecosystem.png' ?>"><span>DFM-ready
                                    engineering</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/cognitive-distortion.png' ?>"><span>Production
                                    scalability</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="dron-why-content" data-id="7">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/dashcam/TelematicsSolution.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/cloud-api.png' ?>"></div>
                            <div>
                                <h3>Insurance & Telematics Providers</h3>
                                <p class="why-context">Event-driven and AI-enabled camera platforms</p>
                            </div>
                        </div>
                        <div class="why-features">
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/ai-application.png' ?>"><span>Impact & event
                                    detection</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png' ?>"><span>Edge
                                    AI integration</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/cloud-api.png' ?>"><span>Optimized
                                    compression</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/eco-bulb.png' ?>"><span>Secure cloud
                                    pipelines</span></div>
                        </div>
                    </div>
                </div>

                <!-- 8 -->
                <div class="dron-why-content" data-id="8">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/dashcam/Startups &R&D.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/gear.png' ?>"></div>
                            <div>
                                <h3>Startups & R&D Teams</h3>
                                <p class="why-context">Rapid prototyping and custom dash camera R&D</p>
                            </div>
                        </div>
                        <div class="why-features">
                            <div class="why-feature"><img
                                    src="<?= IMAGE_PATH.'/icon/cognitive-distortion.png' ?>"><span>Proof-of-concept
                                    systems</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png' ?>"><span>Custom firmware
                                    & AI</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/mechanical-gears-.png' ?>"><span>Flexible
                                    hardware platforms</span></div>
                            <div class="why-feature"><img src="<?= IMAGE_PATH.'/icon/relations.png' ?>"><span>NDA-protected
                                    development</span></div>
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
                    Representative capabilities and configurable parameters across our custom Dash camera
                    engineering
                    solutions.
                    Specifications vary based on mission requirements, payload constraints, and operating
                    environment.
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
                <img src="<?= IMAGE_PATH.'/solutions/dronecam/specification1.webp' ?>" alt="Camera System Architecture">
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
            const scrollHeight = vh + (cards.length - 1) * vh * 0.80;// tuned multiplier

            section.style.height = scrollHeight + "px";
        }

        // Apply once
        setScrollHeight(".dash-case-scroll", ".drone-case-card");

        // Recalculate on resize
        window.addEventListener("resize", () => {
            setScrollHeight(".dash-case-scroll", ".drone-case-card");
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


        //for setion Automotive-Grade Engineering

        const slides = document.querySelectorAll('.eng-slide');
        let current = 0;

        function showSlide(index) {
            slides.forEach(s => s.classList.remove('active'));
            slides[index].classList.add('active');
        }

        document.getElementById('next').onclick = () => {
            current = (current + 1) % slides.length;
            showSlide(current);
        };

        document.getElementById('prev').onclick = () => {
            current = (current - 1 + slides.length) % slides.length;
            showSlide(current);
        };

        const branches = document.querySelectorAll('.isp-branch');
        const panels = document.querySelectorAll('.isp-panel');

        branches.forEach(branch => {
            branch.addEventListener('mouseenter', () => {
                const id = branch.dataset.content;

                panels.forEach(p => p.classList.remove('active'));
                document.getElementById(id).classList.add('active');
            });
        });


    </script>

@endsection
