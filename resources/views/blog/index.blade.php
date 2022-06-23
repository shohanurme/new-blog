<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">
    <title>SHOHAN_BLOG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/mediumish.css" rel="stylesheet">
</head>

<body>


    <!- blog navbar-->

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand ms-5" href="#">
                    <h2>Blog</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active ms-5" aria-current="page" href="#">Home</a>
                        <a class="nav-link ms-5 " href="#">Post</a>
                        <a class="nav-link ms-5" href="#">Blog</a>
                    </div>
                </div>

                <div class="btn btn-outline-success me-5">
                    <a href="/create" class="text-decoration-none">
                        Create
                    </a>
                </div>

                <div class="d-flex justify-content-end me-5">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-info text-decoration-none me-3 ">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-success text-decoration-none me-3">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-success text-decoration-none me-3">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </nav>

        <!-- Begin Nav
================================================== -->
        {{-- <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <!-- Begin Logo -->
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
                <!-- End Logo -->
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <!-- Begin Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index">Stories <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="post">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="author">Author</a>
                        </li>
                    </ul>
                    <!-- End Menu -->
                    <!-- Begin Search -->
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                <path
                                    d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z">
                                </path>
                            </svg></span>
                    </form>
                    <!-- End Search -->
                </div>
            </div>
        </nav> --}}
        <!-- End Nav
================================================== -->

        <!-- Begin Site Title
================================================== -->
        <div class="container">
            <div class="mainheading">
                <h1 class="sitetitle">SHOHAN</h1>
                <p class="lead">
                    HI I AM SHOHAN
                </p>
            </div>
            <!-- End Site Title
================================================== -->

            <!-- Begin Featured
	================================================== -->
            <section class="featured-posts">
                <div class="section-title">
                    <h2><span>Post</span></h2>
                </div>


                <!-- begin post -->

                <di class="row ">


                    @foreach ($posts as $post )



                    <div class="col-5 border me-5 mt-5 p-2 p-3 mb-2 bg-light text-dark shadow p-3 mb-5 bg-body rounded">

                        <div class="card-block">
                            <h2 class="card-title"><a href="#" class="text-decoration-none">{{ $post->title }}</a>
                            </h2>
                            <h4 class="card-text">{{ $post->details }}</h4><br><br><br>
                            <div class="metafooter">


                                <a href="author"><img class="author-thumb"
                                        src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                        alt="Sal"></a>


                                <span>{{ $post->date }}</span><br>
                                <p>{{ $post->user_name }}</p>



                            </div>
                        </div>
                    </div>

                    @endforeach

        </div>


        </div>
        </section>
        <!-- End Featured
	================================================== -->

        <!-- Begin List Posts
	================================================== -->
        <section class="recent-posts">
            <div class="section-title">
                <h2><span>All Stories</span></h2>
            </div>
            <div class="card-columns listrecent">

                <!-- begin post -->
                <div class="card">
                    <a href="post">
                        <img class="img-fluid" src="assets/img/demopic/5.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Autumn doesn't have to be nostalgic, you
                                know?</a>
                        </h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="assets/img/demopic/6.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Best galleries in the world with photos</a></h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="assets/img/demopic/7.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post">Little red dress and a perfect summer</a></h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author.html">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="assets/img/demopic/8.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="">Thinking outside the box can help you prosper</a>
                        </h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post">
                        <img class="img-fluid" src="assets/img/demopic/9.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">10 Things you should know about choosing your
                                house</a></h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author.html"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post" title="Read Story"><svg class="svgIcon-use"
                                            width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post">
                        <img class="img-fluid" src="assets/img/demopic/10.jpg" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post">Visiting the world means learning cultures</a></h2>
                        <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in
                            to
                            additional content. This content is a little bit longer.</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="author"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="author">Sal</a></span><br />
                                    <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                        class="post-read">6 min read</span>
                                </span>
                                <span class="post-read-more"><a href="post" title="Read Story"><svg class="svgIcon-use"
                                            width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

            </div>
        </section>
        <!-- End List Posts
	================================================== -->

        <!-- Begin Footer
	================================================== -->
        <div class="footer">
            <p class="pull-left">
                Copyright &copy; 2017 Your Website Name
            </p>
            <p class="pull-right">
                Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
            </p>
            <div class="clearfix">
            </div>
        </div>
        <!-- End Footer
	================================================== -->

        </div>
        <!-- /.container -->

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
            <script src="assets/js/jquery.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
        </script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>

</script>
