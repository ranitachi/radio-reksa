<div class="menu_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="navbar navbar_">
                                <div class="navbar-inner navbar-inner_">
                                    <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </a>
                                    @php
                                        $url=Request::path();
                                    @endphp
                                    <div class="nav-collapse nav-collapse_ collapse">
                                        <ul class="nav sf-menu clearfix">
                                            <li class="{{$url=='/' ? 'active' : ''}}"><a href="{{url('/')}}">Beranda</a></li>				
                                            <li class="sub-menu sub-menu-1 {{$url=='visi-misi' ? 'active' : ($url=='sejarah' ? 'active' : ($url=='kontak' ? 'active' : ''))}}"><a href="#">Tentang Kami</a>
                                                <ul>
                                                    <li class="{{$url=='sejarah' ? 'active' : ''}}"><a href="{{url('sejarah')}}">Sejarah Radio</a></li>
                                                    <li class="{{$url=='visi-misi' ? 'active' : ''}}"><a href="{{url('visi-misi')}}">Visi Misi</a></li>
                                                    <li class="{{$url=='kontak' ? 'active' : ''}}"><a href="{{url('kontak')}}">Kontak</a></li>
                                                </ul>
                                                    {{-- <li class="sub-menu sub-menu-2"><a href="index-1.html">OUR TEAM<em></em></a>
                                                        <ul>
                                                            <li><a href="index-1.html">lorem ipsum dolor</a></li>
                                                            <li><a href="index-1.html">sit amet</a></li>
                                                            <li><a href="index-1.html">adipiscing elit</a></li>
                                                            <li><a href="index-1.html">nunc suscipit</a></li>
                                                            <li><a href="404.html">404 page not found</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-menu sub-menu-2"><a href="index-1.html">TESTIMONIALS<em></em></a>
                                                        <ul>
                                                            <li><a href="index-1.html">lorem ipsum dolor</a></li>
                                                            <li><a href="index-1.html">sit amet</a></li>
                                                            <li><a href="index-1.html">adipiscing elit</a></li>
                                                            <li><a href="index-1.html">nunc suscipit</a></li>									
                                                        </ul>
                                                    </li>						
                                                </ul>						 --}}
                                            </li>
                                            <li class="sub-menu sub-menu-1 {{strpos($url,'penyiar')!==false ? 'active' : ''}}"><a href="{{url('penyiar')}}">Penyiar Kami</a>
                                                {{-- <ul>
                                                    <li><a href="{{url('penyiar/penyiar-1')}}">Penyiar 1</a></li>
                                                    <li><a href="{{url('penyiar/penyiar-2')}}">Penyiar 2</a></li>
                                                    <li><a href="{{url('penyiar/penyiar-3')}}">Penyiar 3</a></li>
                                                </ul> --}}
                                            </li>
                                            <li class="sub-menu sub-menu-1 {{strpos($url,'info')!==false ? 'active' : ''}}"><a href="{{url('info')}}">Reksa Info</a>
                                                <ul>
                                                @php
                                                    $kategori=\App\Models\CatBerita::all();
                                                @endphp
                                                @foreach ($kategori as $item)   
                                                    <li><a href="{{url('info/'.str_slug($item->nama_kategori))}}">{{$item->nama_kategori}}</a></li>
                                                @endforeach
                                                </ul>
                                            </li>
                                            <li class="sub-menu sub-menu-1 {{strpos($url,'program')!==false ? 'active' : ''}}"><a href="{{url('program')}}">Program</a>
                                                <ul>
                                                    @php
                                                        $program=\App\Models\Program::all();
                                                    @endphp
                                                    @foreach ($program as $item)   
                                                        <li><a href="{{url('program/'.str_slug($item->nama_program))}}">{{$item->nama_program}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="sub-menu sub-menu-1 {{strpos($url,'galeri')!==false ? 'active' : ''}}"><a href="#">Galeri</a>
                                                <ul>
                                                    <li><a href="{{url('galeri-foto')}}">Foto</a></li>
                                                    <li><a href="{{url('galeri-video')}}">Video</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li class="{{strpos($url,'event-promo')!==false ? 'active' : ''}}"><a href="{{url('event-promo')}}">Event & Promo</a></li>											
                                        </ul>
                                    </div>
                                </div>
                            </div>	
                        </div>	
                    </div>	
                </div>	
            </div>	