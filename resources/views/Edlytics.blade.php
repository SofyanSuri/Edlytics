<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edlytics | Student Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // Skema warna yang sudah ada di layout.app
                        blue: {
                            deep: '#0D1B2A',
                            dark: '#1B263B',
                            medium: '#415A77',
                            light: '#778DA9',
                            pale: '#E0E1DD'
                        },
                        // Warna aksen tambahan yang direkomendasikan
                        teal: {
                            DEFAULT: '#66B2B2',
                            dark: '#508A8A'
                        },
                        amber: {
                            DEFAULT: '#FFB347',
                            dark: '#E69C35'
                        },
                        rose: {
                            pale: '#D1A7A0'
                        },
                        // Status colors
                        success: '#10b981',
                        warning: '#f59e0b',
                        danger: '#ef4444'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    boxShadow: {
                        'custom': '0 4px 6px rgba(13, 27, 42, 0.25)',
                        'custom-hover': '0 10px 15px rgba(13, 27, 42, 0.35)',
                        'card': '0 4px 20px rgba(13, 27, 42, 0.15)',
                        'card-hover': '0 8px 25px rgba(13, 27, 42, 0.25)',
                        'dashboard': '0 25px 50px -12px rgba(13, 27, 42, 0.25)'
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'fade-in': 'fadeIn 0.5s ease-out',
                        'slide-in': 'slideIn 0.3s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideIn: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'hero-pattern': 'linear-gradient(135deg, rgba(13, 27, 42, 0.95), rgba(27, 38, 59, 0.95)), url(\'/api/placeholder/1600/900\')',
                    },
                }
            },
            plugins: [],
        }
    </script>
    
    <!-- Custom Styles -->
    <style>
        /* Custom Styles for Landing Page */
        :root {
            /* Primary colors from layout.app */
            --blue-deep: #0D1B2A;
            --blue-dark: #1B263B;
            --blue-medium: #415A77;
            --blue-light: #778DA9;
            --blue-pale: #E0E1DD;
            
            /* Accent colors (new) */
            --teal: #66B2B2;
            --teal-dark: #508A8A;
            --amber: #FFB347;
            --amber-dark: #E69C35;
            --rose-pale: #D1A7A0;
            
            /* Status colors */
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: var(--blue-deep);
            color: var(--blue-pale);
        }

        .bg-gradient {
            background: linear-gradient(135deg, var(--blue-deep), var(--blue-dark));
        }

        .hero {
            min-height: 80vh;
            background: linear-gradient(135deg, rgba(13, 27, 42, 0.95), rgba(27, 38, 59, 0.95)), url('/api/placeholder/1600/900') no-repeat center center;
            background-size: cover;
        }

        .feature-card {
            transition: all 0.3s ease;
            background: linear-gradient(to right, var(--blue-dark), rgba(65, 90, 119, 0.9));
            border: 1px solid rgba(119, 141, 169, 0.2);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(13, 27, 42, 0.2), 0 10px 10px -5px rgba(13, 27, 42, 0.1);
        }

        .feature-icon {
            background: linear-gradient(135deg, var(--teal), var(--blue-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary {
            background-color: var(--teal);
            color: var(--blue-pale);
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(13, 27, 42, 0.25);
        }

        .btn-primary:hover {
            background-color: var(--teal-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 15px rgba(13, 27, 42, 0.35);
        }

        .btn-outline {
            border: 2px solid var(--blue-pale);
            color: var(--blue-pale);
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background-color: var(--blue-pale);
            color: var(--blue-dark);
        }

        .btn-secondary {
            background-color: var(--amber);
            color: var(--blue-deep);
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(13, 27, 42, 0.25);
        }

        .btn-secondary:hover {
            background-color: var(--amber-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 15px rgba(13, 27, 42, 0.35);
        }

        .dashboard-preview {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(13, 27, 42, 0.3);
            transition: all 0.5s ease;
            border: 1px solid rgba(119, 141, 169, 0.2);
        }

        .dashboard-preview:hover {
            transform: scale(1.02);
        }

        .testimonial-card {
            transition: all 0.3s ease;
            background-color: var(--blue-dark);
            border: 1px solid rgba(119, 141, 169, 0.2);
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-quote {
            color: var(--blue-light);
            font-size: 1.5rem;
        }

        .testimonial-author {
            color: var(--teal);
            font-weight: 600;
        }

        .stat-card {
            border-left: 4px solid var(--teal);
            background-color: var(--blue-dark);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-value {
            color: var(--amber);
            font-weight: 700;
        }

        .section-heading {
            color: var(--blue-pale);
            position: relative;
        }

        .section-heading::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--teal), var(--blue-light));
        }

        .section-subheading {
            color: var(--rose-pale);
        }

        .cta-section {
            background: linear-gradient(to right, var(--teal), var(--teal-dark));
        }

        footer {
            background-color: var(--blue-deep);
            border-top: 1px solid rgba(119, 141, 169, 0.3);
        }

        .footer-link {
            color: var(--blue-light);
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: var(--blue-pale);
        }

        @media (max-width: 768px) {
            .hero {
                min-height: 60vh;
            }
            
            .dashboard-preview {
                margin-top: 2rem;
            }
            
            .section-heading::after {
                width: 40px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="bg-gradient p-2 rounded">
                    <i class="fas fa-graduation-cap text-white text-xl"></i>
                </div>
                <span class="text-2xl font-bold text-gray-800">Edlytics</span>
            </div>
            
            <div class="hidden md:flex space-x-8">
                <a href="#features" class="text-gray-600 hover:text-blue-600 transition duration-300">Features</a>
                <a href="#dashboards" class="text-gray-600 hover:text-blue-600 transition duration-300">Dashboards</a>
                <a href="#testimonials" class="text-gray-600 hover:text-blue-600 transition duration-300">Testimonials</a>
                <a href="#pricing" class="text-gray-600 hover:text-blue-600 transition duration-300">Pricing</a>
                <a href="#cta" class="text-gray-600 hover:text-blue-600 transition duration-300">CTA</a>
                <a href="#FAQ" class="text-gray-600 hover:text-blue-600 transition duration-300">FAQ</a>

            </div>
            
            <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}" class="hidden md:inline-block px-4 py-2 rounded-md text-gray-700 hover:bg-gray-100 transition duration-300">Login</a>
                <a href="{{ route('student.register') }}" class="px-5 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition duration-300 shadow-md">Get Started</a>
                <button class="md:hidden focus:outline-none">
                    <i class="fas fa-bars text-gray-600 text-xl"></i>
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero flex items-center pt-16">
        <div class="container mx-auto px-4 py-16">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 text-white">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Simplified Student Management for Modern Education</h1>
                    <p class="text-xl mb-8 opacity-90">Streamline administration, enhance student experiences, and make data-driven decisions with our comprehensive management platform.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="btn-primary px-8 py-3 rounded-md font-medium text-center">Request Demo</a>
                        <a href="/learn-more" class="btn-outline px-8 py-3 rounded-md font-medium text-center">Learn More</a>
                    </div>
                </div>
                <div class="md:w-1/2 mt-12 md:mt-0 flex justify-center">
                    <div class="relative">
                        <div class="dashboard-preview bg-white rounded-lg shadow-2xl p-4 w-full max-w-lg">
                            <div class="bg-gradient rounded-t-lg p-4">
                                <div class="flex items-center space-x-2">
                                    <div class="p-2 bg-white bg-opacity-20 rounded">
                                        <i class="fas fa-user-graduate text-white"></i>
                                    </div>
                                    <h3 class="text-xl font-semibold text-white">Student Dashboard</h3>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div class="bg-gray-100 p-4 rounded">
                                        <p class="text-sm text-gray-800">Student ID</p>
                                        <p class="text-black font-semibold">20235447</p>
                                    </div>
                                    <div class="bg-gray-100 p-4 rounded">
                                        <p class="text-sm text-gray-800">Department</p>
                                        <p class="text-black font-semibold">Computer Science</p>
                                    </div>
                                </div>
                                <div class="bg-gray-100 p-4 rounded mb-4">
                                    <div class="flex justify-between mb-2">
                                        <p class="text-sm text-gray-800">Name</p>
                                        <p class="text-black font-semibold">Sofeira Zegloria</p>
                                    </div>
                                    <div class="flex justify-between mb-2">
                                        <p class="text-sm text-gray-800">NIM</p>
                                        <p class="text-black font-semibold">2023954301</p>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="text-sm text-gray-800">Phone</p>
                                        <p class="text-black font-semibold">08123456789</p>
                                    </div>
                                </div>
                                <button class="w-full py-2 bg-blue-600 text-white rounded flex items-center justify-center space-x-2">
                                    <i class="fas fa-edit"></i>
                                    <span>Request Data Change</span>
                                </button>
                            </div>
                        </div>
                        <div class="absolute -bottom-6 -right-6 bg-blue-500 text-white p-3 rounded-full shadow-lg">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="stat-card bg-white p-6 rounded-lg shadow-md">
                    <div class="text-blue-500 text-3xl mb-2">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-4xl font-bold mb-2">5,000+</h3>
                    <p class="text-gray-300">Active Students</p>
                </div>
                
                <div class="stat-card bg-white p-6 rounded-lg shadow-md">
                    <div class="text-blue-500 text-3xl mb-2">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="text-4xl font-bold mb-2">120+</h3>
                    <p class="text-gray-300">Educational Institutions</p>
                </div>
                
                <div class="stat-card bg-white p-6 rounded-lg shadow-md">
                    <div class="text-blue-500 text-3xl mb-2">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-4xl font-bold mb-2">98%</h3>
                    <p class="text-gray-300">Time Saved on Admin</p>
                </div>
                
                <div class="stat-card bg-white p-6 rounded-lg shadow-md">
                    <div class="text-blue-500 text-3xl mb-2">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="text-4xl font-bold mb-2">25+</h3>
                    <p class="text-gray-300">Countries Using Edlytics</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">Why Choose Us</span>
                <h2 class="text-3xl text-black md:text-4xl font-bold mt-4 mb-6">Powerful Features for Modern Education Management</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our comprehensive platform streamlines administrative tasks, enhances communication, and provides valuable insights to improve educational outcomes.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-8 rounded-xl shadow-md">
                    <div class="feature-icon text-5xl mb-6">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Student Management</h3>
                    <p class="text-gray-300 mb-4">Easily manage student profiles, academic records, attendance, and personal information in one centralized location.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                        Learn more
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <div class="feature-card bg-white p-8 rounded-xl shadow-md">
                    <div class="feature-icon text-5xl mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Advanced Analytics</h3>
                    <p class="text-gray-300 mb-4">Gain valuable insights with powerful reporting tools and data visualization to make informed decisions about your institution.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                        Learn more
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <div class="feature-card bg-white p-8 rounded-xl shadow-md">
                    <div class="feature-icon text-5xl mb-6">
                        <i class="fas fa-school"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Department Management</h3>
                    <p class="text-gray-300 mb-4">Organize and manage different departments, faculties, and courses with customizable settings and permissions.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                        Learn more
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <div class="feature-card bg-white p-8 rounded-xl shadow-md">
                    <div class="feature-icon text-5xl mb-6">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Mobile Responsive</h3>
                    <p class="text-gray-300 mb-4">Access the system on any device with our fully responsive design, ensuring accessibility for administrators and students alike.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                        Learn more
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <div class="feature-card bg-white p-8 rounded-xl shadow-md">
                    <div class="feature-icon text-5xl mb-6">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Secure Data Storage</h3>
                    <p class="text-gray-300 mb-4">Keep student information safe with enterprise-grade security, role-based access controls, and regular data backups.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                        Learn more
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
                
                <div class="feature-card bg-white p-8 rounded-xl shadow-md">
                    <div class="feature-icon text-5xl mb-6">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Request Management</h3>
                    <p class="text-gray-300 mb-4">Streamline student requests for data changes, document issuance, and other administrative processes with automated workflows.</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                        Learn more
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Dashboard Section -->
    <section id="dashboards" class="py-20 bg-gradient">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="bg-white bg-opacity-20 text-white text-sm font-medium px-4 py-1.5 rounded-full">User Interfaces</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6 text-white">Intuitive Dashboards for All Users</h2>
                <p class="text-white text-opacity-90 max-w-2xl mx-auto">Our platform offers tailored experiences for administrators, students, and faculty members with role-specific dashboards.</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <div class="bg-white p-4 rounded-lg shadow-lg mb-8">
                        <h3 class="text-black text-xl font-bold mb-2 px-2">Student Dashboard</h3>
                        <img src="{{ asset('images/student-dashboard.png') }}" alt="Student Dashboard" class="rounded w-full">
                        <div class="p-4">
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-600">View personal academic information</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-600">Submit data change requests</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-600">Track request history and status</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="bg-white p-4 rounded-lg shadow-lg mb-8">
                        <h3 class="text-black text-xl font-bold mb-2 px-2">Admin Dashboard</h3>
                        <img src="{{ asset('images/admin-dashboard.png') }}" alt="Admin Dashboard" class="rounded w-full">
                        <div class="p-4">
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-600">Comprehensive student database management</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-600">Review and process student requests</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                    <span class="text-gray-600">Monitor registrations and system activities</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="btn-primary px-8 py-3 rounded-md font-medium">Schedule a Demo</a>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">Testimonials</span>
                <h2 class="text-black text-3xl md:text-4xl font-bold mt-4 mb-6">What Our Clients Say</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Institutions around the world trust Edlytics to streamline their student management processes.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="testimonial-card bg-gray-50 p-8 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-8">"Edlytics has revolutionized how we handle student data. The intuitive interface and powerful features have saved our administrative staff countless hours."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                            TU
                        </div>
                        <div>
                            <h4 class="font-bold">Dr. Tania Umar</h4>
                            <p class="text-sm text-gray-500">Dean of Administration, Technical University</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card bg-gray-50 p-8 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-8">"The analytics capabilities have given us valuable insights into our student population and helped us make data-driven decisions to improve our programs."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                            RP
                        </div>
                        <div>
                            <h4 class="font-bold">Robert Patel</h4>
                            <p class="text-sm text-gray-500">IT Director, Global Education Institute</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card bg-gray-50 p-8 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-8">"As a student, I appreciate how easy it is to access my information and submit requests. The mobile responsiveness means I can check my details on the go."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                            MM
                        </div>
                        <div>
                            <h4 class="font-bold">Maria Moreno</h4>
                            <p class="text-sm text-gray-500">Student, Computer Science Department</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">Pricing Plans</span>
                <h2 class="text-black text-3xl md:text-4xl font-bold mt-4 mb-6">Choose the Right Plan for Your Institution</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Flexible pricing options designed to accommodate institutions of all sizes.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8">
                        <h3 class="text-black text-xl font-bold mb-4">Basic</h3>
                        <div class="flex items-end mb-8">
                            <span class="text-black text-4xl font-bold">$499</span>
                            <span class="text-gray-600 ml-2">/month</span>
                        </div>
                        <p class="text-gray-700 mb-8">Perfect for small institutions managing up to 500 students.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Core management features</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Student & admin dashboards</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Basic analytics</span>
                            </li>
                            <li class="flex items-start text-gray-400">
                                <i class="fas fa-times mt-1 mr-2"></i>
                                <span class="text-gray-500">API access</span>
                            </li>
                            <li class="flex items-start text-gray-400">
                                <i class="fas fa-times mt-1 mr-2"></i>
                                <span class="text-gray-500">Custom integrations</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-8 pb-8">
                        <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="block w-full py-3 px-6 text-center bg-blue-600 hover:bg-blue-700 text-white rounded-md font-medium transition duration-300 shadow-md">Get Started</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg transform scale-105 relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-1 text-sm font-medium">Popular</div>
                    <div class="p-8">
                        <h3 class="text-black text-xl font-bold mb-4">Professional</h3>
                        <div class="flex items-end mb-8">
                            <span class="text-black text-4xl font-bold">$999</span>
                            <span class="text-gray-600 ml-2">/month</span>
                        </div>
                        <p class="text-gray-700 mb-8">Ideal for growing institutions with up to 2,000 students.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">All Basic features</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Advanced analytics</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Faculty dashboard</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">API access</span>
                            </li>
                            <li class="flex items-start text-gray-400">
                                <i class="fas fa-times mt-1 mr-2"></i>
                                <span class="text-gray-500">Custom integrations</span>
                            </li>
                        </ul>
                </div>
                    <div class="px-8 pb-8">
                        <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="block w-full py-3 px-6 text-center bg-blue-600 hover:bg-blue-700 text-white rounded-md font-medium transition duration-300 shadow-md">Get Started</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-8">
                        <h3 class="text-black text-xl font-bold mb-4">Enterprise</h3>
                        <div class="flex items-end mb-8">
                            <span class="text-black text-4xl font-bold">$1,999</span>
                            <span class="text-gray-600 ml-2">/month</span>
                        </div>
                        <p class="text-gray-700 mb-8">Comprehensive solution for large institutions with 2,000+ students.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">All Professional features</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Advanced security features</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Unlimited departments</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">24/7 priority support</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span class="text-gray-500">Custom integrations</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-8 pb-8">
                        <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="block w-full py-3 px-6 text-center bg-blue-600 hover:bg-blue-700 text-white rounded-md font-medium transition duration-300 shadow-md">Get Started</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-gray-600 mb-6">Need a custom solution? Contact our sales team for a tailored package.</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                    Request custom pricing
                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                </a>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section id="cta" class="py-20 bg-gradient">
        <div class="container mx-auto px-4 text-center">
            <span class="bg-white bg-opacity-20 text-white text-sm font-medium px-4 py-1.5 rounded-full">CTA</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6 text-white">Ready to Transform Your Student Management?</h2>
            <p class="text-xl text-white text-opacity-90 mb-12 max-w-3xl mx-auto">Join thousands of educational institutions that have streamlined their administrative processes with Edlytics.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="px-8 py-4 bg-white text-blue-800 rounded-md font-medium hover:bg-blue-50 transition duration-300 shadow-lg">Schedule Demo</a>
                <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="px-8 py-4 border-2 border-white text-white rounded-md font-medium hover:bg-white hover:bg-opacity-10 transition duration-300">Contact Sales</a>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section id="FAQ" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">FAQ</span>
                <h2 class="text-black text-3xl md:text-4xl font-bold mt-4 mb-6">Frequently Asked Questions</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Find answers to common questions about Edlytics.</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="mb-6">
                    <h3 class="text-gray-500 text-xl font-bold mb-3">How secure is Edlytics for storing student data?</h3>
                    <p class="text-gray-600">Edlytics employs enterprise-grade security measures including end-to-end encryption, regular security audits, and compliance with international data protection regulations to ensure your student data remains secure.</p>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-gray-500 text-xl font-bold mb-3">Can Edlytics integrate with our existing systems?</h3>
                    <p class="text-gray-600">Yes, our Professional and Enterprise plans include API access that allows integration with existing LMS, SIS, and other educational software. Our Enterprise plan also includes custom integration services.</p>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-gray-500 text-xl font-bold mb-3">Is training provided for staff and administrators?</h3>
                    <p class="text-gray-600">Absolutely! All plans include access to our comprehensive knowledge base and video tutorials. Professional and Enterprise plans also include live training sessions for your staff.</p>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-gray-500 text-xl font-bold mb-3">How easy is it to migrate from our current system to Edlytics?</h3>
                    <p class="text-gray-600">We provide data migration tools and services to ensure a smooth transition. Our team will work with you to map your existing data structure to Edlytics and validate the migration process.</p>
                </div>
                
                <div>
                    <h3 class="text-gray-500 text-xl font-bold mb-3">Can we customize Edlytics to match our institution's branding?</h3>
                    <p class="text-gray-600">Yes, all plans allow basic customization with your institution's logo and colors. The Enterprise plan offers advanced customization options including custom domains and fully branded interfaces.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-primary-dark text-white">
        <div class="container mx-auto px-4 pt-16 pb-8">
            <div class="flex flex-wrap">
                <div class="w-full md:w-4/12 mb-10 md:mb-0">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="bg-white p-2 rounded">
                            <i class="fas fa-graduation-cap text-blue-800 text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold">Edlytics</span>
                    </div>
                    <p class="mb-6 pr-4 text-blue-100">Simplified student management for modern educational institutions.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-200 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="text-blue-200 hover:text-white transition duration-300">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="https://github.com/SofyanSuri" class="text-blue-200 hover:text-white transition duration-300">
                            <i class="fab fa-github text-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/sfnsrr?igsh=MWdwdG92ZzgyNXIzdA%3D%3D&utm_source=qr" class="text-blue-200 hover:text-white transition duration-300">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                    </div>
                </div>
                
                <div class="w-full md:w-2/12 mb-10 md:mb-0">
                    <h4 class="text-lg font-bold mb-6">Product</h4>
                    <ul class="space-y-3">
                        <li><a href="#features" class="text-blue-200 hover:text-white transition duration-300">Features</a></li>
                        <li><a href="#pricing" class="text-blue-200 hover:text-white transition duration-300">Pricing</a></li>
                        <li><a href="#testimonials" class="text-blue-200 hover:text-white transition duration-300">Testimonials</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Integrations</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Updates</a></li>
                    </ul>
                </div>
                
                <div class="w-full md:w-2/12 mb-10 md:mb-0">
                    <h4 class="text-lg font-bold mb-6">Support</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Help Center</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Documentation</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">API Reference</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Community</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="w-full md:w-2/12 mb-10 md:mb-0">
                    <h4 class="text-lg font-bold mb-6">Company</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">About Us</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Blog</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Careers</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Press</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Partners</a></li>
                    </ul>
                </div>
                
                <div class="w-full md:w-2/12">
                    <h4 class="text-lg font-bold mb-6">Legal</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Terms of Service</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">GDPR</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Cookie Policy</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Security</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-blue-800 mt-16 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-blue-200 text-sm mb-4 md:mb-0">&copy; 2025 Edlytics. All rights reserved.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-200 hover:text-white text-sm transition duration-300">Privacy Policy</a>
                    <a href="#" class="text-blue-200 hover:text-white text-sm transition duration-300">Terms of Service</a>
                    <a href="#" class="text-blue-200 hover:text-white text-sm transition duration-300">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Mobile menu toggle
        const menuButton = document.querySelector('button.md\\:hidden');
        const mobileMenu = document.createElement('div');
        mobileMenu.classList.add('mobile-menu', 'fixed', 'inset-0', 'bg-white', 'z-50', 'p-4', 'transform', 'translate-x-full', 'transition-transform', 'duration-300', 'ease-in-out');
        mobileMenu.innerHTML = `
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center space-x-2">
                    <div class="bg-gradient p-2 rounded">
                        <i class="fas fa-graduation-cap text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold text-gray-800">Edlytics</span>
                </div>
                <button class="focus:outline-none mobile-close">
                    <i class="fas fa-times text-gray-600 text-xl"></i>
                </button>
            </div>
            <nav class="flex flex-col space-y-4">
                <a href="#features" class="text-gray-600 hover:text-blue-600 py-3 border-b border-gray-100 transition duration-300">Features</a>
                <a href="#dashboards" class="text-gray-600 hover:text-blue-600 py-3 border-b border-gray-100 transition duration-300">Dashboards</a>
                <a href="#testimonials" class="text-gray-600 hover:text-blue-600 py-3 border-b border-gray-100 transition duration-300">Testimonials</a>
                <a href="#pricing" class="text-gray-600 hover:text-blue-600 py-3 border-b border-gray-100 transition duration-300">Pricing</a>
                <div class="pt-4">
                    <a href="#" class="block w-full py-3 px-6 text-center rounded-md font-medium mb-4 border border-gray-300 hover:bg-gray-100 transition duration-300">Login</a>
                    <a href="#" class="block w-full py-3 px-6 text-center bg-blue-600 text-white rounded-md font-medium hover:bg-blue-700 transition duration-300 shadow-md">Get Started</a>
                </div>
            </nav>
        `;
        document.body.appendChild(mobileMenu);
        
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
        });
        
        document.querySelector('.mobile-close').addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
        });
        
        // Close mobile menu when clicking on a mobile menu link 
        document.querySelectorAll('.mobile-menu a[href^="#"]').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
            });
        });
    </script>
</body>
</html>