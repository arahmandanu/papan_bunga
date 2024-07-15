@extends('shared.public_main')

@section('content')
<div style="height: 100vh">
    <div class="row">
        {{-- Todo removing over flow --}}
        <div class="col" id="mainApp" style="overflow: auto !important;">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th width="30%">
                            <h1 id="my_font">MATA UANG</h1>
                        </th>
                        <th width="35%">
                            <h1 id="my_font_2">BELI / BUY</h1>
                        </th>
                        <th width="35%">
                            <h1 id="my_font_2">JUAL / SELL</h1>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @for ($i = 0; $i < 10; $i++) <tr>
                        <td>
                            <img src="{{ asset('flags/id.png') }}" class="rounded float-start" alt="...">
                            <h1 id="my_font_2">ID</h1>
                        </td>
                        <td>
                            <h1 id="my_font">124.456,78</h1>
                        </td>
                        <td>
                            <h1 id="my_font">124.456,78</h1>
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection