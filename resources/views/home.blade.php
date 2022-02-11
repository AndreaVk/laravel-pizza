<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizzeria Boolean | Le nostre pizze</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
  <header>
    <h1>LE NOSTRE PIZZE</h1>
  </header>
  <main>
    <ul>
      @foreach ($pizzas as $item)
      
      <li>
        <h2>{{$item['name']}} </h2>
        <p class="italic">{{$item['description']}} </p>
        <p>Prezzo: {{$item['price']}}€</p>
        <p>
          @if($item["vegetarian"])
            <img src="https://animalcrossinglife.com/wp-content/uploads/2021/11/carota-icona-assets-acnh-animal-crossing-new-horizons.png" alt="icona carota" height="30">
          @endif
        </p>
      </li>
      
      @endforeach
    </ul>
  </main>
</body>
</html>