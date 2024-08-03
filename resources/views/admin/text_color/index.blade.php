@extends('admin.shared.main')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('ShowDashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Warna Texts</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row card p-2">
            <div class="col-lg-12 p2">
                @include('flash::message')
            </div>

            <div class="col-lg-12">
                <table class="table">
                    <tbody>
                        @forelse ($colors as $item)
                            <tr>
                                <td>
                                    @if ($item->name == 'data_time_color')
                                        <div style="background-color: #004b96; align-content: flex-end;">
                                            <h3 class="align-middle"
                                                style="color: {{ $item->value ?? ($item->default ?? '#e4dc6a') }}">
                                                BRI EXCHANGE RATE
                                            </h3>
                                        </div>
                                    @elseif ($item->name == 'footer_color')
                                        <div class="bg-black">
                                            <marquee direction="left">
                                                <h3 style="color: {{ $item->value ?? ($item->default ?? '#e4dc6a') }}">
                                                    SELAMAT DATANG DI UNIT
                                                </h3>
                                            </marquee>

                                        </div>
                                    @elseif ($item->name == 'kurs_color')
                                        <div style="background-color: #004b96; align-content: flex-end;">
                                            <h3 class="align-middle"
                                                style="color: {{ $item->value ?? ($item->default ?? '#e4dc6a') }}">
                                                MATA UANG
                                            </h3>
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <input onchange="changeColor(this, {{ $item->id }})" type="color"
                                                    class="form-control form-control-color" id="exampleColorInput"
                                                    value="{{ $item->value ?? ($item->default ?? '#e4dc6a') }}"
                                                    title="Choose your color">
                                            </div>

                                            <div class="col-6">
                                                <a href="{{ route('resetColor', $item->id) }}">reset</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>

            </div>

            <iframe src="{{ route('dashboard.index') }}" height="1000" width="300" title="Iframe Example"></iframe>
        </div>
    </section>

    <script>
        function changeColor(el, id) {
            $.post("{{ route('text_color.update', '') }}" + "/" + id, {
                    'value': el.value,
                    '_method': 'PUT',
                    '_token': "{{ csrf_token() }}"
                },
                function(data, textStatus, jqXHR) {
                    location.reload();
                },
                "json"
            );
        }
    </script>
@endsection
