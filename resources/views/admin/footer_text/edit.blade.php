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

            <div class="col-lg-12">
                @include('shared.error_validation')

                <form class="row g-3" method="POST" action={{ route('footer_text.update', $footerText->id) }}>
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Teks</label>
                        <input type="text" class="form-control" name="text" id="inputName5" required
                            value="{{ $footerText->text }}">
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Urutan Tampilan</label>
                        <select id="inputState" class="form-select" name="number_show" required>
                            @forelse ($numberDisplay as $item)
                                <option {{ $item == $footerText->number_show ? 'selected' : '' }}
                                    value="{{ $item }}">
                                    {{ $item }}</option>
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
