<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssFiles/dashboard.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="sidenav">
        <a href="/dashboard">Add Post</a>
        <a href="/posts_list">Posts List</a>
        
      </div>
      
      <!-- Page content -->
      
      <div class="main">
        <div class="form_container">
            <span class="title">Add Post</span>
            <form action="dashboard" method="POST" enctype="multipart/form-data">
              @csrf
              @method('POST')
                <span>Post Title :</span>
                <input type="text" name="title" id="" class="input_title">
                <span>Post Content :</span>
                <textarea name="body" id="" cols="30" rows="10"></textarea><br>
                <select name='category'>
                    <option value="Flutter">Flutter</option>
                    <option value="Laravel">Laravel</option> 
                  </select>
                  <input type="file" id="myfile" name="image" accept="image/*"> <br>
                 <input type="submit" value="Share Post" class="btn">

            </form>
        </div>
      </div>
      
</body>
</html>