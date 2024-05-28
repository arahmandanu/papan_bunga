@extends('shared.public_main')

@section('content')
<div>
    <div style="height: 15vh">
        <div class="row">
            <div class="col-2 bg-success text-center align-middle" style="align-content: center;">
                <span class="text-white display-3">TIME</span>
                <h2 class="text-white">00:12</h2>
            </div>

            <div class="col text-center align-middle" style="align-content: center">
                Column
            </div>

            <div class="col-2 bg-success text-center align-middle" style="align-content: center">
                <h1 class="text-white">DATE</h1>
                <h2 class="text-white">27 MEI 2024</h2>
            </div>
        </div>
    </div>

    <div style="height: 70vh">
        <div class="row">
            <div class="col bg-black" style="overflow: auto !important; height: 70vh">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="20%">MATA UANG</th>
                            <th width="40%">BELI / BUY</th>
                            <th width="40%">JUAL / SELL</th>
                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 0; $i < 10; $i++) <tr>
                            <td>bendera | <h1>nama negara</h1>
                            </td>
                            <td>
                                <h1>124.456,78</h1>
                            </td>
                            <td>
                                <h1>124.456,78</h1>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row" style="height: 15vh">
        <div class="col-2 bg-success text-center align-middle" style="align-content: center">
            <h1 class="text-white">TIME</h1>
            <h2 class="text-white">00:12</h2>
        </div>
        <div class="col text-center align-middle" style="align-content: center">
            Column
        </div>
        <div class="col-2 bg-success text-center align-middle" style="align-content: center">
            <h1 class="text-white">DATE</h1>
            <h2 class="text-white">27 MEI 2024</h2>
        </div>
    </div>
</div>
@endsection