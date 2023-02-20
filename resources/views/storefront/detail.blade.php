@php
    $html_tag_data = [];
    $title = 'Product Details';
    $description= 'Ecommerce Product Detail Page'
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
    <link rel="stylesheet" href="/css/vendor/glide.core.min.css"/>
    <link rel="stylesheet" href="/css/vendor/baguetteBox.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/baguetteBox.min.js"></script>
    <script src="/js/vendor/jquery.barrating.min.js"></script>
    <script src="/js/vendor/glide.min.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/glide.custom.js"></script>
    <script src="/js/pages/storefront.detail.js"></script>
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                            <span class="text-small align-middle">Storefront</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-end justify-content-end">
                    <!-- Edit Button Start -->
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                        <i data-acorn-icon="edit-square"></i>
                        <span>Edit</span>
                    </button>
                    <!-- Edit Button End -->

                    <!-- Dropdown Button Start -->
                    <div class="ms-1">
                        <button
                                type="button"
                                class="btn btn-outline-primary btn-icon btn-icon-only"
                                data-bs-offset="0,3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                        >
                            <i data-acorn-icon="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item" type="button">Move</button>
                            <button class="dropdown-item" type="button">Unpublish</button>
                            <button class="dropdown-item" type="button">Delete</button>
                        </div>
                    </div>
                    <!-- Dropdown Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <!-- Product Left Side Start -->
                            <div class="col-12 col-xl-7">
                                <div class="glide glide-gallery" id="glideStorefrontDetail">
                                    <span class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-4 z-index-1 py-2 px-3">20% OFF</span>
                                    <!-- Large Images Start -->
                                    <div class="glide glide-large">
                                        <div class="glide__track" data-glide-el="track">
                                            <ul class="glide__slides gallery-glide-custom">
                                                <li class="glide__slide p-0">
                                                    <a href="/img/product/large/product-1.webp">
                                                        <img
                                                                alt="detail"
                                                                src="/img/product/large/product-1.webp"
                                                                class="responsive border-0 rounded-md img-fluid mb-3 sh-35 sh-md-45 sh-xl-60 w-100"
                                                        />
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="/img/product/large/product-2.webp">
                                                        <img
                                                                alt="detail"
                                                                src="/img/product/large/product-2.webp"
                                                                class="responsive border-0 rounded-md img-fluid mb-3 sh-35 sh-md-45 sh-xl-60 w-100"
                                                        />
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="/img/product/large/product-3.webp">
                                                        <img
                                                                alt="detail"
                                                                src="/img/product/large/product-3.webp"
                                                                class="responsive border-0 rounded-md img-fluid mb-3 sh-35 sh-md-45 sh-xl-60 w-100"
                                                        />
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="/img/product/large/product-4.webp">
                                                        <img
                                                                alt="detail"
                                                                src="/img/product/large/product-4.webp"
                                                                class="responsive border-0 rounded-md img-fluid mb-3 sh-35 sh-md-45 sh-xl-60 w-100"
                                                        />
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="/img/product/large/product-5.webp">
                                                        <img
                                                                alt="detail"
                                                                src="/img/product/large/product-5.webp"
                                                                class="responsive border-0 rounded-md img-fluid mb-3 sh-35 sh-md-45 sh-xl-60 w-100"
                                                        />
                                                    </a>
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <a href="/img/product/large/product-6.webp">
                                                        <img
                                                                alt="detail"
                                                                src="/img/product/large/product-6.webp"
                                                                class="responsive border-0 rounded-md img-fluid mb-3 sh-35 sh-md-45 sh-xl-60 w-100"
                                                        />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Large Images End -->
                                    <!-- Thumbs Start -->
                                    <div class="glide glide-thumb">
                                        <div class="glide__track" data-glide-el="track">
                                            <ul class="glide__slides">
                                                <li class="glide__slide p-0">
                                                    <img alt="thumb" src="/img/product/small/product-1.webp" class="responsive rounded-md img-fluid" />
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <img alt="thumb" src="/img/product/small/product-2.webp" class="responsive rounded-md img-fluid" />
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <img alt="thumb" src="/img/product/small/product-3.webp" class="responsive rounded-md img-fluid" />
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <img alt="thumb" src="/img/product/small/product-4.webp" class="responsive rounded-md img-fluid" />
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <img alt="thumb" src="/img/product/small/product-5.webp" class="responsive rounded-md img-fluid" />
                                                </li>
                                                <li class="glide__slide p-0">
                                                    <img alt="thumb" src="/img/product/small/product-6.webp" class="responsive rounded-md img-fluid" />
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="glide__arrows" data-glide-el="controls">
                                            <button class="btn btn-icon btn-icon-only btn-foreground hover-outline left-arrow" data-glide-dir="<">
                                                <i data-acorn-icon="chevron-left"></i>
                                            </button>
                                            <button class="btn btn-icon btn-icon-only btn-foreground hover-outline right-arrow" data-glide-dir=">">
                                                <i data-acorn-icon="chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Thumbs End -->
                                </div>
                            </div>
                            <!-- Product Left Side End -->

                            <!-- Product Right Side Start -->
                            <div class="col-12 col-xl-5 sh-xl-60 d-flex flex-column justify-content-between">
                                <div>
                                    <a class="mb-1 d-inline-block text-small" href="#">Wood & Toy</a>
                                    <h3 class="mb-4">Wooden Animal Toys</h3>
                                    <div class="text-muted text-overline">
                                        <del>$ 14.25</del>
                                    </div>
                                    <div class="h4">$ 25.20</div>
                                    <div>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="text-muted d-inline-block text-small align-text-top">(25 Reviews)</div>
                                    </div>
                                    <p class="mt-2 mb-4 sh-11 clamp-line" data-line="4">
                                        Carrot cake jelly-o lemon drops toffee tootsie roll. Brownie topping toffee apple pie apple pie. Wafer pudding chocolate bar pastry
                                        bear claw tart carrot cake lemon drops icing. Gingerbread toffee topping. Tootsie roll cotton candy muffin cheesecake liquorice sweet.
                                        Sugar plum tart tart marshmallow chocolate wafer apple pie candy canes. Chocolate cake biscuit donut cotton candy soufflé cake
                                        macaroon. Halvah chocolate cotton candy sweet roll jelly-o candy danish dragée. Apple pie cotton candy tiramisu biscuit cake muffin
                                        tootsie roll bear claw cake. Cupcake cake fruitcake. Powder chocolate bar soufflé gummi bears topping donut. Danish jelly-o cotton
                                        candy sugar plum chocolate bar bonbon pastry. Cotton candy muffin cake sweet roll marshmallow chocolate cake liquorice fruitcake.
                                    </p>
                                    <div class="row g-3 mb-4">
                                        <div class="mb-3 col-12 col-sm-auto me-1">
                                            <label class="fw-bold form-label">Color</label>
                                            <div class="pt-1">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="inlineRadio" id="inlineRadio1" />
                                                    <label class="form-check-label" for="inlineRadio1">Red</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" class="form-check-input" name="inlineRadio" id="inlineRadio2" />
                                                    <label class="form-check-label" for="inlineRadio2">Blue</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-auto me-1">
                                            <label class="fw-bold form-label">Size</label>
                                            <select class="sw-10 select-single-no-search">
                                                <option selected>Pick</option>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-auto">
                                            <label class="fw-bold form-label">Quantity</label>
                                            <select class="sw-10 select-single-no-search">
                                                <option selected>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-icon btn-icon-end btn-outline-primary me-sm-1 mb-1 mb-sm-0 w-100 w-sm-auto" href="/Storefront/Checkout">
                                        <span>Purchase</span>
                                        <i data-acorn-icon="check-square"></i>
                                    </a>
                                    <a class="btn btn-icon btn-icon-end btn-primary w-100 w-sm-auto" href="/Storefront/Cart">
                                        <span>Add to Cart</span>
                                        <i data-acorn-icon="cart"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Product Right Side End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-8 mb-5">
                <!-- Details Start -->
                <h2 class="small-title">Product Details</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <h6>Cookie Macaroon</h6>
                        <p class="mb-4">
                            Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw. Pastry
                            sweet roll carrot cake cake macaroon gingerbread cookie.Candy pie sweet roll biscuit marzipan. Chocolate bar candy canes macaroon liquorice
                            danish biscuit biscuit.
                        </p>
                        <h6>Muffin</h6>
                        <p class="mb-4">
                            Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing carrot cake cupcake gummi bears danish. Sesame snaps muffin macaroon tiramisu
                            ice cream. Liquorice caramels apple pie chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear
                            claw. Pastry sweet roll carrot cake cake macaroon gingerbread cookie.
                        </p>
                        <h6>Liquorice</h6>
                        <p class="mb-4">
                            Snaps muffin macaroon tiramisu ice cream toffee carrot sesame tootsie roll.Brownie ice cream marshmallow topping. Icing liquorice oat cake
                            caramels. Sugar plum gummi bears jujubes cookie jelly-o tootsie roll chocolate bar. Jujubes candy jelly-o topping lemon drops. Cupcake
                            gingerbread cookie cookie lemon drops tootsie roll lollipop. Tiramisu toffee brownie sweet roll sesame snaps halvah. Icing carrot cake
                            cupcake gummi bears danish.
                        </p>
                        <h6>Powder Cake</h6>
                        <p class="mb-4">
                            Sesame snaps brownie gummi bears tootsie roll caramels dragée. Powder cake gummies jelly beans toffee carrot cake bonbon powder muffin.
                            Jujubes candy jelly-o topping lemon drops. Cupcake gingerbread cookie cookie lemon drops tootsie roll lollipop. Liquorice caramels apple pie
                            chupa chups bonbon. Jelly-o candy apple pie sugar plum icing chocolate cake lollipop jujubes bear claw. Pastry sweet roll carrot cake cake
                            macaroon gingerbread cookie.Carrot cake jelly-o lemon drops toffee tootsie roll. Brownie topping toffee apple pie apple pie. Wafer pudding
                            chocolate bar pastry bear claw tart carrot cake lemon drops icing. Gingerbread toffee topping. Tootsie roll cotton candy muffin cheesecake
                            liquorice sweet. Sugar plum tart tart marshmallow chocolate wafer apple pie candy canes. Chocolate cake biscuit donut cotton candy soufflé
                            cake macaroon. Halvah chocolate cotton candy sweet roll jelly-o candy danish dragée. Apple pie cotton candy tiramisu biscuit cake muffin
                            tootsie roll bear claw cake. Cupcake cake fruitcake.
                        </p>

                        <table class="table m-n2">
                            <thead>
                            <tr>
                                <th scope="col" class="text-small text-uppercase text-muted">CONTENT</th>
                                <th scope="col" class="text-small text-uppercase text-muted">AMOUNT</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Protein(g)</td>
                                <td>7.30</td>
                            </tr>
                            <tr>
                                <td>Thiamin(mg)</td>
                                <td>0.33</td>
                            </tr>
                            <tr>
                                <td>Niacin(mg)</td>
                                <td>1.6</td>
                            </tr>
                            <tr>
                                <td>Riboflavin(mg)</td>
                                <td>0.09</td>
                            </tr>
                            <tr>
                                <td>Iron(mg)</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Calcium(mg)</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td>Energy(kcal)</td>
                                <td>216</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Details End -->

                <!-- Reviews Start -->
                <h2 class="small-title">Reviews</h2>
                <div class="card mb-5">
                    <div class="card-body">
                        <!-- Total Rating Start -->
                        <div class="row mb-5">
                            <div class="col-12 col-sm-auto mb-3 mb-sm-0">
                                <div class="w-100 sw-sm-19 sw-md-23 border sh-16 rounded-md d-flex flex-column align-items-center justify-content-center">
                                    <div class="cta-1 text-alternate mb-2">4.8</div>
                                    <div>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <span class="text-muted">(22)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%80</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%10</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="4">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%5</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="3">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%0</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="2">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="progress mb-1">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="me-3 text-muted text-small">%5</span>
                                        <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="1">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Total Rating End -->

                        <!-- Comments Start -->
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Cherish Kerr</div>
                                    <div class="text-muted text-small mb-2">2 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Macaroon!</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Olli Hawkins</div>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Cupcake cake fruitcake. Powder chocolate bar soufflé gummi bears topping donut.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border-bottom border-separator-light pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-3.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Kirby Peters</div>
                                    <div class="text-muted text-small mb-2">3 days ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">Nice, very tasty.</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pb-3 mt-3">
                            <div class="row g-0 w-100">
                                <div class="col-auto">
                                    <div class="sw-5 me-3">
                                        <img src="/img/profile/profile-4.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                </div>
                                <div class="col pe-3">
                                    <div>Zayn Hartley</div>
                                    <div class="text-muted text-small mb-2">1 week ago</div>
                                    <div class="br-wrapper br-theme-cs-icon d-inline-block mb-2">
                                        <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="text-medium text-alternate lh-1-25">
                                        Chupa chups topping pastry halvah. Jelly cake jelly sesame snaps jelly beans jelly beans. Biscuit powder brownie powder sesame snaps
                                        jelly-o dragée cake. Pie tiramisu cake jelly lemon drops. Macaroon sugar plum apple pie carrot cake jelly beans chocolate.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Comments End -->
                    </div>
                </div>
                <!-- Reviews End -->

                <!-- Faq Start -->
                <h2 class="small-title">Faq</h2>
                <div class="card">
                    <div class="card-body mb-n2">
                        <div class="row g-0 mb-2">
                            <div class="col-auto">
                                <p class="sw-2 text-primary mb-2 fw-bold">1.</p>
                            </div>
                            <div class="col">
                                <p class="text-primary ps-3 mb-2 fw-bold">
                                    Carrot cake jelly-o lemon drops toffee tootsie roll. Brownie topping toffee apple pie apple pie?
                                </p>
                                <p class="text-body ps-3">
                                    Danish croissant bonbon danish muffin icing sugar plum marzipan oat cake. Biscuit powder brownie powder sesame snaps jelly-o dragée
                                    cake. Pie tiramisu cake jelly lemon drops. Macaroon sugar plum apple pie carrot cake jelly beans chocolate. Brownie bear claw tart.
                                    Powder danish ice cream brownie chupa.
                                </p>
                            </div>
                        </div>
                        <div class="row g-0 mb-2">
                            <div class="col-auto">
                                <p class="sw-2 text-primary mb-2 fw-bold">2.</p>
                            </div>
                            <div class="col">
                                <p class="text-primary ps-3 mb-2 fw-bold">Caramels wafer jelly beans?</p>
                                <p class="text-body ps-3">Chupa chups topping pastry halvah. Jelly cake jelly sesame snaps jelly beans jelly beans.</p>
                            </div>
                        </div>
                        <div class="row g-0 mb-2">
                            <div class="col-auto">
                                <p class="sw-2 text-primary mb-2 fw-bold">3.</p>
                            </div>
                            <div class="col">
                                <p class="text-primary ps-3 mb-2 fw-bold">Gingerbread jelly beans topping donut?</p>
                                <p class="text-body ps-3">
                                    Gingerbread caramels topping gummi bears halvah dessert cake. Wafer muffin gingerbread danish donut donut tootsie roll. Soufflé
                                    chocolate cake chupa chups danish brownie pudding fruitcake.
                                </p>
                            </div>
                        </div>
                        <div class="row g-0 mb-2">
                            <div class="col-auto">
                                <p class="sw-2 text-primary mb-2 fw-bold">4.</p>
                            </div>
                            <div class="col">
                                <p class="text-primary ps-3 mb-2 fw-bold">Dragée dessert gummies liquorice halvah chocolate?</p>
                                <p class="text-body ps-3">
                                    Ice cream ice cream candy gingerbread tiramisu jelly-o jelly. Brownie bear claw tart. Powder danish ice cream brownie chupa chups
                                    cupcake sweet roll. Tart ice cream biscuit cupcake.
                                </p>
                            </div>
                        </div>
                        <div class="row g-0 mb-2">
                            <div class="col-auto">
                                <p class="sw-2 text-primary mb-2 fw-bold">5.</p>
                            </div>
                            <div class="col">
                                <p class="text-primary ps-3 mb-2 fw-bold">Brownie topping toffee apple pie?</p>
                                <p class="text-body ps-3">
                                    Cake danish gingerbread wafer. Sugar plum sweet jelly-o chocolate cake lemon drops. Jujubes brownie marshmallow apple pie donut ice
                                    cream jelly-o jelly-o gummi bears. Tootsie roll chocolate bar dragée bonbon cheesecake icing. Danish wafer donut cookie caramels gummies
                                    topping. Toffee cupcake gummi bears gummies dragée danish chocolate bar. Roll cupcake sugar plum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Faq End -->
            </div>

            <!-- Similar Products Start -->
            <div class="col-12 col-xl-4">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h2 class="small-title">Similar Products</h2>
                        <div class="row g-2 row-cols-1 row-cols-md-2 row-cols-xl-1">
                            <div class="col">
                                <div class="card">
                                    <div class="row g-0 sh-16 sh-sm-17">
                                        <div class="col-auto h-100 position-relative">
                                            <span class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                                            <img
                                                    src="/img/product/small/product-1.webp"
                                                    alt="alternate text"
                                                    class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-16"
                                            />
                                        </div>
                                        <div class="col p-0">
                                            <div class="card-body d-flex align-items-center h-100 py-3">
                                                <div class="mb-0 h6">
                                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Wooden Animal Toys</div>
                                                    </a>
                                                    <div class="card-text mb-2">
                                                        <div class="text-muted text-overline text-small sh-2">
                                                            <del>$ 12.25</del>
                                                        </div>
                                                        <div>$ 8.50</div>
                                                    </div>
                                                    <div>
                                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-muted d-inline-block text-small align-text-top">(5)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="row g-0 sh-16 sh-sm-17">
                                        <div class="col-auto h-100">
                                            <img
                                                    src="/img/product/small/product-2.webp"
                                                    alt="alternate text"
                                                    class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-16"
                                            />
                                        </div>
                                        <div class="col p-0">
                                            <div class="card-body d-flex align-items-center h-100 py-3">
                                                <div class="mb-0 h6">
                                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Aromatic Green Candle</div>
                                                    </a>
                                                    <div class="card-text mb-2">
                                                        <div class="text-muted text-overline text-small sh-2"></div>
                                                        <div>$ 7.50</div>
                                                    </div>
                                                    <div>
                                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-muted d-inline-block text-small align-text-top">(2)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="row g-0 sh-16 sh-sm-17">
                                        <div class="col-auto h-100">
                                            <img
                                                    src="/img/product/small/product-3.webp"
                                                    alt="alternate text"
                                                    class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-16"
                                            />
                                        </div>
                                        <div class="col p-0">
                                            <div class="card-body d-flex align-items-center h-100 py-3">
                                                <div class="mb-0 h6">
                                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Good Glass Teapot</div>
                                                    </a>
                                                    <div class="card-text mb-2">
                                                        <div class="text-muted text-overline text-small sh-2"></div>
                                                        <div>$ 4.25</div>
                                                    </div>
                                                    <div>
                                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-muted d-inline-block text-small align-text-top">(4)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="row g-0 sh-16 sh-sm-17">
                                        <div class="col-auto h-100">
                                            <img
                                                    src="/img/product/small/product-4.webp"
                                                    alt="alternate text"
                                                    class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-16"
                                            />
                                        </div>
                                        <div class="col p-0">
                                            <div class="card-body d-flex align-items-center h-100 py-3">
                                                <div class="mb-0 h6">
                                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Modern Dark Pot</div>
                                                    </a>
                                                    <div class="card-text mb-2">
                                                        <div class="text-muted text-overline text-small sh-2"></div>
                                                        <div>$ 12.25</div>
                                                    </div>
                                                    <div>
                                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-muted d-inline-block text-small align-text-top">(12)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="row g-0 sh-16 sh-sm-17">
                                        <div class="col-auto h-100 position-relative">
                                            <span class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                                            <img
                                                    src="/img/product/small/product-5.webp"
                                                    alt="alternate text"
                                                    class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-16"
                                            />
                                        </div>
                                        <div class="col p-0">
                                            <div class="card-body d-flex align-items-center h-100 py-3">
                                                <div class="mb-0 h6">
                                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Wood Handle Hunter Knife</div>
                                                    </a>
                                                    <div class="card-text mb-2">
                                                        <div class="text-muted text-overline text-small sh-2">
                                                            <del>$ 3.25</del>
                                                        </div>
                                                        <div>$ 2.50</div>
                                                    </div>
                                                    <div>
                                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-muted d-inline-block text-small align-text-top">(9)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="row g-0 sh-16 sh-sm-17">
                                        <div class="col-auto h-100 position-relative">
                                            <span class="badge rounded-pill bg-primary me-1 position-absolute e-n2 t-2 z-index-1">SALE</span>
                                            <img
                                                    src="/img/product/small/product-6.webp"
                                                    alt="alternate text"
                                                    class="card-img card-img-horizontal h-100 sw-11 sw-sm-16 sw-lg-16"
                                            />
                                        </div>
                                        <div class="col p-0">
                                            <div class="card-body d-flex align-items-center h-100 py-3">
                                                <div class="mb-0 h6">
                                                    <a href="/Storefront/Detail" class="body-link stretched-link">
                                                        <div class="clamp-line sh-3 lh-1-5" data-line="1">Wireless On-Ear Headphones</div>
                                                    </a>
                                                    <div class="card-text mb-2">
                                                        <div class="text-muted text-overline text-small sh-2">
                                                            <del>$ 5.25</del>
                                                        </div>
                                                        <div>$ 2.85</div>
                                                    </div>
                                                    <div>
                                                        <div class="br-wrapper br-theme-cs-icon d-inline-block">
                                                            <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                        <div class="text-muted d-inline-block text-small align-text-top">(3)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Similar Products End -->
        </div>
    </div>
@endsection
