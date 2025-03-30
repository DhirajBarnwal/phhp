<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="YogaTrack - Your personal yoga guide with customized plans, progress tracking, and expert guidance.">
    <title>YogaTrack - Your Personal Yoga Guide</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        
        .navbar {
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), 
                        url('https://images.unsplash.com/photo-1545205597-3d9d02c29597?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .testimonial-card:hover {
            transform: scale(1.03);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #3B82F6 0%, #10B981 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Floating Elements -->
    <div class="fixed top-20 left-10 w-16 h-16 rounded-full bg-blue-100 opacity-20 floating" style="animation-delay: 0s;"></div>
    <div class="fixed bottom-1/4 right-20 w-24 h-24 rounded-full bg-green-100 opacity-20 floating" style="animation-delay: 1s;"></div>
    <div class="fixed top-1/3 right-1/4 w-20 h-20 rounded-full bg-purple-100 opacity-20 floating" style="animation-delay: 2s;"></div>

    <!-- Navbar -->
    <header class="navbar fixed w-full top-0 z-50 py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="#" class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md">
                    <i class="fas fa-spa text-xl text-green-500"></i>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">Yoga<span class="text-blue-500">Track</span></h1>
            </a>
            
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-gray-700 hover:text-blue-500 transition-colors">Home</a>
                <a href="services.php" target="_blank" class="text-gray-700 hover:text-blue-500 transition-colors">Services</a>
                <a href="about.php" target="_blank" class="text-gray-700 hover:text-blue-500 transition-colors">About</a>
                <a href="testimonials.php" target="_blank"  class="text-gray-700 hover:text-blue-500 transition-colors">Testimonials</a>
                <a href="#guides" target="_blank" class="text-gray-700 hover:text-blue-500 transition-colors">Guides</a>
                <a href="login.php" class="bg-blue-500 text-white px-5 py-2 rounded-full hover:bg-blue-600 transition-all shadow-md hover:shadow-lg">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login
                </a>
            </nav>
            
            <!-- Mobile menu button -->
            <button class="md:hidden text-gray-700 focus:outline-none" id="menu-btn">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white shadow-lg rounded-lg mt-2 py-2 absolute right-6 w-48" id="mobile-menu">
            <a href="#home" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
            <a href="services.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Services</a>
            <a href="about.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About</a>
            <a href=testimonials.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Testimonials</a>
            <a href="guides.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Guides</a>
            <a href="login.php" class="block px-4 py-2 text-blue-500 font-medium">
                <i class="fas fa-sign-in-alt mr-2"></i> Login
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-section min-h-screen flex items-center justify-center text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
        <div class="container mx-auto px-6 z-10" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Find Your Balance</h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-10 max-w-2xl mx-auto">
                Transform your life with personalized yoga guidance tailored just for you
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="register.php" class="btn-primary text-white px-8 py-4 rounded-full text-lg font-medium inline-flex items-center justify-center">
                    <i class="fas fa-play-circle mr-3 text-xl"></i> Start Free Trial
                </a>
                <a href="#services" class="bg-white text-gray-800 px-8 py-4 rounded-full text-lg font-medium hover:bg-gray-100 transition-all shadow-md inline-flex items-center justify-center">
                    <i class="fas fa-info-circle mr-3 text-xl"></i> Learn More
                </a>
            </div>
        </div>
        
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#services" class="text-white text-2xl">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Everything you need for your yoga journey in one place
                </p>
                <div class="w-20 h-1 bg-blue-500 mx-auto mt-6"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-10">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative overflow-hidden h-60">
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Personalized Yoga Plans" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">Personalized Plans</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-6">
                            Custom yoga routines tailored to your fitness level, goals, and schedule. Our AI-powered system adapts as you progress.
                        </p>
                        <a href="#" class="text-blue-500 font-medium inline-flex items-center">
                            Learn more <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative overflow-hidden h-60">
                        <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Progress Tracking" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">Progress Tracking</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-6">
                            Detailed analytics and visual progress reports to keep you motivated and show your improvement over time.
                        </p>
                        <a href="#" class="text-blue-500 font-medium inline-flex items-center">
                            Learn more <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative overflow-hidden h-60">
                        <img src="https://images.unsplash.com/photo-1545389336-cf090694435e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Expert Guidance" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h3 class="text-2xl font-bold text-white">Expert Guidance</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-6">
                            Access to certified yoga instructors for personalized feedback, technique correction, and advanced guidance.
                        </p>
                        <a href="#" class="text-blue-500 font-medium inline-flex items-center">
                            Learn more <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gradient-to-r from-blue-500 to-green-500 text-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-5xl font-bold mb-2" id="members-count">0</div>
                    <div class="text-xl">Happy Members</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-5xl font-bold mb-2" id="sessions-count">0</div>
                    <div class="text-xl">Sessions Completed</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-5xl font-bold mb-2" id="instructors-count">0</div>
                    <div class="text-xl">Certified Instructors</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-5xl font-bold mb-2" id="countries-count">0</div>
                    <div class="text-xl">Countries Worldwide</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0" data-aos="fade-right">
                    <div class="relative rounded-xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="About YogaTrack" 
                             class="w-full h-auto">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-40"></div>
                        <div class="absolute bottom-0 left-0 p-8 text-white">
                            <h3 class="text-2xl font-bold">Transform Your Life</h3>
                            <p class="mt-2">One session at a time</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 lg:pl-12" data-aos="fade-left">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Why Choose YogaTrack?</h2>
                    <p class="text-lg text-gray-600 mb-8">
                        YogaTrack combines ancient yoga wisdom with modern technology to create a personalized 
                        experience that adapts to your unique needs and goals. Our platform is designed to 
                        make yoga accessible to everyone, regardless of experience level.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 rounded-full p-3 mr-4">
                                <i class="fas fa-bolt text-blue-500 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800 mb-2">Smart Recommendations</h4>
                                <p class="text-gray-600">
                                    Our AI analyzes your progress and recommends the perfect routines for your current level.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-green-100 rounded-full p-3 mr-4">
                                <i class="fas fa-user-md text-green-500 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800 mb-2">Expert Instructors</h4>
                                <p class="text-gray-600">
                                    Learn from world-class yoga teachers with decades of combined experience.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-purple-100 rounded-full p-3 mr-4">
                                <i class="fas fa-chart-line text-purple-500 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800 mb-2">Progress Tracking</h4>
                                <p class="text-gray-600">
                                    Visualize your improvement with detailed analytics and milestone tracking.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">What Our Members Say</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Hear from people who transformed their lives with YogaTrack
                </p>
                <div class="w-20 h-1 bg-blue-500 mx-auto mt-6"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-white rounded-xl shadow-lg p-8 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah K." class="w-16 h-16 rounded-full object-cover border-4 border-white shadow-md">
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg">Sarah K.</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "YogaTrack completely transformed my daily routine. The personalized plans helped me achieve flexibility I never thought possible. I've lost 15 pounds and feel more energetic than ever!"
                    </p>
                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-500">3 months with YogaTrack</p>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-white rounded-xl shadow-lg p-8 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael T." class="w-16 h-16 rounded-full object-cover border-4 border-white shadow-md">
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg">Michael T.</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "As a busy executive, I never thought I could fit yoga into my schedule. YogaTrack's short, effective routines and progress tracking kept me motivated. My back pain is gone and I sleep better!"
                    </p>
                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-500">5 months with YogaTrack</p>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-white rounded-xl shadow-lg p-8 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya M." class="w-16 h-16 rounded-full object-cover border-4 border-white shadow-md">
                        <div class="ml-4">
                            <h4 class="font-semibold text-lg">Priya M.</h4>
                            <div class="flex text-yellow-400 mt-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "The expert guidance is worth every penny. My posture has improved dramatically in just 2 weeks. I love how the app adapts to my progress and challenges me just the right amount."
                    </p>
                    <div class="mt-6 pt-4 border-t border-gray-100">
                        <p class="text-sm text-gray-500">2 months with YogaTrack</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-16" data-aos="fade-up">
                <a href="#" class="inline-flex items-center text-blue-500 font-medium">
                    Read more success stories <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <div class="container mx-auto px-6 text-center" data-aos="zoom-in">
            <h2 class="text-4xl font-bold mb-6">Ready to Transform Your Life?</h2>
            <p class="text-xl mb-10 max-w-2xl mx-auto">
                Join thousands of happy members experiencing the benefits of personalized yoga
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="register.php" class="bg-white text-indigo-600 px-8 py-4 rounded-full text-lg font-medium hover:bg-gray-100 transition-all shadow-lg inline-flex items-center justify-center">
                    <i class="fas fa-play-circle mr-3 text-xl"></i> Start Your Free Trial
                </a>
                <a href="#" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full text-lg font-medium hover:bg-white hover:text-indigo-600 transition-all inline-flex items-center justify-center">
                    <i class="fas fa-info-circle mr-3 text-xl"></i> Learn About Plans
                </a>
            </div>
        </div>
    </section>

    <!-- Guides Section -->
    <section id="guides" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Yoga Guides</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Explore our library of expert-created yoga guides
                </p>
                <div class="w-20 h-1 bg-blue-500 mx-auto mt-6"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Guide 1 -->
                <div class="guide-card bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Beginner Yoga Guide" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                            Beginner
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Beginner's Foundation</h3>
                        <p class="text-gray-600 mb-4">
                            Master the basic poses and breathing techniques to build a strong yoga foundation.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="far fa-clock mr-1"></i> 30-45 min
                            </div>
                            <a href="#" class="text-blue-500 font-medium inline-flex items-center">
                                Start <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Guide 2 -->
                <div class="guide-card bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1545389336-cf090694435e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Flexibility Yoga Guide" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute top-4 right-4 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                            Intermediate
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Flexibility Flow</h3>
                        <p class="text-gray-600 mb-4">
                            Increase your range of motion and release muscle tension with these targeted sequences.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="far fa-clock mr-1"></i> 45-60 min
                            </div>
                            <a href="#" class="text-blue-500 font-medium inline-flex items-center">
                                Start <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Guide 3 -->
                <div class="guide-card bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                             alt="Meditation Yoga Guide" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute top-4 right-4 bg-purple-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                            All Levels
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Mindful Meditation</h3>
                        <p class="text-gray-600 mb-4">
                            Combine yoga with meditation techniques to reduce stress and improve mental clarity.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="far fa-clock mr-1"></i> 20-30 min
                            </div>
                            <a href="#" class="text-blue-500 font-medium inline-flex items-center">
                                Start <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12" data-aos="fade-up">
                <a href="#" class="inline-block bg-white text-blue-500 px-8 py-3 rounded-full font-medium shadow-md hover:shadow-lg transition-all">
                    <i class="fas fa-book-open mr-2"></i> Browse All Guides
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Everything you need to know about YogaTrack
                </p>
                <div class="w-20 h-1 bg-blue-500 mx-auto mt-6"></div>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="mb-6 border-b border-gray-200 pb-6" data-aos="fade-up">
                    <button class="faq-question flex justify-between items-center w-full text-left focus:outline-none">
                        <h3 class="text-xl font-semibold text-gray-800">Do I need any experience to start?</h3>
                        <i class="fas fa-chevron-down text-blue-500 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer mt-4 text-gray-600 hidden">
                        <p>
                            Not at all! YogaTrack is designed for all levels, from complete beginners to advanced practitioners. 
                            Our system will assess your starting level and recommend appropriate routines. We have special 
                            beginner programs that teach you everything from basic poses to proper breathing techniques.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="mb-6 border-b border-gray-200 pb-6" data-aos="fade-up" data-aos-delay="100">
                    <button class="faq-question flex justify-between items-center w-full text-left focus:outline-none">
                        <h3 class="text-xl font-semibold text-gray-800">What equipment do I need?</h3>
                        <i class="fas fa-chevron-down text-blue-500 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer mt-4 text-gray-600 hidden">
                        <p>
                            The great thing about yoga is that you don't need much equipment to get started. We recommend:
                        </p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>A yoga mat (or any non-slip surface)</li>
                            <li>Comfortable clothing that allows movement</li>
                            <li>Optional: Yoga blocks and strap for certain poses (can substitute with household items)</li>
                        </ul>
                        <p class="mt-2">
                            Many of our routines require no equipment at all!
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="mb-6 border-b border-gray-200 pb-6" data-aos="fade-up" data-aos-delay="200">
                    <button class="faq-question flex justify-between items-center w-full text-left focus:outline-none">
                        <h3 class="text-xl font-semibold text-gray-800">How often should I practice?</h3>
                        <i class="fas fa-chevron-down text-blue-500 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer mt-4 text-gray-600 hidden">
                        <p>
                            We recommend starting with 3-4 sessions per week, even if they're short (15-20 minutes). 
                            Consistency is more important than duration when you're beginning. As you progress, you can:
                        </p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Increase session length to 30-60 minutes</li>
                            <li>Practice more frequently (daily if desired)</li>
                            <li>Mix different types of yoga (strength, flexibility, relaxation)</li>
                        </ul>
                        <p class="mt-2">
                            Our app will suggest an optimal schedule based on your goals and availability.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="mb-6 border-b border-gray-200 pb-6" data-aos="fade-up" data-aos-delay="300">
                    <button class="faq-question flex justify-between items-center w-full text-left focus:outline-none">
                        <h3 class="text-xl font-semibold text-gray-800">Can I cancel anytime?</h3>
                        <i class="fas fa-chevron-down text-blue-500 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer mt-4 text-gray-600 hidden">
                        <p>
                            Absolutely! There are no long-term contracts with YogaTrack. You can cancel your subscription 
                            anytime through your account settings, and you'll continue to have access until the end of 
                            your current billing period.
                        </p>
                        <p class="mt-2">
                            We'd love to hear your feedback if you decide to cancel so we can improve our service.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12" data-aos="fade-up">
                <p class="text-gray-600 mb-4">Still have questions?</p>
                <a href="contact.php" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-600 transition-all">
                    <i class="fas fa-envelope mr-2"></i> Contact Us
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-xl shadow-lg p-8 md:p-12 max-w-4xl mx-auto" data-aos="fade-up">
                <div class="md:flex items-center">
                    <div class="md:w-1/2 mb-6 md:mb-0">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Join Our Newsletter</h3>
                        <p class="text-gray-600">
                            Get yoga tips, special offers, and updates delivered to your inbox.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <form class="flex">
                            <input type="email" placeholder="Your email address" 
                                   class="flex-grow px-4 py-3 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-r-lg hover:bg-blue-600 transition-all">
                                Subscribe
                            </button>
                        </form>
                        <p class="text-xs text-gray-500 mt-2">
                            We respect your privacy. Unsubscribe at any time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-10 mb-12">
                <!-- Column 1 -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-spa text-xl text-green-500"></i>
                        </div>
                        <h3 class="text-xl font-bold">Yoga<span class="text-blue-400">Track</span></h3>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Your personal guide to a healthier, happier life through yoga.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Column 2 -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white transition-colors">Testimonials</a></li>
                        <li><a href="#guides" class="text-gray-400 hover:text-white transition-colors">Guides</a></li>
                    </ul>
                </div>
                
                <!-- Column 3 -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="blog.php" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Yoga Tips</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Pose Library</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Meditation Guides</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
                
                <!-- Column 4 -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
                        <li><a href="contact.php" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; 2025 YogaTrack. All rights reserved.</p>
                <p class="mt-2 text-sm">Designed with <i class="fas fa-heart text-red-400"></i> for yoga enthusiasts worldwide</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-blue-500 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-all duration-300 hover:bg-blue-600">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Mobile menu toggle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // FAQ accordion
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const icon = question.querySelector('i');
                
                // Toggle answer visibility
                answer.classList.toggle('hidden');
                
                // Rotate icon
                icon.classList.toggle('transform');
                icon.classList.toggle('rotate-180');
            });
        });
        
        // Back to top button
        const backToTopBtn = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.remove('opacity-0', 'invisible');
                backToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                backToTopBtn.classList.remove('opacity-100', 'visible');
                backToTopBtn.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-item div:first-child');
            const speed = 200;
            
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText.replace(/,/g, '');
                const increment = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment).toLocaleString();
                    setTimeout(animateCounters, 1);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            });
        }
        
        // Start counters when stats section is in view
        const statsSection = document.querySelector('.bg-gradient-to-r');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(statsSection);
        
        // Initialize counters with data attributes
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.stat-item div:first-child');
            const values = [10000, 50000, 200, 45];
            
            counters.forEach((counter, index) => {
                counter.setAttribute('data-target', values[index]);
                counter.innerText = '0';
            });
        });
        
        // Slideshow functionality
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slide");
            let dots = document.getElementsByClassName("dot");
            
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
        
        // Auto-advance slides
        setInterval(() => {
            plusSlides(1);
        }, 5000);
    </script>
</body>
</html>