<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> @yield('titulo','System Fuel')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
		{{-- <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" /> --}}

	</head>
	<body>
		<nav class="navbar topnav">
			<div class="container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Home</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Área Administrativa
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{route('products.create')}}">Novo Posto</a></li>
              <li><a href="{{route('products.relatorio')}}">Relatorio Geral</a></li>

						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Português
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">English</a></li>
							<li><a href="#">Português</a></li>
							<li><a href="#">Espanhol</a></li>
						</ul>
					</li>
					<!-- Authentication Links -->
					@guest
							<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
									<li class="nav-item">
											<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
									</li>
							@endif
					@else
							<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="" href="{{ route('logout') }}"
												 onclick="event.preventDefault();
																			 document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
											</form>
									</div>
							</li>
					@endguest
				</ul>
			</div>
		</nav>

		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-2 logo">
						<a href="/"><img src="{{asset('images/logo.png')}}" /></a>
					</div>
					<div class="col-sm-7">
						{{-- <div class="head_help">0800 3333 3333</div> --}}
						<div class="head_email">contato@<span>systemfuel</span>.com.br</div>

						<div class="search_area">
							<form method="GET">
								<input type="text" name="s" required placeholder="Procure um item" />
								<select name="category">
									<option value="">Todas os combustíveis</option>
                  <option value="">Gasolina</option>
									<option value="">Etanol</option>
									<option value="">Diesel</option>
									<option value="">GNV</option>
								</select>
								<input type="submit" value="" />
						    </form>
						</div>
					</div>
					<div class="col-sm-3">
						<a href="#">
							<div class="cartarea">
								<div class="carticon">
									<div class="cartqt">9</div>
								</div>
								<div class="carttotal">
									Já abasteceu esse mês:<br/>
									<span>R$ 299,99</span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</header>
		<div class="categoryarea">
        {{-- {{dd($products)}} --}}
</div>
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <aside>
        </aside>
      </div>
      <div class="col-sm-9">
        {{------------------CONTEUDO--------------------------------}}
          <h1>{{$product->brand->name}}</h1>
          <img src="{{asset('images/media/'.$product->brand->url)}}" alt="img">
          <h2>{{$product->name}}</h2>
          <h2>Valor atual: R${{$product->price}}</h2>
          <h3>Valor anterior: R${{$product->price_from}}</h3>
          <h4>Descrição: {{$product->description}}</h4>

          <a class="btn btn-success"href="{{route('products.index')}}">Voltar</a>
          {{-- <button type="button" id="tt" name="button" >TT</button> --}}

        {{---------------------FIM CONTEUDO-------------------------------------}}
      </div>
    </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
      <div class="col-sm-4">
        <div class="widget">

        </div>
      </div>
      <div class="col-sm-4">
        <div class="widget">

        </div>
      </div>
      <div class="col-sm-4">
        <div class="widget">

          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="subarea">
      <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
          <form method="POST">
            <input class="subemail" name="email" placeholder="Subscribe to our newsletter">
            <input type="submit" value="Subscribe" />
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="links">
      <div class="container">
        <div class="row">
        <div class="col-sm-4">
          <a href="#"><img width="150" src="{{asset('images/logo.png')}}" /></a><br/><br/>
          <strong>Abasteça de forma inteligente!</strong><br/><br/>
          Nosso Endereço físico.<br>
          Faça uma visita!
          ........
        </div>
        <div class="col-sm-8 linkgroups">
          <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">

            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
        <div class="col-sm-6">© <span>systemFuel</span> - Todos os direitos reservados.</div>
        <div class="col-sm-6">
          <div class="payments">
            {{-- <img src="{{asset('images/visa.png')}}" /> --}}
            <!-- <img src="../assets/images/visa.png" />
            <img src="../assets/images/visa.png" />
            <img src="../assets/images/visa.png" /> -->
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>

{{-- <script type="text/javascript"> </script> --}}
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

<script type="text/javascript">
  $("#tt").click(function(){
    window.location.replace("{{route('products.index')}}");
  });
</script>

</body>
</html>
