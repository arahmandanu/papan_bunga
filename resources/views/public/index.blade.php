@extends('shared.public_main')

@section('content')
    <div style="height: 100vh">
        <div class="row">
            {{-- Todo removing over flow --}}
            <div class="col" id="mainApp" style="overflow: auto !important;">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th width="20%">MATA UANG</th>
                            <th width="40%">BELI / BUY</th>
                            <th width="40%">JUAL / SELL</th>
                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 0; $i < 10; $i++)
                            <tr>
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
@endsection
