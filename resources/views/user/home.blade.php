@extends('user.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h2">List Of Registered Users</h2>
                        <div class="list-group">
                            @foreach ($user as $item)
                                <a href="#" class="list-group-item list-group-item-action bg-gray-600 hover:bg-gray-800 block text-white">{{$item->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
