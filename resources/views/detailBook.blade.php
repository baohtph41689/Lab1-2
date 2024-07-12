@extends('index')
@section('content2')
<div class="container w-50">
<form>
    <h4>Chi tiết sách</h4>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Id</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $book->id }}" disabled>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">title</label>
      <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $book->title }}"disabled>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">thumbnail</label>
       <img width="60", height="60" src="{{ $book->thumbnail }}" alt="">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">author</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $book->author }}"disabled>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">publisher</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $book->publisher }}"disabled>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Publication</label>
        <input type="datetime" class="form-control" id="exampleInputPassword1" value="{{ $book->Publication }}"disabled>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleInputPassword1" value="{{ $book->Price }}"disabled>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="exampleInputPassword1" value="{{ $book->Quantity }}"disabled>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Category_id</label>
        <input type="number" class="form-control" id="exampleInputPassword1" value="{{ $book->Category_id }}"disabled> 
      </div>
    <a class="btn btn-primary"  href="/">back</a>
  </form>
</div>
@endsection