@extends('app')

@section('content')
<h2>Home Page</h2>


<section id="cd-timeline">
	<div class="cd-timeline-block">
		<div class="cd-timeline-img">
			<img src="img/cd-icon-picture.svg" alt="Picture">
		</div> <!-- cd-timeline-img -->
 
		<div class="cd-timeline-content">
			<h2>Title of section 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
			<a href="#0" class="cd-read-more">Read more</a>
			<span class="cd-date">Jan 14</span>
		</div> <!-- cd-timeline-content -->
	</div> <!-- cd-timeline-block -->
 
	<div class="cd-timeline-block">
		<!-- ... -->
	</div>
</section>

<script type="text/javascript">
$(window).on('scroll', function(){
	$timeline_block.each(function(){
		if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		}
	});
});
</script>

@endsection