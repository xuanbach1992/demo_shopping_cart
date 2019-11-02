@extends("home")
@section("content")
    <form action="{{route('users.search')}}" method="post">
        @csrf
        <div>
            <div>
                <a href="{{route('index')}}" class="btn btn-outline-primary">Homer</a>
                <a href="{{route('groups.list')}}" class="btn btn-outline-primary">Groups</a>
                <a href="{{route('teachers.list')}}" class="btn btn-outline-primary">Teachs</a>
                <a href="{{route('users.create')}}" class="btn btn-outline-primary">Tao moi</a>
                <h1 class="text-center text-primary">Danh sach User</h1>
                <div class="form-group" style="float:right">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                </div>
            </div>
        </div>
    </form>
    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Group</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td><img src="{{asset("/storage/$user->image")}}" alt="image{{$user->id}}" height="150px"
                             width="150px"></td>

                    @if($user->group)
                        <td class="text-primary">{{$user->group->name}}</td>
                    @else
                        <td class="text-defautl">{{"No Data"}}</td>
                    @endif
                    <td><a href="{{route('users.edit',$user->id)}}">Edit</a></td>
                    <td><a href="{{route('users.delete',$user->id)}}"
                           onclick="return(confirm('Are you sure?'))">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if(!empty($teachers))
        <div>
            <div><h1 class="text-center text-primary">Danh sach giang vien</h1></div>
            <div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <th scope="row">{{$teacher->id}}</th>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->phone}}</td>
                            <td>{{$teacher->address}}</td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection

