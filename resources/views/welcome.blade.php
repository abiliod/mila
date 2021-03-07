@extends('layouts._site.app')

@section('content')

    @include('layouts._site._navHhasLogin')

    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
{{--  falta              automatizar o slides--}}
                <li style="background-image: url(  {{asset('images/ludmilla.jpg') }} );">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Lançamentos</h1>
                                        <h2 class="head-2">Com Descontos</h2>
                                        <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                        <p class="category"><span>Transforme suas competências pessoais.</span></p>
                                        <p><a href="#" class="btn btn-primary">Faça uma avaliação</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li style="background-image: url(  {{asset('images/ludmilla.jpg') }} );">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Lançamentos</h1>
                                        <h2 class="head-2">Com Descontos</h2>
                                        <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                        <p class="category"><span>Transforme suas competências pessoais.</span></p>
                                        <p><a href="#" class="btn btn-primary">Faça uma avaliação</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li style="background-image: url(   {{asset('images/ludmilla.jpg') }} );">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Lançamentos</h1>
                                        <h2 class="head-2">Com Descontos</h2>
                                        <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                        <p class="category"><span>Transforme suas competências pessoais.</span></p>
                                        <p><a href="#" class="btn btn-primary">Faça uma avaliação</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </aside>

    <div class="colorlib-intro">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="intro">
                        Descubra seu potencial. Escolha uma avaliação.
                    </h2>
                </div>
            </div>
        </div>
    </div>

{{--    customizar para mostrar os produtos que vier ser selecionado--}}
    <div class="colorlib-product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <a href="#" class="featured-img" style="background-image: url( {{asset('images/blog-3.jpg') }} );"></a>
                        <div class="desc">

                            {{--    customizar para mostrar os produtos que vier ser selecionado--}}
                            <h2><a href="#">Banner Multiplas inteligências</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <a href="#" class="featured-img" style="background-image: url(images/blog-2.jpg);"></a>
                        <div class="desc">
                            <h2><a href="#">Banner Sistema Representacional</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                    <h2> + Escolhidos</h2>
                </div>
            </div>

            <div class="row row-pb-md">
                <div class="w-100"></div>
                    <div class="col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="{route('product_detail', $registro->id)}}" class="prod-img">
                                <img src="{{asset('images/blog-2.jpg')}} " class="img-fluid" alt="Click">
                            </a>
                            <div class="desc">
                                <h2><a href="{route('product_detail', $registro->id)}}">Multiplas Inteligências</a></h2>
                                Faça essa avaliação e descubra coisas incríveis sobre você.
                                <span class="price">R$ 50,00</span>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="{route('product_detail', $registro->id)}}" class="prod-img">
                            <img src="{{asset('images/blog-2.jpg')}} " class="img-fluid" alt="Click">
                        </a>
                        <div class="desc">
                            <h2><a href="{route('product_detail', $registro->id)}}">Multiplas Inteligências</a></h2>
                            Faça essa avaliação e descubra coisas incríveis sobre você.
                            <span class="price">R$ 50,00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="{route('product_detail', $registro->id)}}" class="prod-img">
                            <img src="{{asset('images/blog-2.jpg')}} " class="img-fluid" alt="Click">
                        </a>
                        <div class="desc">
                            <h2><a href="{route('product_detail', $registro->id)}}">Multiplas Inteligências</a></h2>
                            Faça essa avaliação e descubra coisas incríveis sobre você.
                            <span class="price">R$ 50,00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="{route('product_detail', $registro->id)}}" class="prod-img">
                            <img src="{{asset('images/blog-2.jpg')}} " class="img-fluid" alt="Click">
                        </a>
                        <div class="desc">
                            <h2><a href="{route('product_detail', $registro->id)}}">Multiplas Inteligências</a></h2>
                            Faça essa avaliação e descubra coisas incríveis sobre você.
                            <span class="price">R$ 50,00</span>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-md-12 text-center">
                    <p><a href="{{route('/')}}" class="btn btn-primary btn-lg"> + Disponíveis</a></p>
                </div>
            </div>
        </div>
    </div>

{{--        @include('layouts._site._parceiros')--}}


    <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>
@endsection
