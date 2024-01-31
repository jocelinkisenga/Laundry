<div>
    @php
        use Darryldecode\Cart\Cart;
    @endphp
    <div class="mb-4 d-sm-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-gray-800 h3">Dashboard</h1>
        <a href="#" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-primary"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-primary h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                Earnings (Monthly)</div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-calendar fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-success h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-success text-uppercase">
                                Earnings (Annual)</div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-dollar-sign fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-info h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-info text-uppercase">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="mb-0 mr-3 text-gray-800 h5 font-weight-bold">50%</div>
                                </div>
                                <div class="col">
                                    <div class="mr-2 progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-clipboard-list fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="mb-4 col-xl-3 col-md-6">
            <div class="py-2 shadow card border-left-warning h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="mr-2 col">
                            <div class="mb-1 text-xs font-weight-bold text-warning text-uppercase">
                                Pending Requests</div>
                            <div class="mb-0 text-gray-800 h5 font-weight-bold">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="text-gray-300 fas fa-comments fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="mb-4 shadow card">
                <!-- Card Header - Dropdown -->
                <div class="flex-row py-3 card-header d-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                    @if(session()->get("customer_id"))
                    <div>
                        <a href="" class="text-success m-2"><i class="fa fa-print" aria-hidden="true"></i></a>
                        <a href="" class="text-danger"><i class="fas fa-file-pdf"></i></a>
                    </div>
                    @endif
                    <div class="dropdown no-arrow">
                        <a  href="#" role="button" data-toggle="modal" data-target="#product" >
                            <button class="btn btn-primary text-white"><i class="fa fa-plus" aria-hidden="true"></i> ajouter un produit</button>
                        </a>

                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


    </div>
@livewire('create-order-list')
</div>
