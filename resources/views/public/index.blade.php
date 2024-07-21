@extends('shared.public_main')

@section('content')
    @include('public.header', ['colors' => $colors])

    <div style="height: 100vh">
        <div class="row">
            {{-- Todo removing over flow --}}
            <div class="col" id="mainApp" style="overflow-y: auto !important;">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th width="30%">
                                <h1 id="my_font"
                                    @if (Arr::get($colors, 'kurs_color')) style="color: {{ Arr::get($colors, 'kurs_color.value') ?? Arr::get($colors, 'kurs_color.default') }} !important" @endif>
                                    MATA
                                    UANG
                                </h1>
                            </th>
                            <th width="35%">
                                <h1 id="my_font_2">BELI / BUY</h1>
                            </th>
                            <th width="35%">
                                <h1 id="my_font_2">JUAL / SELL</h1>
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
                                                <div class="p-1">
                                                    <img src="{{ asset($item['flag']) }}" class="rounded float-start"
                                                        alt="...">
                                                </div>
                                                <div class="p-1 ms-4" style="align-content: center;">
                                                    <h1 id="my_font_2" class="display-5">{{ $item['name'] }}</h1>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h1 id="my_font" class="fw-normal display-5"
                                                @if (Arr::get($colors, 'kurs_color')) style="color: {{ Arr::get($colors, 'kurs_color.value') ?? Arr::get($colors, 'kurs_color.default') }} !important" @endif>
                                                {{ $item['buy'] }}
                                            </h1>
                                        </td>
                                        <td>
                                            <h1 id="my_font" class="fw-normal display-5"
                                                @if (Arr::get($colors, 'kurs_color')) style="color: {{ Arr::get($colors, 'kurs_color.value') ?? Arr::get($colors, 'kurs_color.default') }} !important" @endif>
                                                {{ $item['sell'] }}
                                            </h1>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach ($chuck as $item)
                                    <tr index="{{ $currentPage }}" style="display: none">
                                        <td class="justify-content-end">
                                            <div class="d-flex flex-row text-center">
                                                <div class="p-1">
                                                    <img src="{{ asset($item['flag']) }}" class="rounded float-start"
                                                        alt="...">
                                                </div>
                                                <div class="p-1 ms-4" style="align-content: center;">
                                                    <h1 class="display-5" id="my_font_2">{{ $item['name'] }}</h1>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h1 class="fw-normal display-5" id="my_font"
                                                @if (Arr::get($colors, 'kurs_color')) style="color: {{ Arr::get($colors, 'kurs_color.value') ?? Arr::get($colors, 'kurs_color.default') }} !important" @endif>
                                                {{ $item['buy'] }}
                                            </h1>
                                        </td>
                                        <td>
                                            <h1 class="fw-normal display-5" id="my_font"
                                                @if (Arr::get($colors, 'kurs_color')) style="color: {{ Arr::get($colors, 'kurs_color.value') ?? Arr::get($colors, 'kurs_color.default') }} !important" @endif>
                                                {{ $item['sell'] }}
                                            </h1>
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

    @include('public.footer', ['footers' => $footers, 'colors' => $colors])

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
                html += '<span class="display-5" id="my_font_2" >' + valueOfElement.name + '</span>';
                html += ' </div>';
                html += ' </div>';
                html += '</td>';
                html += '<td>';
                html += ' <span class="display-5" id="my_font" >' + valueOfElement.buy + '</span>';
                html += '</td>';
                html += '<td>';
                html += '<span class="display-5" id="my_font" >' + valueOfElement.sell + '</span>';
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
