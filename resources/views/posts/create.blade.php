@extends('main')

@section('title', '| 关于我们')

@section('content')

    <div class="row">
        <div class = "col-md-8 col-md-offset-2" >
              <h1>新帖子</h1>
              <hr>
            {!! Form::open(['route' => 'posts.store']) !!}
    				{{ Form::label('title', '标题:')}}
    				{{ Form::text('title', null, array('class' => 'form-control'))}}
    				{{ Form::label('body', '内容:')}}
    				{{ Form::textarea('body', null, array('class' => 'form-control'))}}
    				{{ Form::submit('发布帖子', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
			  {!! Form::close() !!}
        </div>
    </div>
@endsection