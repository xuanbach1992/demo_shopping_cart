@extends("home")
@section("content")
    <div><h1>Tao moi nguoi dung</h1></div>
    <div class="col-lg-6">
        <form action="{{route('users.create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>phone</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <select name="group">
                    <option value="">Khong trong group nao</option>
                    @foreach($groups as $group)
                        <option
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

