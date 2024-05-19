<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/profile.css">
</head>

<body>
    @include('components/navbar')
    <div class="container-for-profile-page-main">
        @include('components/sidebar')
        <div class="content-for-profile-page">
            <div class="profile-image-editor">
                <div class="image-place"></div>
                <div class="button-changer">Choose Picture</div>
            </div>
            <div class="personal-data-change-contact-box">
                <div class="change-contact-box">
                    <div class="contact-box-mod">
                        <div class="data-title">Personal Data</div>
                        <div class="on-button" onclick="on()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="m14.363 5.652l1.48-1.48a2 2 0 0 1 2.829 0l1.414 1.414a2 2 0 0 1 0 2.828l-1.48 1.48m-4.243-4.242l-9.616 9.615a2 2 0 0 0-.578 1.238l-.242 2.74a1 1 0 0 0 1.084 1.085l2.74-.242a2 2 0 0 0 1.24-.578l9.615-9.616m-4.243-4.242l4.243 4.242" />
                            </svg>
                        </div>
                    </div>
                    <div class="personal-data-box">
                        <div class="data-with-data-title">
                            <div class="data-box-title">
                                <p>Full Name</p>
                                <p>Birth Date</p>
                                <p>Gender</p>
                            </div>
                        </div>
                        <div class="data-form-name-dll">
                            <div class="data-box">
                                <p>Ferren Andrea</p>

                            </div>
                            <div class="data-box">
                                <p>20 February 1998</p>

                            </div>
                            <div class="data-box">
                                <p>Female</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="change-contact-box">
                    <div class="contact-box-mod">
                        <div class="data-title">Change Contact</div>
                        <div class="on-button" onclick="ons()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="m14.363 5.652l1.48-1.48a2 2 0 0 1 2.829 0l1.414 1.414a2 2 0 0 1 0 2.828l-1.48 1.48m-4.243-4.242l-9.616 9.615a2 2 0 0 0-.578 1.238l-.242 2.74a1 1 0 0 0 1.084 1.085l2.74-.242a2 2 0 0 0 1.24-.578l9.615-9.616m-4.243-4.242l4.243 4.242" />
                            </svg>
                        </div>
                    </div>
                    <div class="personal-data-box">
                        <div class="data-with-data-title">
                            <div class="data-box-title">
                                <p>Email</p>
                                <p>Phone Number</p>
                            </div>
                        </div>
                        <div class="data-form-name-dll">
                            <div class="data-box">
                                <p>Ferrenandrea@gmail.com</p>

                            </div>
                            <div class="data-box">
                                <p>6289619422323</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="overlay-effect">
        <div class="overlay-for-address">
            <div class="title-bar">
                <p>Change Address</p>
                <div class="off-button" onclick="off()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m6.4 18.308l-.708-.708l5.6-5.6l-5.6-5.6l.708-.708l5.6 5.6l5.6-5.6l.708.708l-5.6 5.6l5.6 5.6l-.708.708l-5.6-5.6z" />
                    </svg>
                </div>
            </div>
            <div class="form-for-address">
                <div class="per-text-input">
                    <p>Name</p>
                    <input type="text" placeholder="Name">
                    <p4>4/20</p4>
                </div>
                <div class="per-text-input">
                    <p>Birth Date</p>
                    <input type="date" placeholder="Date">
                    <br>
                </div>
                <div class="per-text-input">
                    <p>Gender</p>
                    <div class="input-radio-button">
                        <div class="input-1">
                            <input type="radio" placeholder="Gender">
                            <p>Male</p>
                        </div>
                        <div class="input-2">
                            <input type="radio" placeholder="Gender">
                            <p>Female</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="button-for-overlay">
                <button>Save</button>
            </div>
        </div>
    </div>
    <div id="overlay-effect-change-contact">
        <div class="overlay-for-address">
            <div class="title-bar">
                <p>Change Address</p>
                <div class="off-button" onclick="offs()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m6.4 18.308l-.708-.708l5.6-5.6l-5.6-5.6l.708-.708l5.6 5.6l5.6-5.6l.708.708l-5.6 5.6l5.6 5.6l-.708.708l-5.6-5.6z" />
                    </svg>
                </div>
            </div>
            <div class="form-for-address">
                <div class="per-text-input">
                    <p>Name</p>
                    <input type="text" placeholder="Name">
                    <p4>4/20</p4>
                </div>
                <div class="per-text-input">
                    <p>Birth Date</p>
                    <input type="date" placeholder="Date">
                    <br>
                </div>
                <div class="per-text-input">
                    <p>Gender</p>
                    <div class="input-radio-button">
                        <div class="input-1">
                            <input type="radio" placeholder="Gender">
                            <p>Male</p>
                        </div>
                        <div class="input-2">
                            <input type="radio" placeholder="Gender">
                            <p>Female</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="button-for-overlay">
                <button>Save</button>
            </div>
        </div>
    </div>
    @include('components/footer')

</body>
<script>
    function on() {
        document.getElementById("overlay-effect").style.display = "flex";
    }

    function off() {
        document.getElementById("overlay-effect").style.display = "none";
    }

    function ons() {
        document.getElementById("overlay-effect-change-contact").style.display = "flex";
    }

    function offs() {
        document.getElementById("overlay-effect-change-contact").style.display = "none";
    }
</script>

</html>
