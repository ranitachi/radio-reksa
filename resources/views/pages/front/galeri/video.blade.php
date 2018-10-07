@extends('layouts.front')
@section('title')
    <title>Galeri Video - Radio Reksa Purwakarta : 100.9 FM</title>
@endsection
@section('konten')
<div class="row">
    <div class="span12">
        <div class="box1">
        <h2 class="c4"><div class="over1"><div class="corner1"></div><div class="txt1">Galeri Video</div><div class="corner2"></div></div></h2>

        <div id="isotope-options">
            <ul id="isotope-filters" class="clearfix">
                <li><a href="#" class="selected" data-filter="*">Show All</a></li> 
                
            </ul>            
        </div>

        <ul class="thumbnails" id="isotope-items">
            @foreach ($galeri as $item)
            @php
            if(strpos($item->url,'youtube')!==false)
            {
                $url = $item->url;
                preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                $id = $matches[1];
                $width = '370px';
                $height = '200px';
                $video='<iframe id="ytplayer" type="text/html" width="'.$width.'" height="'.$height.'"
                        src="https://www.youtube.com/embed/'.$id.'?rel=0&showinfo=0&color=white&iv_load_policy=3"
                        frameborder="0" allowfullscreen></iframe> ';
            }
            else
                $video='';
            @endphp
                    <li class="span4 isotope-element">
                        <div class="thumb-isotope">
                            <div class="thumbnail clearfix">
                                <a href="#">
                                    <figure>
                                        {!!$video!!}
                                    </figure>
                                    <div class="caption text-center">							
                                        {!!$item->title!!}				
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </li>
               
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