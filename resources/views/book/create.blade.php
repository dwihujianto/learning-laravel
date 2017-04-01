@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{ url('/book') }}">
                        
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''  }}">
                            <label class="col-md-2">Title</label>
                            <div class="col-md-6">
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                            </div>
                            @if($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div> 

                        <div class="form-group {{ $errors->has('author') ? 'has-error' : ''  }}">
                            <label class="col-md-2">Author</label>
                            <div class="col-md-6">
                                <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                            </div>
                            @if($errors->has('author'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('author') }}</strong>
                                </span>
                            @endif
                        </div> 

                        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''  }}">
                            <label class="col-md-2">Description</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                            </div>
                            @if($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div> 

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <input type="submit" class="btn btn-primary" value="Save">
                            </div>
                        </div> 

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection