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
    <div class="row">
        <h1>PRODUCT FORM</h1>
    </div>
    <div class="row">
        <form action="/product/create" method="post">
            {{csrf_field()}}
            <div class="form-group">
                Product Name
                <input type="text" name="name" class="form-control" >
            </div>
            <div class="form-group">
                Price
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                Image
                <input type="text" name="thumbnail" class="form-control">
            </div>
            <div>
                Discription
                <textarea type="text" name="discription" class="form-control"> </textarea>
            </div>
            <div>
                <input type="submit"class="btn btn-primary" value="Save">
                <input type="reset" class="btn btn-primary" value="Reset">
            </div>
        </form>
    </div>
</div>

</body>
</html>