@extends('layouts.front')
@section('title')
    <title>Kategori Info - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    <div class="span8">
        <div class="box2">
        <h2 class="c2">
                <div class="over1">
                    <div class="corner1"></div>
                    <div class="txt1">Kategori 1</div>
                    <div class="corner2"></div>
                </div>
            </h2>
        <div class="row">
            
            <div class="" style="width:45%;float:left;margin-left:30px;">
                
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
                    <div class="line0"></div>
                    <div class="text-right"><a href="{{url('info')}}" class="button1 c2">Info Lain</a></div>
                    
                
            </div>
            <div class="" style="width:45%;float:left;margin-left:30px;">
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
                    <div class="line0"></div>
                    <div class="text-right"><a href="{{url('info')}}" class="button1 c2">Info Lain</a></div>
            </div>
            </div>
        </div>
    </div>
    <div class="span4">
        <div class="box2">
            <h2 class="c6"><div class="over1"><div class="corner1"></div><div class="txt1">Kategori Lain</div><div class="corner2"></div></div></h2>

            <div class="accordion" id="accordion1">
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
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2">
                            Kategori 3
                        </a>
                    </div>
                    <div id="collapse2" class="accordion-body collapse">
                        <div class="accordion-inner">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse3">
                            Kategori 4
                        </a>
                    </div>
                    <div id="collapse3" class="accordion-body collapse">
                        <div class="accordion-inner">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
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

@endsection