@extends('app')

@section('content')
    <div class="container">
        <h3 style="margin-top: 40px;margin-bottom: 30px;text-align: center;">Add Custormer</h3>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="{{ route('customers.store') }}" method="post">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control"  placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                    </div>      
                    <button type="submit" class="btn btn-primary">ตกลง</button>
                </form>
            </div>
        </div>
    </div>
@endsection
