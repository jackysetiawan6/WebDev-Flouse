<link rel="stylesheet" href="{{ asset('CSS/Components/Navbar.css') }}">
<div class="navbar-container">
    <ul class="navbar-part-1">
        <li>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="1.7rem" height="1.7rem" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 1c6.075 0 11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12S5.925 1 12 1m3.241 10.5c-.1-2.708-.992-4.904-1.89-6.452a14 14 0 0 0-1.304-1.88L12 3.11l-.047.059c-.354.425-.828 1.06-1.304 1.88c-.898 1.547-1.79 3.743-1.89 6.451Zm-12.728 0h4.745c.1-3.037 1.1-5.49 2.093-7.204c.39-.672.78-1.233 1.119-1.673C6.11 3.329 2.746 7 2.513 11.5m18.974 0C21.254 7 17.89 3.329 13.53 2.623c.339.44.729 1.001 1.119 1.673c.993 1.714 1.993 4.167 2.093 7.204ZM8.787 13c.182 2.478 1.02 4.5 1.862 5.953q.574.993 1.304 1.88l.047.057l.047-.059c.354-.425.828-1.06 1.304-1.88c.842-1.451 1.679-3.471 1.862-5.951Zm-1.504 0H2.552a9.505 9.505 0 0 0 7.918 8.377a16 16 0 0 1-1.119-1.673C8.413 18.085 7.47 15.807 7.283 13m9.434 0c-.186 2.807-1.13 5.085-2.068 6.704c-.39.672-.78 1.233-1.118 1.673A9.506 9.506 0 0 0 21.447 13Z" />
                </svg></a>
        </li>
        <li>
            <a href="{{ Route('store') }}">Store</a>
        </li>
        <li>
            <a href="{{ Route('forum') }}">Forum</a>
        </li>
        <li>
            <a href="">About</a>
        </li>
    </ul>
    <img src="../Image/Flouse.svg" alt="" class="image-modifer-logo">
    <ul class="navbar-part-2">
        <li>
            <div class="search-section">
                <input required type="text" name="search" class="search-input" placeholder="Type to search...">
                <div class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.7rem" height="1.7rem" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M232.49 215.51L185 168a92.12 92.12 0 1 0-17 17l47.53 47.54a12 12 0 0 0 17-17ZM44 112a68 68 0 1 1 68 68a68.07 68.07 0 0 1-68-68" />
                    </svg>
                </div>
            </div>
        </li>
        <li>
            <a href="/store" class="icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.7rem" height="1.7rem" viewBox="0 0 256 256">
                    <path fill="currentColor"
                        d="M216 60h-36.17a52 52 0 0 0-103.66 0H40a20 20 0 0 0-20 20v120a20 20 0 0 0 20 20h176a20 20 0 0 0 20-20V80a20 20 0 0 0-20-20m-88-24a28 28 0 0 1 27.71 24h-55.42A28 28 0 0 1 128 36m84 160H44V84h32v12a12 12 0 0 0 24 0V84h56v12a12 12 0 0 0 24 0V84h32Z" />
                </svg>
            </a>
        </li>
        <li>
            @auth
                {{-- <a href="" class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.7rem" height="1.7rem" viewBox="0 0 48 48">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                            d="M24 20a7 7 0 1 0 0-14a7 7 0 0 0 0 14M6 40.8V42h36v-1.2c0-4.48 0-6.72-.872-8.432a8 8 0 0 0-3.496-3.496C35.92 28 33.68 28 29.2 28H18.8c-4.48 0-6.72 0-8.432.872a8 8 0 0 0-3.496 3.496C6 34.08 6 36.32 6 40.8" />
                    </svg>
                </a>
                <ul class="dropdown">
                    <li><a href="">Profile</a></li>
                    <hr>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit">Log Out</button>
                        </form>
                    </li>
                </ul> --}}

                <label class="popup">
                    <input type="checkbox">
                    <div class="burger" tabindex="0">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <nav class="popup-window">
                        <ul>
                            <li>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 48 48">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                            d="M24 20a7 7 0 1 0 0-14a7 7 0 0 0 0 14M6 40.8V42h36v-1.2c0-4.48 0-6.72-.872-8.432a8 8 0 0 0-3.496-3.496C35.92 28 33.68 28 29.2 28H18.8c-4.48 0-6.72 0-8.432.872a8 8 0 0 0-3.496 3.496C6 34.08 6 36.32 6 40.8" />
                                    </svg>
                                    <span>Profile</span>
                                </button>
                            </li>
                            <li>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                            d="M262.29 192.31a64 64 0 1 0 57.4 57.4a64.13 64.13 0 0 0-57.4-57.4M416.39 256a154 154 0 0 1-1.53 20.79l45.21 35.46a10.81 10.81 0 0 1 2.45 13.75l-42.77 74a10.81 10.81 0 0 1-13.14 4.59l-44.9-18.08a16.11 16.11 0 0 0-15.17 1.75A164.5 164.5 0 0 1 325 400.8a15.94 15.94 0 0 0-8.82 12.14l-6.73 47.89a11.08 11.08 0 0 1-10.68 9.17h-85.54a11.11 11.11 0 0 1-10.69-8.87l-6.72-47.82a16.07 16.07 0 0 0-9-12.22a155 155 0 0 1-21.46-12.57a16 16 0 0 0-15.11-1.71l-44.89 18.07a10.81 10.81 0 0 1-13.14-4.58l-42.77-74a10.8 10.8 0 0 1 2.45-13.75l38.21-30a16.05 16.05 0 0 0 6-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 0 0-6.07-13.94l-38.19-30A10.81 10.81 0 0 1 49.48 186l42.77-74a10.81 10.81 0 0 1 13.14-4.59l44.9 18.08a16.11 16.11 0 0 0 15.17-1.75A164.5 164.5 0 0 1 187 111.2a15.94 15.94 0 0 0 8.82-12.14l6.73-47.89A11.08 11.08 0 0 1 213.23 42h85.54a11.11 11.11 0 0 1 10.69 8.87l6.72 47.82a16.07 16.07 0 0 0 9 12.22a155 155 0 0 1 21.46 12.57a16 16 0 0 0 15.11 1.71l44.89-18.07a10.81 10.81 0 0 1 13.14 4.58l42.77 74a10.8 10.8 0 0 1-2.45 13.75l-38.21 30a16.05 16.05 0 0 0-6.05 14.08c.33 4.14.55 8.3.55 12.47" />
                                    </svg>
                                    <span>Settings</span>
                                </button>
                            </li>
                            <hr>
                            <li>

                                <form action="/logout" method="post">
                                    @csrf

                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z" />
                                        </svg>
                                        <span>Log Out</span></button>
                                </form>
                            </li>
                        </ul>
                    </nav>
                </label>
            @else
                <div class="auth-section">
                    <a href="/login"><button class="login-btn">Login</button></a>
                    <a href="/register"><button class="register-btn">Register</button></a>
                </div>
            @endauth
        </li>
    </ul>
</div>
