@extends('layout.app')
@section('head')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">All Customers List</h3>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="nk-block">
    <livewire:admin.all-customer :type="array('customer','vendor','employee','partner')" />
</div>
@endsection