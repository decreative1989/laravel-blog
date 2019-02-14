@extends('layouts.frontend.varsity.layout')
@section('content')
    <!-- Start gallery  -->
    <section id="mu-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-gallery-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Some Moments</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut laboriosam corporis
                                doloribus, officia, accusamus illo nam tempore totam alias!</p>
                        </div>
                        <!-- end title -->
                        <!-- start gallery content -->
                        <div class="mu-gallery-content">
                            <!-- Start gallery menu -->
                            <div class="mu-gallery-top">
                                <ul>
                                    <li class="filter active" data-filter="all">All</li>
                                    {{-- <li class="filter" data-filter=".lab">Lab</li>--}}
                                    @foreach($albums as $album)
                                        <li class="filter" data-filter=".{{$album->slug}}">{{$album->title}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End gallery menu -->
                            <div class="mu-gallery-body">
                                <ul id="mixit-container" class="row">
                                @foreach($albums as $album)
                                    @foreach($album->gallery as $gallery)
                                        @if($loop->index < 6)
                                            <!-- start single gallery image -->
                                                <li class="col-md-4 col-sm-6 col-xs-12 mix {{$album->slug}}">
                                                    <div class="mu-single-gallery">
                                                        <div class="mu-single-gallery-item">
                                                            <div class="mu-single-gallery-img">
                                                                <a href="#"><img alt="img"
                                                                                 src="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/img/gallery/small/'.$gallery->image)}}"></a>
                                                            </div>
                                                            <div class="mu-single-gallery-info">
                                                                <div class="mu-single-gallery-info-inner">
                                                                    <h4>{{$gallery->title}}</h4>
                                                                    <p>{{$gallery->description}}</p>
                                                                    <a href="{{asset('frontend/'.config('setting.frontend.template.folder','varsity').'/assets/img/gallery/big/'.$gallery->image)}}"
                                                                       data-fancybox-group="gallery"
                                                                       class="fancybox"><span
                                                                            class="fa fa-eye"></span></a>
                                                                    <a href="{{empty($gallery->url)?'#':$gallery->url}}"
                                                                       class="aa-link"><span
                                                                            class="fa fa-link"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- end gallery content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery  -->
@endsection
