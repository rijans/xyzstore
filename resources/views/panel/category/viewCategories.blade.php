@extends('panel.master')
@section('content')

    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
    <br>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            {{--<th>Publication Status</th>--}}
            <th>Action</th>
        </tr>

        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td><a class="link2" href="{{ url('/category/'.$category->id) }}">{{$category->categoryName}}</a></td>

                <td>{{$category->categoryDescription}}</td>
                {{--<td>{{$category->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>--}}
                <td>
                    <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-default">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger"
                       onclick="return confirm('Are you sure to delete it?');">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection