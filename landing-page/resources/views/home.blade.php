<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniweb - Your Complete Digital Identity, Live in 60 Seconds</title>
    <!-- <link rel="icon" href="{{ asset('images/ritufal.logo.webp') }}" type="image/png"> -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', 'Inter', 'Segoe UI', 'Arial', sans-serif;
            line-height: 1.6;
            color: #1a202c;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 30%, #ec4899 60%, #f59e0b 100%);
            min-height: 100vh;
        }


        /* Bootstrap Navbar Customization */
        .navbar-custom {
            background: #ffffff !important;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
            padding: 0.5rem 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #6366f1 !important;
        }

        .navbar-nav .nav-link {
            color: #374151 !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #6366f1 !important;
        }

        .navbar-nav .nav-link.active {
            color: #6366f1 !important;
            font-weight: 600;
        }

        .signin-btn {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white !important;
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .signin-btn:hover {
            transform: translateY(-1px);
            background: linear-gradient(135deg, #4f46e5, #7c3aed) !important;
            color: white !important;
        }

        /* Hero Section */
        .hero {
            padding: 6rem 0 4rem;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
            margin-top: 80px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* background: linear-gradient(135deg, rgba(99, 102, 241, 0.9), rgba(139, 92, 246, 0.8), rgba(236, 72, 153, 0.7), rgba(245, 158, 11, 0.6)); */
            z-index: -1;
        }

        .pre-headline {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1rem;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .hero h1 {
            font-size: 2.2rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            line-height: 1.1;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .hero .sub-headline {
            font-size: 1rem;
            margin-bottom: 2.5rem;
            opacity: 0.95;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 500;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #f59e0b, #ec4899);
            color: white;
            padding: 20px 40px;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 30px rgba(245, 158, 11, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2rem;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(245, 158, 11, 0.6);
            color: white;
        }

        .trust-bar {
            font-size: 0.9rem;
            opacity: 0.8;
            font-weight: 500;
        }

        /* Pain Points Section */
        .pain-points {
            padding: 5rem 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
        }

        .section-title {
            text-align: center;
            font-size: 1.6rem;
            font-weight: 800;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .pain-point-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 2px solid white;
            height: 100%;
        }

        .pain-point-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .segment-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: block;
            color: #6366f1;
        }

        .segment-title {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            color: #1a202c;
        }

        .pain-point {
            color: #dc2626;
            font-weight: 600;
            margin-bottom: 0.8rem;
            font-size: 0.9rem;
        }

        .pain-point i {
            color: #dc2626;
            margin-right: 0.5rem;
        }

        .solution {
            color: #059669;
            font-weight: 600;
            margin-bottom: 0.8rem;
            font-size: 0.9rem;
        }

        .solution i {
            color: #059669;
            margin-right: 0.5rem;
        }

        .value-statement {
            color: #6366f1;
            font-weight: 600;
            font-style: italic;
            font-size: 0.85rem;
        }

        /* Features Section */
        .features {
            padding: 5rem 0;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
        }

        .feature-item {
            text-align: center;
            margin-bottom: 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 1.5rem;
            border-radius: 15px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            height: 280px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 0.8rem;
            display: block;
            color: #f59e0b;
        }

        .feature-text {
            font-size: 0.85rem;
            font-weight: 500;
            line-height: 1.5;
            color: white;
        }

        /* Pricing Section */
        .pricing {
            padding: 5rem 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
        }

        .pricing-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 2px solid white;
            height: 100%;
            position: relative;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .pricing-card.featured {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
            transform: scale(1.05);
        }

        .pricing-card.featured::before {
            content: '🏆 BEST VALUE';
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #f59e0b, #ec4899);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .plan-name {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            text-align: center;
        }

        .price {
            font-size: 1.6rem;
            font-weight: 900;
            margin-bottom: 0.5rem;
            text-align: center;
            background: linear-gradient(135deg, #f59e0b, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .pricing-card.featured .price {
            color: white;
            -webkit-text-fill-color: white;
        }

        .price-period {
            font-size: 0.8rem;
            opacity: 0.7;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .feature-list {
            list-style: none;
            margin-bottom: 2rem;
        }

        .feature-list li {
            padding: 0.4rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            font-size: 0.85rem;
        }

        .feature-list li:last-child {
            border-bottom: none;
        }

        .checkmark {
            color: #059669;
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .cross {
            color: #dc2626;
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .checkmark i {
            font-size: 0.9rem;
            color: #059669;
        }

        .cross i {
            font-size: 0.9rem;
            color: #dc2626;
        }

        .pricing-button {
            background: linear-gradient(135deg, #f59e0b, #ec4899);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.3);
            width: 100%;
        }

        .pricing-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
        }

        .pricing-card.featured .pricing-button {
            background: white;
            color: #6366f1;
        }

        .pricing-card.featured .pricing-button:hover {
            background: rgba(255, 255, 255, 0.9);
        }

        /* Final CTA Section */
        .final-cta {
            padding: 5rem 0;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            text-align: center;
            color: white;
        }

        .final-cta h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
        }

        .final-cta p {
            font-size: 1rem;
            margin-bottom: 1.8rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .final-cta-button {
            background: linear-gradient(135deg, #f59e0b, #ec4899);
            color: white;
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 30px rgba(245, 158, 11, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .final-cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(245, 158, 11, 0.6);
            color: white;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 3rem 0;
            background: #ffffff;
        }

        .testimonials-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .testimonial-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, #e879f9, #a855f7);
            color: white;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .testimonial-badge i {
            margin-right: 0.5rem;
        }

        .testimonial-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 1rem;
        }

        .testimonial-subtitle {
            font-size: 1.1rem;
            color: #6b7280;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Bootstrap Carousel Customization */
        #testimonialsCarousel {
            position: relative;
        }

        .testimonial-card {
            width: 100%;
            min-height: 320px;
            background: #f8f9fa;
            padding: 1.8rem;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            color: #374151;
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
            display: flex;
            flex-direction: column;
            margin: 0 auto;
        }

        .testimonial-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .quote-icon {
            font-size: 4rem;
            color: #ffc107;
            font-weight: bold;
            margin-bottom: 1rem;
            line-height: 1;
        }

        .testimonial-text {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: #374151;
            flex-grow: 1;
            word-wrap: break-word;
            hyphens: auto;
            overflow-wrap: break-word;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-top: auto;
        }

        .author-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e5e7eb;
        }

        .author-name {
            font-size: 0.9rem;
            font-weight: 600;
            margin: 0 0 0.25rem 0;
            color: #1f2937;
        }

        .author-title {
            font-size: 0.8rem;
            margin: 0;
            color: #6b7280;
        }

        /* Custom Carousel Controls */
        .carousel-control-prev,
        .carousel-control-next {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border: none;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
            box-shadow: 0 3px 10px rgba(99, 102, 241, 0.3);
            transition: all 0.3s ease;
        }

        .carousel-control-prev {
            left: -22px;
        }

        .carousel-control-next {
            right: -22px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.5);
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            /* background-image: none; */
            width: 20px;
            height: 20px;
        }

        .carousel-control-prev-icon::before {
            /* content: '\f053'; */
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: white;
            font-size: 16px;
        }

        .carousel-control-next-icon::before {
            /* content: '\f054'; */
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: white;
            font-size: 16px;
        }



        /* Responsive Design */
        @media (max-width: 1200px) {
            .carousel-control-prev {
                left: -15px;
            }

            .carousel-control-next {
                right: -15px;
            }
        }

        @media (max-width: 1024px) {
            .testimonials-section {
                padding: 2.5rem 0;
            }

            .testimonial-title {
                font-size: 2.2rem;
                margin-bottom: 0.8rem;
            }

            .testimonial-subtitle {
                font-size: 1rem;
                padding: 0 1rem;
                line-height: 1.5;
                margin-bottom: 1.5rem;
            }

            .testimonials-header {
                margin-bottom: 1.5rem;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 40px;
                height: 40px;
            }

            .carousel-control-prev {
                left: -10px;
            }

            .carousel-control-next {
                right: -10px;
            }

            .testimonial-card {
                width: 100%;
                min-height: 320px;
                padding: 1.6rem;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
            }

            .testimonial-text {
                font-size: 0.9rem;
                line-height: 1.6;
                word-wrap: break-word;
                hyphens: auto;
                overflow-wrap: break-word;
                flex-grow: 1;
            }

            .quote-icon {
                font-size: 3rem;
                margin-bottom: 0.8rem;
            }

            .author-avatar {
                width: 45px;
                height: 45px;
            }

            .author-name {
                font-size: 0.9rem;
            }

            .author-title {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 768px) {
            .testimonials-section {
                padding: 2rem 0;
            }

            .testimonial-title {
                font-size: 1.8rem;
                margin-bottom: 0.8rem;
            }

            .testimonial-subtitle {
                font-size: 0.9rem;
                padding: 0 1rem;
                line-height: 1.5;
                margin-bottom: 1.5rem;
            }

            .testimonials-header {
                margin-bottom: 1.5rem;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 35px;
                height: 35px;
            }

            .carousel-control-prev {
                left: -5px;
            }

            .carousel-control-next {
                right: -5px;
            }

            .testimonial-card {
                width: 100%;
                min-height: 280px;
                padding: 1.5rem;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
            }

            .testimonial-text {
                font-size: 0.95rem;
                line-height: 1.6;
                word-wrap: break-word;
                hyphens: auto;
                overflow-wrap: break-word;
                flex-grow: 1;
                margin-bottom: 1.5rem;
            }

            .quote-icon {
                font-size: 2.5rem;
                margin-bottom: 0.8rem;
            }

            .author-avatar {
                width: 45px;
                height: 45px;
            }

            .author-name {
                font-size: 0.9rem;
            }

            .author-title {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .testimonials-section {
                padding: 1.5rem 0;
            }

            .testimonial-title {
                font-size: 1.6rem;
                margin-bottom: 0.6rem;
            }

            .testimonial-subtitle {
                font-size: 0.85rem;
                padding: 0 0.5rem;
                line-height: 1.4;
                margin-bottom: 1.2rem;
            }

            .testimonials-header {
                margin-bottom: 1.2rem;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 30px;
                height: 30px;
            }

            .carousel-control-prev {
                left: 0px;
            }

            .carousel-control-next {
                right: 0px;
            }

            .testimonial-card {
                width: 100%;
                min-height: 280px;
                padding: 1.2rem;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
            }

            .testimonial-text {
                font-size: 0.9rem;
                line-height: 1.6;
                word-wrap: break-word;
                hyphens: auto;
                overflow-wrap: break-word;
                text-align: left;
                flex-grow: 1;
                margin-bottom: 1.5rem;
            }

            .quote-icon {
                font-size: 2rem;
                margin-bottom: 0.6rem;
            }

            .author-name {
                font-size: 0.85rem;
            }

            .author-title {
                font-size: 0.75rem;
            }

            .author-avatar {
                width: 40px;
                height: 40px;
            }
        }

        /* Footer */
        .footer {
            background: #1a202c;
            color: #a0aec0;
            padding: 3rem 0 2rem;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h4 {
            color: white;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .footer-section a {
            color: #a0aec0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #f59e0b;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            margin-top: 2rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero {
                padding: 4rem 0 3rem;
                margin-top: 70px;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .hero .sub-headline {
                font-size: 0.9rem;
            }
            
            .section-title {
                font-size: 1.4rem;
            }
            
            .cta-button, .final-cta-button {
                padding: 12px 25px;
                font-size: 0.9rem;
            }
            
            .signin-btn {
                padding: 8px 16px;
                font-size: 0.85rem;
            }
            
            .feature-item {
                height: 250px;
                padding: 1.2rem;
            }
            
            .feature-text {
                font-size: 0.8rem;
            }
            
            .pricing-card.featured {
                transform: none;
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 480px) {
            .hero {
                padding: 3rem 0 2rem;
                margin-top: 60px;
            }
            
            .hero h1 {
                font-size: 1.6rem;
            }
            
            .hero .sub-headline {
                font-size: 0.85rem;
            }
            
            .section-title {
                font-size: 1.2rem;
            }
            
            .pain-point-card, .pricing-card {
                padding: 1.5rem;
            }
            
            .feature-item {
                height: 220px;
                padding: 1rem;
            }
            
            .feature-text {
                font-size: 0.75rem;
            }
            
            .cta-button, .final-cta-button {
                padding: 10px 20px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="#">Miniweb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fi fi-sr-menu-burger"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="https://miniwebonline.com/login" class="signin-btn">Sign In</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="container">
                <div class="pre-headline">The Era of Complex E-commerce is OVER.</div>
                <h1>Launch Your Complete Digital Identity & Zero-Fee Store in Less Than 60 Seconds.</h1>
                <p class="sub-headline">Miniweb is the <strong>Digital Identity, Appointment Scheduler, and Order-Taking Mini-Site</strong> built specifically for Doctors, Freelancers, and Home-Sellers. <strong>No Payment Gateway Needed. Just Instant Business Growth.</strong></p>
                <a href="#pricing" class="cta-button">Start FREE & Go Live Now</a>
                <div class="trust-bar">An Innovation by <strong>ALS Startinnovate Private Limited</strong> | User-Managed via <strong>Flutter Mobile App</strong> 📲</div>
            </div>
        </section>

        <!-- Pain Points Section -->
        <section class="pain-points" id="features">
            <div class="container">
                <h2 class="section-title">Segment Pain Points & Instant Solution</h2>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="pain-point-card">
                            <span class="segment-icon"><i class="fi fi-sr-stethoscope"></i></span>
                            <h3 class="segment-title">Doctors & Consultants</h3>
                            <div class="pain-point"><i class="fi fi-sr-cross"></i> Appointment Chaos & Lost Credibility. Are you still managing patients via scattered calls and paper registers?</div>
                            <div class="solution"><i class="fi fi-sr-check"></i> The Digital OP-Card: Dedicated Instant Booking Link with automated reminders and self-scheduling management.</div>
                            <div class="value-statement">Hassle-Free Patient Scheduling for a streamlined Practice Digitalization.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pain-point-card">
                            <span class="segment-icon"><i class="fi fi-sr-tools"></i></span>
                            <h3 class="segment-title">Service Professionals</h3>
                            <div class="pain-point"><i class="fi fi-sr-cross"></i> Invisible to Local Clients 24/7. Struggling for constant, high-quality service leads outside of paid ads?</div>
                            <div class="solution"><i class="fi fi-sr-check"></i> Service Enquiry Magnet: A professional, always-on Instant Portfolio Site with an integrated, high-converting Digital Lead Capture form.</div>
                            <div class="value-statement">Your Digital Business Card 2.0 acts as a powerful Local SEO Boost for 24/7 lead flow.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pain-point-card">
                            <span class="segment-icon"><i class="fi fi-sr-shopping-cart"></i></span>
                            <h3 class="segment-title">Micro-Sellers & Social Shops</h3>
                            <div class="pain-point"><i class="fi fi-sr-cross"></i> The Payment Gateway Nightmare. High transaction fees, complex setups, and cart abandonment killing your profits?</div>
                            <div class="solution"><i class="fi fi-sr-check"></i> Zero-Fee Digital Store: Showcase unlimited products and take direct orders/enquiries via a seamless WhatsApp Order Funnel.</div>
                            <div class="value-statement">No-Gateway E-Commerce for true Instant Monetization and maximum profit.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features">
            <div class="container">
                <h2 class="section-title">Why Miniweb Wins: Power Engineered for Simplicity</h2>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <span class="feature-icon"><i class="fi fi-sr-bolt"></i></span>
                            <div class="feature-text">1-Minute Digital Launch: Forget the weeks of coding. We guarantee your professional site is ready to attract clients in under 60 seconds.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <span class="feature-icon"><i class="fi fi-sr-hand-holding-usd"></i></span>
                            <div class="feature-text">Unique: Zero-Payment Gateway Store: The ultimate feature for micro-sellers. List your entire catalogue and get customer orders directly through your preferred channel (WhatsApp/Call). No Fees. Pure Profit.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <span class="feature-icon"><i class="fi fi-sr-mobile-button"></i></span>
                            <div class="feature-text">Flutter Mobile Control: Full Admin Panel access via a smooth, native Mobile Application. Update content, check analytics, and manage bookings/orders—all from your pocket.</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item">
                            <span class="feature-icon"><i class="fi fi-sr-calendar"></i></span>
                            <div class="feature-text">Telehealth Ready Scheduling: For consultants, our dedicated calendar and booking system is designed to handle physical and remote consultations with ease.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section class="pricing" id="pricing">
            <div class="container">
                <h2 class="section-title">Affordable Power. No Hidden Fees. Choose Your Growth Engine.</h2>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card">
                            <h3 class="plan-name">LITE</h3>
                            <div class="price">₹ 1299</div>
                            <div class="price-period">Forever</div>
                            <ul class="feature-list">
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Basic Mini-Site</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Digital Lead Capture Form (Limited Leads)</li>
                                <li><span class="cross"><i class="fi fi-sr-cross"></i></span> Dedicated Appointment Scheduler</li>
                                <li><span class="cross"><i class="fi fi-sr-cross"></i></span> Zero-Fee Digital Store</li>
                                <li><span class="cross"><i class="fi fi-sr-cross"></i></span> Custom Domain Name Linking</li>
                                <li><span class="cross"><i class="fi fi-sr-cross"></i></span> Miniweb Branding Removal</li>
                                <li><span class="cross"><i class="fi fi-sr-cross"></i></span> Visitor Analytics & Insights</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Mobile App (Basic Access)</li>
                            </ul>
                           <a href="https://miniwebonline.com/register"><button class="pricing-button">Start FREE</button></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card featured">
                            <h3 class="plan-name">PRO</h3>
                            <div class="price">₹ 1299</div>
                            <div class="price-period">Monthly (Billed Annually)</div>
                            <ul class="feature-list">
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Premium Templates</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Digital Lead Capture Form (Unlimited Leads)</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Dedicated Appointment Scheduler (Full Features)</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Zero-Fee Digital Store (Unlimited Products)</li>
                                <li><span class="cross"><i class="fi fi-sr-cross"></i></span> Custom Domain Name Linking</li>
                                <li><span class="cross"><i class="fi fi-sr-cross"></i></span> Miniweb Branding Removal</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Visitor Analytics & Insights</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Mobile App (Full Control)</li>
                            </ul>
                            <a href="https://miniwebonline.com/register"><button class="pricing-button">Upgrade to PRO & Save 20%</button></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card">
                            <h3 class="plan-name">PREMIUM</h3>
                            <div class="price">₹ 1499</div>
                            <div class="price-period">Monthly (Billed Annually)</div>
                            <ul class="feature-list">
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> VIP Templates</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Digital Lead Capture Form (Unlimited Leads + CRM Sync)</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Dedicated Appointment Scheduler (Full Features + Reminders)</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Zero-Fee Digital Store (Unlimited Products)</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Custom Domain Name Linking (Link your .com/.in)</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Miniweb Branding Removal (Full Whitelabel)</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Visitor Analytics & Insights (Advanced)</li>
                                <li><span class="checkmark"><i class="fi fi-sr-check"></i></span> Mobile App (Priority Support Access)</li>
                            </ul>
                            <a href="https://miniwebonline.com/register"><button class="pricing-button">Unlock PREMIUM Growth</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials-section">
            <div class="container">
                <!-- Header Section -->
                <div class="testimonials-header">
                    <div class="testimonial-badge">
                        <i class="fi fi-sr-message-alt-detail"></i>
                        Client Success Stories
                    </div>
                    <h2 class="testimonial-title">What Our Clients Say</h2>
                    <p class="testimonial-subtitle">Professionals from various industries are already using vCards to enhance their networking and grow their business.</p>
                </div>

                <!-- Bootstrap Carousel -->
                <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <div class="testimonial-card">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">Working with Triad Consultancy felt effortless. They guided us through the process and delivered an app that exceeded expectations.</p>
                                        <div class="testimonial-author">
                                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" alt="Saurabh Dutta" class="author-avatar">
                                            <div class="author-info">
                                                <h4 class="author-name">Saurabh Dutta</h4>
                                                <p class="author-title">CEO, Green Revolution Co.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <div class="testimonial-card">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">Triad Consultancies integrated approach boosted our sales through a user-friendly website and app. We're thrilled!</p>
                                        <div class="testimonial-author">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" alt="Arvind Chauhan" class="author-avatar">
                                            <div class="author-info">
                                                <h4 class="author-name">Arvind Chauhan</h4>
                                                <p class="author-title">VP of Product, Zapay</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <div class="testimonial-card">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">From website revamp to SEO magic, Triad Consultancy transformed our online presence. A+!</p>
                                        <div class="testimonial-author">
                                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" alt="Lisa Williams" class="author-avatar">
                                            <div class="author-info">
                                                <h4 class="author-name">Lisa Williams</h4>
                                                <p class="author-title">VP, Sustainable Goods Co.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <div class="testimonial-card">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">As a realtor, I meet dozens of clients daily. Mini Web's digital business card has helped me stay ahead of the game.</p>
                                        <div class="testimonial-author">
                                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=60&h=60&fit=crop&crop=face" alt="Rajesh P." class="author-avatar">
                                            <div class="author-info">
                                                <h4 class="author-name">Rajesh P.</h4>
                                                <p class="author-title">Real Estate Agent</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <div class="testimonial-card">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">Miniweb makes my startup look so much more professional. The customizable Vcard.</p>
                                        <div class="testimonial-author">
                                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop&crop=face" alt="Emily R." class="author-avatar">
                                            <div class="author-info">
                                                <h4 class="author-name">Emily R.</h4>
                                                <p class="author-title">Startup Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <div class="testimonial-card">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">I was skeptical at first, but Miniweb proved to be a game-changer! No more carrying paper cards—just a sleek, digital Smart Vcard.</p>
                                        <div class="testimonial-author">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" alt="Ahmed S." class="author-avatar">
                                            <div class="author-info">
                                                <h4 class="author-name">Ahmed S.</h4>
                                                <p class="author-title">IT Consultant</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="final-cta" id="contact">
            <div class="container">
                <h3>The Foundation of Your Digital Future.</h3>
                <p>Miniweb is a product from <strong>ALS Startinnovate Private Limited</strong>, built with innovation and reliability at its core. We are dedicated to making <strong>Digital Identity</strong> accessible to every micro-entrepreneur.</p>
                <p><strong>Ready to Stop Thinking and Start Selling?</strong></p>
                <a href="#" class="final-cta-button">Launch My Miniweb Today!</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Contact & Demo</h4>
                    <p>Call/WhatsApp for Demo: <a href="tel:+919403893696">+91-9403893696</a></p>
                    <p>Instagram: <a href="https://www.instagram.com/miniwebonline/" target="_blank">@miniwebonline</a></p>
                    <p>Facebook: <a href="https://www.facebook.com/profile.php?id=61578986248359" target="_blank">Miniweb on Facebook</a></p>
                </div>
                <div class="footer-section">
                    <h4>Features</h4>
                    <p>1-Minute Digital Launch</p>
                    <p>Zero-Payment Gateway Store</p>
                    <p>Flutter Mobile Control</p>
                    <p>Telehealth Ready Scheduling</p>
                </div>
                <div class="footer-section">
                    <h4>Built For</h4>
                    <p>Doctors & Consultants</p>
                    <p>Service Professionals</p>
                    <p>Micro-Sellers & Social Shops</p>
                    <p>All Micro-Entrepreneurs</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 ALS Startinnovate Private Limited. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Active section highlighting based on scroll position
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Bootstrap Carousel Initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Bootstrap carousel
            const carousel = document.getElementById('testimonialsCarousel');
            if (carousel) {
                const bsCarousel = new bootstrap.Carousel(carousel, {
                    interval: 5000, // Auto-slide every 5 seconds
                    wrap: true, // Loop back to start
                    touch: true // Enable touch/swipe support
                });

                // Pause auto-slide on hover
                carousel.addEventListener('mouseenter', function() {
                    bsCarousel.pause();
                });

                carousel.addEventListener('mouseleave', function() {
                    bsCarousel.cycle();
                });
            }
        });
    </script>
</body>
</html>