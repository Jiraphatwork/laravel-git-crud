@extends('layout')
@section('title', 'เกี่ยวกับเรา')

@section('content')
    <h2>เกี่ยวกับเรา</h2>
    <p>ผู้พัฒนาระบบ : {{ $name }}</p>
    <p>วันเริ่มพัฒนาระบบ : {{ $date }}</p>
    <hr>
    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro est asperiores dolorem voluptates deleniti soluta
        aliquid nostrum dolorum, aspernatur facilis, architecto repudiandae assumenda perspiciatis corrupti animi! Iusto aut
        expedita qui!
    </p>

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
@endsection
