@extends('layout')

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">New Post</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">new post</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('post.store') }}" role="form" method="post">
                                <div class="form-group @if($errors->has('title'))has-error @endif">
                                    <label class="control-label" for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"/>
                                    @if($errors->has('title'))
                                        @foreach($errors->get('title') as $error)
                                            <p class="help-block">{{ $error }}</p>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="form-group @if($errors->has('description'))has-error @endif">
                                    <label class="control-label" for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}"/>
                                    @if($errors->has('description'))
                                        @foreach($errors->get('description') as $error)
                                            <p class="help-block">{{ $error }}</p>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="form-group @if($errors->has('content'))has-error @endif">
                                    <label class="control-label" for="content">Content</label>
                                    <textarea name="content" id="content" class="form-control" rows="3">{{ old('content') }}</textarea>
                                    @if($errors->has('content'))
                                        @foreach($errors->get('content') as $error)
                                            <p class="help-block">{{ $error }}</p>
                                        @endforeach
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection