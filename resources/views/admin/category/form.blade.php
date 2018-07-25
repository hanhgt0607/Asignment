<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Category form</h1>
    <form action="/admin/category" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name"><br>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="text" class="form-control" name="image"><br>
        </div>
        <div class="form-group">
            <input type="submit"class="btn btn-primary" value="Save">
            <input type="reset" class="btn btn-primary" value="Reset">
        </div>
    </form>

</div>
</body>
</html>