<div>
    <form action="{{route('products/store')}}" method="post">
        @csrf
        <input type="text" name="name">

        <button type="submit">Créer</button>
    </form>
</div>
