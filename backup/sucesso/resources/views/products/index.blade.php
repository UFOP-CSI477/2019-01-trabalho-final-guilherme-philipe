@extends('principal')

{{-- @section('titulo','Home') --}}

@section('conteudo')
{{-- <p>{{dd($products)}}</p> --}}

{{ $products->links()}}

<div class="row">
  @foreach ($products->take(6) as $p)
      <div class="col-sm-4">
        <div class="product_item">
          <a href="{{route('products.show', $p->id)}}">

          <div class="product_tags">
            <div class="product_tag product_tag_red">PROMOÇÃO</div>
            <div class="product_tag product_tag_green">ACABANDO</div>
            {{-- <div class="product_tag product_tag_blue">O que</div> --}}
          </div>
        <div class="product_image">
          <img src="{{asset('images/media/'.$p->brand->url)}}" alt="img">
        </div>
        <div class="product_name">{{$p->name}}</div>

        <div class="product_brand"> {{$p->brand->name}} </div>
        <div class="product_price_from"> R$ {{$p->price_from}}</div>
        <div class="product_price"> R$ {{$p->price}}</div>
        <div style="clear:both"></div>
        </a>
      </div>
    </div>
  @endforeach
</div>


{{-- <h1>{{ dd($cats)}}</h1> --}}

@endsection
