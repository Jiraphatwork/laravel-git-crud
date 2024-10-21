@extends('layout')
@section('title', 'สร้างงานใหม่')

@section('content')
    <h2 class="text text-center py-2"> สร้างงานใหม่งาน</h2>
    <form method="POST" action="/insert">
        @csrf 
        <div class="form-group">
            <label for="title">ชื่องาน</label>
            <input type="text" name="title"class="form-control">
        </div>
        @error('title')
            <div class="my-2">
                <span class="text text-danger">{{ $message }}</span>
            </div>
        @enderror
        <div>
            <div class="form-group"></div>
            <label for="content">รายละเอียดงาน</label>
            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
       
        
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blog"class="btn btn-success">ดูงานทั้งหมด</a>
        @error('content')
            <div class="my-2">
                <span class="text text-danger">{{ $message }}</span>
            </div>

        @enderror
    </form>
@endsection
