<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($gifts as $gift)
        <li>{{$gift->category}}</li>
        @endforeach
    </ul>
    
</body>
</html>