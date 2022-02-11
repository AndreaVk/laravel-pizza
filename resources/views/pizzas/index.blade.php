@extends('layouts.base')

@section('pageContent')
<ul>
    @foreach ($pizzas as $item)

         <li>
             <p>{{$item['name']}} </p>
        </li>
    
    @endforeach
 </ul>
@endsection