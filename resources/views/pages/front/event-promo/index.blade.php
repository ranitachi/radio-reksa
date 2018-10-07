@extends('layouts.front')
@section('title')
    <title>Event & Promo - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    <div class="span6">
        <div class="box1">
            <h2 class="c4">
                <div class="over1">
                <div class="corner1"></div>
                <div class="txt1">Event</div>
                <div class="corner2"></div>
            </div>
        </h2>

        @foreach ($event as $item)   
            <div class="thumb2">
                <div class="thumbnail clearfix">
                    <figure class=""><img src="{{asset($item->pic)}}" alt="" style="width:150px;"></figure>
                    <div class="caption">
                        <p class="style1">
                            <i class="fa fa-calendar"></i> {{date('d F',strtotime($item->tanggal_event))}}, {{date('Y',strtotime($item->tanggal_event))}}
                        </p>
                        <h3 class="c2"><a href="{{url('event-promo/event/'.str_slug($item->nama_event))}}">{{$item->nama_event}}</a></h3>
                            {{substr(strip_tags($item->desc),0,200)}}
                    </div>
                </div>
            </div>
            <div class="line1"></div>
        @endforeach
        <div class="line0"></div>
        
        </div>
    </div>
    
    <div class="span6">
        <div class="box2">
            <h2 class="c2">
                <div class="over1">
                    <div class="corner1"></div>
                    <div class="txt1">Promo</div>
                    <div class="corner2"></div>
                </div>
            </h2>

        @foreach ($promo as $item)   
            <div class="thumb2">
                <div class="thumbnail clearfix">
                    <figure class=""><img src="{{asset($item->pic)}}" alt="" style="width:150px;"></figure>
                    <div class="caption">
                        <p class="style1">
                            <i class="fa fa-calendar"></i> {{date('d F',strtotime($item->tanggal_event))}}, {{date('Y',strtotime($item->tanggal_event))}}
                        </p>
                        <h3 class="c2"><a href="{{url('event-promo/event/'.str_slug($item->nama_promo))}}">{{$item->nama_promo}}</a></h3>
                            {{substr(strip_tags($item->desc),0,200)}}
                    </div>
                </div>
            </div>
            <div class="line1"></div>
        @endforeach
        <div class="line0"></div>
        </div>
    </div>
</div>
@endsection

@section('footscript')
<style>
#content{
    background:#fff !important;
}
</style> 
@endsection