<title>Volt Laravel Dashboard - Transactions</title>
{{--<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Volt</a></li>
                <li class="breadcrumb-item active" aria-current="page">Transactions</li>
            </ol>
        </nav>
        <h2 class="h4">All Orders</h2>
        <p class="mb-0">Your web analytics dashboard template.</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="#" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            New Plan
        </a>
        <div class="btn-group ms-2 ms-lg-3">
            <button type="button" class="btn btn-sm btn-outline-gray-600">Share</button>
            <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
        </div>
    </div>
</div>
<div class="table-settings mb-4">
    <div class="row align-items-center justify-content-between">
        <div class="col col-md-6 col-lg-3 col-xl-4">
            <div class="input-group me-2 me-lg-3 fmxw-400">
                <span class="input-group-text">
                    <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </span>
                <input type="text" class="form-control" placeholder="Search orders">
            </div>
        </div>
        <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
            <div class="dropdown">
                <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                    <span class="small ps-3 fw-bold text-dark">Show</span>
                    <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></a>
                    <a class="dropdown-item fw-bold" href="#">20</a>
                    <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-gray-200">#</th>
                <th class="border-gray-200">Bill For</th>						
                <th class="border-gray-200">Issue Date</th>
                <th class="border-gray-200">Due Date</th>
                <th class="border-gray-200">Total</th>
                <th class="border-gray-200">Status</th>
                <th class="border-gray-200">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        456478
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Platinum Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 May 2020</span></td>                        
                <td><span class="fw-normal">1 Jun 2020</span></td>
                <td><span class="fw-bold">$799,00</span></td>
                <td><span class="fw-bold text-warning">Due</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr>
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        456423
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Platinum Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 Apr 2020</span></td>                        
                <td><span class="fw-normal">1 May 2020</span></td>
                <td><span class="fw-bold">$799,00</span></td>
                <td><span class="fw-bold text-success">Paid</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr> 
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        456420
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Platinum Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 Mar 2020</span></td>                        
                <td><span class="fw-normal">1 Apr 2020</span></td>
                <td><span class="fw-bold">$799,00</span></td>
                <td><span class="fw-bold text-success">Paid</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr> 
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        456421
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Platinum Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 Feb 2020</span></td>                        
                <td><span class="fw-normal">1 Mar 2020</span></td>
                <td><span class="fw-bold">$799,00</span></td>
                <td><span class="fw-bold text-success">Paid</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr> 
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        456420
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Platinum Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 Jan 2020</span></td>                        
                <td><span class="fw-normal">1 Feb 2020</span></td>
                <td><span class="fw-bold">$799,00</span></td>
                <td><span class="fw-bold text-success">Paid</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr> 
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        456479
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Platinum Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 Dec 2019</span></td>                        
                <td><span class="fw-normal">1 Jan 2020</span></td>
                <td><span class="fw-bold">$799,00</span></td>
                <td><span class="fw-bold text-success">Paid</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr> 
            <!-- Item -->
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        456478
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Platinum Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 Nov 2019</span></td>                        
                <td><span class="fw-normal">1 Dec 2019</span></td>
                <td><span class="fw-bold">$799,00</span></td>
                <td><span class="fw-bold text-success">Paid</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr> 
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        453673
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Gold Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 Oct 2019</span></td>                        
                <td><span class="fw-normal">1 Nov 2019</span></td>
                <td><span class="fw-bold">$533,42</span></td>
                <td><span class="fw-bold text-danger">Cancelled</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr>
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        456468
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Gold Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 Sep 2019</span></td>                        
                <td><span class="fw-normal">1 Oct 2019</span></td>
                <td><span class="fw-bold">$533,42</span></td>
                <td><span class="fw-bold text-success">Paid</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr>    
            <!-- Item -->
            <tr>
                <td>
                    <a href="../invoice.html" class="fw-bold">
                        456478
                    </a>
                </td>
                <td>
                    <span class="fw-normal">Flexible Subscription Plan</span>
                </td>
                <td><span class="fw-normal">1 Aug 2019</span></td>                        
                <td><span class="fw-normal">1 Sep 2019</span></td>
                <td><span class="fw-bold">$233,42</span></td>
                <td><span class="fw-bold text-success">Paid</span></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="../invoice.html"><span class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                            <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                        </div>
                    </div>
                </td>
            </tr>                                
        </tbody>
    </table>
    <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <nav aria-label="Page navigation example">
            <ul class="pagination mb-0">
                <li class="page-item">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div>
    </div>
</div>--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volt Laravel Dashboard - Transactions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Volt</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                </ol>
            </nav>
            <h2 class="h4">All Orders</h2>
            <p class="mb-0">Your web analytics dashboard template.</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="#" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#new-transaction-modal">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                New Plan
            </a>
            <div class="btn-group ms-2 ms-lg-3">
                <button type="button" class="btn btn-sm btn-outline-gray-600" id="export-btn">Export</button>
            </div>
        </div>
    </div>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col col-md-6 col-lg-3 col-xl-4">
                <div class="input-group me-2 me-lg-3 fmxw-400">
                    <span class="input-group-text">
                        <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search orders">
                </div>
            </div>
            <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
                <div class="dropdown">
                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                        <span class="small ps-3 fw-bold text-dark">Show</span>
                        <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></a>
                        <a class="dropdown-item fw-bold" href="#">20</a>
                        <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover" id="orders-table">
            <thead>
                <tr>
                    <th class="border-gray-200">#</th>
                    <th class="border-gray-200">Bill For</th>						
                    <th class="border-gray-200">Issue Date</th>
                    <th class="border-gray-200">Due Date</th>
                    <th class="border-gray-200">Total</th>
                    <th class="border-gray-200">Status</th>
                    <th class="border-gray-200">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy data entries spanning across weeks -->
                <tr>
                    <td><a href="../invoice.html" class="fw-bold">456478</a></td>
                    <td><span class="fw-normal">Platinum Subscription Plan</span></td>
                    <td><span class="fw-normal">2023-06-01</span></td>                        
                    <td><span class="fw-normal">2023-07-01</span></td>
                    <td><span class="fw-bold">$799.00</span></td>
                    <td><span class="fw-bold text-warning">Due</span></td>
                    <td>
                        <button class="btn btn-link text-dark m-0 p-0" data-bs-toggle="modal" data-bs-target="#edit-transaction-modal">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Edit</span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td><a href="../invoice.html" class="fw-bold">456423</a></td>
                    <td><span class="fw-normal">Platinum Subscription Plan</span></td>
                    <td><span class="fw-normal">2023-06-08</span></td>                        
                    <td><span class="fw-normal">2023-07-08</span></td>
                    <td><span class="fw-bold">$799.00</span></td>
                    <td><span class="fw-bold text-success">Paid</span></td>
                    <td>
                        <button class="btn btn-link text-dark m-0 p-0" data-bs-toggle="modal" data-bs-target="#edit-transaction-modal">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Edit</span>
                        </button>
                    </td>
                </tr> 
                <tr>
                    <td><a href="../invoice.html" class="fw-bold">456420</a></td>
                    <td><span class="fw-normal">Platinum Subscription Plan</span></td>
                    <td><span class="fw-normal">2023-06-15</span></td>                        
                    <td><span class="fw-normal">2023-07-15</span></td>
                    <td><span class="fw-bold">$799.00</span></td>
                    <td><span class="fw-bold text-success">Paid</span></td>
                    <td>
                        <button class="btn btn-link text-dark m-0 p-0" data-bs-toggle="modal" data-bs-target="#edit-transaction-modal">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Edit</span>
                        </button>
                    </td>
                </tr> 
                <tr>
                    <td><a href="../invoice.html" class="fw-bold">456421</a></td>
                    <td><span class="fw-normal">Platinum Subscription Plan</span></td>
                    <td><span class="fw-normal">2023-06-22</span></td>                        
                    <td><span class="fw-normal">2023-07-22</span></td>
                    <td><span class="fw-bold">$799.00</span></td>
                    <td><span class="fw-bold text-success">Paid</span></td>
                    <td>
                        <button class="btn btn-link text-dark m-0 p-0" data-bs-toggle="modal" data-bs-target="#edit-transaction-modal">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Edit</span>
                        </button>
                    </td>
                </tr> 
                <tr>
                    <td><a href="../invoice.html" class="fw-bold">456420</a></td>
                    <td><span class="fw-normal">Platinum Subscription Plan</span></td>
                    <td><span class="fw-normal">2023-06-29</span></td>                        
                    <td><span class="fw-normal">2023-07-29</span></td>
                    <td><span class="fw-bold">$799.00</span></td>
                    <td><span class="fw-bold text-success">Paid</span></td>
                    <td>
                        <button class="btn btn-link text-dark m-0 p-0" data-bs-toggle="modal" data-bs-target="#edit-transaction-modal">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Edit</span>
                        </button>
                    </td>
                </tr> 
            </tbody>
        </table>
    </div>


    <!-- Modal for new transaction -->
    <div class="modal fade" id="new-transaction-modal" tabindex="-1" aria-labelledby="newTransactionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newTransactionModalLabel">New Transaction</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" id="transaction-id" class="form-control" placeholder="Transaction ID" required>
                    <input type="text" id="bill-for" class="form-control" placeholder="Bill For" required>
                    <input type="date" id="issue-date" class="form-control" placeholder="Issue Date" required>
                    <input type="date" id="due-date" class="form-control" placeholder="Due Date" required>
                    <input type="number" id="total" class="form-control" placeholder="Total" required>
                    <select id="status" class="form-control" required>
                        <option value="Paid">Paid</option>
                        <option value="Due">Due</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save-transaction">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for editing transaction -->
    <div class="modal fade" id="edit-transaction-modal" tabindex="-1" aria-labelledby="editTransactionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTransactionModalLabel">Edit Transaction</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" id="edit-transaction-id" class="form-control" placeholder="Transaction ID" required>
                    <input type="text" id="edit-bill-for" class="form-control" placeholder="Bill For" required>
                    <input type="date" id="edit-issue-date" class="form-control" placeholder="Issue Date" required>
                    <input type="date" id="edit-due-date" class="form-control" placeholder="Due Date" required>
                    <input type="number" id="edit-total" class="form-control" placeholder="Total" required>
                    <select id="edit-status" class="form-control" required>
                        <option value="Paid">Paid</option>
                        <option value="Due">Due</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save-edit-transaction">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript to export table data to CSV
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
                    row.cells[1].innerHTML = `<span class="fw-normal">${billFor}</span>`;
                    row.cells[2].innerHTML = `<span class="fw-normal">${issueDate}</span>`;
                    row.cells[3].innerHTML = `<span class="fw-normal">${dueDate}</span>`;
                    row.cells[4].innerHTML = `<span class="fw-bold">$${total}</span>`;
                    row.cells[5].innerHTML = `<span class="fw-bold text-${status === 'Paid' ? 'success' : status === 'Due' ? 'warning' : 'danger'}">${status}</span>`;
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

        // Example: Call the function to filter transactions for week 1
        // filterTransactionsByWeek(1);
    </script>
</body>
</html>
