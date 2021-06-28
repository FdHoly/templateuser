<!doctype html>
<html class="no-js" lang="en">

@include('include.head')

<body>

    <!-- header area start -->
    <header>
        @include('include.navbar')
    </header>
    <!-- header area end -->

    <main>

        <div class="main-wrapper">
            {{-- <div class="profile-banner-large bg-img" data-bg="{{url('assets/images/banner/profile-banner.jpg')}}"> --}}
        </div>
        <div class="profile-menu-area bg-white" style="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">

                    </div>

                    {{-- @include('include.profilemenu') --}}
                    {{-- <div class="col-lg-2 col-md-3 d-none d-md-block">
                            <div class="profile-edit-panel">
                                <button class="edit-btn">edit profile</button>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">

                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="organisasi__foto">
                            <figure class="profile-picture">
                                <a href="profile.html">
                                    <img src="https://media-exp3.licdn.com/dms/image/C510BAQHzyDspmy9zYQ/company-logo_200_200/0/1579617593341?e=2159024400&v=beta&t=JxR_8Y7zhu4MQh5c2iUqn_atI61woD5dCetYYgataQg"
                                        alt="profile picture">
                                </a>
                            </figure>
                        </div>
                        <div class="card widget-item">
                            <h4 class="widget-title">
                                KBMTI
                                <br>
                                ( Keluarga Besar Mahasiswa Teknologi Informasi )
                            </h4>
                            {{-- <h4 >Keluarga Besar Mahasiswa Teknologi Informasi</h4> --}}
                            <div class="widget-body">
                                <div class="about-author">
                                    <p>Akun Resmi Organisasi Himpunan Teknologi Informasi Universitas Brawijaya</p>
                                    <ul class="author-into-list">
                                        <li><a href="#"><i class="bi bi-home"></i>Universitas Brawijaya</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- widget single item end -->


                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Pengikut</h4>
                            <div class="widget-body">

                                <ul class="like-page-list-wrapper">
                                    @for ($i = 0; $i < 4; $i++)
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ url('assets/images/profile/profile-small-33.jpg') }}"
                                                            alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="/profile">Azzamuddien</a></h3>
                                                {{-- <p class="list-subtitle"><a href="#"></a></p> --}}
                                            </div>
                                            {{-- <button class="like-button active">
                                                <img class="heart" src="{{url('assets/images/icons/heart.png')}}" alt="">
                                                <img class="heart-color" src="{{url('assets/images/icons/heart-color.png')}}" alt="">
                                            </button> --}}
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <!-- share box start -->
                    {{-- <div class="card card-small">
                            <div class="share-box-inner"> --}}
                    <!-- profile picture end -->
                    {{-- <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="{{url('assets/images/profile/profile-small-37.jpg')}}" alt="profile picture">
                                        </figure>
                                    </a>
                                </div> --}}
                    <!-- profile picture end -->

                    <!-- share content box start -->
                    {{-- <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                </div> --}}
                    <!-- share content box end -->
                    <!-- Modal start -->
                    {{-- <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Share Your Mood</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body custom-scroll">
                                                <textarea name="share" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                                <button type="button" class="post-share-btn">post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                    <!-- Modal end -->
                    {{-- </div>
                        </div> --}}
                    <!-- share box end -->

                    <!-- post status start -->
                    @for ($i = 0; $i < 2; $i++)
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="{{ url('assets/images/profile/profile-small-5.jpg') }}"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">Kate Palson</a></h6>
                                    <span class="post-time">35 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li>
                                                <button data-toggle="modal" data-target="#exampleModal">
                                                    Report
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal
                                                    title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button">Close</button>
                                                <button type="button" style="background-color:aqua; padding:10px">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.
                                </p>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters">
                                        <div class="col-8">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector"
                                                    href="{{ url('assets/images/post/post-large-2.jpg') }}">
                                                    <img src="{{ url('assets/images/post/post-2.jpg') }}"
                                                        alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector"
                                                            href="{{ url('assets/images/post/post-large-3.jpg') }}">
                                                            <img src="{{ url('assets/images/post/post-3.jpg') }}"
                                                                alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector"
                                                            href="{{ url('assets/images/post/post-large-4.jpg') }}">
                                                            <img src="{{ url('assets/images/post/post-4.jpg') }}"
                                                                alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector"
                                                            href="{{ url('assets/images/post/post-large-5.jpg') }}">
                                                            <img src="{{ url('assets/images/post/post-5.jpg') }}"
                                                                alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 207 people like this</span>
                                        <strong>207</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>41</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>07</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="{{ url('assets/images/profile/profile-small-4.jpg') }}"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">william henry</a></h6>
                                    <span class="post-time">35 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.
                                </p>
                                <div class="plyr__video-embed plyr-video">
                                    <iframe src="https://www.youtube.com/embed/WeA7edXsU40"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 201 people like this</span>
                                        <strong>201</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>41</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>07</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <!-- post status end -->

                </div>

                <div class="col-lg-3 order-3">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Pengumuman Organisasi</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    @for ($i = 0; $i < 4; $i++)
                                        <li class="unorder-list">
                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">IT FEST</a>
                                                </h3>
                                                <p class="list-subtitle">31 Juni 2021</p>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        {{-- ADV Here --}}

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Friends Zone</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ url('assets/images/profile/profile-small-10.jpg') }}"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">arfim bolt</a></h3>
                                            <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="{{ url('assets/images/icons/heart.png') }}"
                                                alt="">
                                            <img class="heart-color"
                                                src="{{ url('assets/images/icons/heart-color.png') }}" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ url('assets/images/profile/profile-small-2.jpg') }}"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">marry wither</a></h3>
                                            <p class="list-subtitle"><a href="#">02 mutual</a></p>
                                        </div>
                                        <button class="like-button active">
                                            <img class="heart" src="{{ url('assets/images/icons/heart.png') }}"
                                                alt="">
                                            <img class="heart-color"
                                                src="{{ url('assets/images/icons/heart-color.png') }}" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ url('assets/images/profile/profile-small-5.jpg') }}"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                            <p class="list-subtitle"><a href="#">drama</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="{{ url('assets/images/icons/heart.png') }}"
                                                alt="">
                                            <img class="heart-color"
                                                src="{{ url('assets/images/icons/heart-color.png') }}" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ url('assets/images/profile/profile-small-14.jpg') }}"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                            <p class="list-subtitle"><a href="#">fitness</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="{{ url('assets/images/icons/heart.png') }}"
                                                alt="">
                                            <img class="heart-color"
                                                src="{{ url('assets/images/icons/heart-color.png') }}" alt="">
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>
            </div>
        </div>
        </div>

    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->



    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{ url('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ url('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ url('assets/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ url('assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- Slick Slider JS -->
    <script src="{{ url('assets/js/plugins/slick.min.js') }}"></script>
    <!-- nice select JS -->
    <script src="{{ url('assets/js/plugins/nice-select.min.js') }}"></script>
    <!-- audio video player JS -->
    <script src="{{ url('assets/js/plugins/plyr.min.js') }}"></script>
    <!-- perfect scrollbar js -->
    <script src="{{ url('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <!-- light gallery js -->
    <script src="{{ url('assets/js/plugins/lightgallery-all.min.js') }}"></script>
    <!-- image loaded js -->
    <script src="{{ url('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope filter js -->
    <script src="{{ url('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ url('assets/js/main.js') }}"> </script>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>

</body>

</html>
