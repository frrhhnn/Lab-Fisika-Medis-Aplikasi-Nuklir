<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Login - Laboratorium Fisika Medis')</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#10B981',
                        secondary: '#059669',
                        accent: '#F59E0B',
                        neutral: '#F3F4F6',
                        dark: '#111827',
                    }
                }
            }
        }
    </script>
    
    @yield('head')
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100 font-sans">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, #10B981 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative min-h-screen flex items-center justify-center px-4">
        @yield('content')
    </div>
    
    @yield('scripts')
</body>
</html>
