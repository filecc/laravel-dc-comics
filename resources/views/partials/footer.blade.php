<footer>
    @php
        $links = [
           [ 'title' => 'digital comics',
            'img' => 'digital-comics.png'
            ],
            [
                'title' => 'dc merchandise',
                'img' => 'merchandise.png'
            ],
            [
                'title' => 'subscription',
                'img' => 'subscriptions.png'
            ],
            [
                'title' => 'comic shop locator',
                'img' => 'shop-locator.png'
            ],
            [
                'title' => 'dc power visa',
                'img' => 'power-visa.svg'
            ]
        ]
    @endphp
    <div class="bg-primary py-5">
        <div class="container">
            <div class="row row-cols-5 mx-auto">
                @foreach ($links as $item)
                    <div class="col d-flex align-items-center justify-content-start">

                            <img class="footer-icon img-fluid" src="/images/buy-comics-{{$item['img']}}" alt="{{$item['img']}}">
                            <small class="ms-4 text-uppercase text-white">{{$item['title']}}</small>

                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <div class="footerBg py-5 text-white position-relative">
        <div class="container d-flex gap-4">
            <div class="d-flex flex-column gap-3">
                <div>
                    <h6 class="text-uppercase">dc comics</h6>
                    <ul class="m-0 p-0">
                       @foreach (['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'] as $item)
                        <li class="text-capitalize text-muted">{{$item}}</li>
                       @endforeach
                    </ul>
                </div>
                <div>
                    <h6 class="text-uppercase">shop</h6>
                    <ul class="m-0 p-0">
                       @foreach (['shop dc', 'shop dc collectibles'] as $item)
                        <li class="text-capitalize text-muted">{{$item}}</li>
                       @endforeach
                    </ul>
                </div>

            </div>

                <div>
                    <h6 class="text-uppercase">dc</h6>
                    <ul class="m-0 p-0">
                       @foreach (['terms of use', 'privacy policy (New)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'certifications', 'ratings', 'shop help', 'contact us'] as $item)
                        <li class="text-capitalize text-muted">{{$item}}</li>
                       @endforeach
                    </ul>
                </div>
                <div>
                    <h6 class="text-uppercase">sites</h6>
                    <ul class="m-0 p-0">
                       @foreach (['dc', 'mad magazines', 'dc kids', 'dc universe', 'dc power visa'] as $item)
                        <li class="text-capitalize text-muted">{{$item}}</li>
                       @endforeach
                    </ul>
                </div>
        </div>
        <div class="container py-2 text-muted">
            <small >All Site content TM and &copy; 2020 DC Entertainment, unless oherwise.</small>
        </div>
        <img class="footer-logo" src="/images/dc-logo-bg.png" alt="logo">
    </div>
    <div class="bg-fg-dark py-4 ">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <button class="btn btn-outline-primary rounded-0 text-white text-uppercase">sign-up now!</button>
            </div>
            <div class="d-flex justify-content-between align-items-center gap-4">
                <p class="text-primary text-uppercase fw-bold m-0 p-0">follow us</p>
                <div class="d-flex justify-content-between align-items-center gap-3 ">
                    @foreach (['facebook', 'twitter', 'youtube', 'pinterest', 'periscope'] as $item)
                        <img src="/images/footer-{{$item}}.png" alt="{{$item}}">
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</footer>
