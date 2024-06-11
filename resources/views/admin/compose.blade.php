@extends('admin.layout.dashboard')

@section('content')

<!--**********************************
    Content body start
***********************************-->
    <div class="content-body inbox-height">
         <!-- row -->	
         <div class="page-titles d-flex justify-content-between align-items-center">
            <ol class="breadcrumb">
                <li><h5 class="bc-title">Compose Email</h5></li>                
            </ol>
            <div>
                <a href="email-compose.html" class="btn btn-primary text-white"><i class="fa-solid fa-plus me-2"></i>Compose Email</a>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="row gx-0">
                <div class="col-lg-12">
                    <div class="card mb-0 h-auto border-0">
                        <div class="card-body">
                            <div class="row gx-0">
                                <div class="col-xxl-12 col-xl-12 col-lg-12">
                                    <div class="email-right-box ms-0 ">
                                        <div class="d-flex align-items-center px-3">
                                            <h4 class="card-title d-sm-none d-block">Email</h4>
                                            <div class="email-tools-box float-end mb-2">	
                                                <i class="fa-solid fa-list-ul"></i>
                                            </div>
                                        </div>
                                        <div class="compose-wrapper mt-3 " id="compose-content">
                                            <div class="compose-content">
                                                <form action="#">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control bg-transparent" placeholder=" To:">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control bg-transparent" placeholder=" Subject:">
                                                    </div>
                                                    <div class="mb-3">
                                                        <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="5" placeholder="Enter text ..."></textarea>
                                                    </div>
                                                </form>
                                                <h5 class="my-3"><i class="fa fa-paperclip me-2"></i> Attatchment</h5>
                                                <form action="#" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="mt-4 mb-3 float-end">
                                                <button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Discard</button>
                                                <button class="btn btn-primary btn-sl-sm me-2" type="submit"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    
<!--**********************************
    Content body end
***********************************-->

@endsection
