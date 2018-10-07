        <div class="bot1">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="bot1_block">
                            <div class="bot1_title">SITE MAP</div>
                            <ul class="ul0">
                            <li><a href="{{url('/')}}">Beranda</a></li>
                            <li><a href="{{url('sejarah')}}">Tentang Kami</a></li>
                            <li><a href="{{url('penyiar')}}">Penyiar</a></li>
                            <li><a href="{{url('info')}}">Reksa Info</a></li>
                            <li><a href="{{url('program')}}">Program</a></li>
                            <li><a href="{{url('galeri-foto')}}">Galeri</a></li>
                            <li><a href="{{url('event-promo')}}">Event & Promo</a></li>
                            </ul>
                        </div>
                    </div>	
                    <div class="span3">
                        <div class="bot1_block">
                            <div class="bot1_title">Program Radio</div>
                            <ul class="ul0">
                            @php
                                $program=\App\Models\Program::all();
                            @endphp
                            @foreach ($program as $item)
                                <li><a href="{{url('program/'.str_slug($item->nama_program))}}">{{$item->nama_program}}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="bot1_block">
                            <div class="bot1_title">Twitter</div>
                            
                        </div>
                    </div>
                    <div class="span3">
                        <div class="bot1_block">
                            <div class="bot1_title">Fans Page FB</div>
                        </div>
                    </div>
                </div>	
            </div>	
        </div>
<footer>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="footer_inner clearfix">
                    <div class="copyright">Copyright©{{date('Y')}}. Radio Reksa Purwakarta - 100.9 FM.</div>
                    <div class="copyright2"><a href="#"></a></div>
                </div>	
            </div>	
        </div>	
    </div>	
</footer>