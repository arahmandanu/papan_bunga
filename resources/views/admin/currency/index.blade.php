@extends('admin.shared.main')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>
                                <b>N</b>ama
                            </th>
                            <th>Bendera</th>
                            <th>Beli</th>
                            <th>Jual</th>
                            <th>Ditampilkan?</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($currencies as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ asset('flags/id.png') }}" alt=""></td>
                                <td>{{ $item->buy }}</td>
                                <td>{{ $item->sell }}</td>
                                <td>{{ $item->displayed == 1 ? '<span class="badge bg-success">yes</span>' : '<span class="badge bg-danger">no</span>' }}
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Left</button>
                                        <button type="button" class="btn btn-primary">Middle</button>
                                        <button type="button" class="btn btn-primary">Right</button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
