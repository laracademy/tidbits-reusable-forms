@extends('layout.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="well">
                    Creating a Coupon
                </div>

                @include('partials.messages')

                <form action="{{ route('coupon.update', $coupon) }}" method="post" autocomplete="off">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code" value="{{ old('code', $coupon->code) }}">
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name', $coupon->name) }}">
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <input type="text" class="form-control" name="message" value="{{ old('message', $coupon->message) }}">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-lg btn-success" value="Update Coupon">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection