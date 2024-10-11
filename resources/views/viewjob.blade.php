@extends('layout')
@section('title', 'ตรวจสอบงาน')

@section('content')
    <h2 class="text text-center py-2"> ตรวจสอบงาน</h2>
    <form method="POST" action="{{route('update',$blog->id)}}">
        @csrf
        <div class="form-group">
            <label for="title">ชื่องาน</label>
            <input type="text" name="title"class="form-control" value="{{$blog->title}}">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text text-danger">{{ $message }}</span>
            </div>
        @enderror
        <div>
            <div class="form-froup"></div>
            <label for="content">รายละเอียดงาน</label>
            <textarea name="content" cols="30" rows="5" class="form-control">{{$blog->content}}"</textarea>
        </div>
        
        <a href="/blog"class="btn btn-success my-3">ดูงานทั้งหมด</a>
        @error('content')
            <div class="my-2">
                <span class="text text-danger">{{ $message }}</span>
            </div>
        @enderror
    </form>
@endsection
