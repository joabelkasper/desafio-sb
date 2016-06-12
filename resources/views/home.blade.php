@extends('template/site')

@section('conteudo')


<div class="container">

	<div class="row">

		<div class="col-lg-12">

			<div id="titulo-api-tweet">

				<h1 class="azul f32"><b>Webservice REST - Tweet</b></h1>

				<p class="cinza f16">Webservice REST desenvolvido com o framework <a href="https://laravel.com/" title="Laravel" target="_BLANK">Laravel</a> para listagem, consulta, adição e apagar pequenos textos (twitter - like) de no máximo 140 carecteres e no minímo 5.<p>

			</div>

			<div class="titulo-padrao-sb">

				<h2 class="azul f20"><b>Como usar:</b></h2>

				<p class="cinza f16"><b>1°</b> Para utilizar está API REST clone o projeto em: <a href="https://github.com/joabelkasper/desafio-sb" target="_BLANK" title="GitHub - Joabel Luis Kasper">https://github.com/joabelkasper/desafio-sb</a></p>

				<p class="cinza f16"><b>2°</b> Troque as configurações de acesso para o seu banco de dados e APP URL no arquivo .env na raiz do projeto.</p>

				<p class="cinza f16"><b>3°</b> Faça a migração do banco de dados pelo laravel com o comando "php artisan migrate" ou faça o import do sql para sua base de dados, <a href="http://motorcloud.com.br/DesafioSocialBase/public/desafio_social_base.sql" target="_BLANK">link do SQL</a>;.</p>

				<p class="azul f16">Pronto já pode começar a usar.</p>

			</div>
			<!-- FIM TITULO PADRÃO SB -->

			<div class="titulo-padrao-sb">

				<h2 class="azul f20"><b>Como funciona:</b></h2>

 				<p class="cinza f16"><b>Listagem:</b> Para receber o json com todos os tweets já cadastrados faça a chamada HTPP com GET para http://urldoseuprojeto.com/public/api/tweet. <br />

 				URL para testar o funcionamento: <a href="http://motorcloud.com.br/DesafioSocialBase/public/api/tweet" title="Desafio Social Base" target="_BLANK">http://motorcloud.com.br/DesafioSocialBase/public/api/tweet</a></p>

				<p class="cinza f16"><b>Novo tweet: </b> Para salvar um novo tweet faça uma requesição HTTP com POST para http://urldoseuprojeto.com/public/api/tweet passando na body um paramêtro "tweet" com no minímo 5 caracteres e no máximo 140 caracteres. <br />

				URL para testar o funcionamento: <a href="http://motorcloud.com.br/DesafioSocialBase/public/api/tweet" title="Desafio Social Base" target="_BLANK">http://motorcloud.com.br/DesafioSocialBase/public/api/tweet</a></p>

				<p class="cinza f16"><b>Pegar um tweet: </b> Para pegar apenas um tweet faça uma requesição HTTP com GET para http://urldoseuprojeto.com/public/api/tweet/{ID} passando na body um paramêtro "tweet" com o ID do tweet que você deseja pegar.<br />

				URL para testar o funcionamento: <a href="http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/3" title="Desafio Social Base" target="_BLANK">http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/3</a></p>

				<p class="cinza f16"><b>Alterar um tweet: </b> Para alterar um tweet faça uma requesição HTTP com PUT para http://urldoseuprojeto.com/public/api/tweet/{ID} passando na body um paramêtro "tweet" com o ID do tweet que você deseja alterar.<br />

				URL para testar o funcionamento: <a href="http://motorcloud.com.br/DesafioSocialBase/public/api/tweet" title="Desafio Social Base" target="_BLANK">http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/2</a></p>

				<p class="cinza f16"><b>Deletar um tweet: </b> Para deletar um tweet faça uma requesição HTTP com DELETE para http://urldoseuprojeto.com/public/api/tweet/{ID} passando na body um paramêtro "tweet" com o ID do tweet que você deseja apagar.<br />

				URL para testar o funcionamento: <a href="http://motorcloud.com.br/DesafioSocialBase/public/api/tweet" title="Desafio Social Base" target="_BLANK">http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/3</a></p>

			</div>
			<!-- FIM TITULO PADRÃO SB -->

			<div class="titulo-padrao-sb">

				<h2 class="azul f20"><b>Caminho para os principais arquivos:</b></h2>

				<ul>
 					<li><b>Rotas:</b> App > Htpp > routes.php</li>
 					<li><b>Controller REST Tweet:</b> App > Htpp > Controllers > TweetController.php</li>
 					<li><b>Model REST Tweet:</b> App > Tweet.php</li>
 				</ul>

			</div>	

			<div class="titulo-padrao-sb">

				<h2 class="azul f20"><b>Tecnologias utilizadas:</b></h2>

 				<ul>
 					<li>Laravel</li>
 					<li>Eloquent (ORM)</li>
 					<li>MySql</li>
 					<li>HTML</li>
 					<li>JavaScript</li>
 					<li>HTML5</li>
 					<li>CSS</li>
 					<li>Versionamento (Git)</li>
 				</ul>

			</div> 				
			<!-- FIM TITULO PADRÃO SB -->

			<div class="titulo-padrao-sb">

				<h2 class="azul f20"><b>Imagens dos testes realizados com o PostMan: </b></h2>

				<div class="imagem-tela">
					<a href="images/telas/get-all-tweets.jpg" data-lightbox="image-1" data-title="HTTP com GET para listar todos os tweets"><img src="images/telas/get-all-tweets.jpg" width="250" /></a>
				</div>	

				<div class="imagem-tela">
					<a href="images/telas/post-new-tweet.jpg" data-lightbox="image-1" data-title="HTPP com POST passando o paramêtro 'tweet' para salvar um novo tweet"><img src="images/telas/post-new-tweet.jpg" width="250" /></a>
				</div>	

				<div class="imagem-tela">
					<a href="images/telas/get-one-tweet-by-id.jpg" data-lightbox="image-1" data-title="HTPP com GET passando o paramêtro 'tweet' para trazer um json com os dados deste tweet"><img src="images/telas/get-one-tweet-by-id.jpg" width="250" /></a>
				</div>	

				<div class="imagem-tela">
					<a href="images/telas/update-tweet-by-id.jpg" data-lightbox="image-1" data-title="Requesição HTTP com PUT passando na body um paramêtro 'tweet' com o ID do tweet que você deseja alterar."><img src="images/telas/update-tweet-by-id.jpg" width="250" /></a>
				</div>	

				<div class="imagem-tela">
					<a href="images/telas/delete-tweet-by-id.jpg" data-lightbox="image-1" data-title="Requesição HTTP com DELETE para  passando na body um paramêtro 'tweet' com o ID do tweet que você deseja apagar."><img src="images/telas/delete-tweet-by-id.jpg" width="250" /></a>
				</div>	


				
			</div>	

		</div>
		<!-- FIM COL LG 12 -->

	</div>	
	<!-- FIM ROW -->

</div>
<!-- FIM CONTAINER -->	

<script src="{{ url('lightbox2-master/dist/js/lightbox-plus-jquery.min.js') }}"></script>

@endsection