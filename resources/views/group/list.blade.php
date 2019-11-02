@extends("home")
@section("content")
    <div class="text-center text-primary"><h1>Danh sach Group</h1></div>

    {{--    <form method="post">--}}
    {{--        @csrf--}}
    <div>
        <div><a href="{{route('index')}}" class="btn btn-outline-primary">Homer</a>
            <a href="{{route('users.list')}}" class="btn btn-outline-primary">Users</a>
            <a href="{{route('teachers.list')}}" class="btn btn-outline-primary">Teachers</a>
            <a href="{{route('groups.create')}}" class="btn btn-outline-primary">Tao moi</a>

            {{--                <div class="form-group" style="float:right">--}}
            {{--                    <input type="text" placeholder="Search.." name="search">--}}
            {{--                    <button type="submit">Search</button>--}}
            {{--                </div>--}}
        </div>
    </div>
    {{--    </form>--}}
    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                {{--                <th scope="col">Email</th>--}}
                {{--                <th scope="col">Group</th>--}}
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($groups as $group)
                <tr>
                    <th scope="row">{{$group->id}}</th>
                    <td><a href="{{route('groups.showUsers',$group->id)}}">{{$group->name}}</a></td>
                    <td>{{$group->description}}</td>
                    {{--                    <td>{{$user->email}}</td>--}}

                    {{--                    @if($user->group)--}}
                    {{--                        <td class="text-primary">{{$user->group->name}}</td>--}}
                    {{--                    @else--}}
                    {{--                        <td class="text-defautl">{{"No Data"}}</td>--}}
                    {{--                    @endif--}}
                    {{--                    <td><a href="{{route('groups.edit',$group->id)}}">Edit</a></td>--}}
                    <td><a href="{{route('groups.delete',$group->id)}}"
                           onclick="return(confirm('Are you sure?'))">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

