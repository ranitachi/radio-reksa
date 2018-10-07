@extends('layouts.front')
@section('title')
    <title>Event & Promo - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    <div class="span8">
        <div class="box1">
                <h2 class="c4"><div class="over1"><div class="corner1"></div><div class="txt1">Event</div><div class="corner2"></div></div></h2>
                <div class="thumb4">
                    @if (count($det)==0)
                        <div class="" style="width:95%;float:left;margin-left:30px;">
                            <div class="page-404">
                                <p class="txt1">404</p>
                                <p class="txt2">{{strtoupper($jenis)}} NOT FOUND</p>
                            </div>
                        </div>
                    @else
                    
                    <div class="thumbnail clearfix">
                        <figure class="img-polaroid"><img src="{{asset($det[0]->pic)}}" alt="" style="width:100%"></figure>
                        <div class="caption">
                            <div class="txt1">{{$jenis=='event' ? $det[0]->nama_event : $det[0]->nama_promo}}</div>
                            <div class="txt2"><i class="fa fa-calendar"></i> {{date('d/m/Y',strtotime($det[0]->tanggal_event))}}</div>
                            {!! $det[0]->desc !!}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
    </div>
    <div class="span4">
        <div class="box2">
            <h2 class="c6"><div class="over1"><div class="corner1"></div><div class="txt1">Event & Promo Lain</div><div class="corner2"></div></div></h2>

            <div class="accordion" id="accordion1">
            @if ($jenis=='event')
                @foreach ($event as $item)
                    @if (str_slug($item->nama_event)!=$judul)
                        <div class="accordion-group">
                        
                                <div class="accordion-inner">
                                <h3 style="padding-bottom:0px;"><a href="{{url('event-promo/'.$jenis.'/'.str_slug($item->nama_event))}}">{{$item->nama_event}}</a></h3>
                                </div>
                        </div>
                    @endif
                @endforeach
            @elseif($jenis=='promo')
                @foreach ($promo as $item)
                    @if (str_slug($item->nama_promo)!=$judul)
                        <div class="accordion-group">
                        
                                <div class="accordion-inner">
                                <h3 style="padding-bottom:0px;"><a href="{{url('event-promo/'.$jenis.'/'.str_slug($item->nama_promo))}}">{{$item->nama_promo}}</a></h3>
                                </div>
                        </div>
                    @endif
                @endforeach
            @endif

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