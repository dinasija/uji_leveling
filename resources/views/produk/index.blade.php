@extends('layouts.master')

@section('content')
<div class="container">
  <h2>Produk Saya</h2>
    <div class="case-studies-block style-two mt-100"> 
          <div class="nav left gap-8">
          <a href="{{route('product')}}">
            <div class="nav-item text-button-small text-secondary pt-8 pb-8 pl-20 pr-20 pointer" data-name="all">Semua</div>
          </a>
          @foreach ($category as $item)
            <a href="{{route('product')}}?category={{$item->id}}">
              <div class="nav-item text-button-small text-secondary pt-8 pb-8 pl-20 pr-20 pointer" data-name="all">{{$item->title}}</div>
            </a>
          @endforeach
    </div>
</div>
          <div class="row mt-40 row-gap-40">
            @foreach ($product as $item)
            <div class="col-12 col-xl-3 col-sm-7 item-filter" data-name="fintech">
              <div class="item-main"> 
                <div class="bg-img bora-16 overflow-hidden"><img class="w-100 h-100 bora-16 display-block" src="{{asset($item->file)}}" alt=""/></div>
                <div class="infor bg-white bora-8 pt-24">
                  <p>{{($item->title)}}</p>
                  <b class="text-black mt-8">Rp {{number_format($item->price-$item->discount)}}
                    @if ($item->discount>0)
                    <del>Rp {{number_format($item->price)}}</del>
                    @endif
                  </b>
                  <br>
                  <button type="button" href="https://api.whatsapp.com/send?phone=38465457674&text=halo saya ingin membeli produk {{$item->title}}" class="btn-primary btn">Order WA</button>
                </div>
              </div>
            </div>
            @endforeach
          </div>
@endsection