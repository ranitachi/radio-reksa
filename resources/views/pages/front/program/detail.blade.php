@extends('layouts.front')
@section('title')
    <title>{{$nm_pr}} - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    <div class="span8">
        <div class="box1">
                <h2 class="c4"><div class="over1"><div class="corner1"></div><div class="txt1">Program Radio Reksa</div><div class="corner2"></div></div></h2>

                @if (count($program)!=0)
                    <div class="thumb3">
                    <div class="thumbnail clearfix">
                        <figure class="img-polaroid" style="width:100%">
                            <img src="{{asset($program[0]->logo)}}" alt="" style="width:100%">
                        </figure>
                        <div class="caption">
                            <h1 class="c4">{{$program[0]->nama_program}}</h1>
                            <div class="content">{!! $program[0]->desc; !!}</div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="page-404">
                        <p class="txt1">404</p>
                        <p class="txt2">PROGRAM NOT FOUND</p>
                    </div>
                @endif
                
            </div>
    </div>
     <div class="span4">
        <div class="box2">
            <h2 class="c6"><div class="over1"><div class="corner1"></div><div class="txt1">Program Lain</div><div class="corner2"></div></div></h2>

            <div class="accordion" id="accordion1">
            @foreach ($lain as $item)
            
                <div class="accordion-group">
                 
                        <div class="accordion-inner">
                        <h3 style="padding-bottom:0px;"><a href="{{url('program/'.str_slug($item->nama_program))}}">{{$item->nama_program}}</a></h3>
                        </div>
                </div>
            @endforeach
            </div>

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
@endsection