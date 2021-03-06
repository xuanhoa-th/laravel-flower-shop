@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Users List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('user.list')}}">List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users List</li>
            </ol>
        </div>
        <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i>
                    Setting
                </button>
                <button type="button"
                        class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                        data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <a href="javaScript:void();" class="dropdown-item">Action</a>
                    <a href="javaScript:void();" class="dropdown-item">Another action</a>
                    <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Orders List</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="default-datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $key => $order)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td><img src="" class="avatar"></td>
                                    <td>
                                        <a href="#"></a>
                                    </td>
                                    <td>{{$order->orderDetail->quantity}}</td>
                                    <td>{{$order->orderDetail->price}}</td>
                                    <td>
                                        <a class="btn btn-white btn-round px-2"
                                           href="#"><i class="icon-settings"></i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-round px-2"
                                           onclick="return confirm('Are You Sure?')"
                                           href="#"><i class="icon-trash"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
