@extends('layouts.front')
@section('title')
    <title>{{count($berita)!=0 ? $berita[0]->title : ''}} - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    <div class="span8">
        <div class="box2">
        <h2 class="c2">
                <div class="over1">
                    <div class="corner1"></div>
                    <div class="txt1">{{count($berita)!=0 ? $berita[0]->cat_berita->nama_kategori : 'SORRY'}}</div>
                    <div class="corner2"></div>
                </div>
            </h2>
        <div class="row">
            
            @if (count($berita)!=0)
            
            <div class="" style="width:95%;float:left;margin-left:30px;">
                    <div class="thumb1">
                        <div class="thumbnail clearfix">
                            <figure class=""><img src="{{asset($berita[0]->file)}}" alt=""></figure>
                            <div class="caption">
                                <p class="style1" style="font-size:13px;">
                                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;{{date('d F',strtotime($berita[0]->created_at))}}, {{date('Y',strtotime($berita[0]->created_at))}}
                                </p>
                                <h3 class="c2"><a href="#" style="font-size:20px;">{{$berita[0]->title}}</a></h3>
                                {!!$berita[0]->desc!!}
                            </div>
                        </div>
                    </div>
                    <div class="line1"></div>

                </div>
            @else
                <div class="" style="width:95%;float:left;margin-left:30px;">
                   <div class="page-404">
                        <p class="txt1">404</p>
                        <p class="txt2">INFO NOT FOUND</p>
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="box2">
            <h2 class="c6"><div class="over1"><div class="corner1"></div><div class="txt1">Info Lain</div><div class="corner2"></div></div></h2>

            <div class="accordion" id="accordion1">
                @if (count($lain)!=0)
                
                    @foreach ($lain as $item)
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                    Kategori 2
                                </a>
                            </div>
                            <div id="collapse1" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                      <div class="accordion-group">
                            <div class="accordion-heading">
                                <div class="accordion-inner text-center">
                                    <h3>Info Lain Belum Tersedia</h3>
                                </div>
                            </div>
                      </div>  
                @endif
                
            </div>

            <h2 class="c5"><div class="over1"><div class="corner1"></div><div class="txt1">testimoni</div><div class="corner2"></div></div></h2>
            
                @foreach ($testi as $item)
                
                    <div class="testimonial1">
                        <div class="txt1">
                            {!!$item->desc!!}
                        </div>
                        <div class="txt2">
                            {{$item->nama}}
                        </div>
                    </div>

                
                    <div class="line0"></div>
                @endforeach
                {{-- <div class="text-right"><a href="#" class="button1 c5">testimoni lain</a></div> --}}
        </div>
    </div>
</div>
@endsection

@section('footscript')

@endsection