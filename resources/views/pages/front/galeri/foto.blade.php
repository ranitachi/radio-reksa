@extends('layouts.front')
@section('title')
    <title>Galeri Foto - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    <div class="span12">
        <div class="box1">
        <h2 class="c4"><div class="over1"><div class="corner1"></div><div class="txt1">Galeri Foto</div><div class="corner2"></div></div></h2>

        <div id="isotope-options">
            <ul id="isotope-filters" class="clearfix">
                <li><a href="#" class="selected" data-filter="*">Show All</a></li> 
                @php
                    $x=1;
                @endphp
                @foreach ($galeri as $cat=>$item)
                    {{-- <li><a href="#" data-filter=".isotope-filter{{$x}}">{{$cat}}</a></li> --}}
                    <li><a href="#" data-filter=".{{str_slug($cat)}}">{{$cat}}</a></li>
                @php
                    $x++;
                @endphp
                @endforeach
                {{-- <li><a href="#" data-filter=".isotope-filter1">Category 1</a></li> 
                <li><a href="#" data-filter=".isotope-filter2">Category 2</a></li> 
                <li><a href="#" data-filter=".isotope-filter3">Category 3</a></li> 	              --}}
            </ul>            
        </div>

        <ul class="thumbnails" id="isotope-items">
            @foreach ($galeri as $item)
                @foreach ($item as $it)
                    <li class="span4 isotope-element {{str_slug($it->category)}}">
                        <div class="thumb-isotope">
                            <div class="thumbnail clearfix">
                                <a href="{{asset($it->picture)}}">
                                    <figure>
                                        <img src="{{asset($it->picture)}}" alt="" style="height:200px;"><em></em>
                                    </figure>
                                    <div class="caption">							
                                        {!!$it->desc!!}				
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </li>
                @endforeach		  
            @endforeach		  
            
        </ul>
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
<link rel="stylesheet" href="{{asset('css/touchTouch.css')}}" type="text/css" media="screen">
<link rel="stylesheet" href="{{asset('css/isotope.css')}}" type="text/css" media="screen">  
<script type="text/javascript" src="{{asset('js/touchTouch.jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script>
$(document).ready(function() {
	// 

	

}); //
$(window).load(function() {
	// isotop
	var $container = $('#isotope-items'),
		$optionSet = $('#isotope-options'), 
	    $optionSets = $('#isotope-filters'), 
	    $optionLinks = $optionSets.find('a'); 
    $container.isotope({ 
        filter: '*',
        layoutMode: 'fitRows'
    });  
   	$optionLinks.click(function(){ 
   		var $this = $(this); 
    	// don't proceed if already selected 
		if ( $this.hasClass('selected') ) { 
			return false; 
		}    		
   		$optionSet.find('.selected').removeClass('selected'); 
   		$this.addClass('selected');

        var selector = $(this).attr('data-filter'); 
        $container.isotope({ 
            filter: selector            
        }); 
      	return false; 
    });    	
	$(window).on("resize", function( event ) {	
		$container.isotope('reLayout');		
	});		

	// touchTouch
	$('.thumb-isotope .thumbnail a').touchTouch();

}); //
</script>	
@endsection