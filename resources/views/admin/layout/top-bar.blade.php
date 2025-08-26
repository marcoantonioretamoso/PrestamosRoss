<div class="sticky top-0 z-40 bg-background border-b border-border">
            <div class="flex items-center justify-between px-4 py-3">
                <button onclick="toggleMobileSidebar()" class="lg:hidden p-1 hover:bg-gray-100 rounded">
                    <i data-lucide="menu" class="h-5 w-5"></i>
                </button>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-muted-foreground">{{__('welcome')}}, {{ auth()->user()->name }}</span>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                    <div class="flex items-center space-x-10">
                        <button class="lg:hidden p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100" onclick="toggleSidebar()">
                            <i class="fas fa-bars w-5 h-5"></i>
                        </button>
                        
                        <!--  Agregado selector de cuentas -->
                        <div class="flex items-center space-x-3">
                            <label class="text-sm font-medium text-gray-700">{{__('account')}}:</label>
                            <select id="account-selector" class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent min-w-[200px]" onchange="changeAccount()">
                                <option value="cuenta-principal">Cuenta Principal</option>
                                <option value="cuenta-ahorros">Cuenta de Ahorros</option>
                                <option value="cuenta-negocio">Cuenta de Negocio</option>
                                <option value="cuenta-inversion">Cuenta de Inversión</option>
                            </select>
                        </div>
                    </div>

                    <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hidden lg:flex items-center px-3 py-1 text-sm border border-gray-300 hover:bg-gray-50 rounded-md">
                        <i data-lucide="log-out" class="h-4 w-4 mr-2"></i>
                        {{__('logout')}}
                    </button>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        