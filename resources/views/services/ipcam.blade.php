@extends('layouts.layout')
@section('content')
    <div></div>

    <section class="ip-hero-premium">
        <div class="ip-hero-bg"></div>
        <div class="ip-hero-content">
            <span class="drone-hero-badge">ENGINEERING EXCELLENCE</span>
            <h1>Custom Networked <br>IP Camera Engineering</h1>
            <p>
                From architecture to deployment-ready networked imaging systems
            </p>
            <div class="ip-hero-cta">
                <a class="btn btn-primary">Start Your Project</a>
                <a class="btn btn-outline">Request Consultation</a>
            </div>
        </div>
    </section>

    <section class="drone-engineering-architecture">
        <div class="container">
            <div class="drone-arch-right ip-arch">
                <span class="eyebrow">SYSTEM ARCHITECTURE</span>
                <h2>Exploded IP Camera System</h2>
                <p>
                    This exploded system view shows how we engineer IP cameras as networked vision platforms —
                    integrating image sensing,
                    processing, power, security, and networking into a single deployment-ready system optimized for
                    reliability and scale.
                </p>
                <ul>
                    <li>Image Sensor & Optics — Selection, tuning, and low-light performance</li>
                    <li>ISP Pipeline — Noise reduction, HDR, and motion handling</li>
                    <li>SoC & Edge AI — Processing, analytics, and system control</li>
                    <li>Power & Thermal — Efficient power delivery and heat management</li>
                    <li>Secure Storage — Encryption, integrity, and data protection</li>
                    <li>Networking — Ethernet / PoE, wireless connectivity, and data flow</li>
                </ul>
            </div>
            <div class="drone-arch-left ip-arch1">
                <img src="<?= IMAGE_PATH.'/solutions/ipcamera/ipsystem.webp'?>" alt="Exploded IP Camera System Architecture">
            </div>
        </div>
    </section>
    
    <section class="drone-engineering-process">
        <div class="container">
            <div class="drone-process-image">
                <img src="<?= IMAGE_PATH.'/solutions/ipcamera/ipengineer.webp'?>"
                    alt="Engineers working on networked embedded camera systems">
            </div>
            <div class="drone-process-text">
                <span class="eyebrow">ENGINEERING PROCESS</span>
                <h2>Engineers Working on Networked Embedded Systems</h2>
                <p>
                    This visual highlights the human engineering expertise behind our networked vision systems. Our
                    engineers work hands-on
                    with embedded hardware, real-time firmware, and IP networking stacks to bring custom camera
                    architectures from concept
                    to deployment.
                </p>
                <div class="drone-process-points">
                    <div>PCB bring-up & hardware validation</div>
                    <div>Firmware debugging & system integration</div>
                    <div>Network performance & throughput testing</div>
                    <div>Long-run stability & reliability validation</div>
                </div>
            </div>
        </div>
    </section>

    <section class="dash-case-scroll">
        <h1 class="drone-case-title">
            Why <span class="drone-blue-text">Custom IP Camera Engineering</span>
        </h1>
        <!-- CARD 1 -->
        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Imaging Hardware</span>
                <h3>Custom Optics & Sensors</h3>
                <p class="card-intro">
                    Lenses and sensors are selected and tuned for your field of view, lighting, and motion conditions
                    instead of forcing generic imaging modules into specialized environments.
                </p>
                <div class="drone-case-feature-list">
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/lens2.png'?>"></span>
                        <div class="feature-text"><strong>Lens Selection</strong><small>FOV and aperture matched</small>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/sensor.png'?>"></span>
                        <div class="feature-text"><strong>Sensor Choice</strong><small>Noise & dynamic range</small>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/eco-bulb.png'?>"></span>
                        <div class="feature-text"><strong>Low-Light Tuning</strong><small>Night and indoor
                            capture</small>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/motion.png'?>"></span>
                        <div class="feature-text"><strong>Motion Handling</strong><small>Blur and rolling
                            shutter</small>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/measurement.png'?>"></span>
                        <div class="feature-text"><strong>Calibration</strong><small>Factory and field profiles</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="drone-case-right IP-img1"></div>
        </div>
        <!-- CARD 2 -->
        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Networking</span>
                <h3>Network Performance Tuning</h3>
                <p class="card-intro">
                    We engineer cameras as reliable network devices, optimizing streaming behavior, latency, and
                    bandwidth usage for real-world network conditions.
                </p>
                <div class="drone-case-feature-list">
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/thunderbolt.png'?>"></span>
                        <div class="feature-text"><strong>Streaming</strong><small>Low-latency delivery</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/protocol.png'?>"></span>
                        <div class="feature-text"><strong>Protocols</strong><small>RTSP, RTP, WebRTC</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/knowledge.png'?>"></span>
                        <div class="feature-text"><strong>Bandwidth</strong><small>Adaptive bitrate</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img
                            src="<?= IMAGE_PATH.'/icon/content-delivery-network.png'?>"></span>
                        <div class="feature-text"><strong>Packet Handling</strong><small>Loss recovery</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/cable.png'?>"></span>
                        <div class="feature-text"><strong>PoE</strong><small>Power over Ethernet</small></div>
                    </div>
                </div>
            </div>
            <div class="drone-case-right IP-img2"></div>
        </div>
        <!-- CARD 3 -->
        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Security</span>
                <h3>Security-by-Design</h3>
                <p class="card-intro">
                    Security is built into the architecture from the start through trusted boot, encryption, and
                    controlled access rather than added later.
                </p>
                <div class="drone-case-feature-list">
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/approval.png'?>"></span>
                        <div class="feature-text"><strong>Secure Boot</strong><small>Trusted startup</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img
                            src="<?= IMAGE_PATH.'/icon/data-protection.png'?>"></span>
                        <div class="feature-text"><strong>Encrypted Storage</strong><small>Protected data</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/body.png'?>"></span>
                        <div class="feature-text"><strong>Authentication</strong><small>User & device identity</small>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img
                            src="<?= IMAGE_PATH.'/icon/face-scanner.png'?>"></span>
                        <div class="feature-text"><strong>Integrity</strong><small>Tamper detection</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img
                            src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png'?>"></span>
                        <div class="feature-text"><strong>Protected Paths</strong><small>End-to-end security</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="drone-case-right IP-img3"></div>
        </div>
        <!-- CARD 4 -->
        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Scalability</span>
                <h3>Long-Term Scalability</h3>
                <p class="card-intro">
                    Systems are designed to evolve over time, supporting future analytics, higher resolutions, and
                    expanded deployments without redesign.
                </p>
                <div class="drone-case-feature-list">
                    <div class="feature-item">
                        <span class="feature-icon"><img
                            src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png'?>"></span>
                        <div class="feature-text"><strong>New Analytics</strong><small>Add AI features</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/sensor.png'?>"></span>
                        <div class="feature-text"><strong>Higher Resolution</strong><small>Upgrade sensors</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img
                            src="<?= IMAGE_PATH.'/icon/circuit-board.png'?>"></span>
                        <div class="feature-text"><strong>New Hardware</strong><small>Platform revisions</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img
                            src="<?= IMAGE_PATH.'/icon/content-delivery-network.png'?>"></span>
                        <div class="feature-text"><strong>Fleet Growth</strong><small>Scale deployments</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/knowledge.png'?>"></span>
                        <div class="feature-text"><strong>Future Proof</strong><small>Long-term support</small></div>
                    </div>
                </div>
            </div>
            <div class="drone-case-right IP-img4"></div>
        </div>
        <!-- CARD 5 -->
        <div class="drone-case-card">
            <div class="drone-case-left">
                <span class="mini-tag">Compliance</span>
                <h3>Compliance Flexibility</h3>
                <p class="card-intro">
                    Architectures are built to adapt to regulatory, industry, and organizational compliance needs
                    without rigid vendor constraints.
                </p>
                <div class="drone-case-feature-list">
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/approval.png'?>"></span>
                        <div class="feature-text"><strong>Audit Support</strong><small>Traceable logs</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/body.png'?>"></span>
                        <div class="feature-text"><strong>Access Control</strong><small>Policy-based permissions</small>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img
                            src="<?= IMAGE_PATH.'/icon/content-delivery-network.png'?>"></span>
                        <div class="feature-text"><strong>Regional Rules</strong><small>Local compliance</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img src="<?= IMAGE_PATH.'/icon/knowledge.png'?>"></span>
                        <div class="feature-text"><strong>Reporting</strong><small>Compliance evidence</small></div>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon"><img
                            src="<?= IMAGE_PATH.'/icon/artificial-intelligence.png'?>"></span>
                        <div class="feature-text"><strong>No Lock-in</strong><small>Vendor independence</small></div>
                    </div>
                </div>
            </div>
            <div class="drone-case-right IP-img5"></div>
        </div>
    </section>

    <section class="ip-process-layout">
        <div class="process-header">
            <h2>IP Camera <span>Engineering Process</span></h2>
            <p>
                From requirements to deployment-ready networked vision systems. Each stage focuses on system
                architecture,
                validation, and long-term operability.
            </p>
        </div>
        <div class="ip-process-grid">
            <div class="ip-process-card">
                <div class="ip-process-content">
                    <h3>Requirements & Use-Case Analysis</h3>
                    <p>Understanding environment, network, compliance and performance needs.</p>
                </div>
                <div class="ip-card-image">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/systemanlyis.webp'?>" alt="">
                </div>
            </div>
            <div class="ip-process-card">
                <div class="ip-process-content">
                    <h3>System Architecture & Component Selection</h3>
                    <p>Defining sensors, SoC, networking, storage and security architecture.</p>
                </div>
                <div class="ip-card-image">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/systemdesign.webp'?>" alt="">
                </div>
            </div>
            <div class="ip-process-card">
                <div class="ip-process-content">
                    <h3>Hardware, Firmware & Networking Design</h3>
                    <p>Developing hardware, embedded firmware and optimized networking stacks.</p>
                </div>
                <div class="ip-card-image">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/systemworkshop.webp'?>" alt="">
                </div>
            </div>
            <div class="ip-process-card wide">
                <div class="ip-process-content">
                    <h3>Image Quality, Performance & Security Tuning</h3>
                    <p>Tuning ISP, encoding, bandwidth and secure data handling.</p>
                </div>
                <div class="ip-card-image">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/ipcameraoptimazation.webp'?>" alt="">
                </div>
            </div>
            <div class="ip-process-card wide">
                <div class="ip-process-content">
                    <h3>Image Quality, Performance & Security Tuning</h3>
                    <p>Tuning ISP, encoding, bandwidth and secure data handling.</p>
                </div>
                <div class="ip-card-image">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/ipcameratesting.webp'?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="streaming-section">
        <div class="streaming-header">
            <h2>Video Streaming & Network Engineering</h2>
            <p>Engineered for reliable, low-latency network video.</p>
        </div>
        <div class="streaming-controls">
            <button class="stream-btn prev">‹</button>
            <button class="stream-btn next">›</button>
        </div>
        <div class="slick-hscroll">
            <!-- Card 1 -->
            <div class="hscroll-card">
                <div class="hscroll-content">
                    <div class="hscroll-left">
                        <h2>Engineered for Reliable, Low-Latency Network Video</h2>
                        <p>Stable video, predictable latency, and efficient bandwidth usage.</p>
                    </div>
                    <div class="hscroll-right">
                        <img src="<?= IMAGE_PATH.'/solutions/ipcamera/EngineeredforReliable.webp'?>">
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="hscroll-card">
                <div class="hscroll-content">
                    <div class="hscroll-left">
                        <h3>Standards-Based Streaming Protocols</h3>
                        <ul>
                            <li>RTSP / RTP streaming pipelines</li>
                            <li>ONVIF profile integration</li>
                            <li>Interoperability validation</li>
                        </ul>
                    </div>
                    <div class="hscroll-right">
                        <img src="<?= IMAGE_PATH.'/solutions/ipcamera/Standards-BasedStreaming.webp'?>">
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="hscroll-card">
                <div class="hscroll-content">
                    <div class="hscroll-left">
                        <h3>Multi-Stream Video Architectures</h3>
                        <ul>
                            <li>Primary high-resolution streams</li>
                            <li>Secondary low-bitrate live streams</li>
                            <li>AI-optimized analytics streams</li>
                        </ul>
                    </div>
                    <div class="hscroll-right">
                        <img src="<?= IMAGE_PATH.'/solutions/ipcamera/muticameravideo.webp'?>">
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="hscroll-card">
                <div class="hscroll-content">
                    <div class="hscroll-left">
                        <h3>Bandwidth Optimization & Adaptive Streaming</h3>
                        <ul>
                            <li>Bitrate control & GOP tuning</li>
                            <li>Frame rate adaptation</li>
                            <li>H.264 / H.265 / H.265+ codecs</li>
                        </ul>
                    </div>
                    <div class="hscroll-right">
                        <img src="<?= IMAGE_PATH.'/solutions/ipcamera/bandwith.webp'?>">
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="hscroll-card">
                <div class="hscroll-content">
                    <div class="hscroll-left">
                        <h3>Latency Tuning & Real-Time Performance</h3>
                        <ul>
                            <li>Encoder buffer optimization</li>
                            <li>Network stack tuning</li>
                            <li>Real-time streaming modes</li>
                        </ul>
                    </div>
                    <div class="hscroll-right">
                        <img src="<?= IMAGE_PATH.'/solutions/ipcamera/latncytuning.webp'?>">
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="hscroll-card">
                <div class="hscroll-content">
                    <div class="hscroll-left">
                        <h3>Edge Storage & Network Resilience</h3>
                        <ul>
                            <li>SD / eMMC edge recording</li>
                            <li>Failover during outages</li>
                            <li>Secure sync after reconnect</li>
                        </ul>
                    </div>
                    <div class="hscroll-right">
                        <img src="<?= IMAGE_PATH.'/solutions/ipcamera/edgestorage.webp'?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="auto-capability-header">
        <h2>Security & <span>Encryption Engineering </span></h2>
        <p>
            We secure IP cameras with encrypted streaming, hardened firmware, and controlled access to protect video
            data and prevent unauthorized use.
        </p>
    </section>

    <section class="nx-col-section">
        <div class="nx-col-grid">
            <div class="nx-col">
                <div class="nx-col-card nx-col-tall">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/securebooticon.webp'?>" class="nx-col-icon">
                    <h4 class="nx-col-title">Secure Boot & Firmware Signing</h4>
                    <p class="nx-col-text">
                        Each boot stage verifies cryptographic signatures to ensure only trusted firmware runs on
                        the device.
                    </p>
                    <ul class="nx-col-points">
                        <li>Hardware root of trust</li>
                        <li>Signed firmware verification</li>
                        <li>Boot chain integrity checks</li>
                    </ul>
                </div>
                <div class="nx-col-card nx-col-small">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/endtoendicon.webp'?>" class="nx-col-icon">
                    <h4 class="nx-col-title">End-to-End Video Encryption</h4>
                    <p class="nx-col-text">Video streams are encrypted from capture to storage to protect sensitive
                        footage across all networks.
                    </p>
                    <ul class="nx-col-points">
                        <li>On-device encryption at capture</li>
                        <li>Secure transmission channels</li>
                        <li>Encrypted storage format</li>
                    </ul>
                </div>
            </div>
            <div class="nx-col">
                <div class="nx-col-card nx-col-small">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/securestorageicon.webp'?>" class="nx-col-icon">
                    <h4 class="nx-col-title">Secure Storage & Evidence Integrity</h4>
                    <p class="nx-col-text">
                        Recorded video is stored encrypted with integrity protection to prevent tampering and ensure
                        reliable evidence.
                    </p>
                    <ul class="nx-col-points">
                        <li>On-device encryption at capture</li>
                        <li>Secure transmission channels</li>
                        <li>Encrypted storage format</li>
                    </ul>
                </div>
                <div class="nx-col-card nx-col-tall">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/rolebasedicon.webp'?>" class="nx-col-icon">
                    <h4 class="nx-col-title">Role-Based Access Control</h4>
                    <p class="nx-col-text">
                        Access to video and system functions is restricted by user roles so only authorized
                        personnel can manage or view sensitive data.
                    </p>
                    <ul class="nx-col-points">
                        <li>Role-based permission policies</li>
                        <li>Granular access controls</li>
                        <li>Audit logging of user actions</li>
                    </ul>
                </div>
            </div>
            <div class="nx-col">
                <div class="nx-col-card nx-col-tall">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/securedataicon.webp'?>" class="nx-col-icon">
                    <h4 class="nx-col-title">Secure Data Offload</h4>
                    <p class="nx-col-text">
                        Cameras securely authenticate before data transfer, preventing unauthorized devices from
                        accessing or injecting video.
                    </p>
                    <ul class="nx-col-points">
                        <li>Device identity verification</li>
                        <li>Mutual authentication before transfer</li>
                        <li>Injection and spoofing prevention</li>
                    </ul>
                </div>
                <div class="nx-col-card nx-col-small">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/privacyicon.webp'?>" class="nx-col-icon">
                    <h4 class="nx-col-title">Privacy & Policy Controls</h4>
                    <p class="nx-col-text">
                        Security and privacy controls are designed to support regulatory compliance across regions
                        and industries.
                    </p>
                    <ul class="nx-col-points">
                        <li>GDPR and regional compliance support</li>
                        <li>Privacy-by-design controls</li>
                        <li>Configurable data retention policies</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="usecases-visual">
        <h2 class="usecases-title">Mechanical, Thermal & <span>Environmental Design</span></h2>
        <p class="usecases-subtitle">
            Engineered for reliable operation across outdoor, industrial, and harsh real-world environments.
        </p>
        <div class="usecases-grid">
            <!-- SMALL CARD -->
            <div class="usecase-card small">
                <img src="<?= IMAGE_PATH.'/solutions/ipcamera/Outdoor-RatedEnclosures.webp'?>" alt="Outdoor-Rated Enclosures"
                    class="usecase-image">
                <h3>Outdoor-Rated Enclosures</h3>
                <p>
                    Weather-resistant enclosure designs using UV-stable materials to protect electronics and ensure
                    long-term outdoor durability.
                </p>
            </div>
            <!-- SMALL CARD -->
            <div class="usecase-card small">
                <img src="<?= IMAGE_PATH.'/solutions/ipcamera/ThermalManagement1.webp'?>" alt="Thermal Management"
                    class="usecase-image">
                <h3>Thermal Management</h3>
                <p>
                    Heat dissipation through enclosure and internal design using passive and active solutions to
                    maintain stable performance under continuous operation.
                </p>
            </div>
            <!-- LARGE CARD -->
            <div class="usecase-card large">
                <img src="<?= IMAGE_PATH.'/solutions/ipcamera/DustMoistureProtection.webp'?>" alt="Dust & Moisture Protection"
                    class="usecase-image">
                <h3>Dust & Moisture Protection</h3>
                <p>
                    Sealing strategies including gaskets and environmental protection readiness to prevent dust,
                    humidity, and water ingress in harsh field conditions.
                </p>
            </div>
            <!-- MEDIUM HORIZONTAL CARD -->
            <div class="usecase-card ip-medium usecase-ip-horizontal">
                <img src="<?= IMAGE_PATH.'/solutions/ipcamera/Vandal-Resistant.webp'?>" alt="Vandal-Resistant Design"
                    class="usecase-image">
                <div class="usecase-text">
                    <h3>Vandal-Resistant Design</h3>
                    <p>
                        Reinforced housings, tamper-resistant fasteners, and impact-aware layouts to resist physical
                        abuse, tampering, and vandalism.
                    </p>
                </div>
            </div>
            <!-- SMALL CARD -->
            <div class="usecase-card ip-small">
                <img src="<?= IMAGE_PATH.'/solutions/ipcamera/MountingInstallation.webp'?>"
                    alt="Mounting & Installation Flexibility" class="usecase-image">
                <h3>Mounting & Installation Flexibility</h3>
                <p>
                    Flexible mounting options for wall, ceiling, pole, and corner installs with adjustable angles
                    and installation-friendly mechanical design.
                </p>
            </div>
        </div>
    </section>

    <section class="isp-sticky-section">
        <div class="isp-left">
            <h2>Validation, Testing & <span>Compliance</span></h2>
            <p>
                IP camera systems are validated under real-world and worst-case conditions to reduce deployment risk.
                Our testing and compliance practices ensure stable performance, environmental resilience, and security
                readiness before systems reach the field.
            </p>
        </div>
        <div class="isp-right">
            <div class="isp-grid">
                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/networkstress.webp'?>">
                    <h4>Network Stress & Stability Testing</h4>
                    <p>Multi-stream load testing, packet loss tolerance, and scaled network simulations.</p>
                </div>
                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/thermalcamera.webp'?>">
                    <h4>Thermal Cycling & Environmental Testing</h4>
                    <p>Temperature cycling, thermal drift validation, and enclosure heat dissipation assessment.</p>
                </div>
                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/emctesting.webp'?>">
                    <h4>EMI / EMC Design & Validation</h4>
                    <p>Noise-aware design, emissions readiness, and reduced interference risk in deployment.</p>
                </div>
                <div class="isp-card">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/longdurationstreming.webp'?>">
                    <h4>Long-Duration Streaming Validation</h4>
                    <p>24/7 continuous streaming, memory stability, and power/thermal endurance testing.</p>
                </div>
                <div class="isp-card center">
                    <img src="<?= IMAGE_PATH.'/solutions/ipcamera/SecurityPenetration.webp'?>">
                    <h4>Security Penetration Testing</h4>
                    <p>Architecture-level security review, interface exposure assessment, and threat modeling.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="dron-why-choose">
        <h2 class="dron-why-title">Industries <span>We Serve</span></h2>
        <p class="dron-why-subtitle">
            Engineered vision systems for diverse, real-world environments — focused on engineering fit, not
            one-size-fits-all solutions.
        </p>
        <div class="dron-why-layout">
            <div class="dron-why-list">
                <button class="dron-why-item active" data-id="1">Smart Cities & Public Surveillance</button>
                <button class="dron-why-item" data-id="2">Industrial & Facility Security</button>
                <button class="dron-why-item" data-id="3">Retail & Commercial Spaces</button>
                <button class="dron-why-item" data-id="4">Transportation Hubs</button>
                <button class="dron-why-item" data-id="5">Healthcare & Compliance</button>
            </div>
            <div class="dron-why-detail">
                <!-- 1 -->
                <div class="dron-why-content active" data-id="1">
                    <div class="why-cover">
                        <img src="<?= IMAGE_PATH.'/solutions/ipcamera/smartcitiesipcamera.webp'?>" alt="">
                    </div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/relations.png'?>"></div>
                            <div>
                                <h3>Smart Cities & Public Surveillance</h3>
                                <p class="why-context">Scalable, networked camera systems for large-area coverage and
                                    continuous operation.
                                </p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• High-uptime streaming across city networks</span></div>
                            <div class="bodywhy-feature"><span>• Scalable multi-camera architectures</span></div>
                            <div class="bodywhy-feature"><span>• Security and privacy-aware system design</span></div>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="dron-why-content" data-id="2">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/ipcamera/idustrialipcamera.webp'?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/EMI-Shielding.png'?>"></div>
                            <div>
                                <h3>Industrial & Facility Security</h3>
                                <p class="why-context">Rugged and reliable camera systems for demanding industrial
                                    environments.
                                </p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• Ruggedized and environmentally resilient designs</span>
                            </div>
                            <div class="bodywhy-feature"><span>• Stable performance under continuous operation</span>
                            </div>
                            <div class="bodywhy-feature"><span>• Secure integration with facility networks</span></div>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="dron-why-content" data-id="3">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/ipcamera/retailcommercialsecurity.webp'?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/emergency.png'?>"></div>
                            <div>
                                <h3>Retail & Commercial Spaces</h3>
                                <p class="why-context">Optimized platforms for visibility, reliability, and analytics in
                                    commercial settings.
                                </p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• Optimized image quality for indoor lighting</span>
                            </div>
                            <div class="bodywhy-feature"><span>• Event-driven recording and analytics support</span>
                            </div>
                            <div class="bodywhy-feature"><span>• Seamless VMS and network integration</span></div>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="dron-why-content" data-id="4">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/ipcamera/transportaion.webp'?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/gear.png'?>"></div>
                            <div>
                                <h3>Transportation Hubs</h3>
                                <p class="why-context">High-traffic monitoring systems for complex, continuously
                                    operating environments.
                                </p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• Low-latency streaming for live monitoring</span></div>
                            <div class="bodywhy-feature"><span>• High reliability under heavy network load</span></div>
                            <div class="bodywhy-feature"><span>• Integration with centralized control systems</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="dron-why-content" data-id="5">
                    <div class="why-cover"><img src="<?= IMAGE_PATH.'/solutions/ipcamera/healthcare.webp'?>"></div>
                    <div class="why-body">
                        <div class="why-header">
                            <div class="why-icon"><img src="<?= IMAGE_PATH.'/icon/healthcare.png'?>"></div>
                            <div>
                                <h3>Healthcare & Compliance Environments</h3>
                                <p class="why-context">Privacy-aware and compliance-ready systems for sensitive
                                    environments.
                                </p>
                            </div>
                        </div>
                        <div class="bodywhy-features">
                            <div class="bodywhy-feature"><span>• Secure access control and data handling</span></div>
                            <div class="bodywhy-feature"><span>• Compliance-ready system architectures</span></div>
                            <div class="bodywhy-feature"><span>• Reliable operation in sensitive environments</span>
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
            
            
            
            
            
            // const cardss = gsap.utils.toArray(".process-card");
            // const track = document.querySelector(".process-track");
            
            // const totalScroll = () => track.scrollWidth - window.innerWidth;
            
            // gsap.to(track, {
            //     x: () => -totalScroll(),
            //     ease: "none",
            //     scrollTrigger: {
            //         trigger: ".process-horizontal",
            //         start: "top top",
            //         end: () => "+=" + (totalScroll() + window.innerWidth * 0.5),
            //         scrub: true,
            //         pin: true,
            //         invalidateOnRefresh: true
            //     }
            // });
            
            // ScrollTrigger.create({
            //     trigger: ".process-horizontal",
            //     start: "top top",
            //     end: () => "+=" + (totalScroll() + window.innerWidth * 0.5),
            //     scrub: true,
            //     invalidateOnRefresh: true,
            //     onUpdate(self) {
            //         const progress = self.progress;
            //         const index = Math.round(progress * (cardss.length - 1));
            //         cardss.forEach((c, i) => c.classList.toggle("active", i === index));
            //     }
            // });
            
            
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
            
            
            ///horizontalll scrolling   
            $(document).ready(function () {
            
            const $slider = $('.slick-hscroll');
            
            $slider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '260px',
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            pauseOnFocus: false,
            infinite: true,
            adaptiveHeight: true,
            speed: 600,
            cssEase: 'ease',
            
            responsive: [
            {
            breakpoint: 1200,
            settings: {
              centerPadding: '180px'
            }
            },
            {
            breakpoint: 992,
            settings: {
              centerPadding: '120px'
            }
            },
            {
            breakpoint: 768,
            settings: {
              centerMode: false,
              centerPadding: '0px'
            }
            }
            ]
            });
            
            // Controls
            $('.stream-btn.next').on('click', function () {
            $slider.slick('slickNext');
            });
            
            $('.stream-btn.prev').on('click', function () {
            $slider.slick('slickPrev');
            });
            
            // Pause after click
            let resumeTimer = null;
            let manual = false;
            
            $('.stream-btn').on('click', function () {
            manual = true;
            });
            
            $slider.on('afterChange', function () {
            if (manual) {
            $slider.slick('slickPause');
            clearTimeout(resumeTimer);
            resumeTimer = setTimeout(() => {
            $slider.slick('slickPlay');
            manual = false;
            }, 4000);
            }
            });
            
            });
            
            
            
            
            
            ////for setion Automotive-Grade Engineering
            
            
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