<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssFiles/posts_list.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="sidenav">
        <a href="/dashboard">Add Post</a>
        <a href="/posts_list">Posts List</a>
      </div>
      
      <div class="main">
        <div class="list_container">
        <ul class="posts_list">
          @foreach ($post as $item)
          <li>
            <div class="content">{{$item->title}}</div>
            <form action="posts_list/{{$item->id}}" method="POST">
              @CSRF
              @method('POST')
              <button type="submit" class="delete">X</button>
              </form>

          </li>
          @endforeach
          </ul>
        </div>
      </div>
      
</body>
</html>