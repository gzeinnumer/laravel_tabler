@extends('layouts.master-dashboard')

@section('title', 'Home')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Fluid vertical layout
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-auto">
                    <a href="#" class="btn btn-secondary" onclick="showModalFailed('title','msg')">
                        Failet
                    </a>
                    <a href="#" class="btn btn-secondary" onclick="showModalSuccess('title','msg')">
                        Success
                    </a>
                    <a href="#" class="btn btn-secondary" onclick="showModalLoading()">
                        Loading
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
@endsection
