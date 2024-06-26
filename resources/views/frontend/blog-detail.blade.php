@extends('layouts.frontend')

@section('title', $pageTitle)

@section('content')
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="col-main">
                        <div class="page-title">
                            <h1>Blog</h1>
                        </div>
                        <div class="blog-wrapper" id="main">
                            <div class="site-content" id="primary">
                                <div role="main" id="content">
                                    <article class="blog_entry clearfix">
                                        <header class="blog_entry-header clearfix">
                                            <div class="blog_entry-header-inner">
                                                <h2 class="blog_entry-title"> Pellentesque habitant morbi </h2>
                                            </div>
                                            <!--blog_entry-header-inner-->
                                        </header>
                                        <!--blog_entry-header clearfix-->
                                        <div class="entry-content">
                                            <div class="featured-thumb"><a href="#"><img alt="blog-img4"
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
                                                <blockquote>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer
                                                    aliquam mi nec dolor placerat a condimentum diam mollis. Ut pulvinar
                                                    neque eget massa dapibus dolor.</blockquote>
                                                <p>Curabitur at vestibulum sem. Aliquam vehicula neque ac nibh suscipit
                                                    ultrices. Morbi interdum accumsan arcu nec scelerisque. Phasellus eget
                                                    purus nulla. Suspendisse quam est, tempor quis consectetur non, interdum
                                                    vitae diam. Pellentesque volutpat mollis ligula in laoreet. Aenean est
                                                    dui, sagittis in consequat at, adipiscing at risus. Sed suscipit, est
                                                    vitae aliquam molestie, sem dolor dignissim leo, eget imperdiet enim
                                                    urna in justo. Mauris pulvinar tortor lorem. Aliquam sed nisl in ipsum
                                                    tincidunt ultrices.</p>
                                                <p>Nullam commodo lobortis nibh, vitae accumsan velit dapibus sed. Nunc ac
                                                    sem eu libero pretium faucib. Quisque et semper odio. Praesent tortor
                                                    ligula, imperdiet sed aliquet ut, pharetra at nisi. Etiam sit amet
                                                    molestie est. Donec id turpis vitae leo viverra adipiscing at sed nisi.
                                                    Donec ut justo nunc. Vivamu bibendum erat ac nunc sollicitudin lacinia.
                                                    Phasellus sed lacus magna.</p>
                                            </div>
                                        </div>
                                        <footer class="entry-meta"> This entry was posted in <a rel="category tag"
                                                title="View all posts in First Category" href="#first-category">First
                                                Category</a> On
                                            <time datetime="2018-07-10T06:53:43+00:00" class="entry-date">Jul 10,
                                                2018</time>
                                            .
                                        </footer>
                                    </article>
                                    <div class="comment-content">
                                        <div class="comments-wrapper">
                                            <h3> Comments </h3>
                                            <ul class="commentlist">
                                                <li class="comment">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-author vcard">
                                                            <p class="gravatar"><a href="#"><img width="60"
                                                                        height="60" alt="avatar"
                                                                        src="{{asset('assets/frontend')}}/images/avatar60x60.jpg"></a></p>
                                                            <span class="author">John Doe</span>
                                                        </div>
                                                        <!--comment-author vcard-->
                                                        <div class="comment-meta">
                                                            <time datetime="2018-07-10T07:26:28+00:00"
                                                                class="entry-date">Thu, Jul 10, 2018 07:26:28 am</time>
                                                            .
                                                        </div>
                                                        <!--comment-meta-->
                                                        <div class="comment-body"> Curabitur at vestibulum sem. Aliquam
                                                            vehicula neque ac nibh suscipit ultrices. Morbi interdum
                                                            accumsan arcu nec scelerisque ellentesque id erat sem, ut
                                                            commodo nulla. Sed a nulla et eros fringilla. Phasellus eget
                                                            purus nulla. </div>
                                                    </div>
                                                </li>
                                                <!--comment-->
                                                <li class="comment">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-author vcard">
                                                            <p class="gravatar"><a href="#"><img width="60"
                                                                        height="60" alt="avatar"
                                                                        src="{{asset('assets/frontend')}}/images/avatar60x60.jpg"></a></p>
                                                            <span class="author">John Doe</span>
                                                        </div>
                                                        <!--comment-author vcard-->
                                                        <div class="comment-meta">
                                                            <time datetime="2018-07-10T07:27:08+00:00"
                                                                class="entry-date">Thu, Jul 10, 2018 07:27:08 am</time>
                                                            .
                                                        </div>
                                                        <!--comment-meta-->
                                                        <div class="comment-body"> Curabitur at vestibulum sem. Aliquam
                                                            vehicula neque ac nibh suscipit ultrices. Morbi interdum
                                                            accumsan arcu nec scelerisque ellentesque id erat sem, ut
                                                            commodo nulla. Sed a nulla et eros fringilla. Phasellus eget
                                                            purus nulla. </div>
                                                    </div>
                                                </li>
                                                <!--comment-->
                                                <li class="comment">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-author vcard">
                                                            <p class="gravatar"><a href="#"><img width="60"
                                                                        height="60" alt="avatar"
                                                                        src="{{asset('assets/frontend')}}/images/avatar60x60.jpg"></a></p>
                                                            <span class="author">John Doe</span>
                                                        </div>
                                                        <!--comment-author vcard-->
                                                        <div class="comment-meta">
                                                            <time datetime="2018-07-10T07:27:56+00:00"
                                                                class="entry-date">Thu, Jul 10, 2018 07:27:56 am</time>
                                                            .
                                                        </div>
                                                        <!--comment-meta-->
                                                        <div class="comment-body"> Curabitur at vestibulum sem. Aliquam
                                                            vehicula neque ac nibh suscipit ultrices. Morbi interdum
                                                            accumsan arcu nec scelerisque ellentesque id erat sem, ut
                                                            commodo nulla. Sed a nulla et eros fringilla. Phasellus eget
                                                            purus nulla. </div>
                                                    </div>
                                                </li>
                                                <!--comment-->
                                                <li class="comment">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-author vcard">
                                                            <p class="gravatar"><a href="#"><img width="60"
                                                                        height="60" alt="avatar"
                                                                        src="{{asset('assets/frontend')}}/images/avatar60x60.jpg"></a></p>
                                                            <span class="author">Lisa White</span>
                                                        </div>
                                                        <!--comment-author vcard-->
                                                        <div class="comment-meta">
                                                            <time datetime="2018-07-10T07:28:32+00:00"
                                                                class="entry-date">Thu, Jul 10, 2018 07:28:32 am</time>
                                                            .
                                                        </div>
                                                        <!--comment-meta-->
                                                        <div class="comment-body"> Curabitur at vestibulum sem. Aliquam
                                                            vehicula neque ac nibh suscipit ultrices. Morbi interdum
                                                            accumsan arcu nec scelerisque ellentesque id erat sem, ut
                                                            commodo nulla. Sed a nulla et eros fringilla. </div>
                                                    </div>
                                                </li>
                                                <!--comment-->
                                            </ul>
                                            <!--commentlist-->
                                        </div>
                                        <!--comments-wrapper-->

                                        <div class="comments-form-wrapper clearfix">
                                            <h3>Leave A reply</h3>
                                            <form class="comment-form" method="post" id="postComment">
                                                <div class="field">
                                                    <label>Name<em class="required">*</em></label>
                                                    <input type="text" class="input-text" title="Name" value=""
                                                        id="user" name="user_name">
                                                </div>
                                                <div class="field">
                                                    <label for="email">Email<em class="required">*</em></label>
                                                    <input type="text" class="input-text validate-email"
                                                        title="Email" value="" id="email" name="user_email">
                                                </div>
                                                <div class="clear"></div>
                                                <div class="field aw-blog-comment-area">
                                                    <label for="comment">Comment<em class="required">*</em></label>
                                                    <textarea rows="5" cols="50" class="input-text" title="Comment" id="comment" name="comment"></textarea>
                                                </div>
                                                <div class="button-set">
                                                    <input type="hidden" value="1" name="blog_id">
                                                    <button type="submit" class="bnt-comment"><span><span>Add
                                                                Comment</span></span></button>
                                                </div>
                                            </form>
                                        </div>
                                        <!--comments-form-wrapper clearfix-->

                                    </div>
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
                                        <figure class="featured-thumb"> <a href="{{route('blog.single')}}"> <img
                                                    width="80" height="53" alt="blog image"
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
