@extends('principal')

@section('titulo', 'Estados')

@section('conteudo')

      <p>Consumo: <br>
        <input id="consumo" class="form-group" name="consumo" type="number"></p>
      <br>
      <p>Valor de abastecimento: <br>
        <input id="valAbt" class="form-group" name="valAbt" type="number"></p>
      <br>
      <button id="btnCalc" type="button" name="button">Calcular </button>

      <script>
      console.log({{$mPreco}});
      console.log({{$maxProx}});
      var mp = 1;
      @foreach($postos as $p)

        @if($p->pgasolina < $mp->pgasolina)

          $mp->nome = $p->nome;
          console.log({{ $mp->nome}});
        @endif
        console.log({{ $p->nome}});
        @if($p->distancia < $mPreco->distancia)
          $maxProx = $p;
        @endif
      @endforeach

      //
      // $valAbt = recebido;
      //
      // $quantL_mPreco = ($valAbt/$mPreco->pgasolina);
      // $quantL_maxProx = ($valAbt/maxProx->pgasolina);
      //
      // $dif_L = $quantL_mPreco - $quant_maxProx;
      //
      // $consumo = recebido do front;
      // $disIdeal = ($consumo * dif_L);
      //
      // @foreach($postos as $p)
      //   @if($p->distancia <= $mPreco->distancia)
      //     $mPreco = $p;
      //   @endif
      // @endforeach
</script>
@endsection
