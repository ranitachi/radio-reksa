<div class="sidebar sidebar-main sidebar-fixed">
  <div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-user">
      <div class="category-content">
        <div class="media">
          <a href="#" class="media-left"><img src="{{ asset('/backend/assets/images/placeholder.jpg') }}" class="img-circle img-sm" alt=""></a>
          <div class="media-body">
            <span class="media-heading text-semibold">{{ Auth::user()->name }}</span>
            <div class="text-size-mini text-muted">
              <i class="icon-pin text-size-small"></i> &nbsp;
                @if (Auth::user()->level==1)
                  Administrator
                @elseif (Auth::user()->level==2)
                  Pengumpulan
                @elseif (Auth::user()->level==3)
                  Marketing
                @elseif (Auth::user()->level==4)
                  Teknisi IT
                @elseif (Auth::user()->level==5)
                  Keuangan
                @else
                  Sekretariat
                @endif
            </div>
          </div>

          <div class="media-right media-middle">
            <ul class="icons-list">
              <li>
                <a href="#"><i class="icon-cog3"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /user menu -->
    @php
      $request_path=Request::path();
      $level=Auth::user()->level;
    @endphp

    <!-- Main navigation -->
    <div class="sidebar-category sidebar-category-visible">
      <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

          <li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
          <li>
            <a href="{{URL::to('/dashboard')}}"><i class="icon-home4"></i> <span>Dashboard</span></a>
          </li>
       
          <li>
  					<a href="#" class="has-ul legitRipple"><i class="icon-profile"></i> <span>Tentang Radio</span></a>
  					<ul>
  						<li class="{{strpos($request_path,'sejarah')!==false ? 'active':''}}"><a href="{{URL::to('/sejarah')}}">Sejarah</a></li>
  						<li class="{{strpos($request_path,'visi-misi' )!==false? 'active':''}}"><a href="{{URL::to('/visi-misi')}}">Visi Misi</a></li>
  						<li class="{{strpos($request_path,'hubungi-kami' )!==false? 'active':''}}"><a href="{{URL::to('/hubungi-kami')}}">Hubungi Kami</a></li>
  						{{-- <li class="{{strpos($request_path,'faq' )!==false? 'active':''}}"><a href="{{URL::to('/faq')}}">FAQ</a></li> --}}
  					</ul>
  				</li>
         
          <li>
  					<a href="#" class="has-ul legitRipple"><i class="icon-graduation2"></i> <span>Program Radio Reksa</span></a>
  					<ul>
            @php
                $program=DB::table('program')->get();
            @endphp
              @foreach($program as $k => $v)
  						  <li  class="{{strpos($request_path,$v->nama_program )!==false? 'active':''}}"><a href="{{URL::to('/program/'.strtolower(str_replace(' ','-',$v->nama_program)))}}">{{$v->nama_program}}</a></li>
              @endforeach
  						<li  class="{{strpos($request_path,'program-form' )!==false? 'active':''}}"><a href="{{URL::to('/program-form/-1')}}">Tambah Program</a></li>
  					</ul>
  				</li>
        
         
          
          <li>
  					<a href="#" class="has-ul legitRipple"><i class="icon-newspaper2"></i> <span>Berita</span></a>
  					<ul>
  						<li class="{{$request_path =='cat-berita' ? 'active':''}}"><a href="{{URL::to('cat-berita')}}">Kelola Kategori</a></li>
  						<li class="{{($request_path=='berita'|| strpos($request_path,'berita-form')!==false) ? 'active':''}}"><a href="{{URL::to('berita')}}">Kelola Berita</a></li>
  					</ul>
  				</li>
        
       
          <li>
            <a href="#" class="has-ul legitRipple"><i class="icon-cogs"></i> <span>Pengaturan</span></a>
            <ul>
              <li class="{{$request_path =='galeri' ? 'active':''}}"><a href="{{URL::to('/galeri')}}">Galeri</a></li>
              <li class="{{$request_path =='slider' ? 'active':''}}"><a href="{{URL::to('/slider')}}">Slider</a></li>
              <li class="{{$request_path =='video' ? 'active':''}}"><a href="{{URL::to('/video')}}">Video</a></li>
              
            </ul>
          </li>
          
          <li class="{{(strtok($request_path, '-') =='event' ? 'active': '')}}">
  					<a href="{{URL::to('/event')}}" class="legitRipple"><i class="icon-calendar2"></i> <span>Event</span></a>
  				</li>
          <li class="{{(strtok($request_path, '-') =='promo' ? 'active': '')}}">
  					<a href="{{URL::to('/promo')}}" class="legitRipple"><i class="icon-calendar2"></i> <span>Promo</span></a>
  				</li>

          <li class="{{(strtok($request_path, '-') =='penyiar-radio' ? 'active': '')}}">
  					<a href="{{URL::to('/penyiar-radio')}}" class="legitRipple"><i class="icon-user-tie"></i> <span>Penyiar</span></a>
  				</li>
          <li class="{{(strtok($request_path, '-') =='user' ? 'active': '')}}">
  					<a href="{{URL::to('/user')}}" class="legitRipple"><i class="icon-people"></i> <span>User</span></a>
  				</li>
           
          <!-- /main -->

        </ul>
      </div>
    </div>
    <!-- /main navigation -->

  </div>
</div>
