<img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="Img-{{ $product['id'] }}">
<p>{{$product['brand']}}</p>
<p class="text-uppercase fw-bold">{{$product['name']}}</p>
<span class="new-price"></span>
<span class="price">{{$product['price']}}</span>