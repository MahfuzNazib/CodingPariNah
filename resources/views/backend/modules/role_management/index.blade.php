@extends('backend.layouts.app')

@section('content')
@include('backend.layouts.headers.cards')
{{-- Page Header Start --}}
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Role Management</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a class="waves-effect waves-light btn btn-sm btn btn-success modal-trigger" data-toggle="modal"
                        data-content="{{ route('role.add.modal') }}" href="#modal1">Add New Role</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Page Header End --}}
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">Role List</h3>
                </div>
                <div class="card-body">
                    <div class="row icon-examples">
                        <div class="table-responsive col-md-12">
                            <table class="table table-bordered role-datatable" id="datatable">
                                <thead>
                                    <th>ID</th>
                                    <th>Role Name</th>
                                    <th>Permissions</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

@section("per_page_css")
<link href="{{ asset('argon/css/datatable/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('argon/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section("per_page_js")
<script src="{{ asset('argon/js/datatable/jquery.validate.js') }}"></script>
<script src="{{ asset('argon/js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('argon/js/datatable/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $(function () {
        $('.role-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('role.data') }}",
            order: [
                [0, 'Desc']
            ],
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data:'permission',
                    name:'permission'
                },
                {
                    data: 'is_active',
                    name: 'is_active'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                },
            ]
        });
    });
</script>
@endsection
