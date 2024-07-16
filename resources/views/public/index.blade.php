@extends('shared.public_main')

@section('content')
    @include('public.header')

    <div style="height: 100vh">
        <div class="row">
            {{-- Todo removing over flow --}}
            <div class="col" id="mainApp" style="overflow-y: auto !important;">
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

                    <tbody id="container_data">
                        {{-- @for ($i = 0; $i < 26; $i++)
                            <tr>
                                <td class="justify-content-end">
                                    <div class="d-flex flex-row text-center">
                                        <div class="p-3">
                                            <img src="{{ asset('flags/id.png') }}" class="rounded float-start"
                                                alt="...">
                                        </div>
                                        <div class="p-3" style="align-content: center">
                                            <span id="my_font_2" class="display-1">ID{{ $i }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span id="my_font" class="display-1">124.456,78</span>
                                </td>
                                <td>
                                    <span id="my_font" class="display-1">124.456,78</span>
                                </td>
                            </tr>
                        @endfor --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('public.footer')

    <script>
        var intervalFlagMove = {{ env('INTERVAL_FLAG_MOVE', 50000) }};
        var chunkSize = {{ env('SPLITTER_ROW', 13) }};
        var displayTime = document.querySelector(".display-time");
        var currencyTable = $('div#mainApp');
        var currencyTableST = currencyTable.scrollTop();

        $(document).ready(function() {
            countHeight();
            updateDate();
            // currency_table_auto_scroll();
            fill_data();
        });

        function fill_data() {
            var data = [];
            for (let index = 0; index < 30; index++) {
                data.push({
                    n: 'ID' + index,
                    b: 124.456,
                    c: 124.456,
                });
            }

            var container = $('tbody#container_data');
            var splitted = []
            for (let i = 0; i < data.length; i += chunkSize) {
                var chunkeddata = data.slice(i, i + chunkSize);
                splitted.push(chunkeddata);
            }

            indexed = container.attr("index");
            if (indexed === undefined || indexed === 0) {
                var index = 0;
            } else {
                var index = parseInt(indexed);
            }

            var usedData = splitted[index];
            if (usedData === undefined) {
                if (splitted.length > 0) {

                    var index = 0;
                    var usedData = splitted[index];
                } else {
                    return;
                }
            }

            html = '';
            $.each(usedData, function(indexInArray, valueOfElement) {
                html += '<tr>';
                html += '<td class="justify-content-end">';
                html += '<div class="d-flex flex-row text-center">';
                html += '<div class="p-3">';
                html += '<img src="" class="rounded float-start" alt="...">';
                html += '</div>';
                html += '<div class="p-3" style="align-content: center">';
                html += '<span id="my_font_2" class="display-1">ID ' + indexInArray + indexed + '</span>';
                html += ' </div>';
                html += ' </div>';
                html += '</td>';
                html += '<td>';
                html += ' <span id="my_font" class="display-1">124.456,78</span>';
                html += '</td>';
                html += '<td>';
                html += '<span id="my_font" class="display-1">124.456,78</span>';
                html += '</td>';
                html += '</tr>';
            });

            container[0].setAttribute('index', index + 1);
            container.fadeOut(400, function() {
                $(this).html(html).fadeIn(400);
            });

            setTimeout(() => {
                fill_data();
            }, intervalFlagMove);
        }

        function currency_table_auto_scroll() {
            function scroolUp() {
                currencyTable.animate({
                    scrollTop: 0
                }, {
                    duration: intervalFlagMove,
                    complete: function() {
                        currency_table_auto_scroll()
                    }
                });
            }

            var sb = currencyTable.children('table').children('tbody').prop("scrollHeight") - currencyTable.innerHeight();
            if (sb < 0) return;

            currencyTable.animate({
                scrollTop: currencyTable.innerHeight()
            }, {
                duration: intervalFlagMove,
                complete: function() {
                    scroolUp()
                }
            });
        }

        function countHeight() {
            var maxHeight = $(window).height();
            var headerHeight = $("div#header").height();
            var footerHeight = $("div#footer").height()
            var mainHeight = maxHeight - (headerHeight + footerHeight);
            $("div#mainApp").css("height", mainHeight);
        }
    </script>
@endsection
