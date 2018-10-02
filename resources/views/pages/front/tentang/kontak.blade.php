@extends('layouts.front')
@section('title')
    <title>Kontak Kami - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
    <div class="row">
        <div class="span8">
        <div class="box1">
            <h2 class="c4"><div class="over1"><div class="corner1"></div><div class="txt1">Alamat Radio</div><div class="corner2"></div></div></h2>


                <figure class="google_map">
                    <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Glasgow,&amp;aq=&amp;sll=46.975033,31.994583&amp;sspn=0.368248,0.617294&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Glasgow,+Glasgow+City,+United+Kingdom&amp;t=m&amp;ll=55.866932,-4.256344&amp;spn=0.020324,0.070896&amp;z=13&amp;output=embed"></iframe>
                </figure>



                <h3 class="c4">Radio Reksa Purwakarta</h3>

                <p>
                    8901 Marmora Road,<br>
                Glasgow, D04 89GR.<br>
                Telephone: +1 800 123 1234<br>
                E-mail: <a href="#">mail@bteamny.com</a>
                </p>










                <h2 class="c1"><div class="over1"><div class="corner1"></div><div class="txt1">Form Kontak</div><div class="corner2"></div></div></h2>

                <div id="note"></div>
                <div id="fields">
                    <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label" for="inputName">Your full name:</label>
                                    <div class="controls">				      
                                    <input class="span4" type="text" id="inputName" name="name" value="Your full name:" onBlur="if(this.value=='') this.value='Your full name:'" onFocus="if(this.value =='Your full name:' ) this.value=''">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Your email:</label>
                                    <div class="controls">				      
                                    <input class="span4" type="text" id="inputEmail" name="email" value="Your email:" onBlur="if(this.value=='') this.value='Your email:'" onFocus="if(this.value =='Your email:' ) this.value=''">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPhone">Phone number:</label>
                                    <div class="controls">				      
                                    <input class="span4" type="text" id="inputPhone" name="phone" value="Phone number:" onBlur="if(this.value=='') this.value='Phone number:'" onFocus="if(this.value =='Phone number:' ) this.value=''">
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label" for="inputMessage">Message:</label>
                                    <div class="controls">				      				      
                                    <textarea class="span4" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message:'" 
                                        onFocus="if(this.value =='Message:' ) this.value=''">Message:</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <div class="control-group capthca">
                                    <label class="control-label" for="inputCapthca">Capthca:</label>
                                    <div class="controls">				      
                                    <input class="" type="text" id="inputCapthca" name="capthca" value="Capthca:" onBlur="if(this.value=='') this.value='Capthca:'" onFocus="if(this.value =='Capthca:' ) this.value=''">
                                    <img src="captcha/captcha.html">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="submit">submit</button>
                    </form>
                </div>
        </div>
        </div>
        <div class="span4">
        <div class="box2">


        <h2 class="c2"><div class="over1"><div class="corner1"></div><div class="txt1">Reksa Info</div><div class="corner2"></div></div></h2>

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