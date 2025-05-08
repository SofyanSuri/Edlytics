<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edlytics | Learn More</title>
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
            background-color: var(--blue-pale);
            color: var(--blue-dark);
        }

        .bg-gradient {
            background: linear-gradient(135deg, var(--blue-deep), var(--blue-dark));
        }

        .hero-learn-more {
            min-height: 50vh;
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

        .detail-card {
            border-left: 4px solid var(--teal);
            background-color: white;
            transition: all 0.3s ease;
        }

        .detail-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(13, 27, 42, 0.15);
        }

        .section-heading {
            color: var(--blue-deep);
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
            color: var(--blue-medium);
        }

        .timeline-dot {
            background-color: var(--teal);
            border: 3px solid var(--blue-pale);
        }

        .timeline-card {
            border-left: 3px solid var(--blue-light);
            transition: all 0.3s ease;
        }
        
        .timeline-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(13, 27, 42, 0.15);
        }

        .benefit-card {
            background-color: white;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        .benefit-card:hover {
            border-bottom: 3px solid var(--teal);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(13, 27, 42, 0.15);
        }

        .cta-section {
            background: linear-gradient(to right, var(--blue-medium), var(--blue-dark));
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
            .hero-learn-more {
                min-height: 40vh;
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
                <a href="#about" class="text-gray-600 hover:text-blue-600 transition duration-300">About</a>
                <a href="#how-it-works" class="text-gray-600 hover:text-blue-600 transition duration-300">How It Works</a>
                <a href="#benefits" class="text-gray-600 hover:text-blue-600 transition duration-300">Benefits</a>
                <a href="#solutions" class="text-gray-600 hover:text-blue-600 transition duration-300">Solutions</a>
                <a href="#faq" class="text-gray-600 hover:text-blue-600 transition duration-300">FAQ</a>
            </div>
            
            <div class="flex items-center space-x-4">
                <a href="{{ route('student.login') }}" class="hidden md:inline-block px-4 py-2 rounded-md text-gray-700 hover:bg-gray-100 transition duration-300">Login</a>
                <a href="{{ route('student.register') }}" class="px-5 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition duration-300 shadow-md">Get Started</a>
                <button class="md:hidden focus:outline-none">
                    <i class="fas fa-bars text-gray-600 text-xl"></i>
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero-learn-more flex items-center pt-16">
        <div class="container mx-auto px-4 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white">Discover the Edlytics Advantage</h1>
                <p class="text-xl mb-8 text-white opacity-90 max-w-3xl mx-auto">Learn how our student management system transforms educational administration and enhances the learning experience.</p>
                <a href="#about" class="btn-primary px-8 py-3 rounded-md font-medium inline-block">Explore More</a>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pr-12 mb-12 md:mb-0">
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">About Edlytics</span>
                    <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6 section-heading">Revolutionizing Education Management</h2>
                    <p class="text-gray-700 mb-6">Edlytics is a comprehensive student management system designed to meet the evolving needs of modern educational institutions. Our platform streamlines administrative processes, enhances communication, and provides valuable data insights to improve educational outcomes.</p>
                    <p class="text-gray-700 mb-6">Founded by a team of educators and technology experts, Edlytics was created to address the challenges faced by educational institutions in managing student data efficiently and securely.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                        <div class="flex items-start">
                            <div class="bg-teal text-white p-2 rounded-full mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Streamlined Administration</h4>
                                <p class="text-sm text-gray-600">Reduce paperwork and automate routine tasks</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-teal text-white p-2 rounded-full mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Enhanced Communication</h4>
                                <p class="text-sm text-gray-600">Improve interaction between all stakeholders</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-teal text-white p-2 rounded-full mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Data-Driven Insights</h4>
                                <p class="text-sm text-gray-600">Make informed decisions with powerful analytics</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-teal text-white p-2 rounded-full mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1">Secure Infrastructure</h4>
                                <p class="text-sm text-gray-600">Enterprise-grade security for student data</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="overflow-hidden flex rounded-lg shadow-md">
                            <img src="{{ asset('images/student-portal.png') }}" alt="Student Portal" class="w-full h-auto">
                        </div>
                        <div class="overflow-hidden rounded-lg shadow-md md">
                            <img src="{{ asset('images/admin-dashboard.png') }}" alt="Admin Dashboard" class="w-full h-auto">
                        </div>
                        <div class="overflow-hidden flex rounded-lg shadow-md">
                            <img src="{{ asset('images/analytics.png') }}" alt="Analytics Interface" class="w-full h-auto">
                        </div>
                        <div class="overflow-hidden rounded-lg shadow-md md">
                            <img src="{{ asset('images/student-request.png') }}" alt="Mobile App" class="w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 bg-blue-pale">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="bg-gray-500 text-white text-sm font-medium px-4 py-1.5 rounded-full">Process</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6 text-blue-deep">How Edlytics Works</h2>
                <p class="text-blue-dark max-w-2xl mx-auto">Our platform simplifies student management through an intuitive workflow that benefits all stakeholders in the educational process.</p>
            </div>
            
            <div class="relative">
                <!-- Timeline Line -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-light opacity-50"></div>
                
                <!-- Timeline Items -->
                <div class="space-y-16">
                    <!-- Item 1 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full timeline-dot"></div>
                        
                        <div class="md:w-1/2 md:pr-16 mb-8 md:mb-0 md:text-right">
                            <div class="bg-white p-6 rounded-lg shadow-md timeline-card ml-auto md:ml-0 md:mr-8">
                                <div class="text-4xl text-teal mb-4">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <h3 class="text-xl font-bold mb-2">1. Student Registration</h3>
                                <p class="text-gray-600">Students or administrators create profiles with essential academic and personal information. The system validates data and establishes secure accounts.</p>
                            </div>
                        </div>
                        
                        <div class="md:w-1/2 md:pl-16">
                            <img src="{{ asset('images/registration.png') }}" alt="Registration Process" class="rounded-lg shadow-md w-full hidden md:block">
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="relative flex flex-col md:flex-row-reverse items-center">
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full timeline-dot"></div>
                        
                        <div class="md:w-1/2 md:pl-16 mb-8 md:mb-0">
                            <div class="bg-white p-6 rounded-lg shadow-md timeline-card mr-auto md:ml-8 md:mr-0">
                                <div class="text-4xl text-teal mb-4">
                                    <i class="fas fa-database"></i>
                                </div>
                                <h3 class="text-xl font-bold mb-2">2. Data Management</h3>
                                <p class="text-gray-600">Administrators organize student information, academic records, and departmental data within a centralized secure database with role-based access controls.</p>
                            </div>
                        </div>
                        
                        <div class="md:w-1/2 md:pr-16 md:text-right">
                            <img src="{{ asset('images/admin-dashboard.png') }}" alt="Data Management" class="rounded-lg shadow-md w-full hidden md:block">
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="relative flex flex-col md:flex-row items-center">
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full timeline-dot"></div>
                        
                        <div class="md:w-1/2 md:pr-16 mb-8 md:mb-0 md:text-right">
                            <div class="bg-white p-6 rounded-lg shadow-md timeline-card ml-auto md:ml-0 md:mr-8">
                                <div class="text-4xl text-teal mb-4">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                                <h3 class="text-xl font-bold mb-2">3. Request Processing</h3>
                                <p class="text-gray-600">Students submit data change requests, document issuance requests, and other administrative requirements through the user-friendly interface.</p>
                            </div>
                        </div>
                        
                        <div class="md:w-1/2 md:pl-16">
                            <img src="{{ asset('images/student-request.png') }}" alt="Request Process" class="rounded-lg shadow-md w-full hidden md:block">
                        </div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="relative flex flex-col md:flex-row-reverse items-center">
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full timeline-dot"></div>
                        
                        <div class="md:w-1/2 md:pl-16 mb-8 md:mb-0">
                            <div class="bg-white p-6 rounded-lg shadow-md timeline-card mr-auto md:ml-8 md:mr-0">
                                <div class="text-4xl text-teal mb-4">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <h3 class="text-xl font-bold mb-2">4. Analytics & Reporting</h3>
                                <p class="text-gray-600">Administrators gain insights through comprehensive analytics tools, generating reports on student performance, administrative efficiency, and institutional trends.</p>
                            </div>
                        </div>
                        
                        <div class="md:w-1/2 md:pr-16 md:text-right">
                            <img src="{{ asset('images/analytics.png') }}" alt="Analytics Dashboard" class="rounded-lg shadow-md w-full hidden md:block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Benefits Section -->
    <section id="benefits" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">Why Choose Us</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6 text-blue-deep">Benefits of Edlytics</h2>
                <p class="text-blue-dark max-w-2xl mx-auto">Our platform offers numerous advantages for educational institutions of all sizes, from small schools to large universities.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="benefit-card p-6 rounded-lg shadow-md">
                    <div class="text-5xl text-teal mb-6">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Increased Efficiency</h3>
                    <p class="text-gray-600 mb-4">Automate routine administrative tasks and reduce paperwork, allowing staff to focus on more important responsibilities.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>98% reduction in administrative processing time</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Automated workflow management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Streamlined request handling</span>
                        </li>
                    </ul>
                </div>
                
                <div class="benefit-card p-6 rounded-lg shadow-md">
                    <div class="text-5xl text-teal mb-6">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Enhanced Security</h3>
                    <p class="text-gray-600 mb-4">Protect sensitive student information with enterprise-grade security measures and role-based access controls.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>End-to-end encryption for all data</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Regular security audits and updates</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Granular permission settings</span>
                        </li>
                    </ul>
                </div>
                
                <div class="benefit-card p-6 rounded-lg shadow-md">
                    <div class="text-5xl text-teal mb-6">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Data-Driven Insights</h3>
                    <p class="text-gray-600 mb-4">Make informed decisions with powerful analytics tools that provide valuable insights into student and institutional performance.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Customizable reporting dashboards</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Trend analysis and forecasting</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Performance tracking and benchmarking</span>
                        </li>
                    </ul>
                </div>
                
                <div class="benefit-card p-6 rounded-lg shadow-md">
                    <div class="text-5xl text-teal mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Improved Communication</h3>
                    <p class="text-gray-600 mb-4">Enhance communication between administrators, faculty, and students with integrated messaging and notification systems.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Real-time notifications and updates</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Transparent request tracking</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Centralized communication platform</span>
                        </li>
                    </ul>
                </div>
                
                <div class="benefit-card p-6 rounded-lg shadow-md">
                    <div class="text-5xl text-teal mb-6">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Accessibility</h3>
                    <p class="text-gray-600 mb-4">Access the system from anywhere, on any device, with our fully responsive design and mobile compatibility.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Responsive design for all screen sizes</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Cross-platform compatibility</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Native mobile application for iOS and Android</span>
                        </li>
                    </ul>
                </div>
                
                <div class="benefit-card p-6 rounded-lg shadow-md">
                    <div class="text-5xl text-teal mb-6">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Scalability</h3>
                    <p class="text-gray-600 mb-4">Our platform grows with your institution, supporting increasing numbers of students and expanding educational operations.</p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Handles thousands of concurrent users</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Cloud-based infrastructure</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-teal mt-1 mr-2"></i>
                            <span>Regular performance optimization</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Solutions Section -->
    <section id="solutions" class="py-20 bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="bg-gray-500 text-white text-sm font-medium px-4 py-1.5 rounded-full">Our Offering</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6 text-white">Tailored Solutions</h2>
                <p class="text-gray-300 max-w-2xl mx-auto">We offer different packages designed to meet the specific needs of various educational institutions.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Package -->
                <div class="bg-white rounded-lg shadow-card overflow-hidden transition-all duration-300 hover:shadow-card-hover">
                    <div class="bg-blue-medium p-6 text-center">
                        <h3 class="text-black text-4xl font-bold">Basic</h3>
                        <p class="text-blue-pale mt-2">For small educational institutions</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <span class="text-3xl font-bold text-blue-dark">$499</span>
                            <span class="text-gray-600">/month</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Up to 500 student profiles</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Core student management features</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Basic reporting tools</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Email support</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <i class="fas fa-times mr-3"></i>
                                <span>Custom integrations</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <i class="fas fa-times mr-3"></i>
                                <span>Advanced analytics</span>
                            </li>
                        </ul>
                        <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="block text-center py-3 px-6 bg-gray-700 hover:bg-black text-white rounded-md transition duration-300">Choose Plan</a>
                    </div>
                </div>
                
                <!-- Professional Package -->
                <div class="bg-white rounded-lg shadow-card overflow-hidden transition-all duration-300 hover:shadow-card-hover transform scale-105 z-10">
                    <div class="bg-teal p-6 text-center relative">
                        <span class="absolute top-0 right-0 bg-amber text-blue-dark text-xs font-bold px-3 py-1 transform translate-x-2 -translate-y-1">POPULAR</span>
                        <h3 class="text-3xl font-bold text-black">Professional</h3>
                        <p class="text-blue-pale opacity-90 mt-2">For medium-sized institutions</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <span class="text-3xl font-bold text-blue-dark">$999</span>
                            <span class="text-gray-600">/month</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Up to 2,000 student profiles</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>All core management features</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Advanced reporting & analytics</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Phone & email support</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Basic integrations</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <i class="fas fa-times mr-3"></i>
                                <span>Custom development</span>
                            </li>
                        </ul>
                        <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="block text-center py-3 px-6 bg-gray-700 hover:bg-black text-white rounded-md transition duration-300 shadow-md">Choose Plan</a>
                    </div>
                </div>
                
                <!-- Enterprise Package -->
                <div class="bg-white rounded-lg shadow-card overflow-hidden transition-all duration-300 hover:shadow-card-hover">
                    <div class="bg-blue-dark p-6 text-center">
                        <h3 class="text-4xl font-bold text-black">Enterprise</h3>
                        <p class="text-blue-pale mt-2">For large universities & districts</p>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <span class="text-3xl font-bold text-blue-dark">Custom</span>
                            <span class="text-gray-600">pricing</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Unlimited student profiles</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>All management features</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Custom reporting & analytics</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Dedicated support team</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Custom integrations</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-teal mr-3"></i>
                                <span>Custom development</span>
                            </li>
                        </ul>
                        <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="block text-center py-3 px-6 bg-gray-700 hover:bg-black text-white rounded-md transition duration-300">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">Common Questions</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6 text-blue-deep">Frequently Asked Questions</h2>
                <p class="text-blue-dark max-w-2xl mx-auto">Find answers to common questions about Edlytics and how it can benefit your institution.</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="bg-blue-pale rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-3 text-blue-dark">How secure is student data in Edlytics?</h3>
                        <p class="text-blue-medium">Edlytics employs enterprise-grade security measures including end-to-end encryption, regular security audits, and strict access controls. We comply with all relevant education data privacy regulations and standards, ensuring your student information remains secure and confidential.</p>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="bg-blue-pale rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-3 text-blue-dark">Can Edlytics integrate with our existing systems?</h3>
                        <p class="text-blue-medium">Yes, Edlytics offers extensive integration capabilities. Our Professional and Enterprise plans include integration with common education software, learning management systems, and custom solutions. Our team can work with you to ensure smooth data flow between platforms.</p>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="bg-blue-pale rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-3 text-blue-dark">How long does implementation typically take?</h3>
                        <p class="text-blue-medium">Implementation timeframes vary based on institution size and requirements. Basic setup can be completed in 2-4 weeks, while more complex implementations with custom integrations may take 8-12 weeks. Our dedicated implementation team works closely with you throughout the process.</p>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="bg-blue-pale rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-3 text-blue-dark">What kind of support does Edlytics provide?</h3>
                        <p class="text-blue-medium">All plans include support, with varying levels based on your package. Basic plans receive email support with 24-48 hour response times. Professional plans add phone support during business hours. Enterprise customers enjoy 24/7 dedicated support with a personal account manager.</p>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="bg-blue-pale rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-3 text-blue-dark">Can we migrate data from our current system?</h3>
                        <p class="text-blue-medium">Absolutely. We offer comprehensive data migration services to transfer your existing student records and related information to Edlytics. Our technical team handles the entire process, ensuring data integrity and minimizing disruption to your operations.</p>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <p class="text-blue-medium mb-4">Don't see your question? Contact our team for more information.</p>
                    <a href="https://chat.whatsapp.com/BAeA98iUW5B2rV3VTS0DK4" class="btn-primary px-8 py-3 rounded-md font-medium inline-block">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-8 md:mb-0 md:w-2/3">
                    <h2 class="text-3xl font-bold text-white mb-4">Ready to transform your educational management?</h2>
                    <p class="text-gray-300 text-lg">Join thousands of institutions already using Edlytics to streamline their operations.</p>
                </div>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="btn-outline px-8 py-3 rounded-md font-medium text-center">Request Demo</a>
                    <a href="#" class="btn-secondary px-8 py-3 rounded-md font-medium text-center">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-8 md:mb-0">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="bg-gradient p-2 rounded">
                            <i class="fas fa-graduation-cap text-white text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold text-white">Edlytics</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">Transforming educational administration through innovative technology solutions that empower institutions and enhance the student experience.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-light hover:text-blue-pale transition duration-300">
                            <i class="fab fa-twitter text-xl text-white"></i>
                        </a>
                        <a href="#" class="text-blue-light hover:text-blue-pale transition duration-300">
                            <i class="fab fa-facebook text-xl text-white"></i>
                        </a>
                        <a href="#" class="text-blue-light hover:text-blue-pale transition duration-300">
                            <i class="fab fa-linkedin text-xl text-white"></i>
                        </a>
                        <a href="#" class="text-blue-light hover:text-blue-pale transition duration-300">
                            <i class="fab fa-instagram text-xl text-white"></i>
                        </a>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-16">
                    <div>
                        <h4 class="text-white font-bold mb-4">Product</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="footer-link">Features</a></li>
                            <li><a href="#" class="footer-link">Pricing</a></li>
                            <li><a href="#" class="footer-link">Case Studies</a></li>
                            <li><a href="#" class="footer-link">Reviews</a></li>
                            <li><a href="#" class="footer-link">Updates</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-white font-bold mb-4">Company</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="footer-link">About Us</a></li>
                            <li><a href="#" class="footer-link">Careers</a></li>
                            <li><a href="#" class="footer-link">Partners</a></li>
                            <li><a href="#" class="footer-link">News</a></li>
                            <li><a href="#" class="footer-link">Contact</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-white font-bold mb-4">Resources</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="footer-link">Blog</a></li>
                            <li><a href="#" class="footer-link">Help Center</a></li>
                            <li><a href="#" class="footer-link">Documentation</a></li>
                            <li><a href="#" class="footer-link">Webinars</a></li>
                            <li><a href="#" class="footer-link">Tutorials</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="text-white font-bold mb-4">Legal</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="footer-link">Privacy Policy</a></li>
                            <li><a href="#" class="footer-link">Terms of Service</a></li>
                            <li><a href="#" class="footer-link">GDPR</a></li>
                            <li><a href="#" class="footer-link">Security</a></li>
                            <li><a href="#" class="footer-link">Compliance</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-blue-dark mt-12 pt-8 text-center md:text-left">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 mb-4 md:mb-0">&copy; 2025 Edlytics. All rights reserved.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-blue-pale text-sm transition duration-300">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-blue-pale text-sm transition duration-300">Terms of Use</a>
                        <a href="#" class="text-gray-400 hover:text-blue-pale text-sm transition duration-300">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Back to Top Button -->
    <a href="#" class="fixed bottom-8 right-8 bg-teal hover:bg-teal-dark text-white p-3 rounded-full shadow-md transition duration-300 opacity-75 hover:opacity-100">
        <i class="fas fa-arrow-up"></i>
    </a>
    
    <!-- JavaScript -->
    <script>
        // Back to top smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                } else {
                    document.querySelector(targetId).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('button.md\\:hidden');
        const mobileMenu = document.querySelector('div.hidden.md\\:flex');
        
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('flex');
                mobileMenu.classList.toggle('flex-col');
                mobileMenu.classList.toggle('absolute');
                mobileMenu.classList.toggle('top-16');
                mobileMenu.classList.toggle('left-0');
                mobileMenu.classList.toggle('w-full');
                mobileMenu.classList.toggle('bg-white');
                mobileMenu.classList.toggle('p-4');
                mobileMenu.classList.toggle('shadow-md');
                mobileMenu.classList.toggle('z-50');
            });
        }
    </script>
</body>
</html>