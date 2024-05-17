@extends('layouts.frontend')

@section('title', $pageTitle)

@section('content')
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-sm-9 bounceInUp animated">
                    <div class="col-main">
                        <div class="page-title">
                            <h2>Blog</h2>
                        </div>
                        <div class="blog-wrapper" id="main">
                            <div class="site-content" id="primary">
                                <div role="main" id="content">

                                    <article class="blog_entry clearfix">
                                        <header class="blog_entry-header clearfix">
                                            <div class="blog_entry-header-inner">
                                                <h2 class="blog_entry-title"> <a rel="bookmark"
                                                        href="{{route('blog.single')}}">Aliquam eget sapien placerat</a> </h2>
                                            </div>
                                            <!--blog_entry-header-inner-->
                                        </header>
                                        <div class="entry-content">
                                            <div class="featured-thumb"><a href="{{route('blog.single')}}"><img alt="blog-img3"
                                                        src="http://via.placeholder.com/1140x450"></a></div>
                                            <div class="entry-content">
                                                <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis
                                                    sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien.
                                                    Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc
                                                    pretium velit sed augue luctus accumsan.</p>
                                                <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod
                                                    laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec
                                                    eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate
                                                    eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim.
                                                    Sed nunc ipsum, fermentum varius dignissim vitae, blandit et
                                                    ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue
                                                    nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit
                                                    amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec
                                                    sit amet quam sem, et aliquet est.</p>
                                                <p>Quisque nisl lectus, accumsan et euismod eu, sollicitudin ac augue. In
                                                    sit amet urna magna. Curabitur imperdiet urna nec purus egestas eget
                                                    aliquet purus iaculis. Nunc porttitor blandit imperdiet. Nulla facilisi.
                                                    Cras odio ipsum, vehicula nec vehicula sed, convallis scelerisque quam.
                                                    Phasellus ut odio dui, ut fermentum neque.</p>
                                            </div>
                                            <p> <a class="btn" href="{{route('blog.single')}}">Read More</a> </p>
                                        </div>
                                        <footer class="entry-meta"> This entry was posted in <a rel="category tag"
                                                title="View all posts in First Category" href="#/first-category">First
                                                Category</a> On
                                            <time datetime="2018-07-10T06:59:14+00:00" class="entry-date">Jul 10,
                                                2018</time>
                                            .
                                        </footer>
                                    </article>
                                    <article class="blog_entry clearfix">
                                        <header class="blog_entry-header clearfix">
                                            <div class="blog_entry-header-inner">
                                                <h2 class="blog_entry-title"> <a rel="bookmark"
                                                        href="{{route('blog.single')}}">Dolor lorem ipsum</a> </h2>
                                            </div>
                                            <!--blog_entry-header-inner-->
                                        </header>
                                        <div class="entry-content">
                                            <div class="featured-thumb"><a href="{{route('blog.single')}}"><img alt="blog-img2"
                                                        src="http://via.placeholder.com/1140x450"></a></div>
                                            <div class="entry-content">
                                                <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis
                                                    sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien.
                                                    Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc
                                                    pretium velit sed augue luctus accumsan.</p>
                                                <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod
                                                    laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec
                                                    eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate
                                                    eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim.
                                                    Sed nunc ipsum, fermentum varius dignissim vitae, blandit et
                                                    ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue
                                                    nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit
                                                    amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec
                                                    sit amet quam sem, et aliquet est.</p>
                                            </div>
                                            <p> <a class="btn" href="{{route('blog.single')}}">Read More</a> </p>
                                        </div>
                                        <footer class="entry-meta"> This entry was posted in <a rel="category tag"
                                                title="View all posts in First Category" href="#/first-category">First
                                                Category</a> On
                                            <time datetime="2018-07-10T07:01:18+00:00" class="entry-date">Jul 10,
                                                2018</time>
                                            .
                                        </footer>
                                    </article>
                                    <article class="blog_entry clearfix">
                                        <header class="blog_entry-header clearfix">
                                            <div class="blog_entry-header-inner">
                                                <h2 class="blog_entry-title"> <a rel="bookmark"
                                                        href="{{route('blog.single')}}">Pellentesque posuere</a> </h2>
                                            </div>
                                            <!--blog_entry-header-inner-->
                                        </header>
                                        <div class="entry-content">
                                            <div class="featured-thumb"><a href="{{route('blog.single')}}"><img alt="blog-img1"
                                                        src="http://via.placeholder.com/1140x450"></a></div>
                                            <div class="entry-content">
                                                <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis
                                                    sed non est. Ut mi metus, semper eu dictum nec, condimentum sed sapien.
                                                    Nullam lobortis nunc semper ipsum luctus ut viverra ante eleifend. Nunc
                                                    pretium velit sed augue luctus accumsan.</p>
                                                <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod
                                                    laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec
                                                    eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate
                                                    eu turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim.
                                                    Sed nunc ipsum, fermentum varius dignissim vitae, blandit et
                                                    ante.Maecenas sagittis, lorem sed congue egestas, lectus purus congue
                                                    nisl, ac molestie enim ligula nec eros. Sed leo tortor, tincidunt sit
                                                    amet elementum vel, eleifend at orci. Maecenas ut turpis felis. Donec
                                                    sit amet quam sem, et aliquet est.</p>
                                            </div>
                                            <p> <a class="btn" href="{{route('blog.single')}}">Read More</a> </p>
                                        </div>
                                        <footer class="entry-meta"> This entry was posted in <a rel="category tag"
                                                title="View all posts in First Category" href="#/first-category">First
                                                Category</a> On
                                            <time datetime="2018-07-10T07:09:31+00:00" class="entry-date">Jul 10,
                                                2018</time>
                                            .
                                        </footer>
                                    </article>
                                </div>
                            </div>
                            <div class="pager">
                                <p class="amount"> <strong>4 Item(s)</strong> </p>
                                <div class="limiter">
                                    <label>Show</label>
                                    <select onchange="setLocation(this.value)">
                                        <option selected="selected" value="#/blog/?limit=5"> 5 </option>
                                        <option value="#/blog/?limit=10"> 10 </option>
                                        <option value="#/blog/?limit=15"> 15 </option>
                                        <option value="#/blog/?limit=20"> 20 </option>
                                        <option value="#/blog/?limit=all"> All </option>
                                    </select>
                                    per page
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-right sidebar col-sm-3 col-xs-12 bounceInUp animated">
                    <div role="complementary" class="widget_wrapper13" id="secondary">
                        <div class="popular-posts widget widget__sidebar" id="recent-posts-4">
                            <h3 class="widget-title"><span>Most Popular Post</span></h3>
                            <div class="widget-content">
                                <ul class="posts-list unstyled clearfix">
                                    <li>
                                        <figure class="featured-thumb"> <a href="{{route('blog.single')}}"> <img width="80"
                                                    height="53" alt="blog image"
                                                    src="http://via.placeholder.com/1140x450"> </a> </figure>
                                        <!--featured-thumb-->
                                        <h4><a title="Pellentesque posuere" href="#/pellentesque-posuere">Pellentesque
                                                posuere</a></h4>
                                        <p class="post-meta"><i class="icon-calendar"></i>
                                            <time datetime="2018-07-10T07:09:31+00:00" class="entry-date">Jul 10,
                                                2018</time>
                                            .
                                        </p>
                                    </li>
                                    <li>
                                        <figure class="featured-thumb"> <a href="{{route('blog.single')}}"> <img
                                                    width="80" height="53" alt="blog image"
                                                    src="http://via.placeholder.com/1140x450"> </a> </figure>
                                        <!--featured-thumb-->
                                        <h4><a title="Dolor lorem ipsum" href="#/dolor-lorem-ipsum">Dolor lorem ipsum</a>
                                        </h4>
                                        <p class="post-meta"><i class="icon-calendar"></i>
                                            <time datetime="2018-07-10T07:01:18+00:00" class="entry-date">Jul 10,
                                                2018</time>
                                            .
                                        </p>
                                    </li>
                                    <li>
                                        <figure class="featured-thumb"> <a href="{{route('blog.single')}}"> <img
                                                    width="80" height="53" alt="blog image"
                                                    src="http://via.placeholder.com/1140x450"> </a> </figure>
                                        <!--featured-thumb-->
                                        <h4><a title="Aliquam eget sapien placerat"
                                                href="#/aliquam-eget-sapien-placerat">Aliquam eget sapien placerat</a></h4>
                                        <p class="post-meta"><i class="icon-calendar"></i>
                                            <time datetime="2018-07-10T06:59:14+00:00" class="entry-date">Jul 10,
                                                2018</time>
                                            .
                                        </p>
                                    </li>
                                    <li>
                                        <figure class="featured-thumb"> <a href="{{route('blog.single')}}"> <img
                                                    width="80" height="53" alt="blog image"
                                                    src="http://via.placeholder.com/1140x450"> </a> </figure>
                                        <!--featured-thumb-->
                                        <h4><a title="Pellentesque habitant morbi"
                                                href="#/pellentesque-habitant-morbi">Pellentesque habitant morbi</a></h4>
                                        <p class="post-meta"><i class="icon-calendar"></i>
                                            <time datetime="2018-07-10T06:53:43+00:00" class="entry-date">Jul 10,
                                                2018</time>
                                            .
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <!--widget-content-->
                        </div>
                        <div class="popular-posts widget widget_categories">
                            <h3 class="widget-title"><span>Categories</span></h3>
                            <ul>
                                <li class="cat-item"><a href="#">First Category</a></li>
                                <li class="cat-item"><a href="#">Second Category</a></li>
                            </ul>
                        </div>
                        <!-- Banner Ad Block -->
                        <div class="ad-spots widget widget__sidebar">
                            <h3 class="widget-title"><span>Ad Spots</span></h3>
                            <div class="widget-content"><a target="_self" href="#" title=""><img
                                        alt="offer banner" src="http://via.placeholder.com/262x420"></a></div>
                        </div>
                        <!-- Banner Text Block -->
                        <div class="text-widget widget widget__sidebar">
                            <h3 class="widget-title"><span>Text Widget</span></h3>
                            <div class="widget-content">Mauris at blandit erat. Nam vel tortor non quam scelerisque cursus.
                                Praesent nunc vitae magna pellentesque auctor. Quisque id lectus.<br>
                                <br>
                                Massa, eget eleifend tellus. Proin nec ante leo ssim nunc sit amet velit malesuada pharetra.
                                Nulla neque sapien, sollicitudin non ornare quis, malesuada.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand Logo -->
    @include('frontend.includes.brand-logo')

    <!-- our features -->
    @include('frontend.includes.features-box')
@endsection
