@extends('layouts.main')

@section('meta_title', 'Study Abroad | Dhanalaxmi Overseas - Study Abroad and Visa consultancy Services')

@section('meta_description', 'Study Abroad and Visa consultancy Services')



@section('content')
<header class="banner">
        <div class="container">
            <h1>Study Abroad Opportunities</h1>
            <p>Explore the world while you study in some of the best universities.</p>
        </div>
    </header>

    <!-- Countries Section -->
    <section class="countries-section">
        <div class="container">
            <h2>Explore Our Top Destinations</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/uk.avif') }}" class="card-img-top" alt="Study in UK">
                        <div class="card-body">
                            <h5 class="card-title">Study in UK</h5>
                            <p class="card-text">Experience world-class education in the UK. Discover diverse cultures and innovative teaching methods.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/usa.webp') }}" class="card-img-top" alt="Study in USA">
                        <div class="card-body">
                            <h5 class="card-title">Study in USA</h5>
                            <p class="card-text">Join leading universities in the USA, known for their academic excellence and vibrant campus life.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/australia.avif') }}" class="card-img-top" alt="Study in Australia">
                        <div class="card-body">
                            <h5 class="card-title">Study in Australia</h5>
                            <p class="card-text">Explore stunning landscapes while receiving a high-quality education in Australia’s top institutions.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/new zealand.avif') }}" class="card-img-top" alt="Study in New Zealand">
                        <div class="card-body">
                            <h5 class="card-title">Study in New Zealand</h5>
                            <p class="card-text">Enjoy a unique study experience in New Zealand’s breathtaking landscapes and renowned institutions.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/singapore.webp') }}" class="card-img-top" alt="Study in Singapore">
                        <div class="card-body">
                            <h5 class="card-title">Study in Singapore</h5>
                            <p class="card-text">Discover cutting-edge research and innovation at Singapore’s top universities.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/malaysia.jpg') }}" class="card-img-top" alt="Study in Malaysia">
                        <div class="card-body">
                            <h5 class="card-title">Study in Malaysia</h5>
                            <p class="card-text">Experience a multicultural environment and affordable education in Malaysia’s top universities.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/canada.jpg') }}" class="card-img-top" alt="Study in Canada">
                        <div class="card-body">
                            <h5 class="card-title">Study in Canada</h5>
                            <p class="card-text">Benefit from a high standard of education and a diverse cultural experience in Canada.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/dubai.jpg') }}" class="card-img-top" alt="Study in Dubai">
                        <div class="card-body">
                            <h5 class="card-title">Study in Dubai</h5>
                            <p class="card-text">Experience a unique blend of culture and education in one of the world's most vibrant cities.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/germany.avif') }}" class="card-img-top" alt="Study in Germany">
                        <div class="card-body">
                            <h5 class="card-title">Study in Germany</h5>
                            <p class="card-text">Benefit from high-quality education and numerous study programs in English.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/ukarine.avif') }}" class="card-img-top" alt="Study in Ukraine">
                        <div class="card-body">
                            <h5 class="card-title">Study in Ukraine</h5>
                            <p class="card-text">Experience affordable education with diverse programs in Ukraine's universities.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/maruitis.jpg') }}" class="card-img-top" alt="Study in Mauritius">
                        <div class="card-body">
                            <h5 class="card-title">Study in Mauritius</h5>
                            <p class="card-text">Discover beautiful beaches and a vibrant educational environment in Mauritius.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/malta.jpg') }}" class="card-img-top" alt="Study in Malta">
                        <div class="card-body">
                            <h5 class="card-title">Study in Malta</h5>
                            <p class="card-text">Enjoy a unique Mediterranean experience while pursuing your studies in Malta.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card country-card">
                        <img src="{{ URL('images/flags/france.webp') }}" class="card-img-top" alt="Study in France">
                        <div class="card-body">
                            <h5 class="card-title">Study in France</h5>
                            <p class="card-text">Experience rich history, culture, and world-class education in France.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

    <style>
       
        .banner {
            background-image: url('https://thumbs.dreamstime.com/b/back-to-school-banner-continuous-line-drawing-vector-illustration-man-study-text-student-college-concept-321757275.jpg'); /* Background image for banner */
            background-size: cover; /* Cover the entire area */
            background-position: center; /* Center the image */
            color: white; /* Text color */
            padding: 100px 0; /* Padding for the banner */
            text-align: center; /* Center the text */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Text shadow for better readability */
        }

        .banner h1 {
            font-size: 3em; /* Font size for the main heading */
        }

        .banner p {
            font-size: 1.5em; /* Font size for the subheading */
        }

        .countries-section {
            padding: 60px 0; /* Padding for content */
        }

        .country-card {
            border: none; /* Remove border */
            border-radius: 10px; /* Rounded corners */
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition */
        }

        .country-card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow on hover */
        }

        .country-card img {
            border-radius: 10px 10px 0 0; /* Rounded corners for image */
        }

        .countries-section h2 {
            color: #106EBE; /* Blue color for headings */
            margin-bottom: 40px; /* Space below headings */
            text-align: center; /* Center the headings */
            font-weight: bold; /* Bold headings */
        }

        .countries-section p {
            color: #333; /* Dark text color */
            line-height: 1.6; /* Better readability */
            text-align: justify; /* Justified text */
        }

        .btn-primary {
            background-color: #106EBE; /* Blue button color */
            border: none; /* Remove border */
            padding: 10px 20px; /* Button padding */
            transition: background-color 0.3s ease; /* Smooth transition */
            color: #fff; /* White text color */
        }

        .btn-primary:hover {
            background-color: #0D9F98; /* Darker blue on hover */
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .banner {
                padding: 60px 0; /* Reduced padding for banner on small screens */
            }
            .banner h1 {
                font-size: 2.5em; /* Reduced font size for heading on small screens */
            }
            .banner p {
                font-size: 1.2em; /* Reduced font size for subheading on small screens */
            }
        }
    </style>

