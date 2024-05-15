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
                        <div class="data-title">Personal Data</div>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                                    </svg>
                                </div>
                                <div class="data-box">
                                    <p>20 February 1998</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                                    </svg>
                                </div>
                                <div class="data-box">
                                    <p>Female</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="change-contact-box">
                        <div class="data-title">Change Contact</div>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                                    </svg>
                                </div>
                                <div class="data-box">
                                    <p>6289619422323</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components/footer')
    </body>

</html>
