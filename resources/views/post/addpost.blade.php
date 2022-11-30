<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD POST </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>ADD POST</h1>
    <form action="{{ route('storepost') }}" method="post">
        @csrf
        
        <label>Name :</label>
        <input class="form-control" type="text" name="name">

        <label>Title : </label>
        <input class="form-control" type="text" name="title">

        <label>Body :</label>
        <input class="form-control" type="text" name="body"><br>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</body>
</html>