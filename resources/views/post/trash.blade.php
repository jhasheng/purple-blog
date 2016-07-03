@extends("layout")

@section("title")
    Post
@endsection

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Post Trash</h1>
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
                                <th>Create Time</th>
                                <th>Operation</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="{{ route('post.restore', ['id' => $post->id]) }}"
                                           class="btn btn-xs btn-info "><i class="fa fa-reply"> Restore</i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection