@extends('layouts.app')

@section('title', 'Freshly Made Fruit Drinks')

@section('content')
<section class="hero">
    <div class="hero-content">
        <div class="hero-image">
        <img src="{{ asset('images/products/matcha.png') }}" alt="Matcha Drink">
        <div class="brand-overlay">
                <h2>FRESHTOPIA</h2>
                <p>EST. 2025</p>
            </div>
        </div>
        <div class="hero-text">
            <h1>FRESHLY MADE<br>FRUIT DRINKS</h1>
            <p>Experience the ultimate refreshment with our chilled fruit beverages — crafted from 100% real fruits and expertly blended without artificial sweeteners. Our drinks are designed to nourish your body, boost energy, and keep you feeling revitalized all day long. With a fusion of natural ingredients, vibrant colors, and flavors you'll love, Freshtopia offers the perfect balance of health, taste, and affordability. Sip smart, live fresh</p>
            <a href="{{ route('menu') }}" class="btn-primary">Our Juices →</a>
            <p class="tagline">100% Fresh, No Artificial Sweetener, Just Fruit... and Love!</p>
        </div>
    </div>
</section>

<section class="featured-products">
    <h2>Our Best Sellers</h2>
    <div class="product-grid">
        @foreach($featuredProducts as $product)
        <div class="product-card">
            <div class="best-seller-badge">BEST SELLER</div>
            <img src="{{ asset('images/products/matcha.png') }}" alt="Matcha Drink">
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
    <div class="cta-center">
        <a href="{{ route('menu') }}" class="btn-secondary">View All Menu</a>
    </div>
</section>
@endsection