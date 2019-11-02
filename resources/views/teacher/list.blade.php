@extends("home")
@section("content")
    <div class="text-center text-primary"><h1>Danh sach Teacher</h1></div>

    {{--    <form method="post">--}}
    {{--        @csrf--}}
    <div>
        <div><a href="{{route('index')}}" class="btn btn-outline-primary">Homer</a>
            <a href="{{route('users.list')}}" class="btn btn-outline-primary">Users</a>
            <a href="{{route('groups.list')}}" class="btn btn-outline-primary">Groups</a>
            <a href="{{route('groups.create')}}" class="btn btn-outline-primary">Tao moi</a>

            {{--                <div class="form-group" style="float:right">--}}
            {{--                    <input type="text" placeholder="Search.." name="search">--}}
            {{--                    <button type="submit">Search</button>--}}
        </div>
    </div>
    {{--    </form>--}}
    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                {{--                <th scope="col">Group</th>--}}
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <th scope="row">{{$teacher->id}}</th>
                    {{--                    <a href="{{route('groups.showUsers',$teacher->id)}}">--}}
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->phone}}</td>
                    <td>{{$teacher->address}}</td>

                {{--                    @if($user->group)--}}
                {{--                        <td class="text-primary">{{$user->group->name}}</td>--}}
                {{--                    @else--}}
                {{--                        <td class="text-defautl">{{"No Data"}}</td>--}}
                {{--                    @endif--}}
                {{--                    <td><a href="{{route('groups.edit',$group->id)}}">Edit</a></td>--}}
                {{--                    <td><a href="{{route('groups.delete',$group->id)}}"--}}
                {{--                           onclick="return(confirm('Are you sure?'))">Delete</a></td>--}}
                {{--                </tr>--}}
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

