@extends("home")
@section("content")
    <div><h1>Edit Information</h1></div>
    <div class="col-lg-6">
        <form action="{{route('users.edit',$user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label>phone</label>
                <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label>Image</label>
                <img src="{{asset("/storage/$user->image")}}" alt="image{{$user->id}}" height="150px" width="150px"><br>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <select name="group">
                    <option value="">Khong trong group nao</option>
                    @foreach($groups as $group)
                        <option
                            @if ($user->group_id==$group->id)
                            selected
                            @endif
                            value="{{$group->id}}">{{$group->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection

