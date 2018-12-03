@extends('app')

@section('content')
    <div class="container">
    <h3 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Custormer</h3>
        <div class="row">
            <div class="col-sm-12">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $custormer->name }}</td>
                            <td>{{ $custormer->address }}</td>
                            <td>{{ $custormer->phone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-outline-warning" href="{{ route('customers.index') }}">ย้อนกลับ</a>
    </div>
@endsection
