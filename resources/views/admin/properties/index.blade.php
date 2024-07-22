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
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset('images/logo_bri.png') }}" style="background: blue" alt="Profile">
                        <br>
                        <h1>{{ Str::upper($properties->company_name) }}</h1>
                        <br>
                        <h5>Registered at: </h5><span>{{ $properties->created_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
