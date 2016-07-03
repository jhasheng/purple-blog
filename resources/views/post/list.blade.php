@extends("layout")

@section("title")
    Post
@endsection

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All Post</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">new post</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Views</th>
                                <th>Likes</th>
                                <th>Comments</th>
                                <th>Created Time</th>
                                <th>Updated Time</th>
                                <th>Operation</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->views }}</td>
                                    <td>{{ $post->likes }}</td>
                                    <td>{{ $post->comments }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('post.edit', ['id' => $post->id]) }}"
                                           class="btn btn-xs btn-success "><i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('post.delete', ['id' => $post->id]) }}"
                                           class="btn btn-xs btn-warning "><i class="fa fa-trash"> Trash</i></a>
                                        <a href="{{ route('post.delete.force', ['id' => $post->id]) }}"
                                           class="btn btn-xs btn-danger "><i class="fa fa-trash"> Force Delete</i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection