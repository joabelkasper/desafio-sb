<html>
  <head>
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/fontes.css') }}" rel="stylesheet">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('sweet/dist/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ url('lightbox2-master/dist/css/lightbox.min.css') }}" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('js/desafio.js') }}"></script> 
    <script type="text/javascript" src="{{ url('sweet/dist/sweetalert.min.js') }}"></script> 
    


    <title>Desafio SB</title>

  </head>
    <body>


      <header id="header">
        
        <div class="container">

          <div class="row">

            <div class="col-lg-3">

              <div id="logo">

                <a href="{{ url('/') }}" title="Desafio SB">
                  <h1 class="branco f32">
                    Desafio Social Base
                  </h1>
                </a>

              </div>
              <!-- FIM LOGO -->

            </div>
            <!-- FIM COL LG 2 -->

            <div class="col-lg-3">

              <nav id="nav">
                <ul>
                  <li><a href="todos-tweets">Todos os tweets</a></li>
                </ul>
               </nav>

            </div>
            <!-- FIM COL LG 3 -->

            <div class="col-lg-6">

              <div id="novo-tweet">

                <form id="frm-novo-tweet" name="frm-novo-tweet" class="form-inline">

                  <div class="form-group">
                    <input type="text" class="form-control" id="tweet" name="tweet" placeholder="Cadastre um novo tweet" maxlength="140" onKeyPress="javascript:if (event.keyCode == 13){ Desafio.novoTweet(); return false; }">
                  </div>

                  <button type="button" class="btn btn-default" onclick="javascript: Desafio.novoTweet(); return false;">Tweet</button>

                </form>

              </div>
              <!-- FIM NOVO TWEET -->

            </div>
            <!-- FIM COL LG 3 -->

          </div>
          <!-- FIM ROW -->

        </div>
        <!-- FIM CONTAINER -->

      </header>
      <!-- END HEADER -->

      

      @yield('conteudo')


      

  </body>
</html>
