@extends('backend.layouts.master')
@section('title','E-SHOP || DASHBOARD')
@section('main-content')

<!-- Add Tailwind CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="container mx-auto px-4 py-6">
    @include('backend.layouts.notification')

    <!-- Page Heading -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2 md:mb-0">Dashboard Overview</h1>
        <div class="text-sm text-gray-500">Last updated: {{ now()->format('F j, Y') }}</div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <!-- Category Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 transition-all duration-200 hover:shadow-md">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-full">
                    <i class="fas fa-sitemap text-blue-600 text-lg"></i>
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-500">Categories</div>
                    <div class="text-xl font-semibold text-gray-900">{{\App\Models\Category::countActiveCategory()}}</div>
                </div>
            </div>
        </div>

        <!-- Products Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 transition-all duration-200 hover:shadow-md">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-green-100 p-3 rounded-full">
                    <i class="fas fa-cubes text-green-600 text-lg"></i>
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-500">Products</div>
                    <div class="text-xl font-semibold text-gray-900">{{\App\Models\Product::countActiveProduct()}}</div>
                </div>
            </div>
        </div>

        <!-- Order Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 transition-all duration-200 hover:shadow-md">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-indigo-100 p-3 rounded-full">
                    <i class="fas fa-clipboard-list text-indigo-600 text-lg"></i>
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-500">Orders</div>
                    <div class="text-xl font-semibold text-gray-900">{{\App\Models\Order::countActiveOrder()}}</div>
                </div>
            </div>
        </div>

        <!-- Posts Card -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-4 transition-all duration-200 hover:shadow-md">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-yellow-100 p-3 rounded-full">
                    <i class="fas fa-newspaper text-yellow-600 text-lg"></i>
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-500">Posts</div>
                    <div class="text-xl font-semibold text-gray-900">{{\App\Models\Post::countActivePost()}}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Earnings Chart -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 lg:col-span-2">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-2 sm:mb-0">Earnings Overview</h2>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-sm bg-blue-100 text-blue-600 rounded-full">Monthly</button>
                    <button class="px-3 py-1 text-sm text-gray-500 hover:bg-gray-100 rounded-full">Yearly</button>
                </div>
            </div>
            <div class="chart-area" style="height: 300px;">
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>

        <!-- Users Chart -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-6">User Registrations</h2>
            <div id="pie_chart" style="height: 300px;"></div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Recent Activity</h2>
        <div class="space-y-4">
            <!-- Activity Item -->
            <div class="flex items-start">
                <div class="flex-shrink-0 bg-purple-100 p-2 rounded-full">
                    <i class="fas fa-clock text-purple-600 text-sm"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">New order received</p>
                    <p class="text-sm text-gray-500">Order #1234 from John Doe</p>
                    <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                </div>
            </div>

            <!-- Activity Item -->
            <div class="flex items-start">
                <div class="flex-shrink-0 bg-green-100 p-2 rounded-full">
                    <i class="fas fa-check-circle text-green-600 text-sm"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">Payment received</p>
                    <p class="text-sm text-gray-500">$125.00 for order #1234</p>
                    <p class="text-xs text-gray-400 mt-1">5 hours ago</p>
                </div>
            </div>

            <!-- Activity Item -->
            <div class="flex items-start">
                <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full">
                    <i class="fas fa-plus-circle text-blue-600 text-sm"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">New product added</p>
                    <p class="text-sm text-gray-500">"Premium Headphones" by admin</p>
                    <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Add Google Charts loader -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- Add Axios CDN -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script type="text/javascript">
    // Pie Chart
    var analytics = <?php echo $users; ?>;

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable(analytics);
        var options = {
            title: 'Last 7 Days registered user',
            pieHole: 0.4,
            colors: ['#3B82F6', '#10B981', '#F59E0B', '#EF4444', '#8B5CF6'],
            chartArea: {width: '90%', height: '80%'},
            legend: {position: 'bottom'},
            titleTextStyle: {
                color: '#4B5563',
                fontSize: 14
            }
        };
        var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
        chart.draw(data, options);

        // Make chart responsive
        window.addEventListener('resize', function() {
            chart.draw(data, options);
        });
    }

    // Line Chart
    const url = "{{route('product.order.income')}}";

    axios.get(url)
        .then(function (response) {
            const data_keys = Object.keys(response.data);
            const data_values = Object.values(response.data);

            var ctx = document.getElementById('myAreaChart').getContext('2d');
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data_keys,
                    datasets: [{
                        label: "Earnings",
                        backgroundColor: "rgba(59, 130, 246, 0.05)",
                        borderColor: "rgba(59, 130, 246, 1)",
                        pointBackgroundColor: "rgba(59, 130, 246, 1)",
                        pointBorderColor: "#fff",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(59, 130, 246, 1)",
                        pointHoverBorderColor: "rgba(59, 130, 246, 1)",
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        data: data_values,
                        fill: true,
                        tension: 0.3
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: "#fff",
                            bodyColor: "#4B5563",
                            titleColor: "#111827",
                            borderColor: "#E5E7EB",
                            borderWidth: 1,
                            padding: 12,
                            displayColors: false,
                            callbacks: {
                                label: function(context) {
                                    return '$' + context.parsed.y.toLocaleString();
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            grid: {
                                color: "#F3F4F6"
                            },
                            ticks: {
                                callback: function(value) {
                                    return '$' + value.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });

            // Make chart responsive
            window.addEventListener('resize', function() {
                myLineChart.resize();
            });
        })
        .catch(function (error) {
            console.log(error)
        });
</script>

@endsection
