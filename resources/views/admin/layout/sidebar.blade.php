<!-- Mobile sidebar overlay -->
    <div id="mobile-sidebar-overlay" class="fixed inset-0 z-50 lg:hidden hidden">
        <div class="fixed inset-0 bg-black/50" onclick="toggleMobileSidebar()"></div>
        <div class="fixed left-0 top-0 h-full w-64 bg-sidebar border-r border-sidebar-border">
            <div class="flex items-center justify-between p-4 border-b border-sidebar-border">
                <h2 class="text-lg font-semibold text-sidebar-foreground">{{ __('system_name') }}</h2>
                <button onclick="toggleMobileSidebar()" class="p-1 hover:bg-gray-100 rounded">
                    <i data-lucide="x" class="h-4 w-4"></i>
                </button>
            </div>
            <nav class="p-4 space-y-2">
                <button onclick="showSection('dashboard')" class="w-full flex items-center px-3 py-2 text-left bg-blue-600 text-white rounded-md">
                    <i data-lucide="home" class="h-4 w-4 mr-3"></i>
                    {{ __('dashboard') }}
                </button>
                <button onclick="showSection('ingresos')" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="trending-up" class="h-4 w-4 mr-3"></i>
                    {{ __('income_section') }}
                </button>
                <button onclick="showSection('egresos')" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="trending-down" class="h-4 w-4 mr-3"></i>
                    {{ __('expense_section') }}
                </button>
                <button onclick="showSection('prestamos')" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="credit-card" class="h-4 w-4 mr-3"></i>
                    {{ __('loans_section') }}
                </button>
                <button onclick="showSection('historiales')" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="history" class="h-4 w-4 mr-3"></i>
                    {{ __('histories_section') }}
                </button>
                <button onclick="showSection('reportes')" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="bar-chart-3" class="h-4 w-4 mr-3"></i>
                    {{ __('report_section') }}
                </button>
            </nav>
        </div>
    </div>

    <!-- Desktop sidebar -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:left-0 lg:z-50 lg:block lg:w-64 lg:bg-sidebar lg:border-r lg:border-sidebar-border">
        <div class="flex flex-col h-full">
            <div class="flex items-center p-6 border-b border-sidebar-border">
                <h2 class="text-xl font-bold text-sidebar-foreground">{{ __('system_name') }}</h2>
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <button onclick="showSection('dashboard')" id="nav-dashboard" class="w-full flex items-center px-3 py-2 text-left bg-blue-600 text-white rounded-md">
                    <i data-lucide="home" class="h-4 w-4 mr-3"></i>
                    {{ __('dashboard') }}
                </button>
                <button onclick="showSection('ingresos')" id="nav-ingresos" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="trending-up" class="h-4 w-4 mr-3"></i>
                    {{ __('income_section') }}
                </button>
                <button onclick="showSection('egresos')" id="nav-egresos" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="trending-down" class="h-4 w-4 mr-3"></i>
                    {{ __('expense_section') }}
                </button>
                <button onclick="showSection('prestamos')" id="nav-prestamos" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="credit-card" class="h-4 w-4 mr-3"></i>
                    {{ __('loans_section') }}
                </button>
                <button onclick="showSection('historiales')" id="nav-historiales" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="history" class="h-4 w-4 mr-3"></i>
                    {{ __('histories_section') }}
                </button>
                <button onclick="showSection('reportes')" id="nav-reportes" class="w-full flex items-center px-3 py-2 text-left hover:bg-gray-100 rounded-md">
                    <i data-lucide="bar-chart-3" class="h-4 w-4 mr-3"></i>
                    {{ __('report_section') }}
                </button>
            </nav>
            <div class="p-4 border-t border-sidebar-border">
                <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="w-full flex items-center px-3 py-2 text-left border border-gray-300 hover:bg-gray-50 rounded-md">
                    <i data-lucide="log-out" class="h-4 w-4 mr-2"></i>
                    {{ __('logout') }}
                </button>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </div>