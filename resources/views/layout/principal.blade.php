<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crud Laravel</title>
	<link href="/css/app.css" rel="stylesheet">
	<link href="/css/custom.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Crud Laravel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
            <li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
    <li><a href="/auth/login">Login</a></li>
    <li><a href="/auth/register">Register</a></li>
  @else
    <li class="dropdown">
      <a href="#" class="dropdown-toggle"
          data-toggle="dropdown" role="button"
              aria-expanded="false">
          {{ Auth::user()->name }}
          <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="/auth/logout">Logout</a></li>
      </ul>
    </li>
  @endif
</ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



		@yield('conteudo')
<br><br>
		<footer class="footer">
			<p>© Laravel</p>
		</footer>

	</div>
</body>
</html>
