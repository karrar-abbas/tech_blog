<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssFiles/main.css')}}">
    <title>tech-blog</title>
</head>
<body>
    <div class="header">
        <a class="logo">Tech Blog</a>
        <div class="header-right">
          <a class="active" href="/">Main</a>
          <a href="/home/1">Laravel</a>
          <a href="/home/2">Flutter</a>

        </div>
    </div>
    <div class="posts-container">
        @foreach ($post as $item)
            
        <div class="post-card">
            <img src="{{asset('images/'.$item->image)}}" alt="">
            <a href="/read-post/{{$item->id}}" class="title">
                 {{$item->title}}
            </a>
        </div>
        @endforeach     

        
    </div>
</body>
</html>