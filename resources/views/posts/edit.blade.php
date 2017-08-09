@extends('main')

@section('title', '| 编辑帖子')

@section('content')

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{-- 第一个变量必须和model变量昵称一样 --}}
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

{{-- 			{{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
			{{ Form::text('slug', null, ["class" => 'form-control input-lg']) }} --}}

			{{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ["class"=> 'form-control']) }}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>创建时间:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>更改时间:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', '取消', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{	Form::submit('保存', ['class' =>'btn btn-success btn-block'])	}}
						{{-- {!! Html::linkRoute('posts.destroy', '保存', array($post->id), array('class' => 'btn btn-success btn-block')) !!} --}}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div> <!--end of form -->

@endsection