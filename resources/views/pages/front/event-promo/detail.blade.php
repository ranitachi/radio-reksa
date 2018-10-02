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
                    <div class="thumbnail clearfix">
                        <figure class="img-polaroid"><img src="{{asset('images/logo-radio.jpeg')}}" alt="" style="width:100%"></figure>
                        <div class="caption">
                            <div class="txt1">Nama Event</div>
                            <div class="txt2"><i class="fa fa-calendar"></i> 12/12/2019</div>
                            <p>
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. 
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. 
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. 
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. 
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. Nunc suscipit. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="span4">
        <div class="box2">
            <h2 class="c2"><div class="over1"><div class="corner1"></div><div class="txt1">Event Lain</div><div class="corner2"></div></div></h2>

            <div class="thumb2">
                <div class="thumbnail clearfix">
                    <figure class=""><img src="{{asset('images/about06.jpg')}}" alt=""></figure>
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
                    <figure class=""><img src="{{asset('images/about07.jpg')}}" alt=""></figure>
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
                    <figure class=""><img src="{{asset('images/about10.jpg')}}" alt=""></figure>
                    <div class="caption">
                        <p class="style1">
                            24 of January, 2014
                        </p>
                        <h3 class="c2"><a href="#">Lorem ipsum dolor</a></h3>
                        Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                    </div>
                </div>
            </div>

            <h2 class="c5"><div class="over1"><div class="corner1"></div><div class="txt1">testimoni</div><div class="corner2"></div></div></h2>

                <div class="testimonial1">
                    <div class="txt1">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.
                    </div>
                    <div class="txt2">
                        Mike Smith
                    </div>
                </div>

                <div class="testimonial1">
                    <div class="txt1">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.
                    </div>
                    <div class="txt2">
                        Ann Garcia
                    </div>
                </div>





                <div class="line0"></div>

                <div class="text-right"><a href="#" class="button1 c5">testimoni lain</a></div>
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