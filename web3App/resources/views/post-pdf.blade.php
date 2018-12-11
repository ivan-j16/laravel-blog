<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

{{--<img src = "/storage/cover_images/{{$post->cover_image}}">--}}

<img src = "{{ public_path("storage/cover_images/".$post->cover_image) }}"style="width: 100%">


<h3>{{$post->title}}</h3>
<div>
    {!! $post->body !!}
</div>


</body>
</html>