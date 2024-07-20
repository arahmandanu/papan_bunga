<div id="footer" class="pt-5">
    <div class="row">
        <div class="col-12 text-center align-middle" style="align-content: center;">
            <div class="row">
                <div class="col-md-2 pb-5">
                    <img height="155px" src="{{ asset('images/contact_bri.jpg') }}" alt="contact bri">
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col-12 text-start pb-2">
                            <a href="https://bri.co.id/" style="color: white" class="display-3">www.bri.co.id</a>
                        </div>

                        <div class="col-12">
                            <div class="d-flex flex-row mb-3">
                                <div>
                                    <a href="https://www.instagram.com/bankbri_id/" style="color: white">
                                        <i class="bx bxl-instagram display-5"> bankbri_id</i>
                                    </a>
                                </div>

                                <div class="ps-5">
                                    <a href="https://www.facebook.com/BRIofficialpage" style="color: white">
                                        <i class="bx bxl-facebook display-5"> BRIofficialpage</i>
                                    </a>
                                </div>

                                <div class="ps-5">
                                    <a href="https://www.youtube.com/channel/UCRHFE_ooDrkEiRRJbog3EjA"
                                        style="color: white">
                                        <i class="bx bxl-youtube display-5"> BANK BRI</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; padding: 5px;  border-radius: 25px;">
            <div class="bg-black"
                style="width: 98%; margin: 0 auto; display: inline-block; overflow: hidden;  border-radius: 25px;">
                @if ($footers->count() == 0)
                    <h1 class="moving_text display-1 invisible" id="para3">
                        -
                    </h1>
                @else
                    <h1 class="moving_text display-1" id='para3'></h1>
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
