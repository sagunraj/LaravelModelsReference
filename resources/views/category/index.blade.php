@extends("layouts/app")
@section("content")

    <div class="container">
        <a href="{{ route('category.create') }}" class="btn btn-primary">Create new category</a>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                            <form method="POST" action="{{route('category.delete',$category->id)}}">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                <input type="submit" value="Delete" class="btn btn-danger"/>

                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection