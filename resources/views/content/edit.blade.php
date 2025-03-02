<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('content.update', $content->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="content1" value="{{ $content->content1 }}">
        <input type="text" name="content2" value="{{ $content->content2 }}">
        <input type="text" name="content3" value="{{ $content->content3 }}">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
