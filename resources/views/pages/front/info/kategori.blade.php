@extends('layouts.front')
@section('title')
    <title>{{$nm_kat}} - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    <div class="span8">
        <div class="box2">
        <h2 class="c2">
                <div class="over1">
                    <div class="corner1"></div>
                    <div class="txt1">{{$nm_kat}}</div>
                    <div class="corner2"></div>
                </div>
            </h2>
        
            
            <div class="" style="">
                <div class="row">
                    @if (count($berita)!=0)
                    
                        @foreach ($berita as $item)
                        
                            <div class="span6" style="width:46%;">

                                <div class="thumb2">
                                    <div class="thumbnail clearfix">
                                        
                                        <figure class=""><img src="{{asset($item->file)}}" alt="" style="width:100%;height:auto;"></figure>
                                        <div class="caption">
                                            <p class="style1">
                                                <i class="fa fa-calendar"></i>&nbsp;&nbsp;{{date('d F',strtotime($item->created_at))}}, {{date('Y',strtotime($item->created_at))}}
                                            </p>
                                            <h3 class="c2"><a href="{{url('info/'.str_slug($item->cat_berita->nama_kategori).'/'.str_slug($item->title))}}" onclick="addview({{$item->id}})">{{$item->title}}</a></h3>
                                            {{substr(strip_tags($item->desc),0,150)}} ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
        <div class="line0"></div>
        {{-- <div class="text-right"><a href="{{url('info')}}" class="button1 c2">Info Lain</a></div> --}}
        </div>
    </div>
    <div class="span4">
        <div class="box2">
            <h2 class="c6"><div class="over1"><div class="corner1"></div><div class="txt1">Kategori Lain</div><div class="corner2"></div></div></h2>

            <div class="accordion" id="accordion1">
            @foreach ($cat as $item)
            
                <div class="accordion-group">
                 
                        <div class="accordion-inner">
                        <h3 style="padding-bottom:0px;"><a href="{{url('info/'.str_slug($item->nama_kategori))}}">{{$item->nama_kategori}}</a></h3>
                        </div>
                </div>
            @endforeach
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