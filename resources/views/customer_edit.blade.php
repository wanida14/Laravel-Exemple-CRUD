@extends('app')

@section('content')
    <div class="container">
            <h3 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Edit Custormer</h3>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <form action="{{ route('customers.update', $custormer->id) }}" method="post">
                        {{ method_field('put') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $custormer->name }}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"  value="{{ $custormer->address }}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ $custormer->phone }}"placeholder="Phone">
                        </div>      
                        <button type="submit" class="btn btn-primary">ตกลง</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
