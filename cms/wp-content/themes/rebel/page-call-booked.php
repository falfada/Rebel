<?php
get_header();
?>
<section class="container text-center booked">
    <div class="col-1 col-lg-2 m-auto">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%">
            <defs>
                <linearGradient id="linear-gradient" x1="-0.104" y1="0.302" x2="0.914" y2="0.636" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#0ff7a4" />
                    <stop offset="0.523" stop-color="#07f3d0" />
                    <stop offset="1" stop-color="#00f0fc" />
                </linearGradient>
            </defs>

            <circle cx="100" cy="100" r="100" fill="url(#linear-gradient)" />

            <g transform="translate(-90, -140) scale(2)">
                <path id="Path_119" d="M110,119.174H96.852l4.761-26.607L79.418,130.1H92.57L87.81,156.712Zm-13.121,2.817h8.185L93.334,141.838Zm-4.345,5.3H84.357l11.732-19.846Z" fill="#262626" />
            </g>
        </svg>
    </div>

    <h1 class="text-3xl mt-24"><span class="color-green material-symbols-outlined">
            check_circle
        </span> You are scheduled</h1>
    <p class="text-lg mt-8">A calendar invitation has been sent to your email address.</p>
</section>
<?php get_footer() ?>