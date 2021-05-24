@extends('admin.layouts.adminMaster')
@section('title','OnlinePoint - Admin Dashboard')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="btn-toolbar dropdown">
        <button class="btn btn-dark btn-sm me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fas fa-plus me-2"></span>New Task
        </button>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-0">
            <a class="dropdown-item fw-normal rounded-top" href="#"><span class="fas fa-tasks"></span>New Task</a>
            <a class="dropdown-item fw-normal" href="#"><span class="fas fa-cloud-upload-alt"></span>Upload Files</a>
            <a class="dropdown-item fw-normal" href="#"><span class="fas fa-user-shield"></span>Preview Security</a>
            <div role="separator" class="dropdown-divider my-0"></div>
            <a class="dropdown-item fw-normal rounded-bottom" href="#"><span class="fas fa-rocket text-danger"></span>Upgrade to Pro</a>
        </div>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon icon-shape icon-md icon-shape-primary rounded me-4 me-sm-0"><span class="fas fa-chart-line"></span></div>
                            <div class="d-sm-none">
                                <h2 class="h5">Customers</h2>
                                <h3 class="mb-1">345,678</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h5">Customers</h2>
                                <h3 class="mb-1">345k</h3>
                            </div>
                            <small>Feb 1 - Apr 1,  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> WorldWide</small> 
                            <div class="small mt-2">                               
                                <span class="fas fa-angle-up text-success"></span>                                   
                                <span class="text-success fw-bold">18.2%</span> Since last month
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon icon-shape icon-md icon-shape-secondary rounded me-4"><span class="fas fa-cash-register"></span></div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">Revenue</h2>
                                        <h3 class="mb-1">$43,594</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h5">Revenue</h2>
                                        <h3 class="mb-1">$43,594</h3>
                                    </div>
                                    <small>Feb 1 - Apr 1,  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> Worldwide</small>
                                    <div class="small mt-2">                               
                                        <span class="fas fa-angle-up text-success"></span>                                   
                                        <span class="text-success fw-bold">28.2%</span> Since last month
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="ct-chart-traffic-share ct-golden-section ct-series-a"></div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <h2 class="h5 mb-3">Traffic Share</h2>
                                    <h6 class="fw-normal text-gray"><span class="icon w-20 icon-xs icon-secondary me-1"><span class="fas fa-desktop"></span></span> Desktop <a href="#" class="h6">60%</a></h6>
                                    <h6 class="fw-normal text-gray"><span class="icon w-20 icon-xs icon-primary me-1"><span class="fas fa-mobile-alt"></span></span> Mobile Web <a href="#" class="h6">30%</a></h6>
                                    <h6 class="fw-normal text-gray"><span class="icon w-20 icon-xs icon-tertiary me-1"><span class="fas fa-tablet-alt"></span></span> Tablet Web <a href="#" class="h6">10%</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8 mb-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card border-light shadow-sm">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h2 class="h5">Page visits</h2>
                                        </div>
                                        <div class="col text-right">
                                            <a href="#" class="btn btn-sm btn-secondary">See all</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Page name</th>
                                            <th scope="col">Page Views</th>
                                            <th scope="col">Page Value</th>
                                            <th scope="col">Bounce rate</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">
                                                /demo/admin/index.html
                                            </th>
                                            <td>
                                                3,225
                                            </td>
                                            <td>
                                                $20
                                            </td>
                                            <td>
                                                <span class="fas fa-arrow-up text-danger me-3"></span> 42,55%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                /demo/admin/forms.html
                                            </th>
                                            <td>
                                                2,987
                                            </td>
                                            <td>
                                                0
                                            </td>
                                            <td>
                                                <span class="fas fa-arrow-down text-success me-3"></span> 43,52%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                /demo/admin/util.html
                                            </th>
                                            <td>
                                                2,844
                                            </td>
                                            <td>
                                            294
                                            </td>
                                            <td>
                                                <span class="fas fa-arrow-down text-success me-3"></span> 32,35%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                /demo/admin/validation.html
                                            </th>
                                            <td>
                                                2,050
                                            </td>
                                            <td>
                                                $147
                                            </td>
                                            <td>
                                                <span class="fas fa-arrow-up text-danger me-3"></span> 50,87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                /demo/admin/modals.html
                                            </th>
                                            <td>
                                                1,483
                                            </td>
                                            <td>
                                                $19
                                            </td>
                                            <td>
                                                <span class="fas fa-arrow-down text-success me-3"></span> 32,24%
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card border-light shadow-sm">
                                <div class="card-header border-bottom border-light d-flex justify-content-between">
                                   <h2 class="h5 mb-0">Teacher Status</h2>
                                    <a href="#" class="btn btn-sm btn-secondary">See all</a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush list my--3">
                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="user-avatar">
                                                    <img class="rounded-circle" alt="Image placeholder" src="{{asset('theme/assets/img/team/profile-picture-1.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="col-auto ms--2">
                                                <h4 class="h6 mb-0">
                                                    <a href="#!">Chris Wood</a>
                                                </h4>
                                                <span class="text-success">●</span>
                                                <small>Online</small>
                                            </div>
                                            <div class="col text-right">
                                                <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check me-1"></i> Invite</a>
                                            </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <a href="#" class="user-avatar">
                                                        <img class="rounded-circle" alt="Image placeholder" src="{{asset('theme/assets/img/team/profile-picture-2.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="col-auto ms--2">
                                                    <h4 class="h6 mb-0">
                                                        <a href="#!">Jose Leos</a>
                                                    </h4>
                                                    <span class="text-warning">●</span>
                                                    <small>In a meeting</small>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment me-1"></i> Message</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <a href="#" class="user-avatar">
                                                        <img class="rounded-circle" alt="Image placeholder" src="{{asset('theme/assets/img/team/profile-picture-3.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="col-auto ms--2">
                                                    <h4 class="h6 mb-0">
                                                        <a href="#!">Bonnie Green</a>
                                                    </h4>
                                                    <span class="text-danger">●</span>
                                                    <small>Offline</small>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check me-1"></i> Invite</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <a href="#" class="user-avatar">
                                                        <img class="rounded-circle" alt="Image placeholder" src="{{asset('theme/assets/img/team/profile-picture-4.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="col-auto ms--2">
                                                <h4 class="h6 mb-0">
                                                        <a href="#">Neil Sims</a>
                                                </h4>
                                                <span class="text-success">●</span>
                                                <small>Online</small>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment me-1"></i> Message</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                             </div>
                        </div>
                        
                        <div class="col-12 col-lg-6 mb-4">
                            <div class="card border-light shadow-sm">
                                <div class="card-header border-bottom border-light d-flex justify-content-between">
                                   <h2 class="h5 mb-0">Teacher Status</h2>
                                    <a href="#" class="btn btn-sm btn-secondary">See all</a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush list my--3">
                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="user-avatar">
                                                    <img class="rounded-circle" alt="Image placeholder" src="{{asset('theme/assets/img/team/profile-picture-1.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="col-auto ms--2">
                                                <h4 class="h6 mb-0">
                                                    <a href="#!">Chris Wood</a>
                                                </h4>
                                                <span class="text-success">●</span>
                                                <small>Online</small>
                                            </div>
                                            <div class="col text-right">
                                                <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check me-1"></i> Invite</a>
                                            </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <a href="#" class="user-avatar">
                                                        <img class="rounded-circle" alt="Image placeholder" src="{{asset('theme/assets/img/team/profile-picture-2.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="col-auto ms--2">
                                                    <h4 class="h6 mb-0">
                                                        <a href="#!">Jose Leos</a>
                                                    </h4>
                                                    <span class="text-warning">●</span>
                                                    <small>In a meeting</small>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment me-1"></i> Message</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <a href="#" class="user-avatar">
                                                        <img class="rounded-circle" alt="Image placeholder" src="{{asset('theme/assets/img/team/profile-picture-3.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="col-auto ms--2">
                                                    <h4 class="h6 mb-0">
                                                        <a href="#!">Bonnie Green</a>
                                                    </h4>
                                                    <span class="text-danger">●</span>
                                                    <small>Offline</small>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check me-1"></i> Invite</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <a href="#" class="user-avatar">
                                                        <img class="rounded-circle" alt="Image placeholder" src="{{asset('theme/assets/img/team/profile-picture-4.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="col-auto ms--2">
                                                <h4 class="h6 mb-0">
                                                        <a href="#">Neil Sims</a>
                                                </h4>
                                                <span class="text-success">●</span>
                                                <small>Online</small>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment me-1"></i> Message</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 mb-4">
                    <div class="col-12 px-0 mb-4">
                        <div class="card border-light shadow-sm">
                            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                <div class="d-block">
                                    <div class="h6 fw-normal text-gray mb-2">Total orders</div>
                                    <h2 class="h3">452</h2>
                                    <div class="small mt-2">                               
                                        <span class="fas fa-angle-up text-success"></span>                                   
                                        <span class="text-success fw-bold">18.2%</span>
                                    </div>
                                </div>
                                <div class="d-block ms-auto">
                                    <div class="d-flex align-items-center text-right mb-2">
                                        <span class="shape-xs rounded-circle bg-dark me-2"></span>
                                        <span class="fw-normal small">July</span>
                                    </div>
                                    <div class="d-flex align-items-center text-right">
                                        <span class="shape-xs rounded-circle bg-secondary me-2"></span>
                                        <span class="fw-normal small">August</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2">
                                <div class="ct-chart-ranking ct-golden-section ct-series-a"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection