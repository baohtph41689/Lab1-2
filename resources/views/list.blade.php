@extends('index')
@section('content4')



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
     
    </thead>
    <tbody>
         @foreach($booklist as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->title }}</td>
                <td>{{ $c->author }}</td>
                <td>{{ $c->publisher }}</td>
                <td>{{ $c->Publication }}</td>
                <td>{{ $c->Price }}</td>
                <td>{{ $c->Quantity }}</td>
                <td>{{ $c->Category_id }}</td>
                               
            </tr>
        @endforeach
    </tbody>

</table>
@endsection