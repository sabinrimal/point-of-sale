@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

<!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                               User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hotel fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Transaction</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transactions }}</div>
                        </div>
                        <div class="col-auto">
{{--                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>--}}
                            <i class="fas fa-2x text-gray-300">रू</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr style="border: double;"/>
    <div style="margin-left:20px;">
        <div><u><h5>Stocks Clearing Fast</h1></u><p>(Using BubbleSort)</p><div>
            <div class="order-product product-search" style="display: flex;column-gap: 0.5rem;flex-wrap: wrap;row-gap: .5rem;">
                @foreach($sorting as $itemproduct)
                    <button type="button"
                        class="item"
                        style="cursor: pointer; border: none;"
                        value="{{ $itemproduct->quantity }}"
                    >
                        <h6 style="margin: 0;">{{ $itemproduct->name }}</h6>
                        <h6 style="margin: 0;">(Prod. Code:{{ $itemproduct->code }})</h6>
                        <span >(Quantity:{{ $itemproduct->quantity }})</span>
                    </button>
                @endforeach
            </div>        
    </div>

</div>
@endsection
