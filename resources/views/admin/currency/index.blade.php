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
        <div class="row card p-2">
            <div class="col-lg-12 p2">
                @include('flash::message')
            </div>

            <div class="col-lg-12">
                <a type="button" href="{{ route('currency.create') }}" class="btn btn-primary rounded-pill">Tambah</a>

                <a type="button" href="{{ route('autoSyncAdmin') }}" class="btn btn-success rounded-pill">Sync</a>
            </div>

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
                            <th>No Urutan</th>
                            <th>Ditampilkan?</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($currencies as $item)
                            <tr>
                                <td style="text-align: center; vertical-align:middle">{{ $item->name }}</td>
                                <td><img style="width: 50px" src="{{ asset($item->flag) }}" alt=""></td>
                                <td style="text-align: center; vertical-align:middle">{{ $item->buy }}</td>
                                <td style="text-align: center; vertical-align:middle">{{ $item->sell }}</td>
                                <td style="text-align: center; vertical-align:middle">{{ $item->display_number }}</td>
                                <td style="text-align: center; vertical-align:middle">
                                    @if ($item->displayed == 1)
                                        <span class="badge bg-success">yes</span>
                                    @else
                                        <span class="badge bg-danger">no</span>
                                    @endif
                                </td>
                                <td style="text-align: center; vertical-align:middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        @if ($item->default == false)
                                            <form action="{{ route('currency.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        @endif
                                        <a type="button" class="btn btn-primary"
                                            href="{{ route('currency.edit', $item->id) }}">Edit</a>
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
