<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-3">
        <h2 class="text-center">List Products</h2>
    </div>
    <div class="row mt-3" id="content">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $.ajax({
            url: 'http://localhost:8000/api/products',
            method: 'GET',
            success: function (data) {
                var content = ''
                // $('#content').html(data.items)
                $.each(data, function (key, value) {
                    content += `
<div class="col-4">
<div class="card" style="width: 18rem;">
                <img src="${value.avatar}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">${value.name}</h5>
                    <p class="card-text">${value.price}$</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
</div>`
                })
                $('#content').html(content)
            },
            error: function () {

            }
        })
    })
</script>
</body>
</html>
