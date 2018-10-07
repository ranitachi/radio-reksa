@extends('layouts.front')
@section('title')
    <title>Penyiar - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
	<div class="span8">
		<div class="box1">
			<h2 class="c4">
				<div class="over1">
					<div class="corner1"></div>
					<div class="txt1">Para Penyiar</div>
					<div class="corner2"></div>
				</div>
			</h2>
		</div>
		<div class="row">
			@php
				$penyiar=\App\Models\Staff::with('user')->get();
			@endphp
			@foreach ($penyiar as $item)
			
			<div class="span4">
				<div class="thumb4">
					<div class="thumbnail clearfix">
						<figure class=""><img src="{{asset($item->photo)}}" alt="" style="width:150px;"></figure>
						<div class="caption">
							<div class="txt1">{{$item->nama}}</div>
							<div class="txt2">Penyiar Radio Reksa</div>
							<div class="txt3">
								{!!$item->desc!!}
							</div>
							<a href="{{$item->facebook}}" class="small_facebook"><img src="images/small_facebook.png" alt=""></a>
							<a href="mailto:{{$item->user->email}}" class="small_mail"><img src="images/small_mail.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			
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
</div>
@endsection