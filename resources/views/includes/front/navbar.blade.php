<div class="top1">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="top1_inner clearfix">
                            <div class="search-form-wrapper clearfix">
                                <form id="search-form" action="" method="GET" accept-charset="utf-8" class="navbar-form" >
                                    <input type="text" name="s" value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''">
                                    <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                                </form>
                            </div>
                            <div class="menu_top clearfix">
                                {{-- <ul id="menu_top" class="clearfix">
                                <li><a href="index.html">Home page</a></li>
                                <li><a href="#">Site map</a></li>
                                <li><a href="#">Login</a></li>	                              
                                <li><a href="#">Register</a></li>	      
                                </ul> --}}
                            </div>
                        </div>	
                    </div>	
                </div>	
            </div>	
        </div>	

        <div class="top2">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="top2_inner clearfix">
                            <header>
                                <div class="logo_wrapper">
                                    <a href="{{url('/')}}" class="logo"><img src="{{asset('images/logo-reksa.png')}}" alt="" style="height:70px;"></a>
                                </div>
                            </header>	
                            @php
                                $getcontact=\App\Models\Contact::first();
                                if(is_null($getcontact))
                                {
                                    $fb=$tw='#';
                                }
                                else
                                {
                                    $fb=$getcontact->facebook;
                                    $tw=$getcontact->twitter;
                                }
                            @endphp
                            <div class="top3 clearfix">
                                <div class="social_wrapper">
                                    <ul class="social clearfix">
                                        <li><a href="{{$fb}}"><img src="{{asset('images/social_ic1.png')}}"></a></li>
                                        <li><a href="{{$tw}}"><img src="{{asset('images/social_ic2.png')}}"></a></li>	    
                                    </ul>
                                </div>
                                <div class="listen_live_wrapper"><a href="#" class="listen_live"><img src="{{asset('images/listen_live.png')}}" alt=""></a></div>	
                            </div>
                        </div>	
                    </div>	
                </div>	
            </div>	
        </div>