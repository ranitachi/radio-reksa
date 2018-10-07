@extends('layouts.front')
@section('title')
    <title>Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
    <div class="row">
                    <div class="span8">
                        <div class="box1">

                        <div id="slider" class="clearfix">
                            <div id="camera_wrap">
                                @php
                                    $slider = \App\Models\Slider::where('flag',1)->orderBy('created_at','desc')->limit(4)->get();
                                    // dd($slider);
                                @endphp
                                @foreach ($slider as $item)
                                    
                                    <div data-src="{{asset($item->picture)}}">
                                        <div class="camera_caption fadeIn">
                                            <div class="txt1">
                                                {{$item->title}}
                                            </div>			
                                        </div>     
                                    </div>
                                @endforeach
                                
                            </div>	
                        </div>

                        <h2 class="c1"><div class="over1"><div class="corner1"></div><div class="txt1">Event & Promo</div><div class="corner2"></div></div></h2>

                        <div id="slider3">
                        <a class="prev3" href="#"></a>
                        <a class="next3" href="#"></a>	
                        <div class="carousel-box row">
                            <div class="inner span8">			
                                <div class="carousel main">
                                    @php
                                        $event=\App\Models\Event::where('flag',1)->orderBy('created_at','desc')->limit(2)->get();
                                        $promo=\App\Models\Promo::where('flag',1)->orderBy('created_at','desc')->limit(2)->get();
                                        $ev_pr=array();
                                        foreach($event as $k=>$v)
                                        {
                                            $tgl=$v->tanggal_event;
                                            $ev_pr[$tgl][]=$v;
                                        }
                                        foreach($promo as $k=>$v)
                                        {
                                            $tgl=$v->tanggal_event;
                                            $ev_pr[$tgl][]=$v;
                                        }
                                        krsort($ev_pr);
                                        // dd($ev_pr);
                                    @endphp
                                    <ul>
                                        @foreach ($ev_pr as $v)
                                            @foreach ($v as $item)
                                           
                                            <li>
                                                <div class="thumb-carousel">
                                                    <div class="thumbnail clearfix">
                                                        <a href="#">
                                                            <figure>
                                                                <img src="{{asset($item->pic)}}" alt="">
                                                            </figure>
                                                            <div class="caption">
                                                                <div class="txt1">
                                                                    @php
                                                                        if (isset($item->nama_event))
                                                                        {
                                                                            echo $item->nama_event;
                                                                        }
                                                                        else if(isset($item->nama_promo))
                                                                        {
                                                                            echo $item->nama_promo;
                                                                        }
                                                                        else
                                                                            echo '-';
                                                                    @endphp
                                                                </div>
                                                                <div class="txt2">
                                                                    {{date('d/m/Y', strtotime($item->tanggal_event))}}
                                                                </div>
                                                                <div class="over1"></div>
                                                                <div class="over2"></div>
                                                            </div>								
                                                        </a>								
                                                    </div>
                                                </div>
                                            </li>
                                             @endforeach  
                                        @endforeach															
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>

                        <h2 class="c2"><div class="over1"><div class="corner1"></div><div class="txt1">Info Terbaru</div><div class="corner2"></div></div></h2>

                        @php
                            $berita=\App\Models\Berita::where('flag',1)->with('cat_berita')->orderBy('created_at','desc')->limit(5)->get();
                            $x=1;
                        @endphp
                        @foreach ($berita as $item)
                        
                        <div class="date1">
                            <div class="txt1">{{date('d',strtotime($item->created_at))}}<br><span>{{strtolower(date('M',strtotime($item->created_at)))}}</span></div>
                            <div class="txt2">
                                <h3 class="c2"><a href="#">{{$item->title}}</a></h3>
                                <div>
                                    {{substr(strip_tags($item->desc),0,200)}}<br>
                                    <a href="{{url('info/'.str_slug($item->cat_berita->nama_kategori).'/'.str_slug($item->title))}}" class="button0 c2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>

                        @if($x!=$berita->count())
                            <div class="line1"></div>
                        @endif
                        @php
                            $x++;
                        @endphp
                        @endforeach

                        <div class="line0"></div>

                        <div class="text-right"><a href="{{url('info')}}" class="button1 c2">info lainnya</a></div>

                        </div>
                        </div>
                        <div class="span4">
                        <div class="box2">

                        {{-- <div class="thumb1">
                            <div class="thumbnail clearfix">
                                <a href="#"><figure class=""><img src="images/home01.jpg" alt=""></figure></a>
                            </div>
                        </div> --}}

                        <h2 class="c3"><div class="over1"><div class="corner1"></div><div class="txt1">Tangga Musik</div><div class="corner2"></div></div></h2>

                        <div class="thumb2">
                            <div class="thumbnail clearfix">
                                <figure class=""><img src="images/home02.jpg" alt=""></figure>
                                <div class="caption">
                                    <h3 class="c3"><a href="#">Lorem ipsum dolor</a></h3>
                                    Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                </div>
                            </div>
                        </div>

                        <div class="line1"></div>

                        <div class="thumb2">
                            <div class="thumbnail clearfix">
                                <figure class=""><img src="images/home03.jpg" alt=""></figure>
                                <div class="caption">
                                    <h3 class="c3"><a href="#">Lorem ipsum dolor</a></h3>
                                    Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                </div>
                            </div>
                        </div>

                        <div class="line1"></div>

                        <div class="thumb2">
                            <div class="thumbnail clearfix">
                                <figure class=""><img src="images/home04.jpg" alt=""></figure>
                                <div class="caption">
                                    <h3 class="c3"><a href="#">Lorem ipsum dolor</a></h3>
                                    Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                </div>
                            </div>
                        </div>

                        <div class="line1"></div>

                        <div class="thumb2">
                            <div class="thumbnail clearfix">
                                <figure class=""><img src="images/home05.jpg" alt=""></figure>
                                <div class="caption">
                                    <h3 class="c3"><a href="#">Lorem ipsum dolor</a></h3>
                                    Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                </div>
                            </div>
                        </div>

                        <div class="line1"></div>

                        <div class="thumb2">
                            <div class="thumbnail clearfix">
                                <figure class=""><img src="images/home06.jpg" alt=""></figure>
                                <div class="caption">
                                    <h3 class="c3"><a href="#">Lorem ipsum dolor</a></h3>
                                    Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                </div>
                            </div>
                        </div>

                        <div class="line0"></div>

                        {{-- <div class="text-right"><a href="#" class="button1 c3">more news</a></div> --}}





                        </div>
                    </div>
                </div>	
@endsection
