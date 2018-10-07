@extends('layouts.front')
@section('title')
    <title>Reksa Info - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    @foreach ($cat as $item)
        <div class="span4">
            <div class="box2">
                <h2 class="c2">
                    <div class="over1">
                    <div class="corner1"></div>
                    <div class="txt1">{{$item->nama_kategori}}</div>
                    <div class="corner2"></div>
                </div>
            </h2>
            @php
                $x=1;
            @endphp
            @foreach ($berita[$item->id] as $it_b)
                @if ($x<=5)
                    <div class="thumb2">
                        <div class="thumbnail clearfix">
                            <figure class=""><img src="{{asset($it_b->file)}}" alt=""></figure>
                            <div class="caption">
                                <p class="style1">
                                    {{date('d F',strtotime($it_b->created_at))}}, {{date('Y',strtotime($it_b->created_at))}}
                                </p>
                                <h3 class="c2"><a href="{{url('info/'.str_slug($item->nama_kategori).'/'.str_slug($it_b->title))}}" onclick="addview({{$it_b->id}})">{{$it_b->title}}</a></h3>
                                    {{substr(strip_tags($it_b->desc),0,150)}}
                            </div>
                        </div>
                    </div>
                    <div class="line1"></div>
                @endif
                @php
                    $x++;
                @endphp
            @endforeach
        </div>    
    @endforeach
    {{-- <div class="span4">
        <div class="box2">
            <h2 class="c2">
                <div class="over1">
                <div class="corner1"></div>
                <div class="txt1">Kategori 1</div>
                <div class="corner2"></div>
            </div>
        </h2>

        <div class="thumb2">
            <div class="thumbnail clearfix">
                <figure class=""><img src="images/about06.jpg" alt=""></figure>
                <div class="caption">
                    <p class="style1">
                        24 of January, 2014
                    </p>
                    <h3 class="c2"><a href="{{url('info/kategori-1/'.str_slug('Lorem ipsum dolor'))}}">Lorem ipsum dolor</a></h3>
                            Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                </div>
            </div>
        </div>
        <div class="line1"></div>
            <div class="thumb2">
                <div class="thumbnail clearfix">
                    <figure class=""><img src="images/about07.jpg" alt=""></figure>
                    <div class="caption">
                        <p class="style1">
                            24 of January, 2014
                        </p>
                        <h3 class="c2"><a href="#">Lorem ipsum dolor</a></h3>
                        Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                    </div>
                </div>
            </div>
            <div class="line1"></div>
            <div class="thumb2">
            <div class="thumbnail clearfix">
                <figure class=""><img src="images/about10.jpg" alt=""></figure>
                <div class="caption">
                    <p class="style1">
                        24 of January, 2014
                    </p>
                    <h3 class="c2"><a href="#">Lorem ipsum dolor</a></h3>
                    Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                </div>
            </div>
        </div>
        <div class="line0"></div>
        <div class="text-right"><a href="{{url('info')}}" class="button1 c2">Info Lain</a></div>
        
        </div>
    </div>
    <div class="span4">
        <div class="box2">
            <h2 class="c2">
                <div class="over1">
                <div class="corner1"></div>
                <div class="txt1">Kategori 2</div>
                <div class="corner2"></div>
            </div>
        </h2>

        <div class="thumb2">
            <div class="thumbnail clearfix">
                <figure class=""><img src="images/about06.jpg" alt=""></figure>
                <div class="caption">
                    <p class="style1">
                        24 of January, 2014
                    </p>
                    <h3 class="c2"><a href="{{url('info/kategori-1/'.str_slug('Lorem ipsum dolor'))}}">Lorem ipsum dolor</a></h3>
                            Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                </div>
            </div>
        </div>
        <div class="line1"></div>
            <div class="thumb2">
                <div class="thumbnail clearfix">
                    <figure class=""><img src="images/about07.jpg" alt=""></figure>
                    <div class="caption">
                        <p class="style1">
                            24 of January, 2014
                        </p>
                        <h3 class="c2"><a href="#">Lorem ipsum dolor</a></h3>
                        Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                    </div>
                </div>
            </div>
            <div class="line1"></div>
            <div class="thumb2">
            <div class="thumbnail clearfix">
                <figure class=""><img src="images/about10.jpg" alt=""></figure>
                <div class="caption">
                    <p class="style1">
                        24 of January, 2014
                    </p>
                    <h3 class="c2"><a href="#">Lorem ipsum dolor</a></h3>
                    Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                </div>
            </div>
        </div>
        <div class="line0"></div>
        <div class="text-right"><a href="{{url('info')}}" class="button1 c2">Info Lain</a></div>
        
        </div>
    </div>
    <div class="span4">
        <div class="box2">
            <h2 class="c2">
                <div class="over1">
                <div class="corner1"></div>
                <div class="txt1">Kategori 2</div>
                <div class="corner2"></div>
            </div>
        </h2>

        <div class="thumb2">
            <div class="thumbnail clearfix">
                <figure class=""><img src="images/about06.jpg" alt=""></figure>
                <div class="caption">
                    <p class="style1">
                        24 of January, 2014
                    </p>
                    <h3 class="c2"><a href="{{url('info/kategori-1/'.str_slug('Lorem ipsum dolor'))}}">Lorem ipsum dolor</a></h3>
                            Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                </div>
            </div>
        </div>
        <div class="line1"></div>
            <div class="thumb2">
                <div class="thumbnail clearfix">
                    <figure class=""><img src="images/about07.jpg" alt=""></figure>
                    <div class="caption">
                        <p class="style1">
                            24 of January, 2014
                        </p>
                        <h3 class="c2"><a href="#">Lorem ipsum dolor</a></h3>
                        Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                    </div>
                </div>
            </div>
            <div class="line1"></div>
            <div class="thumb2">
            <div class="thumbnail clearfix">
                <figure class=""><img src="images/about10.jpg" alt=""></figure>
                <div class="caption">
                    <p class="style1">
                        24 of January, 2014
                    </p>
                    <h3 class="c2"><a href="#">Lorem ipsum dolor</a></h3>
                    Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                </div>
            </div>
        </div>
        <div class="line0"></div>
        <div class="text-right"><a href="{{url('info')}}" class="button1 c2">Info Lain</a></div>
        
        </div>
    </div> --}}
</div>
@endsection

@section('footscript')
<style>
#content{
    background:#fff !important;
}
</style> 
<script>
function addview(id)
{
    $.ajax({
        url : '{{url("/")}}/addviewinfo/'+id,
        success : function(a){

        }
    });
}
</script>
@endsection