@extends('shared.public_main')

@section('content')
<div class="container-fluid">
    <div class="row p-2">
        <div class="col-2 bg-success text-center align-middle" style="align-content: center;">
            <h1 class="text-white" style="font-size: 5vh">TIME</h1>
            <h2 class="text-white" style="font-size: 2vh">00:12</h2>
        </div>

        <div class="col text-center align-middle" style="align-content: center">
            Column
        </div>

        <div class="col-2 bg-success text-center align-middle" style="align-content: center">
            <h1 class="text-white">DATE</h1>
            <h2 class="text-white">27 MEI 2024</h2>
        </div>
    </div>

    <div class="row p-2" style="height: 70vh">
        <div class="col bg-black">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            MATA UANG
                        </th>

                        <th>BELI / BUY</th>
                        <th>JUAL / SELL</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="row p-2" style="height: 10vh">
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
