<h1>Catégorie</h1>

<ul>
    @foreach ($categories as $itemCategorie)
        <li>
            <a href="{{ route('welcome.categorie', $itemCategorie) }}">{{ $itemCategorie->name }}</a>
        </li>
    @endforeach
</ul>

<h1>Produits</h1>

<ul>
    @foreach ($products as $itemProduct)
        <li>
            {{ $itemProduct->name }}
        </li>
        <li>
            {{ $itemProduct->price }}€
        </li>
        <li>
            {{ $itemProduct->description }}
        </li>
        <li>
            {{ $itemProduct->image }}
        </li>
        <li>
            <a href="{{route('welcome.detail' , $itemProduct)}}">
                <button>Voir +</button>
            </a>

        </li>
    @endforeach
</ul>
