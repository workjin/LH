@extends('main')

@section('content')
    <div class="row">
        <div class = "col-md-12">
            <div class="jumbotron">
              <h1>欢迎来到六合至尊</h1>
              <p class = "lead">网站施工中。</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">最热门帖子</a></p>
            </div>  
        </div>
    </div>

    <div class="row">
        <div class = "col-md-8">   

            @foreach($posts as $post)
                <div class = "post"> 
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                    <a href={{  route('posts.show', $post->id) }} class="btn btn-primary">查看更多</a>
                </div>
            @endforeach

            <div class = "post"> 
                <h3>帖子主题</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo...   
                </p>
                <a href="#" class="btn btn-primary">查看更多</a>
            </div>

            <hr>
        </div>

        <div class = "col-md-3 col-md-offset-1" style="color:red;">   
        </div>
    </div>
@endsection

@section('scripts')
    <!-- <script>confirm('I loaded up some JS');</script> -->
@endsection