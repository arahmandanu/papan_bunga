<div id="footer">
    <div class="row">
        <div class="col-12 text-center align-middle" style="align-content: center;">
            <div class="row">
                <div class="col-md-2 ms-2 pb-1">
                    <img height="100px" src="{{ asset('images/contact_bri.jpg') }}" alt="contact bri">
                </div>

                <div class="col ms-4">
                    <div class="row">
                        <div class="col-12 text-start pb-2">
                            <h1><a href="https://bri.co.id/" style="color: white">www.bri.co.id</a></h1>
                        </div>

                        <div class="col-12">
                            <div class="d-flex flex-row mb-3">
                                <div>
                                    <h3>
                                        <a href="https://www.instagram.com/bankbri_id/" style="color: white">
                                            <i class="bx bxl-instagram">bankbri_id</i>
                                        </a>
                                    </h3>
                                </div>

                                <div class="ps-4">
                                    <h3>
                                        <a href="https://www.facebook.com/BRIofficialpage" style="color: white">
                                            <i class="bx bxl-facebook">BRIofficialpage</i>
                                        </a>
                                    </h3>
                                </div>

                                <div class="ps-4">
                                    <h3>
                                        <a href="https://www.youtube.com/channel/UCRHFE_ooDrkEiRRJbog3EjA"
                                            style="color: white">
                                            <i class="bx bxl-youtube">BANK BRI</i>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; padding: 5px;  border-radius: 10px;">
            <div class="bg-black"
                style="width: 98%; margin: 0 auto; display: inline-block; overflow: hidden;  border-radius: 25px;">
                @if ($footers->count() == 0)
                    <h1 class="moving_text invisible" id="para3">
                        -
                    </h1>
                @else
                    <h1 class="moving_text" id='para3'
                        @if (Arr::get($colors, 'footer_color')) style="color: {{ Arr::get($colors, 'footer_color.value') ?? Arr::get($colors, 'footer_color.default') }} !important" @endif>
                    </h1>
                @endif
            </div>
        </div>

    </div>
</div>

<script>
    const listTextFooter = {!! json_encode($footers) !!}
    $(document).ready(function() {
        if (listTextFooter.length > 0) {
            animate();
        }
    });

    function animate(index = 0) {
        const element = document.getElementById("para3");
        if (listTextFooter.length == 0) return;

        $('h1#para3').text(listTextFooter[index]);

        let elementWidth = element.offsetWidth;
        let parentWidth = element.parentElement.offsetWidth;
        let flag = parentWidth;
        setInterval(() => {
            element.style.marginLeft = --flag + "px";
            if (flag == (0 - elementWidth)) {
                index = index + 1;
                if (listTextFooter[index] === undefined) {
                    index = 0;
                }

                $('h1#para3').text(listTextFooter[index]);
                flag = parentWidth;
            }
        }, 20);
    }
</script>
