@extends('layout')
@section('title', 'เนื้อหาทั้งหมด')
@section('content')
    @if (count($blogs)>0)
    <h2 class="text text-center py-2">งานทั้งหมด</h2>

    <table class="table text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ชื่องาน</th>
                <th scope="col">สถานะการทำงาน</th>
                <th scope="col">แก้ไขงาน</th>       
                <th scope="col">ตรวจสอบงาน</th>
                <th scope="col">ลบงาน</th>
                <th scope="col">Test</th>
                <th scope="col">Test2</th>


            </tr>
        </thead>
        <tbody>

            @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>
                        @if ($item->status == true)
                            <a href="{{ route('change', $item->id) }}" class="btn btn-success">เสร็จสิ้น</a>
                        @else
                            <a href="{{ route('change', $item->id) }}" class="btn btn-secondary">กำลังดำเนินการ</a>
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('edit', $item->id) }}" class= "btn btn-warning">แก้ไข</a>
                    </td>
        
                    <td>
                        <a href="{{ route('viewjob', $item->id) }}" class= "btn btn-primary">ตรวจสอบงาน</a>
                    </td>

                    <td>
                        <form action="{{ route('delete', $item->id) }}" method="POST"
                            onsubmit="return confirm('คุณต้องการลบบทความนี้หรือไม่?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">ลบ</button>
                        </form>
                    </td>                  

                </tr>
            @endforeach
        </tbody>
    </table>
{{$blogs->links()}}
 @else
    <h2 class="text text-center py-2">ไม่มีงานในระบบ</h2>
@endif
@endsection
