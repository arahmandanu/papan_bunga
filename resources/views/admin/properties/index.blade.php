@extends('admin.shared.main')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('ShowDashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Properties</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row card p-2">
        <div class="col-lg-12 p2">
            @include('flash::message')
        </div>

        <div class="col-lg-12">
            @dd($properties)
        </div>
    </div>
</section>
@endsection