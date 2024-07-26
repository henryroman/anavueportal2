<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            series: [{
                name: 'Live Users',
                data: <?php echo json_encode(array_column($historicUserCounts, 'count'), 512) ?>
            }],
            chart: {
                type: 'bar',
                height: 350,
                zoom: {
                    enabled: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: <?php echo json_encode(array_column($historicUserCounts, 'week'), 512) ?>,
                labels: {
                    rotate: -45
                }
            },
            yaxis: {
                min: 0,
                tickAmount: 5
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
            colors: ['#1E90FF'], 
            fill: {
                type: 'solid',
                colors: ['#1E90FF']
            },
            markers: {
                size: 5,
                colors: ['#1E90FF']
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart-users-bar"), options);
        chart.render();
    });
</script>

<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Security')); ?></li>
                </ol>
            </nav>
            <h2 class="h4"><?php echo e(__('Security')); ?></h2>
            <p class="mb-0"><?php echo e(__('All of your dashboard security settings.')); ?></p>
        </div>
    </div>

    <!-- User Data Card -->
    <?php if(isset($userCount)): ?>
    <div class="d-inline-block w-100 mb-2 container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-12 col-sm-12 col-xl-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <!-- User Count and Details Section -->
                                <div class="col-md-6">
                                    <h2 class="fs-5 fw-normal mb-1">Users</h2>
                                    <h3 class="fw-extrabold mb-1"><?php echo e($userCount); ?></h3>
                                    <small class="d-flex align-items-center">
                                        <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <?php echo e($dateRange); ?>

                                    </small>
                                    <div class="small d-flex mt-1">
                                        <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div><span class="text-success fw-bolder me-1"><?php echo e(number_format($percentageChange, 2)); ?>%</span> Since last year</div>
                                    </div>
                                </div>

                                <!-- Button Section -->
                                <div class="col-md-6 text-end">
                                    <div class="dropdown">
                                        <button class="btn btn-gray-800 d-inline-flex align-items-center dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage Users <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                                            <a class="dropdown-item d-flex align-items-center" href="/new-user">
                                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                    </path>
                                                </svg>
                                                Add User
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                                    </path>
                                                </svg>
                                                Edit Users
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                                                    </path>
                                                    <path
                                                        d="M9 13h2v5a1 1 0 11-2 0v-5z">
                                                    </path>
                                                </svg>
                                                Upload Files
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Preview Security
                                            </a>
                                            <div role="separator" class="dropdown-divider my-1"></div>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Upgrade to Pro
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Removed redundant elements -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <?php if(isset($roleCount)): ?>
    <div class="d-inline-block w-100 mb-4 container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-12 col-sm-12 col-xl-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <!-- Role Count and Details Section -->
                                <div class="col-md-6">
                                    <h2 class="fs-5 fw-normal mb-1">Roles</h2>
                                    <h3 class="fw-extrabold mb-1"><?php echo e($roleCount); ?></h3>
                                    <small class="d-flex align-items-center">
                                        <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Last role created at <?php echo e($lastRoleCreatedAt); ?>

                                    </small>
                                </div>
    
                                <!-- Button Section -->
                                <div class="col-md-6 text-end">
                                    <div class="dropdown">
                                        <button class="btn btn-gray-800 d-inline-flex align-items-center dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage Roles <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                                            <a class="dropdown-item d-flex align-items-center" href="/role-management">
                                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                                    </path>
                                                </svg>
                                                View Roles
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                                    </path>
                                                </svg>
                                                Edit Users
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                                                    </path>
                                                    <path
                                                        d="M9 13h2v5a1 1 0 11-2 0v-5z">
                                                    </path>
                                                </svg>
                                                Upload Files
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Preview Security
                                            </a>
                                            <div role="separator" class="dropdown-divider my-1"></div>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Upgrade to Pro
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Removed redundant elements -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    
    <main class="d-flex justify-content-space-around">
        <div class="p-2">
            <section class="card mt-5 pt-3" style="width: 25rem;">
                <img src="../assets/img/brand/anavuelogo.png" class="card-img-top " alt="logo">
                    <div class="card-body">
                        <h3 style="display:grid; justify-content:center" class="card-title mt-3">Welcome back</h3>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-pill btn-outline-primary" type="button">Primary</button>
                        </div>
                    </div>    
            </section>
        </div>

        <div class="p-2">
            <section class="card mt-5 pt-3" style="width: 25rem;">
                <img src="../assets/img/brand/anavuelogo.png" class="card-img-top " alt="logo">
                    <div class="card-body">
                        <h3 style="display:grid; justify-content:center" class="card-title mt-3">Roles</h3>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-pill btn-outline-primary" type="button">
                                <a href="<?php echo e(route('role-management')); ?>">
                                    Go to
                                </a>
                            </button>
                        </div>
                    </div>    
            </section>
        </div>

        <div class="p-2">
            <section class="card mt-5 pt-3" style="width: 25rem;">
                <img src="../assets/img/brand/anavuelogo.png" class="card-img-top " alt="logo">
                    <div class="card-body">
                        <h3 style="display:grid; justify-content:center" class="card-title mt-3">Users</h3>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-pill btn-outline-primary" href="/user-management" type="button">Primary</button>
                        </div>
                    </div>    
            </section>
        </div>
    </main>
</div>
</body>
</html>
<?php /**PATH C:\Users\augus\Documents\Anavue frontend\anavuePortal\dashboard\resources\views/livewire/security.blade.php ENDPATH**/ ?>