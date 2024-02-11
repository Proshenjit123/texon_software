<x-main-dashboard>
    @section('title', $title)
    <script src="{{ asset('js/npm_chart.js') }}"></script>
    <div id="main-content">
        <div class="">
            <div class="row">
                <div class="col-8 shadow-sm card" style="height:200px ">
                    <div class="m-4 d-flex justify-content-between">
                        <div>
                            <h3>Hello,User Name</h3>
                            <p>Wellcome Back,Email validator Portal</p>
                            <button class="btn btn-secondary mt-3">Add Card +</button>
                        </div>
                        <div>
                            <h4 class="">
                                <i class="bi icon-color pe-2 fs-5 bi-credit-card-2-back"></i>
                                {{ trans('site.dashboard.credits-available') }}
                            </h4>
                            <span class="fw-semibold fs-1 mt-3">{{ $data['CreditAvailable'] }}</span>
                        </div>
                    </div>

                </div>
                
                <div class="col-3 bg-white ms-4">
                    <div class="row">
                        <div class="d-flex hideDomainCheckOnMobile">
                            <form id="formIDCheckEmail" method="post">
                                {{-- <div class="d-flex flex-nowrap">
                                    <input type="email" name="emailChecks" id="emailChecks"
                                        class=" h-100 form-control position-relative"
                                        placeholder="Single Email Checker">
                                    <span id="email_check_status" class="position-absolute"></span>
                                    <button id="email_check" class="btn btn-primary btn-md h-100 lh-sm text-nowrap ms-2"
                                        data-url="{{ route('email-cleaner-check') }}"
                                        type="submit">{{ trans('site.Emailupload.button') }}</button>
                                </div> --}}
                                <div class="input-group" style="height: 50px; width: 330px;">
                                    <input type="email" class="form-control" id="emailChecks" name="emailChecks" placeholder="Single Email Checker">
                                    <span class="input-group-text" style="zoom: 1">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text mt-3">
                        {{-- <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Psat & bulk email list here e.g..."></textarea>
    
                            </textarea> --}}
                        <input type="text" class="form-control w-55%" placeholder="Paste & bulk email list here e.g"
                            style="height: 100px;">
                    </div>
                    <div class=" mt-3">
                        <div class="input-group">
                        
                        <input class="form-control" name="file" id="file" type=""
                            accept=".csv, .xlsx, .txt" placeholder="Upload Email List For Validate"
                            style="height: 100px;">
                            <label for="file" class="input-group-text">{{ trans('site.Emailupload.labal') }}
                                <span class="d-flex justify-content-center"><i class="bi bi-upload"></i></span>
                            </label>
                        
                        </div>
                            
                        <center>
                            <button type="button" id="UploadFile" class="btn btn-primary me-1 mb-3 mt-4 p-2 px-4">
                                
                                {{ trans('site.Emailupload.button') }}
                            </button>
                        </center>
                    </div>
                </div>
            </div>
            
            <div class="row col-8">

                <div class="col-12 d-flex">
                    <div class="col-4 shadow-sm card" style="height: 160px">
                        <div class="m-4 d-flex">
                            <div>
                                <span class="fw-semibold fs-1">{{ $data['UploadFile'] }}</span>
                                <h4 class="mt-3">
                                    
                                    {{ trans('site.dashboard.uploaded-file') }}
                                </h4>
                            </div>
                            <div class="ms-auto">
                                <i class="bi icon-color pe-2 fs-5 bi-file-earmark-break-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 shadow-sm card ms-3" style="height: 160px">
                        <div class="m-4 d-flex">
                            <div>
                                <span class="fw-semibold fs-1">{{ $data['UploadFile'] }}</span>
                                <h4 class="mt-3">
                                    
                                    {{ trans('site.dashboard.active-auto-responders') }}
                                </h4>
                            </div>
                            <div class="ms-auto">
                                <i class="bi icon-color pe-2 fs-5 bi-ev-front"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 shadow-sm card ms-3" style="height: 160px">
                        <div class="m-4 d-flex">
                            <div>
                                <span class="fw-semibold fs-1">{{ $data['Payment'] }}</span>
                                <h4 class="mt-3">
                                    
                                    {{ trans('site.dashboard.payment-received') }}
                                </h4>
                            </div>
                            <div class="ms-auto">
                                <i class="bi icon-color pe-2 fs-5 bi-currency-dollar"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

            {{-- <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>{{ trans('site.dashboard.dashboard-title') }}</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">{{ pageTitle()[1] }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ pageTitle()[2] }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div> --}}

            {{-- <section class="section">
                <div class="row">
                    <div class="col-12 col-xl-3">
                        <div class="card p-4 shadow-sm d-flex align-item-center">
                            <div class="card-header">
                                <h4>
                                    <i class="bi icon-color pe-2 fs-5 bi-credit-card-2-back"></i>
                                   {{ trans('site.dashboard.credits-available') }}
                                </h4>
                            </div>
                            <div class="card-body">
                                <span class="fw-semibold fs-1">{{ $data['CreditAvailable'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3">
                        <div class="card p-4 shadow-sm d-flex align-item-center">
                            <div class="card-header">
                                <h4>
                                    <i class="bi icon-color pe-2 fs-5 bi-file-earmark-break-fill"></i>
                                  {{ trans('site.dashboard.uploaded-file') }}
                                </h4>
                            </div>
                            <div class="card-body">
                                <span class="fw-semibold fs-1">{{ $data['UploadFile'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3">
                        <div class="card p-4 shadow-sm d-flex align-item-center">
                            <div class="card-header">
                                <h4>
                                    <i class="bi icon-color pe-2 fs-5 bi-ev-front"></i>
                                    {{ trans('site.dashboard.active-auto-responders') }}
                                </h4>
                            </div>
                            <div class="card-body">
                                <span class="fw-semibold fs-1">{{ $data['AutoResponders'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3">
                        <div class="card p-4 shadow-sm d-flex align-item-center">
                            <div class="card-header">
                                <h4>
                                    <i class="bi icon-color pe-2 fs-5 bi-currency-dollar"></i>
                                    {{ trans('site.dashboard.payment-received') }}
                                </h4>
                            </div>
                            <div class="card-body">
                                <span class="fw-semibold fs-1">{{ $data['Payment'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- <section class="section">
                <div class="row mt-2 mb-5">
                    <div class="">
                        <h5>Validate Box</h5>
                    </div>
                    <div class="d-flex hideDomainCheckOnMobile">
                        <form id="formIDCheckEmail" method="post">
                            <div class="d-flex flex-nowrap">
                                <input type="email" name="emailChecks" id="emailChecks"
                                    class=" h-100 form-control position-relative"
                                    placeholder="Check validity of an email">
                                <span id="email_check_status" class="position-absolute"></span>
                                <button id="email_check" class="btn btn-primary btn-md h-100 lh-sm text-nowrap ms-2"
                                    data-url="{{ route('email-cleaner-check') }}"
                                    type="submit">{{ trans('site.Emailupload.button') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row d-flex">

                    <!-- File Upload Section -->
                    <div class="col-md-6 mt-3">
                        <label for="formFileLg" class="form-label">{{ trans('site.Emailupload.labal') }}</label>
                        <input class="form-control" name="file" id="file" type="file"
                            accept=".csv, .xlsx, .txt" placeholder="Upload Email List For Validate">
                        <center>
                            <button type="button" id="UploadFile" class="btn btn-primary me-1 mb-3 mt-4 p-2 px-4">
                                {{ trans('site.Emailupload.button') }}
                            </button>
                        </center>
                    </div>

                </div>
            </section> --}}


            @if (Auth::user()->role == 'admin')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <canvas id="paymentAnalysisChart" style="max-width: 600px;"></canvas>
                        </div>
                        <div class="col-md-6">
                            <canvas id="userChart"></canvas>
                        </div>
                    </div>
                </div>
                <script>
                    function chartjs() {
                        var colortheme = $('body').attr('data-theme-color');
                        // Retrieve the user data from the view
                        var userDataJson = {!! $data['userAnalysisChart'] !!};
                        // Retrieve the user data from the view
                        var roles = userDataJson.roles;
                        var userCountByRole = userDataJson.userCountByRole;

                        // Prepare chart data
                        var chartData = {
                            labels: roles,
                            datasets: [{
                                data: Object.values(userCountByRole),
                                backgroundColor: [colortheme,
                                    '#607080'
                                ], // Set the desired colors here for user and admin respectively
                                borderWidth: 1
                            }]
                        };

                        // Set the width and height of the chart
                        var chartWidth = 600; // Set the desired width here
                        var chartHeight = 400; // Set the desired height here

                        // Create the chart
                        var ctx = document.getElementById('userChart').getContext('2d');
                        ctx.canvas.width = chartWidth; // Set the canvas width
                        ctx.canvas.height = chartHeight; // Set the canvas height
                        var chart = new Chart(ctx, {
                            type: 'pie',
                            data: chartData,
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'bottom',
                                        labels: {
                                            font: {
                                                size: 18
                                            }
                                        }
                                    }
                                },
                                animation: {
                                    animateRotate: true, // Enable rotation animation
                                    animateScale: true, // Enable scale animation
                                    duration: 1000, // Set the animation duration in milliseconds
                                    easing: 'easeOutQuart' // Set the easing function for the animation
                                }
                            }
                        });

                        //
                        $.ajax({
                            type: "post",
                            url: "{{ route('paymentAnalysis') }}",
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                            },
                            success: function(response) {
                                var paymentData = response;

                                const dates = paymentData.map(item => item.created_at);
                                const totalPayments = paymentData.map(item => item.amt);

                                var backgroundColors = dates.map(() =>
                                    colortheme); // Set the desired color here for payment analysis
                                var borderColors = dates.map(() =>
                                    colortheme); // Set the desired color here for payment analysis

                                var ctx = document.getElementById('paymentAnalysisChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: dates,
                                        datasets: [{
                                            label: 'Total Payment',
                                            data: totalPayments,
                                            backgroundColor: backgroundColors,
                                            borderColor: borderColors,
                                            pointBorderColor: '#151d3d',
                                            pointBackgroundColor: '#607080',
                                            pointHoverBackgroundColor: '#fff',
                                            pointHoverBorderColor: 'rgba(220,220,220,1)',
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        maintainAspectRatio: false,
                                        scales: {
                                            x: {
                                                display: true,
                                                title: {
                                                    display: true,
                                                    text: 'Date',
                                                    color: '#151d3d' // Set the color for the title
                                                },
                                                ticks: {
                                                    color: '#151d3d', // Set the color for the tick labels
                                                }
                                            },
                                            y: {
                                                display: true,
                                                title: {
                                                    display: true,
                                                    text: 'Total Payment',
                                                    color: '#151d3d' // Set the color for the title
                                                },
                                                ticks: {
                                                    beginAtZero: true,
                                                    callback: function(value, index, values) {
                                                        return '$' + value; // Add currency symbol
                                                    }
                                                }
                                            }
                                        }
                                    }
                                });
                            }
                        });
                    }
                    setTimeout(chartjs, 1000);
                </script>
            @endif
        </div>
    </div>
</x-main-dashboard>
