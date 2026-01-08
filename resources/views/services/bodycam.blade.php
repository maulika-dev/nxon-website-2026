@extends('layouts.layout')
@section('content')
    <div></div>
    <section class="bodycamera-hero-pro">
        <div class="drone-hero-overlay"></div>
        <div class="drone-hero-inner">

            <!-- LEFT CONTENT -->
            <div class="drone-hero-text">
                <span class="drone-hero-badge">ENGINEERING EXCELLENCE</span>
                <h1>
                    Custom Body Camera <br />
                    Engineering Services

                </h1>
                <p>
                    Secure, reliable, and mission-ready wearable camera systems engineered for real-world operational
                    conditions, long-term reliability, and data integrity.
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
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/bodycamsystem.webp' ?>"
                    alt="Exploded Body Camera Engineering Architecture">
            </div>

            <div class="drone-arch-right">
                <span class="eyebrow">SYSTEM ARCHITECTURE</span>
                <h2>Exploded Bodycam Engineering Visual</h2>
                <p>
                    A component-level view of a body-worn camera system, showing how optics, electronics,
                    power, security, and mechanical elements integrate into a single field-ready platform.
                </p>

                <ul>
                    <li>Optics & Lens — Field of view and low-light tuning</li>
                    <li>Image Sensor — Motion-robust capture pipeline</li>
                    <li>PCB & SoC — Processing, memory, power control</li>
                    <li>Battery & Power — Charging and runtime optimization</li>
                    <li>Secure Storage — Encryption and data integrity</li>
                    <li>Housing & Mounts — Shock, heat, and daily wear</li>
                </ul>

            </div>

        </div>
    </section>

    <section class="drone-engineering-process">
        <div class="container">

            <div class="drone-process-text">
                <span class="eyebrow">ENGINEERING PROCESS</span>
                <h2>Engineers at Work</h2>
                <p>
                    Hands-on engineering and validation of body-worn camera systems across hardware,
                    firmware, power, thermal, and reliability domains.
                </p>

                <div class="drone-process-points">
                    <div>PCB bring-up & power rail validation</div>
                    <div>Signal integrity & interface testing</div>
                    <div>Camera module calibration & tuning</div>
                    <div>Firmware validation & system testing</div>
                </div>
            </div>

            <div class="drone-process-image">
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/bodycamengineer.webp' ?>"
                    alt="Engineers validating body camera electronics">
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

                <h3>Camera Hardware Design</h3>

                <p class="card-intro">
                    We engineer camera hardware that fits your drone platform, power budget,
                    and mission constraints — not off-the-shelf modules.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon"> <img src="<?= IMAGE_PATH.'/icon/circuit-board.png' ?>" alt="PCB Design">
                        </span>
                        <div class="feature-text">
                            <strong>Custom Camera PCB</strong>
                            <small>Compact, lightweight & EMI-aware layouts</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/power.png' ?>" alt="power"></span>
                        <div class="feature-text">
                            <strong>Power Optimization</strong>
                            <small>Designed for drone battery limitations</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/deadline.png' ?>" alt="speed"></span>
                        <div class="feature-text">
                            <strong>High-Speed Interfaces</strong>
                            <small>MIPI, USB, Ethernet data paths</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/mechanical-gears-.png' ?>"
                                alt="mechanical"></span>
                        <div class="feature-text">
                            <strong>Mechanical Integration</strong>
                            <small>Housing & mounts designed for drones</small>
                        </div>
                    </div>

                </div>

            </div>

            <div class="drone-case-right body-img1"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Image Quality Engineering</span>

                <h3>Image Sensor & ISP Tuning</h3>

                <p class="card-intro">
                    We tune the full imaging pipeline for motion-heavy, body-worn use — ensuring usable
                    footage in low light, high contrast, and fast movement scenarios.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/sensor.png' ?>" alt="sensor">
                        </span>
                        <div class="feature-text">
                            <strong>Sensor Selection</strong>
                            <small>Low-noise CMOS tuned for wearable capture</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/isp.png' ?>" alt="ISP">
                        </span>
                        <div class="feature-text">
                            <strong>ISP Pipeline Tuning</strong>
                            <small>Exposure, color, noise, and HDR control</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/eco-bulb.png' ?>" alt="low-light">
                        </span>
                        <div class="feature-text">
                            <strong>Low-Light Optimization</strong>
                            <small>Night, indoor, and low-visibility tuning</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/motion.png' ?>" alt="motion">
                        </span>
                        <div class="feature-text">
                            <strong>Motion Optimization</strong>
                            <small>Blur, rolling shutter, and stabilization control</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right body-img2"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Optical Engineering</span>

                <h3>Optics & Calibration</h3>

                <p class="card-intro">
                    We select, integrate, and calibrate optics for field of view, distortion control,
                    focus stability, and real-world lighting conditions.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/lens2.png' ?>" alt="lens">
                        </span>
                        <div class="feature-text">
                            <strong>Lens Selection</strong>
                            <small>FOV, aperture, and distortion per use case</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/optical-fiber.png' ?>" alt="optical-alignment">
                        </span>
                        <div class="feature-text">
                            <strong>Optical Alignment</strong>
                            <small>Precise sensor-lens positioning and focus tuning</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/measurement.png' ?>" alt="calibrations">
                        </span>
                        <div class="feature-text">
                            <strong>Calibration Workflows</strong>
                            <small>Factory and field calibration procedures</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/cognitive-distortion.png' ?>" alt="distortion">
                        </span>
                        <div class="feature-text">
                            <strong>Distortion Correction</strong>
                            <small>Geometric and shading correction profiles</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right body-img3"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Embedded Software</span>

                <h3>Embedded Firmware & Secure OS</h3>

                <p class="card-intro">
                    We build secure, efficient firmware stacks enabling reliable recording, device control,
                    encrypted storage, and tamper resistance.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/driver.png' ?>" alt="Sensor & ISP Drivers">
                        </span>
                        <div class="feature-text">
                            <strong>Sensor & ISP Drivers</strong>
                            <small>Stable low-level control of the imaging pipeline</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/cyber-security.png' ?>" alt="Bootloader & Bring-up">
                        </span>
                        <div class="feature-text">
                            <strong>Secure Boot & Bring-up</strong>
                            <small>Trusted startup and hardware initialization</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/battery.png' ?>" alt="Power & Thermal">
                        </span>
                        <div class="feature-text">
                            <strong>Power & Thermal Management</strong>
                            <small>Monitoring, sequencing, and protection mechanisms</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/optimization.png' ?>" alt="RT Performance">
                        </span>
                        <div class="feature-text">
                            <strong>Real-Time Performance</strong>
                            <small>Deterministic behavior and latency control</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right body-img4"></div>
        </div>


        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Audio & Video Pipeline</span>

                <h3>Audio Capture & Synchronization</h3>

                <p class="card-intro">
                    We engineer synchronized audio pipelines for clear voice capture aligned with video,
                    even in noisy and dynamic environments.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/video-processing.png' ?>" alt="audio-video-sync">
                        </span>
                        <div class="feature-text">
                            <strong>Audio-Video Synchronization</strong>
                            <small>Precise timestamp alignment with video frames</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/voice-command.png' ?>" alt="noise">
                        </span>
                        <div class="feature-text">
                            <strong>Noise Handling</strong>
                            <small>Wind, movement, and background noise reduction</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/record.png' ?>" alt="audio-storage">
                        </span>
                        <div class="feature-text">
                            <strong>Audio Storage</strong>
                            <small>Integrated with secure video recording</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/live.png' ?>" alt="audio-modes">
                        </span>
                        <div class="feature-text">
                            <strong>Capture Modes</strong>
                            <small>Continuous and event-based audio capture</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right body-img5"></div>
        </div>



        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Video Pipeline</span>

                <h3>Video Encoding, Storage & Encryption</h3>

                <p class="card-intro">
                    We optimize video pipelines for quality, storage efficiency, and evidentiary-grade
                    security across the full capture and retention lifecycle.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/video.png' ?>" alt="video-encoding">
                        </span>
                        <div class="feature-text">
                            <strong>H.264 / H.265 Encoding</strong>
                            <small>High-quality, bandwidth-efficient compression</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/content-delivery-network.png' ?>" alt="bitrate-control">
                        </span>
                        <div class="feature-text">
                            <strong>Bitrate Control</strong>
                            <small>Adaptive encoding based on motion and scene complexity</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/data-protection.png' ?>" alt="secure-storage">
                        </span>
                        <div class="feature-text">
                            <strong>Secure Storage</strong>
                            <small>Encrypted local recording and key management</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/approval.png' ?>" alt="evidence-integrity">
                        </span>
                        <div class="feature-text">
                            <strong>Evidence Integrity</strong>
                            <small>Hashing, signing, and tamper detection</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/cloud-api.png' ?>" alt="retention">
                        </span>
                        <div class="feature-text">
                            <strong>Retention & Access Control</strong>
                            <small>Policy-based storage and retrieval control</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right body-img6"></div>
        </div>



        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">AI & Analytics</span>

                <h3>AI / Analytics Integration</h3>

                <p class="card-intro">
                    We integrate edge AI capabilities such as event detection, behavior analysis, and
                    metadata tagging — optimized for efficient on-device processing.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/emergency.png' ?>" alt="event-detection">
                        </span>
                        <div class="feature-text">
                            <strong>Event Detection</strong>
                            <small>Triggering based on motion, audio, or visual cues</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png' ?>" alt="behavior-analysis">
                        </span>
                        <div class="feature-text">
                            <strong>Behavior Analysis</strong>
                            <small>Activity, posture, and interaction understanding</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/protocol.png' ?>" alt="metadata">
                        </span>
                        <div class="feature-text">
                            <strong>Metadata Tagging</strong>
                            <small>Automatic tagging for search and review</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/ai-chip.png' ?>" alt="edge-ai">
                        </span>
                        <div class="feature-text">
                            <strong>Edge Optimization</strong>
                            <small>Low-latency inference on embedded hardware</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right body-img7"></div>
        </div>



        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Mechanical Engineering</span>

                <h3>Ruggedized Mechanical Design</h3>

                <p class="card-intro">
                    We design enclosures and mounts built to withstand impact, vibration, weather,
                    and daily operational abuse in real-world field use.
                </p>

                <div class="drone-case-feature-list">

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/gear.png' ?>" alt="thermal">
                        </span>
                        <div class="feature-text">
                            <strong>Impact & Shock Resistance</strong>
                            <small>Protection against drops, collisions, and rough handling</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/stabilizer.png' ?>" alt="vibration">
                        </span>
                        <div class="feature-text">
                            <strong>Vibration Tolerance</strong>
                            <small>Stable operation under continuous movement</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/harmful.png' ?>" alt="weather">
                        </span>
                        <div class="feature-text">
                            <strong>Environmental Protection</strong>
                            <small>Sealing for dust, moisture, and temperature exposure</small>
                        </div>
                    </div>

                    <div class="feature-item">
                        <span class="feature-icon">
                            <img src="<?= IMAGE_PATH.'/icon/body.png' ?>" alt="mounting">
                        </span>
                        <div class="feature-text">
                            <strong>Mounting & Wearability</strong>
                            <small>Secure clips and mounts for daily field use</small>
                        </div>
                    </div>

                </div>

            </div>
            <div class="drone-case-right body-img8"></div>
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




        </div>
    </section>

    <section class="hr-showcase">
        <div class="hr-container">
            <div class="hr-grid">

                <div class="hr-card c1">
                    <div class="hr-card-content">
                        <h4>Low-Light & Indoor Optimization</h4>
                        <p>Clear detail in low-light and indoor scenes.</p>
                    </div>
                </div>

                <div class="hr-card c2">
                    <div class="hr-card-content">
                        <h4>Wide Dynamic Range Handling</h4>
                        <p>Balanced highlights and shadows in harsh lighting.</p>
                    </div>
                </div>

                <div class="hr-card c3">
                    <div class="hr-card-content">
                        <h4>Motion Blur Reduction</h4>
                        <p>Reduced blur during rapid movement.</p>
                    </div>
                </div>

                <div class="hr-card c4">
                    <div class="hr-card-content">
                        <h4>Multi-Microphone Audio Capture</h4>
                        <p>Clear voice with ambient noise suppression.</p>
                    </div>
                </div>

                <div class="hr-card c5 wide">
                    <div class="hr-card-content">
                        <h4>Audio / Video Synchronization</h4>
                        <p>Accurate audio-video alignment for evidence.</p>
                    </div>
                </div>


            </div>



            <div class="hr-left">
                <h2>Image Quality & <span>Audio Engineering</span></h2>
                <p>
                    Engineered for real-world evidence capture. We design imaging and audio
                    pipelines that deliver clarity, consistency, and evidentiary reliability
                    across uncontrolled lighting, motion, and acoustic conditions.
                </p>

            </div>

        </div>
    </section>

    <section class="usecases-visual">

        <h2 class="usecases-title">Power, Battery & <span>Thermal Engineering</span></h2>
        <p class="usecases-subtitle">
            Engineered for long shifts, continuous recording, and safe operation.
        </p>

        <div class="usecases-grid">

            <!-- LARGE CARD -->
            <div class="usecase-card large">
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/BatteryOptimization.png' ?>" alt="Long-Shift Battery Optimization"
                    class="usecase-image">
                <h3>Long-Shift Battery Optimization</h3>
                <p>
                    Power profiling and system-level optimization across sensors, processors, storage,
                    and radios to support full-shift operation without sacrificing performance.
                </p>
            </div>

            <!-- SMALL CARD -->
            <div class="usecase-card small">
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/FastCharging.png' ?>" alt="Fast Charging & Safe Power Design"
                    class="usecase-image">
                <h3>Fast Charging & Safe Power Design</h3>
                <p>
                    Charging circuits, protection mechanisms, and battery management designed for fast,
                    reliable charging and long-term battery health.
                </p>
            </div>

            <!-- SMALL CARD -->
            <div class="usecase-card small">
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/Thermal Management.png' ?>" alt="Thermal Management"
                    class="usecase-image">
                <h3>Thermal Management for Continuous Recording</h3>
                <p>
                    Heat-aware component placement and thermal paths to ensure stable operation during
                    extended recording and high ambient temperatures.
                </p>
            </div>

            <!-- MEDIUM HORIZONTAL CARD -->
            <div class="usecase-card medium usecase-horizontal">
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/Smart Power.png' ?>" alt="Smart Power Modes" class="usecase-image">
                <div class="usecase-text">
                    <h3>Smart Power Modes & Event Triggers</h3>
                    <p>
                        Intelligent power states and event-based triggers to extend battery life while
                        ensuring critical moments are always captured.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="isp-sticky-section">

        <div class="isp-left">
            <h2>Secure Video, Data & <span>Privacy Engineering</span></h2>
            <p>
                Body-worn cameras handle sensitive, evidentiary data. We engineer secure video and data
                architectures that protect footage from capture to storage to offload — ensuring integrity,
                access control, privacy, and compliance throughout the lifecycle.
            </p>
        </div>

        <div class="isp-right">

            <div class="isp-grid">

                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/bodycam/end-to-end.webp' ?>">
                    <h4>End-to-End Video Encryption</h4>
                    <p>Encryption at capture, transfer, and storage to prevent unauthorized access.</p>
                </div>

                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/bodycam/SecureStorage.webp' ?>">
                    <h4>Secure Storage & Evidence Integrity</h4>
                    <p>Tamper-resistant storage with cryptographic verification and chain-of-custody.</p>
                </div>

                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/bodycam/accsesscontrol.webp' ?>">
                    <h4>Role-Based Access Control</h4>
                    <p>Fine-grained permissions for viewing, exporting, and managing recorded footage.</p>
                </div>

                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/bodycam/Offload&Docking.webp' ?>">
                    <h4>Secure Data Offload & Docking</h4>
                    <p>Encrypted and authenticated transfer via docking or wired/wireless offload.</p>
                </div>

                <div class="isp-card center">
                    <img src="<?= IMAGE_PATH.'/solutions/bodycam/Compliance-Ready.webp' ?>">
                    <h4>Compliance-Ready Architectures</h4>
                    <p>Auditability, logging, and policy enforcement for regulatory alignment.</p>
                </div>

            </div>

        </div>
    </section>

    <section class="sketch-section">

        <h2 class="sketch-title"><span>Ruggedization & Wearability</span> Engineering</h2>
        <p class="sketch-subtitle">Engineered to be worn. Built to survive the field.</p>

        <div class="sketch-grid">

            <!-- Row 1 Left -->
            <div class="sketch-card left-image">
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/ImpactResistance.webp' ?>" alt="">
                <div class="sketch-text bottom">
                    <h3>Drop & Impact Resistance</h3>
                    <p>Designed to survive repeated drops, shocks, and vibration.</p>
                </div>
            </div>

            <!-- Row 1 Right -->
            <div class="sketch-card right-image">
                <div class="sketch-text top">
                    <h3>Water & Dust Protection</h3>
                    <p>Sealed housings protect internal electronics from rain and dust.</p>
                </div>
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/waterdustbodycam.webp' ?>" alt="">
            </div>

            <!-- Row 2 Left -->
            <div class="sketch-card left1-image">
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/clipmountbodycam.webp' ?>" alt="">
                <div class="sketch-text bottom">
                    <h3>Clip & Mount Design</h3>
                    <p>Secure mounting for different uniforms and body positions.</p>
                </div>
            </div>

            <!-- Row 2 Right -->
            <div class="sketch-card right1-image">
                <div class="sketch-text top">
                    <h3>Comfort & Weight Optimization</h3>
                    <p>Balanced weight and materials for extended wear comfort.</p>
                </div>
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/comfortbodycam.webp' ?>" alt="">
            </div>

        </div>
    </section>

    <section class="isp-architecture">
        <div class="isp-container">

            <h2 class="isp-title">AI & Smart <span>Bodycam Features</span></h2>
            <p class="isp-subtitle">
                Intelligence engineered at the edge — enabling real-time awareness, automation, and privacy on-device.
            </p>

            <div class="isp-diagram">

                <div class="isp-top">
                    <div class="isp-core">Intelligence Focus Areas</div>
                </div>

                <div class="isp-line"></div>

                <div class="isp-branches">

                    <div class="isp-branch" data-content="event">
                        <img src="<?= IMAGE_PATH.'/icon/emergency.png' ?>" class="isp-icon">
                        <span>Automatic<br>Event Detection</span>
                        <p>AI models detect and tag critical moments such as sudden movement or scene changes.</p>
                    </div>

                    <div class="isp-branch" data-content="face">
                        <img src="<?= IMAGE_PATH.'/icon/face-scanner.png' ?>" class="isp-icon">
                        <span>Face &<br>Object Detection</span>
                        <p>Optimized models identify faces and relevant objects while respecting privacy constraints.
                        </p>
                    </div>

                    <div class="isp-branch" data-content="voice">
                        <img src="<?= IMAGE_PATH.'/icon/voice-command.png' ?>" class="isp-icon">
                        <span>Voice &<br>Keyword Triggers</span>
                        <p>Hands-free operation using voice commands or keyword-based audio triggers.</p>
                    </div>

                    <div class="isp-branch" data-content="redaction">
                        <img src="<?= IMAGE_PATH.'/icon/data-protection.png' ?>" class="isp-icon">
                        <span>Redaction<br>Support</span>
                        <p>AI-assisted workflows for blurring faces, screens, and sensitive content.</p>
                    </div>

                    <div class="isp-branch" data-content="edge">
                        <img src="<?= IMAGE_PATH.'/icon/ai-chip.png' ?>" class="isp-icon">
                        <span>Edge AI<br>Optimization</span>
                        <p>On-device AI optimized for performance, power efficiency, and thermal limits.</p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="dron-why-section">
        <h2 class="dron-why-heading">Why <span>Choose Us?</span></h2>

        <div class="dron-why-grid">

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/global-solution.png' ?>" alt="End to End"></div>
                <h3>End-to-End Development</h3>
                <p>From idea discovery to working prototypes, we handle the full journey.</p>
            </div>

            <div class="dron-why-card">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/approval.png' ?>" alt="investor-ready solution">
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
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png' ?>" alt="AI expertise"></div>
                <h3>AI Expertise, Simplified</h3>
                <p>Turning complex AI concepts into production-ready systems.</p>
            </div>

            <div class="dron-why-card ">
                <div class="dron-why-icon"> <img src="<?= IMAGE_PATH.'/icon/quality.png' ?>" alt="Engineering"></div>
                <h3>Engineering Reliability</h3>
                <p>Designed for real-world performance, security, and long-term stability.</p>
            </div>

        </div>
    </section>

    <section class="dron-why-choose">

        <h2 class="dron-why-title">Industries <span>We Serve</span></h2>
        <p class="dron-why-subtitle">
            Engineering wearable camera systems for industries where reliability, security, and real-world performance
            are critical.
        </p>

        <div class="dron-why-layout">

            <div class="dron-why-list">
                <button class="dron-why-item active" data-id="1">Law Enforcement Agencies</button>
                <button class="dron-why-item" data-id="2">Private Security Firms</button>
                <button class="dron-why-item" data-id="3">Emergency Services</button>
                <button class="dron-why-item" data-id="4">Industrial Safety Teams</button>
                <button class="dron-why-item" data-id="5">Healthcare & Compliance</button>
            </div>

            <div class="dron-why-detail">

                <!-- 1 -->
                <div class="dron-why-content active" data-id="1">
                    <div class="why-cover">
                        <img src="<?= IMAGE_PATH.'/solutions/bodycam/lowenforcement.webp' ?>" alt="">
                    </div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/cctv-camera.png' ?>"></div>
                            <div>
                                <h3>Law Enforcement Agencies</h3>
                                <p class="why-context">Evidence-grade, secure, and accountable body-worn camera systems.
                                </p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• Evidence integrity & encryption</span></div>
                            <div class="bodywhy-feature"><span>• All-shift operational reliability</span></div>
                            <div class="bodywhy-feature"><span>• Secure access control & auditability</span></div>
                        </div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="dron-why-content" data-id="2">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/bodycam/privatesecurity.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/cyber-security.png' ?>"></div>
                            <div>
                                <h3>Private Security Firms</h3>
                                <p class="why-context">Scalable and durable systems for daily operational use.</p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• Long-duration recording</span></div>
                            <div class="bodywhy-feature"><span>• Simple operation & rugged hardware</span></div>
                            <div class="bodywhy-feature"><span>• Secure footage offload workflows</span></div>
                        </div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="dron-why-content" data-id="3">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/bodycam/Emergency Responder.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/emergency.png' ?>"></div>
                            <div>
                                <h3>Emergency Services</h3>
                                <p class="why-context">High-reliability systems for unpredictable, high-stress
                                    environments.</p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• Motion-heavy recording stability</span></div>
                            <div class="bodywhy-feature"><span>• Clear audio in noisy environments</span></div>
                            <div class="bodywhy-feature"><span>• Ruggedization for harsh field conditions</span></div>
                        </div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="dron-why-content" data-id="4">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/bodycam/Industrial Safety.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/gear.png' ?>"></div>
                            <div>
                                <h3>Industrial Safety Teams</h3>
                                <p class="why-context">Wearable cameras for safety audits and compliance documentation.
                                </p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• Rugged & dust-resistant design</span></div>
                            <div class="bodywhy-feature"><span>• Event-triggered incident capture</span></div>
                            <div class="bodywhy-feature"><span>• Secure footage retention</span></div>
                        </div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="dron-why-content" data-id="5">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/bodycam/healthcarebodycam.webp' ?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/healthcare.png' ?>"></div>
                            <div>
                                <h3>Healthcare & Compliance Monitoring</h3>
                                <p class="why-context">Privacy-aware systems for sensitive and regulated environments.
                                </p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• Privacy-conscious recording pipelines</span></div>
                            <div class="bodywhy-feature"><span>• Role-based access control</span></div>
                            <div class="bodywhy-feature"><span>• Secure storage & controlled review</span></div>
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
                    Representative capabilities and configurable parameters across our custom Body camera
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
                <img src="<?= IMAGE_PATH.'/solutions/bodycam/camerafull1.webp' ?>" alt="Camera System Architecture">
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
