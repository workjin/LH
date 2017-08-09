@extends('main')

@section('title', '| All Posts')

@section('content')
	
	<div class ="row">
		<div class= "col-md-10">
			<h1>所有帖子</h1>
		</div>

		<div class= "col-md-2">
			<a href={{ route('posts.create')}} class="btn btn-lg btn-block btn-primary">创建新帖子</a>
		</div>

		<div class= "col-md-12">
			<h1></h1>
		</div>
	</div>

	<div class="row">
		<div class= "col-md-12">
			<table class= "table">
				<thead>
					<th>#</th>
					<th>标题</th>
					<th>内容</th>
					<th>发布时间</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($posts as $post)
						<tr>
							<th>{{$post->id}}</th>
							<td>{{$post->title}}</td>
							<td>
								{{ substr($post->body, 0, 50) }}
								{{ @strlen($post->body)>50 ? "..." : "" }}
							</td>
							<td>
								{{ @date('M j, Y', strtotime($post->created_at)) }}
							</td>
							<td>
								<a href={{ route('posts.show', $post->id) }} class="btn btn-default btn-sm">查看</a>
								<a href={{ route('posts.edit', $post->id) }} class="btn btn-default btn-sm">编辑</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

			<div class = "text-center">
				{!! $posts->links(); !!}
			</div>
			
		</div>	
	</div>

@endsection