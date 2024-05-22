<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../CSS/profile.css">
        <link rel="stylesheet" href="../CSS/Address.css">
    </head>

    <body>
        @include('components/navbar')
        <div class="container-for-profile-page-main">
            @include('components/sidebar')
            <div class="content-for-profile-address-page">
                <div class="content-address-in-profile-page">
                    <div class="content-box-address-data">
                        <div class="button-with-plus">
                            <pplus><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
                                </svg></pplus>
                            <p1>Add New Address</p1>
                        </div>
                        <div class="address-box-for-profile-page coloring">
                            <div class="title-address">
                                <p2>Home</p2>
                                <pmain>Main</pmain>
                            </div>
                            <div class="name-address-user">
                                <pname>Ferren Andrea</pname>
                                <p3>6289619422323</p3>
                            </div>
                            <div class="location-address-user">
                                <ploc>Rumah Talenta Bca, Jalan Pakuan No.3, Sumur Batu, Babakan Madang Jawa Barat, Kab. Bogor, Babakan Madang, 16810
                                </ploc>
                                <div class="share-change-address" onclick="on()">
                                    <p>Change Address</p>
                                </div>
                            </div>
                        </div>
                        <div class="address-box-for-profile-page coloring">
                            <div class="title-address">
                                <p2>Home</p2>
                                <pmain>Main</pmain>
                            </div>
                            <div class="name-address-user">
                                <pname>Ferren Andrea</pname>
                                <p3>6289619422323</p3>
                            </div>
                            <div class="location-address-user">
                                <ploc>Rumah Talenta Bca, Jalan Pakuan No.3, Sumur Batu, Babakan Madang Jawa Barat, Kab. Bogor, Babakan Madang, 16810
                                </ploc>
                                <div class="share-change-address" onclick="on()">
                                    <p>Change Address</p>
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
                        <p>Address Label</p>
                        <input type="text" placeholder="Label">
                        <p4>4/20</p4>
                    </div>
                    <div class="per-text-input">
                        <p>Full Address</p>
                        <textarea name="" id="" cols="5" rows="auto" placeholder="Full Address"></textarea>
                        <p4>100/200</p4>
                    </div>
                    <div class="per-text-input">
                        <p>Notes for courier</p>
                        <input type="text" placeholder="Notes">
                        <p4>10/50</p4>
                    </div>
                    <div class="per-text-input">
                        <p>Receiver' Name</p>
                        <input type="text" placeholder="Full Name">
                        <p4>10/50</p4>
                    </div>
                    <div class="per-text-input">
                        <p>Phone Number</p>
                        <input type="text" placeholder="Phone Number">
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
    </script>

</html>