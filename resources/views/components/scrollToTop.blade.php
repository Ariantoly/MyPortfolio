<style>
    #toTopBtn {
        position: fixed;
        bottom: 26px;
        right: 39px;
        z-index: 98;
        padding: 21px;
        /* background-color: #03254c; */
    }

    .js .cd-top--fade-out {
        opacity: .5
    }

    .js .cd-top--is-visible {
        visibility: visible;
        opacity: 1
    }

    .js .cd-top {
        visibility: hidden;
        opacity: 0;
        transition: opacity .3s, visibility .3s, background-color .3s
    }

    .cd-top {
        position: fixed;
        bottom: 20px;
        bottom: var(--cd-back-to-top-margin);
        right: 20px;
        right: var(--cd-back-to-top-margin);
        display: inline-block;
        height: 40px;
        height: var(--cd-back-to-top-size);
        width: 40px;
        width: var(--cd-back-to-top-size);
        box-shadow: 0 0 10px rgba(0, 0, 0, .05);
        background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1571057658/cd-top-arrow.svg) no-repeat center 50%;
        /* background-color: #03254c; */
        background-color: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.8)
    }
</style>

<script>
    $(document).ready(function() {
        $('#toTopBtn').hide();
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#toTopBtn').fadeIn();
            } else {
                $('#toTopBtn').fadeOut();
            }
        });

        $('#toTopBtn').click(function() {
            $("html, body").animate({
            scrollTop: 0
            }, 100);
            return false;
        });
    });
</script>

<a href="#" id="toTopBtn" class="bg-primary rounded-circle cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

{{-- © https://bbbootstrap.com/snippets/simple-back-top-smooth-scroll-17111555 --}}