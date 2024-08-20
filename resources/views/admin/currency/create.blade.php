@extends('admin.shared.main')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Tambah Currency</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row card p-2">

            <div class="col-lg-12">
                @include('shared.error_validation')

                <form enctype="multipart/form-data" class="row g-3" method="POST" action={{ route('currency.store') }}>
                    @csrf

                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Bendera</label>
                        <input type="file" class="form-control" name="flag" id="inputName5" required
                            accept="image/png, image/gif, image/jpeg">
                        <span class="badge border-danger border-1 text-danger">JPG, JPEG, PNG. Max 1Mb</span>
                    </div>

                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" id="inputName5" required>
                    </div>

                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Beli</label>
                        <input type="text" class="form-control" name="buy" id="inputName5" required>
                    </div>

                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Jual</label>
                        <input type="text" class="form-control" name="sell" id="inputName5" required>
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">No Urutan</label>
                        <select id="inputState" class="form-select" name="display_number" required>
                            @forelse ($displayNumber as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @empty
                                <option value="">Data Kosong</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- End Multi Columns Form -->

            </div>
        </div>
    </section>
@endsection
