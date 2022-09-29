@extends('admin.adminbase')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-2">
                @include('admin.side')
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-success text-white">
                            <div class="card-body py-8">
                                <h1 class="h2">{{$users}}</h1>
                                <h2 class="h4">Total Users</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-danger text-white">
                            <div class="card-body py-8">
                                <h1 class="h2">50+</h1>
                                <h2 class="h4">Total Regular User</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-primary text-white">
                            <div class="card-body py-8">
                                <h1 class="h2">22+</h1>
                                <h2 class="h4">Total Users</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection