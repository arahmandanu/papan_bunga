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

                    <tbody id="container_data" current_page="1" total={{ $totalPage }}>
                        @forelse ($currencies as $chuck)
                            @php
                                $currentPage = $loop->iteration;
                            @endphp

                            @if ($loop->first)
                                @foreach ($chuck as $item)
                                    <tr index="{{ $currentPage }}">
                                        <td class="justify-content-end">
                                            <div class="d-flex flex-row text-center">
                                                <div class="p-3">
                                                    <img src="{{ asset($item['flag']) }}" class="rounded float-start"
                                                        alt="...">
                                                </div>
                                                <div class="p-3" style="align-content: center">
                                                    <span id="my_font_2" class="display-1">{{ $item['name'] }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span id="my_font" class="display-1">{{ $item['buy'] }}</span>
                                        </td>
                                        <td>
                                            <span id="my_font" class="display-1">{{ $item['sell'] }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach ($chuck as $item)
                                    <tr index="{{ $currentPage }}" style="display: none">
                                        <td class="justify-content-end">
                                            <div class="d-flex flex-row text-center">
                                                <div class="p-3">
                                                    <img src="{{ asset($item['flag']) }}" class="rounded float-start"
                                                        alt="...">
                                                </div>
                                                <div class="p-3" style="align-content: center">
                                                    <span id="my_font_2" class="display-1">{{ $item['name'] }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span id="my_font" class="display-1">{{ $item['buy'] }}</span>
                                        </td>
                                        <td>
                                            <span id="my_font" class="display-1">{{ $item['sell'] }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('public.footer', ['footers' => $footers])

    <script>
        var intervalFlagMove = {{ env('INTERVAL_FLAG_MOVE', 50000) }};
        var chunkSize = {{ env('SPLITTER_ROW', 13) }};
        var displayTime = document.querySelector(".display-time");
        var currencyTable = $('div#mainApp');
        var currencyTableST = currencyTable.scrollTop();
        const flags = {!! json_encode($currencies) !!};
        $(document).ready(function() {
            countHeight();
            updateDate();
            // currency_table_auto_scroll();
            // fill_data();
            autoMoveTable();
        });

        function autoMoveTable() {
            var container = $('tbody#container_data');
            var currentPage = container.attr('current_page');
            var totalPage = container.attr('total');
            if (totalPage <= 1) return;


            function setNextPage() {
                var container = $('tbody#container_data');
                var currentPage = container.attr('current_page');
                var totalPage = container.attr('total');
                nextPage = parseInt(currentPage) + 1;
                if (nextPage > parseInt(totalPage)) {
                    nextPage = 1;
                }
                console.log(nextPage, currentPage)
                var container = $('tbody#container_data');

                elementCurrentPage = container.find('tr[index=' + currentPage + ']');
                elementCurrentPage.fadeOut(1000, function() {
                    elementCurrentPage.css("display", 'none');
                });

                setTimeout(function() {
                    elementNextPage = container.find('tr[index=' + nextPage + ']');
                    elementNextPage.removeAttr("style");
                    elementNextPage.fadeIn('slow');
                    container.attr('current_page', String(nextPage))
                }, 1000);

            }

            setInterval(() => {
                setNextPage()
            }, intervalFlagMove);
        }

        function fill_data() {
            if (flags.length == 0) return;

            var container = $('tbody#container_data');
            var splitted = []
            for (let i = 0; i < flags.length; i += chunkSize) {
                var chunkeddata = flags.slice(i, i + chunkSize);
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
                html += '<img src="{{ asset('') }}' + valueOfElement.flag +
                    '" class="rounded float-start" alt="...">';
                html += '</div>';
                html += '<div class="p-3" style="align-content: center">';
                html += '<span id="my_font_2" class="display-1">' + valueOfElement.name + '</span>';
                html += ' </div>';
                html += ' </div>';
                html += '</td>';
                html += '<td>';
                html += ' <span id="my_font" class="display-1">' + valueOfElement.buy + '</span>';
                html += '</td>';
                html += '<td>';
                html += '<span id="my_font" class="display-1">' + valueOfElement.sell + '</span>';
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
