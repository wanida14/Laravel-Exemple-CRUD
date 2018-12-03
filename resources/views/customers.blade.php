@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">    
                <a class="btn btn-outline-success float-right" href="{{ route('customers.create') }}" style="margin-top: 30px;margin-bottom: 30px;">เพิ่มข้อมูล</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col" style="width: 320px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($custormers as $custormer) 
                        <tr>
                            <td>{{ $custormer->name }}</td>
                            <td>{{ $custormer->address }}</td>
                            <td>{{ $custormer->phone }}</td>
                            <td><a class="btn btn-outline-info" href="{{ route('customers.show', $custormer->id) }}">ดูข้อมูล</a>
                                <a class="btn btn-outline-warning" href="{{ route('customers.edit', $custormer->id) }}">แก้ไข</a>
            
                                <form action="{{ route('customers.destroy', $custormer->id) }}" method="post" style="display: inline;">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-outline-danger" type="submit">ลบ</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
