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
    <div class="text-center pt-10">
        <h1 class="text-2xl">What next you need to do</h1>
        <x-alert />
        <form method="POST" action="/todos/create" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border"/>
            <input type="submit" value="create" class="p-2 border rounded-lg"/>
        </form>
    </div>
</body>
</html>