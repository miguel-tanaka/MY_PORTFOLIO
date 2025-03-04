<?php require_once "./utils/header.php"; ?>

<style>
    /* ========== HEADER-BANNER ============== */
    .teste {
        color: red;
    }

    header {
        animation: to-button 1s ease forwards;
    }

    .home {
        position: relative;
        min-height: 100vh;
        background-color: #24262b;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 90px;
    }

    .text-box {
        width: 50%;
        z-index: 99;
    }

    .text-box h1 {
        color: rgb(0, 255, 4);
        font-size: 65px;
        font-weight: 700;
        animation: to-right 1s ease forwards;
    }

    .text-box h1:nth-child(2) {
        color: white;
        font-size: 58px;
        animation-delay: 1s;
    }

    .text-box p {
        color: white;
        max-width: 40px 0;
        font-size: 22px;
        color: rgb(178, 178, 181);
        animation: to-right 1s ease forwards 1.4s;

    }

    .btn-box {
        display: flex;
        gap: 20px;

    }

    .btn-banner {
        padding: 12px 30px;
        border: 2px solid rgb(0, 255, 4);
        background-color: transparent;
        color: white;
        cursor: pointer;
        font-size: 18px;
        border-radius: 4px;
        transition: .3s;
        font-weight: 600;
        animation: to-right 1s ease forwards 1.5s; 


    }

    .btn-banner:hover,
    .btn-banner:nth-child(2) {
        background-color: rgb(0, 255, 4);
        box-shadow: 0 0 15px rgb(0, 255, 4);
        color: black;
    }

    .btn-banner:nth-child(2):hover {
        background-color: transparent;
        color: white;
    }


    @keyframes to-button {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes to-right {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .text-box *{
        opacity: 0;
    }
    .text-box span{
        opacity: 1;
    }
</style>

<section class="home">
    <div class="text-box">
        <h1>Portfolio</h1>
        <h1>Miguel Tanaka.</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque modi earum cupiditate!</p>
        <span class="btn-box">
            <button type="button" class="btn-banner">Start Now</button>
            <button type="button" class="btn-banner">Contrate</button>
        </span>
    </div>
    <img src="././assets/img/img-banner.png" alt="1" class="objects">

</section>