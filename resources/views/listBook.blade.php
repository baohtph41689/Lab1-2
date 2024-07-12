@extends('index')
@section('content')

<h3>8 san pham cao nhat </h3>
<table border="1" class="table table-striped">
    <thead>
        <th>ID</th>
        <th>title</th>
        <th>author</th>
        <th>publisher</th>
        <th>Publication</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Category_id</th>
        <th>Acttion</th>
    </thead>
    <tbody>
         @foreach($highestPriceBooks as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->title }}</td>
                <td>{{ $c->author }}</td>
                <td>{{ $c->publisher }}</td>
                <td>{{ $c->Publication }}</td>
                <td>{{ $c->Price }}</td>
                <td>{{ $c->Quantity }}</td>
                <td>{{ $c->Category_id }}</td>
                <td><a class="btn btn-primary" href="/Getbook/{{ $c->id }}">Chi tiết</a></td>                 
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
@section('content2')

<h3>8 san pham thap nhat </h3>
<a class="nav-link active" aria-current="page" href="">List</a>
<table border="1" class="table table-striped">
    <thead>
        <th>ID</th>
        <th>title</th>
        <th>author</th>
        <th>publisher</th>
        <th>Publication</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Category_id</th>
        <th>Acttion</th>
    </thead>
    <tbody>
         @foreach($lowestPriceBooks as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->title }}</td>
                <td>{{ $c->author }}</td>
                <td>{{ $c->publisher }}</td>
                <td>{{ $c->Publication }}</td>
                <td>{{ $c->Price }}</td>
                <td>{{ $c->Quantity }}</td>
                <td>{{ $c->Category_id }}</td>  
                <td><a class="btn btn-primary" href="/Getbook/{{ $c->id }}">Chi tiết</a></td>                 
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
