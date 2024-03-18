@extends('app')

@section('content')
    <div>
        <ul>
        @foreach($products as $product)

        <li>
            <p class="inline">
                {{$product->name}} de {{$product->user->name}} <a href="{{route('products/edit',$product)}}">Edit</a>  @include('products.form._delete')
            </p>
        </li>

        @endforeach
    </div>
    </ul>

    <a href="{{route('products/create')}}">Create a product</a>
@endsection

