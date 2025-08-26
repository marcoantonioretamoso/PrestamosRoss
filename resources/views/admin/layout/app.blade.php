<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Financiero - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: 'hsl(0 0% 100%)',
                        foreground: 'hsl(222.2 84% 4.9%)',
                        sidebar: 'hsl(210 40% 98%)',
                        'sidebar-foreground': 'hsl(222.2 84% 4.9%)',
                        'sidebar-border': 'hsl(214.3 31.8% 91.4%)',
                        border: 'hsl(214.3 31.8% 91.4%)',
                        'muted-foreground': 'hsl(215.4 16.3% 46.9%)',
                        'chart-1': 'hsl(142 76% 36%)', // Verde para ingresos
                        'chart-2': 'hsl(217 91% 60%)', // Azul para préstamos
                        'chart-3': 'hsl(47 96% 53%)', // Amarillo para balance
                        'chart-4': 'hsl(0 84% 60%)', // Rojo para egresos
                    }
                }
            }
        }
    </script>
</head>
<body class="h-full bg-background">
    @include('admin.layout.sidebar')

    <!-- Main content -->
    <div class="lg:pl-64">
        <!-- Top bar -->
        @include('admin.layout.top-bar')

        @yield('content')
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Navigation functions
        // function showSection(sectionName) {
        //     // Hide all sections
        //     const sections = ['dashboard', 'ingresos', 'egresos', 'prestamos', 'prestamo-detalle', 'historiales', 'reportes'];
        //     sections.forEach(section => {
        //         document.getElementById(section + '-section').classList.add('hidden');
        //     });

        //     // Show selected section
        //     document.getElementById(sectionName + '-section').classList.remove('hidden');

        //     // Update navigation active state
        //     const navButtons = document.querySelectorAll('[id^="nav-"]');
        //     navButtons.forEach(button => {
        //         button.className = 'w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md';
        //     });

        //     const activeButton = document.getElementById('nav-' + sectionName);
        //     if (activeButton) {
        //         activeButton.className = 'w-full flex items-center px-3 py-2 text-left bg-blue-600 text-white rounded-md';
        //     }

        //     // Close mobile sidebar
        //     document.getElementById('mobile-sidebar-overlay').classList.add('hidden');
        // }

        // function showPrestamoDetalle(prestamoId) {
        //     showSection('prestamo-detalle');
        // }

        // function toggleMobileSidebar() {
        //     const overlay = document.getElementById('mobile-sidebar-overlay');
        //     overlay.classList.toggle('hidden');
        // }

        // Initialize icons after DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>
</body>
</html>