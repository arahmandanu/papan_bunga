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
                <a type="button" href="{{ route('footer_text.create') }}" class="btn btn-primary rounded-pill">Tambah</a>
            </div>

            <div class="col-lg-12">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th width="10%">Urutan Tampilan</th>
                            <th width="70%">
                                <b>T</b>eks
                            </th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($footerTexts as $item)
                            <tr>
                                <td>{{ $item->number_show }}</td>
                                <td>{{ $item->text }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <form action="{{ route('footer_text.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger" href="">Hapus</button>
                                        </form>
                                        <a type="button" class="btn btn-warning"
                                            href="{{ route('footer_text.edit', $item->id) }}">Edit</a>
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
