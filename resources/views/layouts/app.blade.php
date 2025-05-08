<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Student Management System - Manage student records, requests, and academic information">
    <meta name="theme-color" content="#0D1B2A">
    <title>Edlytics</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23778DA9'%3E%3Cpath d='M12 14l9-5-9-5-9 5 9 5z'/%3E%3Cpath d='M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z'/%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222'/%3E%3C/svg%3E">
    
    <!-- External resources -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.0/cdn.min.js" defer></script>
    
    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        blue: {
                            deep: '#0D1B2A',
                            dark: '#1B263B',
                            medium: '#415A77',
                            light: '#778DA9',
                            pale: '#E0E1DD'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    boxShadow: {
                        'custom': '0 4px 6px rgba(13, 27, 42, 0.25)',
                        'custom-hover': '0 10px 15px rgba(13, 27, 42, 0.35)',
                        'input-focus': '0 0 0 3px rgba(119, 141, 169, 0.5)',
                        'card': '0 4px 20px rgba(13, 27, 42, 0.15)',
                        'card-hover': '0 8px 25px rgba(13, 27, 42, 0.25)',
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
                    transitionProperty: {
                        'height': 'height',
                        'spacing': 'margin, padding',
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                    },
                    borderWidth: {
                        '3': '3px',
                    }
                }
            },
            plugins: [],
        }
    </script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #1B263B;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #415A77;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #778DA9;
        }
        
        /* Smooth transitions */
        .transition-all {
            transition: all 0.3s ease;
        }
        
        /* Custom focus styles */
        input:focus, select:focus, textarea:focus, button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(119, 141, 169, 0.5);
        }
        
        /* Custom dark theme for tables */
        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        
        .custom-table th {
            background-color: #1B263B;
            color: #E0E1DD;
            font-weight: 600;
            padding: 0.75rem 1rem;
            text-align: left;
            border-bottom: 2px solid #415A77;
        }
        
        .custom-table td {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid rgba(65, 90, 119, 0.3);
        }
        
        .custom-table tr:last-child td {
            border-bottom: none;
        }
        
        .custom-table tr:hover td {
            background-color: rgba(65, 90, 119, 0.2);
        }
        
        .custom-table tr {
            transition: background-color 0.2s ease;
        }
        
        /* Form elements */
        .form-input {
            @apply w-full p-3 rounded-lg border border-blue-medium bg-blue-dark/60 text-blue-pale placeholder-blue-light/70 focus:ring-2 focus:ring-blue-light transition-all duration-300;
        }
        
        .form-label {
            @apply block text-blue-light font-medium text-sm mb-2;
        }
        
        .btn-primary {
            @apply bg-gradient-to-r from-blue-medium to-blue-light px-6 py-3 rounded-lg text-blue-pale font-medium shadow-custom hover:shadow-custom-hover transition-all duration-300 hover:from-blue-light hover:to-blue-medium transform hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-blue-pale/50;
        }
        
        .btn-secondary {
            @apply bg-blue-dark/80 border border-blue-medium px-6 py-3 rounded-lg text-blue-light font-medium hover:text-blue-pale hover:border-blue-light transition-all duration-300 transform hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-blue-pale/50;
        }
        
        .card {
            @apply bg-gradient-to-r from-blue-dark to-blue-medium/90 p-6 rounded-lg border border-blue-light/20 shadow-card transition-all duration-300 hover:shadow-card-hover;
        }
        
        /* Loading animation */
        .loader {
            @apply inline-block h-5 w-5 animate-spin rounded-full border-3 border-blue-pale/30 border-t-blue-pale;
        }
        
        /* Toast notification */
        .toast {
            @apply fixed top-4 right-4 p-4 rounded-lg shadow-lg border-l-4 animate-fade-in z-50 max-w-md;
        }
        
        .toast-success {
            @apply bg-blue-dark border-green-500 text-blue-pale;
        }
        
        .toast-error {
            @apply bg-blue-dark border-red-500 text-blue-pale;
        }
        
        .toast-info {
            @apply bg-blue-dark border-blue-light text-blue-pale;
        }
        
        /* Badge styles */
        .badge {
            @apply px-2.5 py-0.5 rounded-full text-xs font-medium;
        }
        
        .badge-success {
            @apply bg-green-500/20 text-green-500 border border-green-500/30;
        }
        
        .badge-warning {
            @apply bg-yellow-500/20 text-yellow-500 border border-yellow-500/30;
        }
        
        .badge-error {
            @apply bg-red-500/20 text-red-500 border border-red-500/30;
        }
        
        /* Custom animation for page transitions */
        .page-enter {
            opacity: 0;
            transform: translateY(1rem);
        }
        
        .page-enter-active {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.3s, transform 0.3s;
        }
        
        /* Print optimizations */
        @media print {
            body {
                background: white;
                color: black;
            }
            
            .no-print {
                display: none !important;
            }
            
            .print-only {
                display: block !important;
            }
            
            .card, .custom-table {
                box-shadow: none !important;
                border: 1px solid #ddd !important;
            }

            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }

            body {
                display: flex;
                flex-direction: column;
            }

            main {
                flex: 1;
            }

        }
        
        /* Responsive improvements */
        @media (max-width: 640px) {
            .custom-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-deep to-blue-dark min-h-screen text-blue-pale font-sans min-h-screen flex flex-col">
    <!-- App-wide toast notification container -->
    <div id="toast-container" class="fixed top-4 right-4 z-50 space-y-4" x-data="{ toasts: [] }" @toast.window="
        toasts.push({id: Date.now(), message: $event.detail.message, type: $event.detail.type || 'info'});
        setTimeout(() => { toasts = toasts.filter(t => t.id !== $event.detail.id) }, 5000)">
        <template x-for="toast in toasts" :key="toast.id">
            <div 
                x-show="toast" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-100"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-2"
                class="toast" 
                :class="{
                    'toast-success': toast.type === 'success',
                    'toast-error': toast.type === 'error',
                    'toast-info': toast.type === 'info'
                }"
            >
                <div class="flex items-center">
                    <template x-if="toast.type === 'success'">
                        <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </template>
                    <template x-if="toast.type === 'error'">
                        <svg class="w-5 h-5 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </template>
                    <template x-if="toast.type === 'info'">
                        <svg class="w-5 h-5 mr-3 text-blue-light" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </template>
                    <span x-text="toast.message"></span>
                    <button 
                        @click="toasts = toasts.filter(t => t.id !== toast.id)" 
                        class="ml-auto text-blue-light hover:text-blue-pale">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </template>
    </div>

    <!-- Loading overlay -->
    <div 
        id="loading-overlay" 
        class="fixed inset-0 bg-blue-deep/70 flex items-center justify-center z-50 hidden"
        x-data="{ show: false }"
        x-show="show"
        x-transition:enter="transition-opacity ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @loading.window="show = $event.detail.show"
    >
        <div class="text-center bg-blue-dark p-8 rounded-lg shadow-custom animate-pulse-slow">
            <div class="loader mb-4 mx-auto"></div>
            <p class="text-blue-pale">Loading...</p>
        </div>
    </div>

    <!-- Page content -->
    <div class="container mx-auto px-4 py-8 animate-slide-in">
        @yield('content')
    </div>
    
    <!-- Footer -->
    <footer class="fixed bottom-0 w-full bg-blue-deep text-white text-center p-4 bg-blue-deep/60 backdrop-blur-sm mt-auto py-6 border-t border-blue-medium/30">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-blue-light text-sm mb-4 md:mb-0">
                    &copy; {{ date('Y') }} Student Management System. All rights reserved.
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-light hover:text-blue-pale transition-colors">Help</a>
                    <a href="#" class="text-blue-light hover:text-blue-pale transition-colors">Privacy Policy</a>
                    <a href="#" class="text-blue-light hover:text-blue-pale transition-colors">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript Helper Functions -->
    <script>
        // Helper function to show toast notifications
        function showToast(message, type = 'info') {
            window.dispatchEvent(new CustomEvent('toast', {
                detail: {
                    id: Date.now(),
                    message: message,
                    type: type
                }
            }));
        }
        
        // Helper function to show/hide loading overlay
        function setLoading(isLoading) {
            window.dispatchEvent(new CustomEvent('loading', {
                detail: {
                    show: isLoading
                }
            }));
        }
        
        // Add confirm dialog for delete actions
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('[data-confirm]').forEach(element => {
                element.addEventListener('click', function(e) {
                    if (!confirm(this.dataset.confirm || 'Are you sure?')) {
                        e.preventDefault();
                    }
                });
            });
            
            // Form validation enhancement
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function() {
                    setLoading(true);
                });
            });
            
            // Flash messages from backend
            if (window.flashMessage) {
                showToast(window.flashMessage.message, window.flashMessage.type);
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>