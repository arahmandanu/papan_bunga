<div id="footer">
    <div class="row">
        <div class="col-12 text-center align-middle" style="align-content: center;">
            <h1>LOGO LOGO</h1>
        </div>

        <div style="text-align: center; padding: 5px;  border-radius: 25px;">
            <div class="bg-black"
                style="width: 98%; margin: 0 auto; display: inline-block; overflow: hidden;  border-radius: 25px;">
                <h1 class="moving_text display-1" id="para3">
                    This is the third line of the
                    example line of the example.
                </h1>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        const para3 = document.getElementById("para3");
        animate(para3);
    });

    function animate(element) {
        let elementWidth = element.offsetWidth;
        let parentWidth = element.parentElement.offsetWidth;
        let flag = parentWidth;
        setInterval(() => {
            element.style.marginLeft = --flag + "px";
            if (flag == (0 - elementWidth)) {
                flag = parentWidth;
            }
        }, 10);
    }
</script>
