@extends('template/site')

@section('conteudo')

<div class="container">

	<div class="row">

		<div class="col-lg-12">

			<div id="titulo-api-tweet">

				<h1 class="azul f32"><b>Webservice REST - Todos os tweets cadastrados</b></h1>

			</div>

			<div id="tweets">

				<?php foreach ($tweets as $tweet){ ?>
				<div class="tweet">

					<b>{{ $tweet->tweet }}</b>

				</div> 				
				<!-- FIM .TWEET -->
				<?php } ?>

			</div>
			<!-- FIM TWEETS -->

		</div>
		<!-- FIM COL LG 12 -->

	</div>	
	<!-- FIM ROW -->

</div>
<!-- FIM CONTAINER -->	

<script src="{{ url('lightbox2-master/dist/js/lightbox-plus-jquery.min.js') }}"></script>

@endsection