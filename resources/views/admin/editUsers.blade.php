@extends('admin.adminbase')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-2">
                @include('admin.side')
            </div>
            <div class="col-10">
                <div class="row">
                    <div class=" mt-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('user.update',$user)}}" method="post">
                                    @csrf
                                    @method('put')
                                    <h2 class="h4 mb-3">Update Users Here</h2>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="">Name</label>
                                                <input type="text" value="{{$user->name}}" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="">Email</label>
                                                <input type="email" value="{{$user->email}}" name="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="">Contact</label>
                                                <input type="text" value="{{$user->contact}}"name="contact" class="form-control">
                                            </div>
                                        </div>
                                        {{-- <div class="col-6">
                                            <div class="mb-3">
                                                <label for="">Password</label>
                                                <input type="password" value="{{$user->password}}" name="password" class="form-control">
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" value="Update"
                                            class="py-2 px-4 rounded-lg bg-green-700 text-white hover:bg-green-800 float-end">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
