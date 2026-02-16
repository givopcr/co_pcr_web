<style>
    :root {
        --pcr-blue: #0047AB;
        --pcr-blue-light: #2A6EB0;
        --pcr-blue-dark: #002856;
        --pcr-yellow: #FFC107;
        --pcr-yellow-light: #FFD54F;
        --pcr-gray: #6c757d;
        --pcr-light: #f8f9fa;
        --shadow-sm: 0 5px 15px rgba(0,0,0,0.05);
        --shadow-md: 0 10px 25px rgba(0,71,171,0.1);
        --shadow-lg: 0 15px 35px rgba(0,71,171,0.2);
        --shadow-hover: 0 20px 40px rgba(0,71,171,0.25);
        --transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        --glass-bg: rgba(255, 255, 255, 0.7);
        --glass-border: 1px solid rgba(255, 255, 255, 0.2);
    }

    body {
        padding-top: 86px;
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #fafbfc;
        color: #2c3e50;
        scroll-behavior: smooth;
        line-height: 1.6;
        overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6, .section-title {
        font-family: 'Poppins', 'Inter', sans-serif;
        font-weight: 700;
        letter-spacing: -0.02em;
    }

    /* Container adjustments */
    .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(145deg, #ffffff 0%, #f0f7ff 100%);
        padding: 100px 0;
        margin-bottom: 60px;
        position: relative;
        overflow: hidden;
    }
    
    .hero-section::before {
        content: '';
        position: absolute;
        top: -30%;
        right: -5%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(0,71,171,0.03) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    
    .hero-section .row {
        align-items: center;
    }
    
    .hero-section h1 {
        font-size: 3.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--pcr-blue-dark), var(--pcr-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
        line-height: 1.2;
    }
    
    .hero-section .lead {
        font-size: 1.3rem;
        font-weight: 400;
        color: var(--pcr-gray);
        max-width: 90%;
    }
    
    .hero-image {
        max-height: 260px;
        filter: drop-shadow(0 15px 25px rgba(0,71,171,0.2));
        transition: var(--transition);
    }
    
    .hero-image:hover {
        transform: scale(1.05);
        filter: drop-shadow(0 20px 30px rgba(0,71,171,0.3));
    }

    /* Section Titles */
    .section-title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        padding-bottom: 20px;
        color: var(--pcr-blue-dark);
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--pcr-yellow), var(--pcr-yellow-light));
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 2px;
    }

    /* Cards */
    .vision-mission-card {
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: var(--glass-border);
        padding: 25px;
        border-radius: 20px;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        height: 100%;
        margin-bottom: 0;
    }
    
    .vision-mission-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
        background: rgba(255, 255, 255, 0.9);
    }
    
    .vision-mission-card h5 {
        margin-bottom: 0;
        font-size: 1.1rem;
        line-height: 1.5;
    }
    
    .vision-mission-card p {
        margin-bottom: 0;
        font-size: 1rem;
        line-height: 1.6;
    }

    .mission-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.mission-item {
    background: white;
    padding: 15px 20px;
    border-radius: 12px;
    box-shadow: var(--shadow-sm);
    border: 1px solid rgba(0,71,171,0.05);
    display: flex;
    align-items: flex-start;
    transition: var(--transition);
}

.mission-item:hover {
    transform: translateX(5px);
    box-shadow: var(--shadow-md);
    border-left: 3px solid var(--pcr-yellow);
}

.mission-item i {
    font-size: 1.1rem;
    margin-top: 3px;
    flex-shrink: 0;
}

.mission-item span {
    font-size: 0.95rem;
    line-height: 1.5;
    color: #2c3e50;
}

@media (max-width: 768px) {
    .mission-item {
        padding: 12px 15px;
    }
    
    .mission-item span {
        font-size: 0.9rem;
    }
}

    /* History Section */
#history {
    background-color: #ffffff;
    padding: 60px 0;
}

