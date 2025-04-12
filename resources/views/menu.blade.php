@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<section class="menu-header">
    <h1>Menu</h1>
</section>

<section class="menu-section">
    <h2>Best Seller</h2>
    <div class="product-grid">
        @foreach($bestSellers as $product)
        <div class="product-card">
            <div class="best-seller-badge">BEST SELLER</div>
            <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">
            <h3>{{ $product->name }}</h3>
            <p>{{ implode(', ', json_decode($product->ingredients)) }}</p>
            <div class="product-tags">
                <p>Tags:</p>
                @foreach(json_decode($product->tags) as $tag)
                <span class="tag">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

@foreach($categories as $category)
    @if($category->slug != 'best-seller')
    <section class="menu-section">
        <h2>{{ $category->name }}</h2>
        <div class="product-grid">
            @foreach($category->products as $product)
            <div class="product-card">
                @if($product->is_best_seller)
                <div class="best-seller-badge">BEST SELLER</div>
                @endif
                <img src="{{ asset('images/products/matcha.png' . $product->image) }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>{{ implode(', ', json_decode($product->ingredients)) }}</p>
                <div class="product-tags">
                    <p>Tags:</p>
                    @foreach(json_decode($product->tags) as $tag)
                    <span class="tag">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif
@endforeach
@endsection