@extends('admin.layout.dashboard')

@section('content')

<!--**********************************
    Content body start
***********************************-->
    <div class="content-body">
        <!-- row -->	
        <div class="page-titles d-flex justify-content-between align-items-center">
            <ol class="breadcrumb">
                <li><h5 class="bc-title">Dashboard</h5></li>                
            </ol>
            <div>
                <a href="{{ url('/admin/compose') }}" class="btn btn-primary text-white"><i class="fa-solid fa-plus me-2"></i>Compose Email</a>
            </div>
        </div>
    </div>

     
		
<!--**********************************
    Content body end
***********************************-->

@endsection
