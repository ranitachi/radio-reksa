@extends('layouts.front')
@section('title')
    <title>Program Radio - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    <div class="span8">
        <div class="box1">
            <h2 class="c4">
                <div class="over1">
                <div class="corner1"></div>
                <div class="txt1">Program Radio</div>
                <div class="corner2"></div>
            </div>
        </h2>
        @if ($program->count()!=0)
         @foreach ($program as $item)
        
                <div class="thumb2">
                    <div class="thumbnail clearfix">
                        <figure class=""><img src="{{asset($item->logo)}}" alt="" style="width:150px;"></figure>
                        <div class="caption">
                            
                            <h3 class="c2"><a href="{{url('program/'.str_slug($item->nama_program))}}">{{$item->nama_program}}</a></h3>
                            {{substr(strip_tags($item->desc),0,300)}}
                        </div>
                    </div>
                </div>
                <div class="line1"></div>
            @endforeach           
        @else
            <div class="" style="width:95%;float:left;margin-left:30px;">
                   <div class="page-404">
                        <p class="txt1">404</p>
                        <p class="txt2">PROGRAM NOT FOUND</p>
                    </div>
                </div>
        @endif

        </div>
    </div>
     <div class="span4">
        <div class="box2">
            <h2 class="c2"><div class="over1"><div class="corner1"></div><div class="txt1">Reksa Info</div><div class="corner2"></div></div></h2>
            @php
                $berita=\App\Models\Berita::with('cat_berita')->orderBy('created_at','desc')->limit(4)->get();
            @endphp
            @foreach ($berita as $item)
                
                <div class="thumb2">
                    <div class="thumbnail clearfix">
                        <figure class=""><img src="{{asset($item->file)}}" alt=""></figure>
                        <div class="caption">
                            <p class="style1">
                                {{date('d F',strtotime($item->created_at))}}, {{date('Y',strtotime($item->created_at))}}
                            </p>
                            <h3 class="c2"><a onclick="addview({{$item->id}})" href="{{url('info/'.str_slug($item->cat_berita->nama_kategori).'/'.str_slug($item->title))}}">{{$item->title}}</a></h3>
                            {{substr(strip_tags($item->desc),0,150)}}
                        </div>
                    </div>
                </div>

                <div class="line1"></div>
            @endforeach

           <h2 class="c5"><div class="over1"><div class="corner1"></div><div class="txt1">testimoni</div><div class="corner2"></div></div></h2>
                @php
                    $testi=\App\Models\Testimony::orderByRaw('RAND()')->limit(3)->get();
                @endphp
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
<style>
#content{
    /* background:#fff !important; */
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