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
                                <h1>MATA UANG</h1>
                            </th>
                            <th width="35%">
                                <h1>BELI / BUY</h1>
                            </th>
                            <th width="35%">
                                <h1>JUAL / SELL</h1>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <td>
                                    <span>bendera</span> | <h1>USD</h1>
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
