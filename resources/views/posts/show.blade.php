@extends('main')

@section('title', '| 查看帖子')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			
			<p class="lead">{{ $post->body }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
{{-- 				<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ url($post->slug) }}">{{ url($post->slug) }}</a></p>
				</dl> --}}

				<dl class="dl-horizontal">
					<label>创建时间:</label>
					<label>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</label>
				</dl>

				<dl class="dl-horizontal">
					<label>更改时间:</label>
					<label>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</label>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', '编辑', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>

					<div class="col-sm-6">
						{{-- {!! Html::linkRoute('posts.destroy', '删除', array($post->id), array('class' => 'btn btn-danger btn-block')) !!} --}}

						{!! Form:: open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
						{!! Form:: submit('删除', ['class' => 'btn btn-danger btn-block']) !!}
						{!! Form:: close() !!}
					</div>
				</div>

				<dir class = "row">
					<div class ="col-md-10">
						{{ Html::linkRoute('platform', '查看所有帖子', array($post->platform), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}

						{{-- {{ Html::linkRoute('posts.index', '<<查看所有帖子>>', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }} --}}
					</div>
				</dir>

			</div>
		</div>
	</div>

@endsection