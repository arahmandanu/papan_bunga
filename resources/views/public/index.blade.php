@extends('shared.public_main')

@section('content')
    @include('public.header')

    <div style="height: 100vh">
        <div class="row">
            {{-- Todo removing over flow --}}
            <div class="col" id="mainApp" style="overflow: auto !important;">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th width="30%">
                                <h1 id="my_font" class="display-1">MATA UANG</h1>
                            </th>
                            <th width="35%">
                                <h1 id="my_font_2" class="display-1">BELI / BUY</h1>
                            </th>
                            <th width="35%">
                                <h1 id="my_font_2" class="display-1">JUAL / SELL</h1>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 0; $i < 16; $i++)
                            <tr style="vertical-align: baseline">
                                <td>
                                    <img src="{{ asset('flags/id.png') }}" class="rounded float-start" alt="...">
                                    <h1 id="my_font_2" class="display-1">ID</h1>
                                </td>
                                <td>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h1 id="my_font" class="display-1">124.456,78</h1>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h1 id="my_font" class="display-1">124.456,78</h1>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('public.footer')

    <script>
        var displayTime = document.querySelector(".display-time");

        $(document).ready(function() {
            countHeight();
            updateDate();
        });

        function countHeight() {
            var maxHeight = $(window).height();
            var headerHeight = $("div#header").height();
            var footerHeight = $("div#footer").height()
            var mainHeight = maxHeight - (headerHeight + footerHeight);
            console.log(mainHeight);
            $("div#mainApp").css("height", mainHeight);
        }
    </script>
@endsection