#history .container {
    max-width: 1000px;
    margin: 0 auto;
}

/* Timeline Container */
.timeline {
    position: relative;
    margin: 40px 0 60px;
}

/* Vertical Line */
.timeline::before {
    content: '';
    position: absolute;
    left: 35px;
    top: 0;
    bottom: 0;
    width: 3px;
    background: linear-gradient(to bottom, var(--pcr-blue), var(--pcr-yellow));
    border-radius: 3px;
    opacity: 0.3;
}

/* Timeline Item */
.timeline-item {
    position: relative;
    padding-left: 90px;
    margin-bottom: 40px;
    min-height: 80px;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

/* Timeline Icon */
.timeline-icon {
    position: absolute;
    left: 0;
    top: 0;
    width: 70px;
    height: 70px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    font-weight: 700;
    box-shadow: 0 5px 20px rgba(0,71,171,0.2);
    border: 4px solid #f0f7ff;
    z-index: 2;
    color: var(--pcr-blue);
}

.timeline-icon span {
    background: linear-gradient(135deg, var(--pcr-blue), var(--pcr-blue-light));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Timeline Content */
.timeline-content {
    background: white;
    padding: 20px 25px;
    border-radius: 16px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    border: 1px solid rgba(0,71,171,0.1);
    transition: all 0.3s ease;
}

.timeline-content:hover {
    transform: translateX(8px);
    box-shadow: 0 10px 30px rgba(0,71,171,0.15);
}

.timeline-content-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--pcr-blue-dark);
    margin-bottom: 10px;
    font-family: 'Poppins', sans-serif;
}

.timeline-content-text {
    font-size: 1rem;
    line-height: 1.7;
    color: #2c3e50;
    margin-bottom: 0;
}

/* Achievement Box (Prestasi Terkini) */
.achievement-box {
    background: linear-gradient(145deg, #e6f3ff, #d9ecff);
    border-radius: 20px;
    padding: 30px 35px;
    margin-top: 50px;
    display: flex;
    align-items: center;
    gap: 25px;
    box-shadow: 0 10px 30px rgba(0,71,171,0.15);
    border-left: 6px solid var(--pcr-yellow);
}

.achievement-icon {
    flex-shrink: 0;
    width: 70px;
    height: 70px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.achievement-icon i {
    font-size: 2.5rem;
    color: #ffc107;
}

.achievement-content {
    flex: 1;
}

.achievement-content h4 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--pcr-blue-dark);
    margin-bottom: 8px;
    font-family: 'Poppins', sans-serif;
}

.achievement-content p {
    font-size: 1.05rem;
    line-height: 1.6;
    color: #2c3e50;
    margin-bottom: 0;
}

.achievement-content strong {
    color: var(--pcr-blue);
    font-weight: 700;
}

/* Responsive */
@media (max-width: 768px) {
    .timeline::before {
        left: 25px;
    }
    
    .timeline-item {
        padding-left: 70px;
    }
    
    .timeline-icon {
        width: 50px;
        height: 50px;
        font-size: 1.3rem;
        border-width: 3px;
    }
    
    .timeline-content {
        padding: 15px 18px;
    }
    
    .timeline-content-title {
        font-size: 1.1rem;
    }
    
    .timeline-content-text {
        font-size: 0.95rem;
        line-height: 1.5;
    }
    
    .achievement-box {
        flex-direction: column;
        text-align: center;
        padding: 25px 20px;
        gap: 15px;
    }
    
    .achievement-icon {
        width: 60px;
        height: 60px;
    }
    
    .achievement-icon i {
        font-size: 2rem;
    }
    
    .achievement-content h4 {
        font-size: 1.3rem;
    }
    
    .achievement-content p {
        font-size: 0.95rem;
    }
}

