<!-- alert box start -->
@if (session()->has('success'))
    <div class="card-body" id="alert-box">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ik ik-x"></i>
            </button>
        </div>
    </div>
@endif
@if (session()->has('error'))
    <div class="card-body" id="alert-box">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ik ik-x"></i>
            </button>
        </div>
    </div>
@endif
@if (session()->has('message'))
    <div class="card-body" id="alert-box">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ik ik-x"></i>
            </button>
        </div>
    </div>
@endif
<!-- alert box end -->