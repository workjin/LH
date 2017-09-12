@extends('main')

@section('content')
    <div class="row">
        <div class = "col-md-12">
            <div class="jumbotron">
              <h1>欢迎来到六合至尊</h1>
              <p class = "lead">开奖记录：</p>
                <a href="{{ route('result') }}" class="btn btn-default btn-sm">查看历史记录</a>


            @include('partials._lotteryResults')
            </div>  
        </div>
    </div>


    <div>
        <table class="table">
                <tr>                        
                    <td><a href ={{ route('platform', 1) }}><strong>至尊心水</strong>  </a> 免费超准专家心水  </td>
                    <td><a href ={{ route('platform', 2) }}><strong>人人料</strong>  </a> 分享心水成为专家</td>
                </tr>
                <tr>                        
                    <td><a href ><strong>水心论坛</strong>  </a> 心水分析汇总  </td>
                    <td><a href ><strong>每期玄机</strong>  </a> 六和玄机破解</td>
                </tr>
                <tr>                        
                    <td><a href ><a href ><strong>168公式</strong>  </a> 公式规律大全  </td>
                    <td><a href ><a href ><strong>六和图库</strong>  </a> 六和图库免費看</td>
                </tr>
                <tr>                        
                    <td><a href ><a href ><strong>老黄历</strong>  </a> 六合每期吉數黃歷  </td>
                    <td><a href ><a href ><strong>投票互動</strong>  </a> 知己知彼百戰百勝</td>
                </tr>
                <tr>                        
                    <td><a href ><a href ><strong>趣味遊戲</strong>  </a> 玩游戏选靓码  </td>
                    <td><a href ><a href ><strong>查询助手</strong>  </a> 六合咨询大全集合</td>
                </tr>
        </table>
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

    </div>
@endsection

@section('scripts')
    <!-- <script>confirm('I loaded up some JS');</script> -->
@endsection