@media (max-width: 576px) {
    .timeline-item {
        padding-left: 60px;
    }
    
    .timeline-icon {
        width: 45px;
        height: 45px;
        font-size: 1.1rem;
    }
    
    .achievement-box {
        padding: 20px 15px;
    }
}

    /* Prodi Cards */
    .prodi-card {
        background: white;
        border-radius: 24px;
        padding: 35px 20px 30px;
        text-align: center;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        height: 100%;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0,71,171,0.08);
        margin-bottom: 0;
    }
    
    .prodi-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(145deg, rgba(0,71,171,0.02), rgba(255,193,7,0.02));
        z-index: 0;
    }
    
    .prodi-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-hover);
    }
    
    .prodi-card .status-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: linear-gradient(135deg, #28a745, #34ce57);
        color: white;
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        box-shadow: 0 3px 10px rgba(40,167,69,0.3);
        z-index: 2;
    }
    
    .prodi-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(145deg, #eef4ff, #e0eaff);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        transition: var(--transition);
        z-index: 1;
        position: relative;
    }
    
    .prodi-card:hover .prodi-icon {
        background: var(--pcr-blue);
        transform: scale(1.05);
    }
    
    .prodi-card:hover .prodi-icon i {
        color: white;
    }
    
    .prodi-icon i {
        font-size: 3rem;
        color: var(--pcr-blue);
        transition: var(--transition);
    }
    
    .prodi-card h4 {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: var(--pcr-blue-dark);
        position: relative;
        z-index: 1;
    }
    
    .prodi-card p {
        font-size: 0.95rem;
        color: #6c757d;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
        line-height: 1.5;
    }
    
    .prodi-card .badge {
        padding: 6px 12px;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 50px;
        position: relative;
        z-index: 1;
    }

    /* Timeline Styles */
    .timeline {
        position: relative;
        padding: 10px 0;
        max-width: 900px;
        margin: 0 auto;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 35px;
        top: 10px;
        bottom: 10px;
        width: 3px;
        background: linear-gradient(to bottom, var(--pcr-blue), var(--pcr-yellow));
        border-radius: 3px;
        opacity: 0.3;
    }
    
    .timeline-item {
        position: relative;
        padding-left: 80px;
        margin-bottom: 35px;
    }
    
    .timeline-item:last-child {
        margin-bottom: 0;
    }
    
    .timeline-icon {
        position: absolute;
        left: 0;
        top: 0;
        width: 60px;
        height: 60px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 700;
        box-shadow: var(--shadow-md);
        border: 3px solid white;
        z-index: 2;
    }
    
    .timeline-icon span {
        background: linear-gradient(135deg, var(--pcr-blue), var(--pcr-blue-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .timeline-content {
        border-radius: 16px !important;
        background: white;
        border: 1px solid rgba(0,71,171,0.1) !important;
        transition: var(--transition);
    }
    
    .timeline-content:hover {
        transform: translateX(8px);
        box-shadow: var(--shadow-lg) !important;
    }
    
    .timeline-content .card-body {
        padding: 20px 25px;
    }
    
    .timeline-content .card-title {
        color: var(--pcr-blue-dark);
        font-weight: 700;
        font-size: 1.3rem;
        margin-bottom: 12px;
    }
    
    .timeline-content .card-text {
        font-size: 1rem;
        line-height: 1.6;
        color: #2c3e50;
        margin-bottom: 0;
    }

    /* Alert / Prestasi Terkini */
    .alert-info {
        border-radius: 20px !important;
        padding: 30px !important;
    }
    
    .alert-info .fa-trophy {
        font-size: 3.5rem;
    }
    
    .alert-heading {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: var(--pcr-blue-dark);
    }

    /* Form Kunjungan */
    .form-kunjungan-section {
        background: white;
        border-radius: 30px;
        box-shadow: var(--shadow-lg);
        padding: 50px;
        margin-bottom: 50px;
    }
    
    .form-title {
        font-size: 2.2rem;
        text-align: center;
        margin-bottom: 30px;
        color: var(--pcr-blue-dark);
    }
    
    .info-box {
        background: linear-gradient(145deg, #eef4ff, #e6f0ff);
        border-left: 5px solid var(--pcr-blue);
        padding: 20px 25px;
        border-radius: 12px;
        margin-bottom: 30px;
        font-size: 1rem;
    }
    
    .info-box i {
        color: var(--pcr-blue);
        margin-right: 8px;
    }
    
    .form-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 8px;
    }
    
    .form-label.required::after {
        content: " *";
        color: #dc3545;
    }
    
    .form-control {
        border-radius: 10px;
        border: 1px solid #dee2e6;
        padding: 10px 15px;
        transition: var(--transition);
    }
    
    .form-control:focus {
        border-color: var(--pcr-blue);
        box-shadow: 0 0 0 0.2rem rgba(0,71,171,0.15);
    }
    
    .btn-pcr {
        background: linear-gradient(135deg, var(--pcr-blue), var(--pcr-blue-light));
        color: white;
        padding: 12px 35px;
        border-radius: 50px;
        font-weight: 600;
        border: none;
        transition: var(--transition);
        box-shadow: 0 5px 15px rgba(0,71,171,0.3);
    }
    
    .btn-pcr:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,71,171,0.4);
        background: linear-gradient(135deg, #003a8c, #1a5bbf);
        color: white;
    }
    
    .btn-outline-secondary {
        border-radius: 50px;
        padding: 12px 35px;
        font-weight: 500;
        border: 2px solid #dee2e6;
        transition: var(--transition);
    }
    
    .btn-outline-secondary:hover {
        background: #f8f9fa;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Back to top */
    .back-to-top {
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 50px;
        height: 50px;
        background: var(--pcr-blue);
        color: white;
        border-radius: 50%;
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        transition: var(--transition);
        box-shadow: 0 4px 15px rgba(0,71,171,0.4);
        font-size: 1.1rem;
        border: 2px solid rgba(255,255,255,0.2);
        text-decoration: none;
    }
    
    .back-to-top:hover {
        background: var(--pcr-blue-dark);
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,71,171,0.5);
        border-color: white;
        color: white;
    }

    /* Footer */
    footer {
        background: linear-gradient(145deg, #001f4a, #00357a);
        color: white;
        padding: 3rem 0 2rem;
        margin-top: 4rem;
        border-radius: 30px 30px 0 0;
    }
    
    footer h5 {
        font-weight: 700;
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 10px;
        font-size: 1.2rem;
    }
    
    footer h5::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: var(--pcr-yellow);
        border-radius: 3px;
    }
    
    footer a {
        color: rgba(255,255,255,0.8);
        transition: var(--transition);
        text-decoration: none;
    }
    
    footer a:hover {
        color: var(--pcr-yellow);
        padding-left: 5px;
    }
    
    footer ul {
        padding-left: 0;
    }
    
    footer li {
        margin-bottom: 12px;
    }
    
    footer hr {
        opacity: 0.15;
        margin: 2rem 0 1.5rem;
    }

    /* Navbar */
    .navbar {
        background: linear-gradient(135deg, var(--pcr-blue-dark), var(--pcr-blue)) !important;
        padding: 12px 0;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }
    
    .navbar-brand {
        font-size: 1.4rem;
        font-weight: 700;
        letter-spacing: -0.5px;
    }
    
    .navbar-brand img {
        height: 38px;
        margin-right: 10px;
    }
    
    .nav-link {
        font-weight: 500;
        padding: 8px 16px !important;
        border-radius: 40px;
        transition: var(--transition);
        margin: 0 2px;
        font-size: 0.95rem;
    }
    
    .nav-link:hover {
        background: rgba(255,255,255,0.15);
        transform: translateY(-2px);
    }
    
    .nav-link.active {
        background: var(--pcr-yellow);
        color: var(--pcr-blue-dark) !important;
        font-weight: 600;
    }

    /* Contact Section */
    #contact .card {
        border-radius: 20px !important;
        transition: var(--transition);
    }
    
    #contact .card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg) !important;
    }
    
    #contact .card-body {
        padding: 30px !important;
    }
    
    #contact h4 {
        font-size: 1.4rem;
        margin-bottom: 25px;
        color: var(--pcr-blue-dark);
    }
    
    #contact .d-flex {
        margin-bottom: 20px;
    }
    
    #contact .fa-2x {
        font-size: 1.8rem;
        width: 40px;
        color: var(--pcr-blue);
    }
    
    #contact h6 {
        font-size: 1rem;
        margin-bottom: 5px;
        color: #495057;
    }
    
    #contact p {
        margin-bottom: 0;
        color: #6c757d;
    }
    
    .ratio {
        border-radius: 12px;
        overflow: hidden;
    }

    /* Responsive */
    @media (max-width: 991px) {
        body {
            padding-top: 76px;
        }
        
        .hero-section {
            padding: 70px 0;
        }
        
        .hero-section h1 {
            font-size: 2.8rem;
        }
        
        .hero-section .lead {
            max-width: 100%;
        }
        
        .section-title {
            font-size: 2.2rem;
        }
        
        .navbar-collapse {
            background: linear-gradient(135deg, var(--pcr-blue-dark), var(--pcr-blue));
            padding: 15px;
            border-radius: 15px;
            margin-top: 10px;
        }
        
        .nav-link {
            padding: 10px 15px !important;
        }
    }
    
    @media (max-width: 768px) {
        body {
            padding-top: 70px;
        }
        
        .hero-section {
            padding: 50px 0;
            text-align: center;
        }
        
        .hero-section h1 {
            font-size: 2.2rem;
        }
        
        .hero-section .lead {
            font-size: 1.1rem;
        }
        
        .hero-image {
            margin-top: 30px;
            max-height: 200px;
        }
        
        .section-title {
            font-size: 1.8rem;
            margin-bottom: 35px;
        }
        
        .form-kunjungan-section {
            padding: 25px;
        }
        
        .form-title {
            font-size: 1.8rem;
        }
        
        .btn-pcr, .btn-outline-secondary {
            padding: 10px 25px;
            font-size: 0.95rem;
            width: 100%;
            margin: 5px 0;
        }
        
        .btn-outline-secondary {
            margin-left: 0 !important;
        }
        
        .timeline::before {
            left: 22px;
        }
        
        .timeline-item {
            padding-left: 60px;
        }
        
        .timeline-icon {
            width: 45px;
            height: 45px;
            font-size: 1.2rem;
        }
        
        .timeline-content .card-title {
            font-size: 1.1rem;
        }
        
        .timeline-content .card-text {
            font-size: 0.95rem;
        }
        
        footer {
            text-align: center;
        }
        
        footer h5::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        #contact .d-flex {
            flex-direction: column;
            text-align: center;
        }
        
        #contact .fa-2x {
            margin-right: 0 !important;
            margin-bottom: 10px;
        }
    }
    
    @media (max-width: 576px) {
        .container {
            padding: 0 15px;
        }
        
        .hero-section h1 {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.6rem;
        }
        
        .prodi-card {
            padding: 25px 15px;
        }
        
        .prodi-icon {
            width: 80px;
            height: 80px;
        }
        
        .prodi-icon i {
            font-size: 2.5rem;
        }
        
        .prodi-card h4 {
            font-size: 1.2rem;
        }
        
        .back-to-top {
            width: 45px;
            height: 45px;
            bottom: 20px;
            right: 20px;
            font-size: 1rem;
        }
        
        .alert-info {
            padding: 20px !important;
        }
        
        .alert-info .fa-trophy {
            font-size: 2.5rem;
            margin-right: 15px !important;
        }
        
        .alert-heading {
            font-size: 1.2rem;
        }
    }
</style>