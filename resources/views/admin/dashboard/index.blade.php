@extends('layout.app')
@section('head')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Welcome {{ auth()->user()->name }}</h3>
            <div class="nk-block-des text-soft">
                <p>Welcome to {{ env('APP_NAME') }} Dashboard.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="nk-block">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Expense</h4>
                    <br>
                    <h2>{{ totalExpense() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Office Expense</h4>
                    <br>
                    <h2>{{ totalExpense() }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-bordered mb-2">
                <div class="card-body">
                    <h4 class="title">Total Salary Paid</h4>
                    <br>
                    <h2>{{ totalSalary() }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection