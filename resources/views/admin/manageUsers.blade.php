@extends('admin.adminbase')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-2">
                @include('admin.side')
            </div>
            <div class="col-10">
                <table class="table table-borderd">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($users as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->contact}}</td>
                        <td class="flex gap-3">
                            <a href="{{route('user.edit',$item)}}"
                                class="bg-green-500 rounded px-3 py-1 text-white hover:bg-green-700"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{route('user.destroy',$item)}}" method="POST">
                                @csrf
                                @method('delete')
                                    <button type="submit" class="bg-red-500 rounded px-3 py-1 text-white hover:bg-red-700"><i class='bi bi-trash3'></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
