<style>
    .blinking-image {
        animation: blink 1s infinite;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }
    .preloader>img{
            width:15%;
        }
    @media only screen and (max-width: 480px) {
        .preloader>img{
            width:50%;
        }
    }
</style>
<div class="preloader ">
    <img src="assets/img-custom/logo3.webp" alt="Loading..." class="blinking-image" />
</div>