<div id="header">
    <div class="row">
        <div class="col-2 text-center align-middle" style="align-content: center;">
            <h1 class="text-white">TIME</h1>
            {{-- 00:12 --}}
            <h2 class="display-time" style="color: #d65318"></h2>
        </div>

        <div class="col text-center align-middle" style="align-content: center">
            <img src="{{ asset('images/logo_bri.png') }}" alt="">

            <h1 class="text-white">CABANG DENPASAR</h1>

            <div style="padding-top: 2%">
                <h1 style="color: #d65318; font-weight: bold">
                    BRI EXCHANGE RATE
                </h1>
            </div>
        </div>

        <div class="col-2 text-center align-middle" style="align-content: center;">
            <h1 class="text-white">DATE</h1>
            {{-- 27 MEI 2024 --}}
            <h2 id="display-date" style="color: #d65318"></h2>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
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