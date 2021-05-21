@extends('backend.layouts.app')
@section('content')
@include('backend.layouts.headers.cards')

<!-- Page Header Start -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">API End Point</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Main Content Start -->
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">API End Point</h3>
                </div>
                <div class="card-body">
                    <div class="row icon-examples">
                        <div class="col-md-2">
                            <!-- Left Side Empty DIV -->
                        </div>
                        <div class="col-md-8 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>SL No</th>
                                    <th>Values</th>
                                    <th>Timestamp</th>
                                    <th>Created By</th>
                                </thead>

                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($endpoints as $point)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
                                            @php
                                                echo '[ '.implode(",", $point->values).' ]'
                                            @endphp
                                        </td>
                                        <td>{{ $point->created_at }}</td>
                                        <td>
                                            <span class="badge badge-success">{{ $point->user->name }} </span> <span class="badge badge-primary">You</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2">
                            <!-- Right Side Empty DIV -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->
@endsection
