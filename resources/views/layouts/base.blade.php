<!DOCTYPE html>
<html lang="en">
<head>

    @php
        $routeName = request()->route()->getName();
    @endphp

    @if(in_array($routeName, ['billing']))
    @endif

    
    
    @if(config('app.is_demo'))
        <link rel="canonical" href="https://themesberg.com/product/laravel/volt-pro-admin-dashboard-template">
        <meta  name="keywords" content="themesberg, updivision, html dashboard, laravel, livewire, laravel livewire, alpine.js, html css dashboard laravel, volt pro laravel admin dashboard, livewire volt dashboard, volt admin, livewire dashboard, livewire admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, volt dashboard bootstrap 5 laravel pro, frontend, responsive bootstrap 5 dashboard, volt dashboard pro, volt laravel bootstrap 5 dashboard"></meta>
        <meta  name="description" content="Fullstack tool featuring Laravel CRUDs, hundreds of UI components and dozens of example pages."></meta>
        <meta  itemprop="name" content="Volt PRO Laravel Admin Dashboard by Themesberg & UPDIVISION"></meta>
        <meta  itemprop="description" content="Fullstack tool featuring Laravel CRUDs, hundreds of UI components and dozens of example pages."></meta>
        <meta  itemprop="image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-laravel/volt-pro-laravel-dashboard.jpg"></meta>
        <meta  name="twitter:card" content="product"></meta>
        <meta  name="twitter:site" content="@themesberg"></meta>
        <meta  name="twitter:title" content="Volt PRO Laravel Admin Dashboard by Themesberg & UPDIVISION"></meta>
        <meta  name="twitter:description" content="Fullstack tool featuring Laravel CRUDs, hundreds of UI components and dozens of example pages."></meta>
        <meta  name="twitter:creator" content="@themesberg"></meta>
        <meta  name="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-laravel/volt-pro-laravel-dashboard.jpg"></meta>
        <meta  property="fb:app_id" content="655968634437471"></meta>
        <meta  property="og:title" content="Volt PRO Laravel Admin Dashboard by Themesberg & UPDIVISION"></meta>
        <meta  property="og:type" content="article"></meta>
        <meta  property="og:url" content="https://themesberg.com/product/laravel/volt-pro-admin-dashboard-template/preview"></meta>
        <meta  property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-laravel/volt-pro-laravel-dashboard.jpg"></meta>
        <meta  property="og:description" content="Fullstack tool featuring Laravel CRUDs, hundreds of UI components and dozens of example pages."></meta>
    @endif

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../../assets/img/favicon/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="../../assets/img/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../../assets/img/favicon/favicon-16x16.png" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="../../assets/img/favicon/favicon.ico">
    <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    @livewireStyles
    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker-bs4.min.css">

    <!-- Apex Charts -->
    <link type="text/css" href="/vendor/apexcharts/apexcharts.css" rel="stylesheet">

    <!-- Pikaday -->
    <link rel="stylesheet" type="text/css" href="/vendor/pikaday/pikaday.css">

    <!-- Quill -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link type="text/css" href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link type="text/css" href="/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Full Calendar -->
    <link type="text/css" href="/vendor/fullcalendar/main.min.css" rel="stylesheet">

    <!-- Dropzone -->
    <link type="text/css" href="/vendor/dropzone/dropzone.min.css" rel="stylesheet">

    <!-- Choices.js -->
    <link type="text/css" href="/vendor/choices.js/choices.min.css" rel="stylesheet">

    <!-- Mapbox & Leaflet.js -->
    <link type="text/css" href="/vendor/leaflet/leaflet.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="/css/volt.css" rel="stylesheet">


    @livewireScripts
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Core -->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="/assets/js/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="/assets/js/nouislider.min.js"></script>

    <!-- Quill -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Smooth scroll -->
    <script src="/assets/js/smooth-scroll.polyfills.min.js"></script>

    <!-- Count up -->
    <script src="/assets/js/countUp.umd.js"></script>

    <!-- Apex Charts -->
    <script src="/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Charts -->
    <script src="/assets/js/chartist.min.js"></script>
    <script src="/assets/js/chartist-plugin-tooltip.min.js"></script>

    <!-- Moment JS -->
    <script src="https://unpkg.com/moment"></script>

    <!-- Pikaday -->
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

    <!-- Datepicker -->
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js"></script>

    <!-- DataTables -->
    <script src="/assets/js/simple-datatables.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="/assets/js/sweetalert2.all.min.js"></script>

    <!-- Full Calendar -->
    <script src="/vendor/fullcalendar/main.min.js"></script>

    <!-- Dropzone -->
    <script src="/vendor/dropzone/dropzone.min.js"></script>

    <!-- Choices.js -->
    <script src="/vendor/choices.js/choices.min.js"></script>

    <!-- Notyf -->
    <script src="/vendor/notyf/notyf.min.js"></script>

    <!-- Mapbox & Leaflet.js -->
    <script src="/vendor/leaflet/leaflet.js"></script>

    <!-- SVG Map -->
    <script src="/assets/js/svg-pan-zoom.min.js"></script>
    <script src="/assets/js/svgMap.min.js"></script>

    <!-- Simplebar -->
    <script src="/assets/js/simplebar.min.js"></script>

    <!-- Sortable Js -->
    <script src="/assets/js/Sortable.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="/assets/js/volt.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if(config('app.is_demo'))
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-6"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-141734189-6');
        </script>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-THQTXJ7');</script>
        <!-- End Google Tag Manager -->
    @endif

