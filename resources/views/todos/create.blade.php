<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div>
        <h1>What next you need to do</h1>
        <form method="POST" action="/todos/create">
            @csrf
            <input type="text" name="title" />
            <input type="submit" value="create" />
        </form>
    </div>
</body>
</html>