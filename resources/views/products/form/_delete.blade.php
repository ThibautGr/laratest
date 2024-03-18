<form action="{{route('products/delete', $product)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete this product</button>
</form>
