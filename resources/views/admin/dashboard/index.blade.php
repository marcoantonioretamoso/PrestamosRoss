@extends('admin.layout.app')

@section('content')
    <!-- Page content -->
    <main class="p-6">
            <!-- Dashboard Section -->
            <div id="dashboard-section" class="space-y-6">
                <!-- Header -->
                <div>
                    <h1 class="text-3xl font-bold text-foreground">Dashboard</h1>
                    <p class="text-muted-foreground">Resumen general de tu situación financiera</p>
                </div>

                <!-- Métricas principales -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-sm font-medium">Total Ingresos</h3>
                            <i data-lucide="trending-up" class="h-4 w-4 text-chart-1"></i>
                        </div>
                        <div class="text-2xl font-bold text-chart-1">$45,000.00</div>
                        <p class="text-xs text-muted-foreground">+12% desde el mes pasado</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-sm font-medium">Total Egresos</h3>
                            <i data-lucide="trending-down" class="h-4 w-4 text-chart-4"></i>
                        </div>
                        <div class="text-2xl font-bold text-chart-4">$28,000.00</div>
                        <p class="text-xs text-muted-foreground">-5% desde el mes pasado</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-sm font-medium">Préstamos Activos</h3>
                            <i data-lucide="credit-card" class="h-4 w-4 text-chart-2"></i>
                        </div>
                        <div class="text-2xl font-bold">3</div>
                        <p class="text-xs text-muted-foreground">$15,000.00 pendientes</p>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-sm font-medium">Balance General</h3>
                            <i data-lucide="dollar-sign" class="h-4 w-4 text-chart-3"></i>
                        </div>
                        <div class="text-2xl font-bold text-chart-3">$17,000.00</div>
                        <p class="text-xs text-muted-foreground">Ingresos - Egresos</p>
                    </div>
                </div>

                <!-- Acciones rápidas -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-semibold mb-4">Acciones Rápidas</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <button onclick="showSection('ingresos')" class="h-20 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex flex-col items-center justify-center space-y-2">
                            <i data-lucide="plus" class="h-6 w-6"></i>
                            <span>Registrar Ingreso</span>
                        </button>
                        <button onclick="showSection('egresos')" class="h-20 border border-gray-300 hover:bg-gray-50 rounded-lg flex flex-col items-center justify-center space-y-2">
                            <i data-lucide="plus" class="h-6 w-6"></i>
                            <span>Registrar Egreso</span>
                        </button>
                        <button onclick="showSection('prestamos')" class="h-20 bg-gray-200 hover:bg-gray-300 rounded-lg flex flex-col items-center justify-center space-y-2">
                            <i data-lucide="eye" class="h-6 w-6"></i>
                            <span>Ver Préstamos</span>
                        </button>
                    </div>
                </div>

                <!-- Actividad reciente -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                            <i data-lucide="trending-up" class="h-5 w-5 mr-2 text-chart-1"></i>
                            Ingresos Recientes
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium">Venta de productos</p>
                                    <p class="text-sm text-muted-foreground">2024-01-15</p>
                                </div>
                                <div class="text-chart-1 font-semibold">+$5,000.00</div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium">Servicios de consultoría</p>
                                    <p class="text-sm text-muted-foreground">2024-01-14</p>
                                </div>
                                <div class="text-chart-1 font-semibold">+$3,000.00</div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium">Comisiones</p>
                                    <p class="text-sm text-muted-foreground">2024-01-13</p>
                                </div>
                                <div class="text-chart-1 font-semibold">+$1,200.00</div>
                            </div>
                        </div>
                        <button onclick="showSection('ingresos')" class="w-full mt-4 px-4 py-2 border border-gray-300 hover:bg-gray-50 rounded-md">
                            Ver todos los ingresos
                        </button>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <h3 class="text-lg font-semibold mb-4 flex items-center">
                            <i data-lucide="trending-down" class="h-5 w-5 mr-2 text-chart-4"></i>
                            Egresos Recientes
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium">Alquiler oficina</p>
                                    <p class="text-sm text-muted-foreground">2024-01-15</p>
                                </div>
                                <div class="text-chart-4 font-semibold">-$2,000.00</div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium">Suministros</p>
                                    <p class="text-sm text-muted-foreground">2024-01-14</p>
                                </div>
                                <div class="text-chart-4 font-semibold">-$800.00</div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium">Servicios públicos</p>
                                    <p class="text-sm text-muted-foreground">2024-01-13</p>
                                </div>
                                <div class="text-chart-4 font-semibold">-$450.00</div>
                            </div>
                        </div>
                        <button onclick="showSection('egresos')" class="w-full mt-4 px-4 py-2 border border-gray-300 hover:bg-gray-50 rounded-md">
                            Ver todos los egresos
                        </button>
                    </div>
                </div>
            </div>

            {{-- <!-- Ingresos Section -->
            <div id="ingresos-section" class="space-y-6 hidden">
                <div>
                    <h1 class="text-3xl font-bold text-foreground">Ingresos</h1>
                    <p class="text-muted-foreground">Gestiona todos tus ingresos</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <button onclick="showIngresosForm()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md flex items-center">
                        <i data-lucide="plus" class="h-4 w-4 mr-2"></i>
                        Nuevo Ingreso
                    </button>
                    <button onclick="showIngresosHistorial()" class="border border-gray-300 hover:bg-gray-50 px-4 py-2 rounded-md flex items-center">
                        <i data-lucide="history" class="h-4 w-4 mr-2"></i>
                        Ver Historial
                    </button>
                </div>

                <!-- Lista de ingresos -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">Lista de Ingresos</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b">
                                        <th class="text-left py-2">Fecha</th>
                                        <th class="text-left py-2">Descripción</th>
                                        <th class="text-left py-2">Categoría</th>
                                        <th class="text-right py-2">Monto</th>
                                        <th class="text-center py-2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="py-3">2024-01-15</td>
                                        <td class="py-3">Venta de productos</td>
                                        <td class="py-3">Ventas</td>
                                        <td class="py-3 text-right text-chart-1 font-semibold">$5,000.00</td>
                                        <td class="py-3 text-center">
                                            <button class="text-blue-600 hover:text-blue-800">Ver</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="py-3">2024-01-14</td>
                                        <td class="py-3">Servicios de consultoría</td>
                                        <td class="py-3">Servicios</td>
                                        <td class="py-3 text-right text-chart-1 font-semibold">$3,000.00</td>
                                        <td class="py-3 text-center">
                                            <button class="text-blue-600 hover:text-blue-800">Ver</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">2024-01-13</td>
                                        <td class="py-3">Comisiones</td>
                                        <td class="py-3">Comisiones</td>
                                        <td class="py-3 text-right text-chart-1 font-semibold">$1,200.00</td>
                                        <td class="py-3 text-center">
                                            <button class="text-blue-600 hover:text-blue-800">Ver</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Egresos Section -->
            <div id="egresos-section" class="space-y-6 hidden">
                <div>
                    <h1 class="text-3xl font-bold text-foreground">Egresos</h1>
                    <p class="text-muted-foreground">Gestiona todos tus gastos</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md flex items-center">
                        <i data-lucide="plus" class="h-4 w-4 mr-2"></i>
                        Nuevo Egreso
                    </button>
                    <button class="border border-gray-300 hover:bg-gray-50 px-4 py-2 rounded-md flex items-center">
                        <i data-lucide="history" class="h-4 w-4 mr-2"></i>
                        Ver Historial
                    </button>
                </div>

                <!-- Lista de egresos -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">Lista de Egresos</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b">
                                        <th class="text-left py-2">Fecha</th>
                                        <th class="text-left py-2">Descripción</th>
                                        <th class="text-left py-2">Categoría</th>
                                        <th class="text-right py-2">Monto</th>
                                        <th class="text-center py-2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="py-3">2024-01-15</td>
                                        <td class="py-3">Alquiler oficina</td>
                                        <td class="py-3">Alquiler</td>
                                        <td class="py-3 text-right text-chart-4 font-semibold">$2,000.00</td>
                                        <td class="py-3 text-center">
                                            <button class="text-blue-600 hover:text-blue-800">Ver</button>
                                        </td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="py-3">2024-01-14</td>
                                        <td class="py-3">Suministros</td>
                                        <td class="py-3">Materiales</td>
                                        <td class="py-3 text-right text-chart-4 font-semibold">$800.00</td>
                                        <td class="py-3 text-center">
                                            <button class="text-blue-600 hover:text-blue-800">Ver</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">2024-01-13</td>
                                        <td class="py-3">Servicios públicos</td>
                                        <td class="py-3">Servicios</td>
                                        <td class="py-3 text-right text-chart-4 font-semibold">$450.00</td>
                                        <td class="py-3 text-center">
                                            <button class="text-blue-600 hover:text-blue-800">Ver</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Préstamos Section -->
            <div id="prestamos-section" class="space-y-6 hidden">
                <div>
                    <h1 class="text-3xl font-bold text-foreground">Préstamos</h1>
                    <p class="text-muted-foreground">Gestiona todos tus préstamos</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md flex items-center">
                        <i data-lucide="plus" class="h-4 w-4 mr-2"></i>
                        Nuevo Préstamo
                    </button>
                    <button class="border border-gray-300 hover:bg-gray-50 px-4 py-2 rounded-md flex items-center">
                        <i data-lucide="history" class="h-4 w-4 mr-2"></i>
                        Préstamos Pagados
                    </button>
                </div>

                <!-- Lista de préstamos -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">Préstamos Activos</h3>
                        <div class="space-y-4">
                            <div class="border border-gray-200 rounded-lg p-4 cursor-pointer hover:bg-gray-50" onclick="showPrestamoDetalle(1)">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h4 class="font-semibold">Préstamo Personal - Juan Pérez</h4>
                                        <p class="text-sm text-muted-foreground">Fecha: 2024-01-01</p>
                                    </div>
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Activo</span>
                                </div>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                    <div>
                                        <p class="text-muted-foreground">Monto Total</p>
                                        <p class="font-semibold">$10,000.00</p>
                                    </div>
                                    <div>
                                        <p class="text-muted-foreground">Pagado</p>
                                        <p class="font-semibold text-chart-1">$3,000.00</p>
                                    </div>
                                    <div>
                                        <p class="text-muted-foreground">Pendiente</p>
                                        <p class="font-semibold text-chart-4">$7,000.00</p>
                                    </div>
                                    <div>
                                        <p class="text-muted-foreground">Progreso</p>
                                        <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                            <div class="bg-chart-1 h-2 rounded-full" style="width: 30%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border border-gray-200 rounded-lg p-4 cursor-pointer hover:bg-gray-50" onclick="showPrestamoDetalle(2)">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h4 class="font-semibold">Préstamo Comercial - María García</h4>
                                        <p class="text-sm text-muted-foreground">Fecha: 2024-01-10</p>
                                    </div>
                                    <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Activo</span>
                                </div>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                                    <div>
                                        <p class="text-muted-foreground">Monto Total</p>
                                        <p class="font-semibold">$5,000.00</p>
                                    </div>
                                    <div>
                                        <p class="text-muted-foreground">Pagado</p>
                                        <p class="font-semibold text-chart-1">$1,000.00</p>
                                    </div>
                                    <div>
                                        <p class="text-muted-foreground">Pendiente</p>
                                        <p class="font-semibold text-chart-4">$4,000.00</p>
                                    </div>
                                    <div>
                                        <p class="text-muted-foreground">Progreso</p>
                                        <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                            <div class="bg-chart-1 h-2 rounded-full" style="width: 20%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detalle de Préstamo -->
            <div id="prestamo-detalle-section" class="space-y-6 hidden">
                <div class="flex items-center space-x-4">
                    <button onclick="showSection('prestamos')" class="text-blue-600 hover:text-blue-800">
                        <i data-lucide="arrow-left" class="h-5 w-5"></i>
                    </button>
                    <div>
                        <h1 class="text-3xl font-bold text-foreground">Detalle del Préstamo</h1>
                        <p class="text-muted-foreground">Historial de pagos y detalles</p>
                    </div>
                </div>

                <!-- Información del préstamo -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                    <h3 class="text-lg font-semibold mb-4">Información General</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <p class="text-sm text-muted-foreground">Cliente</p>
                            <p class="font-semibold">Juan Pérez</p>
                        </div>
                        <div>
                            <p class="text-sm text-muted-foreground">Monto Total</p>
                            <p class="font-semibold">$10,000.00</p>
                        </div>
                        <div>
                            <p class="text-sm text-muted-foreground">Fecha de Inicio</p>
                            <p class="font-semibold">2024-01-01</p>
                        </div>
                    </div>
                </div>

                <!-- Historial de pagos -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Historial de Pagos</h3>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md flex items-center">
                                <i data-lucide="plus" class="h-4 w-4 mr-2"></i>
                                Registrar Pago
                            </button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b">
                                        <th class="text-left py-2">Fecha</th>
                                        <th class="text-left py-2">Monto</th>
                                        <th class="text-left py-2">Método</th>
                                        <th class="text-left py-2">Notas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="py-3">2024-01-15</td>
                                        <td class="py-3 text-chart-1 font-semibold">$1,000.00</td>
                                        <td class="py-3">Transferencia</td>
                                        <td class="py-3">Pago mensual</td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="py-3">2024-01-10</td>
                                        <td class="py-3 text-chart-1 font-semibold">$2,000.00</td>
                                        <td class="py-3">Efectivo</td>
                                        <td class="py-3">Pago inicial</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Historiales Section -->
            <div id="historiales-section" class="space-y-6 hidden">
                <div>
                    <h1 class="text-3xl font-bold text-foreground">Historiales</h1>
                    <p class="text-muted-foreground">Historial consolidado de todas las transacciones</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">Actividad Reciente</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between py-2 border-b">
                                <div class="flex items-center space-x-3">
                                    <i data-lucide="trending-up" class="h-5 w-5 text-chart-1"></i>
                                    <div>
                                        <p class="font-medium">Venta de productos</p>
                                        <p class="text-sm text-muted-foreground">Ingreso - 2024-01-15</p>
                                    </div>
                                </div>
                                <div class="text-chart-1 font-semibold">+$5,000.00</div>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b">
                                <div class="flex items-center space-x-3">
                                    <i data-lucide="trending-down" class="h-5 w-5 text-chart-4"></i>
                                    <div>
                                        <p class="font-medium">Alquiler oficina</p>
                                        <p class="text-sm text-muted-foreground">Egreso - 2024-01-15</p>
                                    </div>
                                </div>
                                <div class="text-chart-4 font-semibold">-$2,000.00</div>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b">
                                <div class="flex items-center space-x-3">
                                    <i data-lucide="credit-card" class="h-5 w-5 text-chart-2"></i>
                                    <div>
                                        <p class="font-medium">Pago préstamo - Juan Pérez</p>
                                        <p class="text-sm text-muted-foreground">Préstamo - 2024-01-15</p>
                                    </div>
                                </div>
                                <div class="text-chart-1 font-semibold">+$1,000.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reportes Section -->
            <div id="reportes-section" class="space-y-6 hidden">
                <div>
                    <h1 class="text-3xl font-bold text-foreground">Reportes</h1>
                    <p class="text-muted-foreground">Análisis y reportes financieros</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <h3 class="text-lg font-semibold mb-4">Resumen Mensual</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span>Total Ingresos</span>
                                <span class="text-chart-1 font-semibold">$45,000.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Total Egresos</span>
                                <span class="text-chart-4 font-semibold">$28,000.00</span>
                            </div>
                            <div class="flex justify-between border-t pt-2">
                                <span class="font-semibold">Balance Neto</span>
                                <span class="text-chart-3 font-semibold">$17,000.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                        <h3 class="text-lg font-semibold mb-4">Estado de Préstamos</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span>Préstamos Activos</span>
                                <span class="font-semibold">3</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Monto Total Prestado</span>
                                <span class="font-semibold">$15,000.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Monto Recuperado</span>
                                <span class="text-chart-1 font-semibold">$4,000.00</span>
                            </div>
                            <div class="flex justify-between border-t pt-2">
                                <span class="font-semibold">Pendiente de Cobro</span>
                                <span class="text-chart-4 font-semibold">$11,000.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
    </main>
@endsection