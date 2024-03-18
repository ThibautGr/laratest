<div>
    <form action="{{route('products/edit/save', $product)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$product->name}}">

        <button type="submit">Edit</button>
        <a href="{{route('products/')}}">back to all products</a>
    </form>
</div>
