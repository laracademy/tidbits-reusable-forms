@extends('layout.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-hover table-bordered">
                    <caption class="text-right">
                        <a href="{{ route('coupon.create') }}" class="btn btn-lg btn-success">Create Coupon</a>
                    </caption>
                    <thead>
                        <tr>
                            <th width="25%">
                                Code
                            </th>
                            <th width="50%">
                                Name
                            </th>
                            <th width="25%">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coupons as $coupon)
                            <tr>
                                <td>
                                    <h4>
                                        {{ $coupon->code }}
                                    </h4>
                                </td>
                                <td>
                                    <h4>
                                        {{ $coupon->name }}
                                    </h4>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-justified">
                                        <a href="{{ route('coupon.destroy', $coupon) }}" class="btn btn-lg btn-block btn-danger">Delete</a>
                                        <a href="{{ route('coupon.edit', $coupon) }}" class="btn btn-lg btn-block btn-primary">Edit</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection