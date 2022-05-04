@extends('main.layouts.layout')

@section('title', 'Главная')

@section('content')
    <section id="cta" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 align-self-center">
                    <h2>A digital marketing blog</h2>
                    <p class="lead"> Aenean ut hendrerit nibh. Duis non nibh id tortor consequat cursus at mattis felis.
                        Praesent sed lectus et neque auctor dapibus in non velit. Donec faucibus odio semper risus
                        rhoncus rutrum. Integer et ornare mauris.</p>
                    <a href="#" class="btn btn-primary">Try for free</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-custom-build">

                            @foreach($posts as $post)
                                <div class="blog-box wow fadeIn">
                                    <div class="post-media">
                                        <a href="" title="">
                                            <img src="upload/market_blog_01.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">


                                        <h4><a href="{{ route('post.single', $post->slug )}}"
                                               title="{{ $post->title }}">{{ $post->description }}</a></h4>
                                        <p>{{ $post->content }}</p>

                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                            @endforeach

                        </div>
                    </div>

                    <hr class="invis">

                    {{ $posts->links() }}

                </div><!-- end col -->

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Последние статьи</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @foreach($lastPosts as $post)
                                        <a href="marketing-single.html"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <h5 class="mb-1">{{ $post->title }}</h5>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->


                        <div class="widget">
                            <h2 class="widget-title">Популярные категории</h2>
                            <div class="link-widget">
                                <ul>
                                    @foreach($categories as $category)
                                        <li><a href="#">{{ $category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
