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
					<li><a href=" #">Login</a></li>
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
      {{-- {{dd($product)}} --}}

       <form class="form-group" action="{{ route('products.store')}}" method="post">
        @csrf
        <h1>Entre com os dados</h1>
        <div class="row jumbotron">
          <div class="col-sm-6">
            <p class="form-group">
            Nome: <input class="form-control m-4" typer="text" name="name" value="">
            </p>

            <p class="form-group"> Preço anterior:
              <input class="form-control" type="numberde" step="any" name="price_from" value="">
            </p>

						<p class="form-group">
            Descrição: <input class="form-control m-4" typer="text" name="description" value="">
            </p>



						<div display="none">
							<input hidden name="id_category" value="1">
							<input hidden name="stock" value="10">
							<input hidden name="rating" value="0">
							<input hidden name="featured" value="0">
							<input hidden name="sale" value="0">
							<input hidden name="bestseller" value="0">
							<input hidden name="options" value="0">
							<input hidden name="new_product" value="0">

						</div>

          </div>

          <div class="col-sm-6">
            <p class="form-group">
              Preço: <input class="form-control" typer="number" step="any" name="price" value="">
            </p> <br>
            <p class="form-group">
              Posto ofertante:

              <select class="form-control" name="id_brand">
                @foreach ($brands as $b)
                  <option value="{{$b->id}}"> {{$b->name}} </option>
                @endforeach

              </select>
              {{-- <input class="form-control" typer="text" name="nome" value=""> --}}
            </p> <br>
          </div>

        </div>
        <input class="btn btn-success" type="submit" name="btnSalvar" value="Salvar">
      </form>

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
</body>
</html>
