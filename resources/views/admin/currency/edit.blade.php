@extends('admin.shared.main')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Edit Currency</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row card p-2">

            <div class="col-lg-12">
                @include('shared.error_validation')

                <form enctype="multipart/form-data" class="row g-3" method="POST"
                    action={{ route('currency.update', $currency->id) }}>
                    @method('PUT')
                    @csrf

                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Bendera</label>
                        <input type="file" class="form-control" name="flag" id="inputName5"
                            accept="image/png, image/gif, image/jpeg">
                        <span class="badge border-danger border-1 text-danger">JPG, JPEG, PNG. Max 1Mb</span>

                        <div>
                            <img width="175px" src="{{ asset($currency->flag) }}" alt="flag">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" id="inputName5" required
                            value="{{ $currency->name }}">
                    </div>

                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Beli</label>
                        <input type="text" class="form-control" name="buy" id="inputName5" required
                            value="{{ $currency->buy }}">
                    </div>

                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Jual</label>
                        <input type="text" class="form-control" name="sell" id="inputName5" required
                            value="{{ $currency->sell }}">
                    </div>

                    <div class="col-md-12">
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Tampilkan</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="displayed" id="gridRadios1"
                                        value="1" {{ $currency->displayed ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gridRadios1">
                                        yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="displayed" id="gridRadios2"
                                        value="0" {{ !$currency->displayed ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gridRadios2">
                                        no
                                    </label>
                                </div>
                            </div>
                        </fieldset>
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
