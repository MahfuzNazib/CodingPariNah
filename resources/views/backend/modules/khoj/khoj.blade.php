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
                            <li class="breadcrumb-item active" aria-current="page">Khoj Segment</li>
                        </ol>
                    </nav>
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
                    <h3 class="mb-0">Khoj Segment</h3>
                </div>
                <div class="card-body">
                    <div class="row icon-examples">
                        <div class="col-md-2">
                            <!-- Left Side Empty DIV -->
                        </div>
                        <div class="col-md-8">
                            <form method="post" action="{{ route('khoj.add') }}">
                                @csrf
                                <label>Input Values</label>
                                <input type="text" class="form-control" name="values">
                                <p class="text-danger">** Inputs Value must be separated bt comma [,]</p>

                                <label class="mt-3">Search Value</label>
                                <input type="number" class="form-control" name="search">

                                <input type="submit" value="Khoj" class="btn btn-info mt-3">
                            </form>
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
@endsection
