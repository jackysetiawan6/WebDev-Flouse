<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flouse - The House of Flora</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../CSS/Public.css">
        <link rel="stylesheet" href="../CSS/Forum.css">
    </head>
    <body>
        <div class="container">
            @include('Components.Navbar')
            @include('Components.ScrollToTop')
            <div class="container-main">
                <div class="main-left">
                    <div class="main-left-top">
                        <div class="top-left">
                            <div class="left-profile"></div>
                        </div>
                        <div class="top-right">
                            <div class="right-input">
                                <textarea class="form-control" placeholder="Type something..."></textarea>
                            </div>
                            <div class="right-tags">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="tag-item">
                                        <p>#rose_{{ $i }}</p>
                                        <i class="bi bi-x"></i>
                                    </div>
                                @endfor
                            </div>
                            <div class="right-separator"></div>
                            <div class="right-tool">
                                <div class="tool-left">
                                    <div class="tool-left-item">
                                        <img src="{{ asset('Image/Discussion/ImageIcon.svg') }}" alt="Image">
                                    </div>
                                    <div class="tool-left-item">
                                        <img src="{{ asset('Image/Discussion/GifIcon.svg') }}" alt="Gif">
                                    </div>
                                    <div class="tool-left-item">
                                        <img src="{{ asset('Image/Discussion/EmoticonIcon.svg') }}" alt="Emoticon">
                                    </div>
                                    <div class="tool-left-item">
                                        <img src="{{ asset('Image/Discussion/LocationIcon.svg') }}" alt="Location">
                                    </div>
                                    <div class="tool-left-item">
                                        <img src="{{ asset('Image/Discussion/HashtagIcon.svg') }}" alt="Hashtag">
                                    </div>
                                </div>
                                <button class="btn btn-primary tool-right">Post</button>
                            </div>
                        </div>
                    </div>
                    <div class="main-left-bottom">
                        @for ($i = 1; $i <= 10; $i++)
                            <div class="comment">
                                <div class="comment-left">
                                    <div class="comment-profile"></div>
                                </div>
                                <div class="comment-right">
                                    <div class="comment-name">
                                        <p class="name-text">@KarinaTirtayana</p>
                                        <p class="name-dot"></p>
                                        <p class="name-time">10 minutes ago</p>
                                    </div>
                                    <div class="comment-context">
                                        <span>I recently brought home a beautiful Orchid but it's not doing well. The leaves are wilting and drooping.  I've been watering it every 6 hours and giving it enough sunlight as I usually put it next to my window.  Is there a...</span>
                                        <span class="context-extend">Read more</span>
                                    </div>
                                    <div class="comment-tags">
                                        @for ($j = 1; $j <= 5; $j++)
                                            <p>#rose_{{ $j }}</p>
                                        @endfor
                                    </div>
                                    <div class="comment-tools">
                                        <div class="comment-tool">
                                            <div class="tool-left-item">
                                                <img src="{{ asset('Image/Discussion/ReplyIcon.svg') }}" alt="Reply">
                                            </div>
                                            <p>6</p>
                                        </div>
                                        <div class="comment-tool">
                                            <div class="tool-left-item">
                                                <img src="{{ asset('Image/Discussion/LikeIcon.svg') }}" alt="Like">
                                            </div>
                                            <p>9</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="main-right">
                    <div class="input-group">
                        <span id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input id="search-input" type="text" class="form-control" placeholder="Search tags" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                    </div>
                    <div class="trending">
                        <div class="trending-title">Today's Topic</div>
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="trending-item">
                                <p class="item-name mb-0">#AnneliseFlower</p>
                                <p class="item-count mb-0">69 posts</p>
                                <a href="#">See More</a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>