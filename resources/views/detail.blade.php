<h1>Mon Produit</h1>

<ul>

    <li>
        {{ $product->name }}
    </li>
    <li>
        {{ $product->description }}
    </li>
    <li>
        {{ $product->price }}€
    </li>
</ul>

<a href="{{route('addToCart', $product)}}">Ajouter au panier</a>



<h1>Produits similaires</h1>

<ul>

@foreach ($products as $product)

    <li>{{$product->name}}</li>

</ul>

@endforeach
