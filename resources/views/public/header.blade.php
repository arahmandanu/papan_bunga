<div id="header">
    <div class="row">
        <div class="col-3 text-center align-middle" style="align-content: center;">
            <h1 class="text-white">TIME</h1>
            {{-- 00:12 --}}
            <h2 class="display-time " @if (Arr::get($colors, 'data_time_color' ))
                style="color: {{ Arr::get($colors, 'data_time_color.value') ?? Arr::get($colors, 'data_time_color.default') }} !important; font-weight: bold"
                @else style="color: #d65318; font-weight: bold" @endif>
            </h2>
        </div>

        <div class="col text-center align-middle" style="align-content: center">
            <img style="width: 250px" src="{{ asset('images/logo_bri.png') }}" alt="">

            <h1 class="text-white">{{ Str::upper($properties->company_name ?? 'KOSONG!!!!!') }}</h1>

            <div style="padding-top: 10%;">
                <h1 class="display-5" @if (Arr::get($colors, 'data_time_color' ))
                    style="color: {{ Arr::get($colors, 'data_time_color.value') ?? Arr::get($colors, 'data_time_color.default') }} !important; font-weight: bold"
                    @else style="color: #d65318; font-weight: bold" @endif>
                    BRI EXCHANGE RATE
                </h1>
            </div>
        </div>

        <div class="col-3 text-center align-middle" style="align-content: center;">
            <h1 class="text-white display-5">DATE</h1>
            {{-- 27 MEI 2024 --}}
            <h2 class="" id="display-date" @if (Arr::get($colors, 'data_time_color' ))
                style="color: {{ Arr::get($colors, 'data_time_color.value') ?? Arr::get($colors, 'data_time_color.default') }} !important; font-weight: bold"
                @else style="color: #d65318; font-weight: bold" @endif>
            </h2>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        showTime();
    });

    // Time
    function showTime() {
        let time = new Date();
        displayTime.innerText = time.toLocaleTimeString("en-US", {
            hour12: false,
            hour: 'numeric',
            minute: '2-digit'
        });

        // jangan di ubah timeout detikannya
        setTimeout(showTime, 1000);
        time = undefined;
    }


    // Date
    function updateDate() {
        let today = new Date();

        let dayName = today.getDay(),
            dayNum = today.getDate(),
            month = today.getMonth(),
            year = today.getFullYear();

        var months = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        ];
        var dayWeek = [
            "Senin",
            "Selasa",
            "Rabu",
            "Kamis",
            "Jum'at",
            "Sabtu",
            "Minggu",
        ];
        // value -> ID of the html element
        var IDCollection = ["day", "daynum", "month", "year"];

        // return value array with number as a index
        var val = [dayWeek[dayName], dayNum, months[month], year];
        document.getElementById('display-date').innerHTML = (val[1] + " " + val[2] + " " + val[3]);
        today = undefined;
        dayName = undefined;
        dayNum = undefined;
        month = undefined;
        year = undefined;
        months = undefined;
        dayWeek = undefined;
        IDCollection = undefined;
        val = undefined;
    }
</script>