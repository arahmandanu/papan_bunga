<div id="footer">
    <div class="row">
        <div class="col-12 text-center align-middle" style="align-content: center;">
            <h1>LOGO LOGO</h1>
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