</head>

<body>
    @if(in_array($routeName, ['transactions']))
    <script>
    document.getElementById('export-btn').addEventListener('click', function () {
        let table = document.getElementById('orders-table');
        let csv = [];
        for (let row of table.rows) {
            let cols = row.querySelectorAll('td, th');
            let rowData = [];
            for (let col of cols) {
                rowData.push(col.innerText);
            }
            csv.push(rowData.join(','));
        }
        let csvContent = csv.join('\n');
        let blob = new Blob([csvContent], { type: 'text/csv' });
        let url = window.URL.createObjectURL(blob);
        let a = document.createElement('a');
        a.setAttribute('hidden', '');
        a.setAttribute('href', url);
        a.setAttribute('download', 'transactions.csv');
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });

    // JavaScript to add new transaction
    document.getElementById('save-transaction').addEventListener('click', function () {
        let transactionId = document.getElementById('transaction-id').value;
        let billFor = document.getElementById('bill-for').value;
        let issueDate = document.getElementById('issue-date').value;
        let dueDate = document.getElementById('due-date').value;
        let total = document.getElementById('total').value;
        let status = document.getElementById('status').value;

        let table = document.getElementById('orders-table').getElementsByTagName('tbody')[0];
        let newRow = table.insertRow();
        newRow.innerHTML = `
            <td><a href="../invoice.html" class="fw-bold">${transactionId}</a></td>
            <td><span class="fw-normal">${billFor}</span></td>
            <td><span class="fw-normal">${issueDate}</span></td>                        
            <td><span class="fw-normal">${dueDate}</span></td>
            <td><span class="fw-bold">$${total}</span></td>
            <td><span class="fw-bold text-${status === 'Paid' ? 'success' : status === 'Due' ? 'warning' : 'danger'}">${status}</span></td>
            <td>
                <button class="btn btn-link text-dark m-0 p-0" data-bs-toggle="modal" data-bs-target="#edit-transaction-modal">
                    <span class="icon icon-sm">
                        <span class="fas fa-ellipsis-h icon-dark"></span>
                    </span>
                    <span class="visually-hidden">Edit</span>
                </button>
            </td>
        `;

        document.getElementById('new-transaction-modal').querySelectorAll('input, select').forEach(input => input.value = '');
        bootstrap.Modal.getInstance(document.getElementById('new-transaction-modal')).hide();
    });

    // JavaScript to edit a transaction
    document.getElementById('save-edit-transaction').addEventListener('click', function () {
        let transactionId = document.getElementById('edit-transaction-id').value;
        let billFor = document.getElementById('edit-bill-for').value;
        let issueDate = document.getElementById('edit-issue-date').value;
        let dueDate = document.getElementById('edit-due-date').value;
        let total = document.getElementById('edit-total').value;
        let status = document.getElementById('edit-status').value;

        let table = document.getElementById('orders-table');
        for (let row of table.rows) {
            if (row.cells[0].innerText === transactionId) {
                row.cells[1].innerHTML = <span class="fw-normal">${billFor}</span>;
                row.cells[2].innerHTML = <span class="fw-normal">${issueDate}</span>;
                row.cells[3].innerHTML = <span class="fw-normal">${dueDate}</span>;
                row.cells[4].innerHTML = <span class="fw-bold">$${total}</span>;
                row.cells[5].innerHTML = <span class="fw-bold text-${status === 'Paid' ? 'success' : status === 'Due' ? 'warning' : 'danger'}">${status}</span>;
                break;
            }
        }

        document.getElementById('edit-transaction-modal').querySelectorAll('input, select').forEach(input => input.value = '');
        bootstrap.Modal.getInstance(document.getElementById('edit-transaction-modal')).hide();
    });

    // JavaScript to filter transactions by week
    function filterTransactionsByWeek(weekNumber) {
        const startDate = new Date();
        startDate.setDate(startDate.getDate() - ((startDate.getDay() + 6) % 7));
        startDate.setDate(startDate.getDate() - (7 * (weekNumber - 1)));

        const endDate = new Date(startDate);
        endDate.setDate(startDate.getDate() + 6);

        const table = document.getElementById('orders-table');
        for (let row of table.rows) {
            if (row.rowIndex === 0) continue; // Skip header row

            const issueDate = new Date(row.cells[2].innerText);
            if (issueDate >= startDate && issueDate <= endDate) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    }
    </script>
    @endif


    @if(config('app.is_demo'))
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQTXJ7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @endif

    {{ $slot }}

</body>

</html>
