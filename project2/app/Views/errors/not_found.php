<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
    1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Error 404 CI4</title>
    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.04);
            border-radius: .25rem;
        } .
            card .card-header {
            background-color: #fff;
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5 mx-auto" style="width: 30rem;">
                    <h3 class="card-header mb-2 display-1 text-muted text-center">
                        404
                    </h3>
                    <span class="card-subtitle mb-2 text-muted text-center">
                        Page Could Not Be Found
                    </span>
                    <div class="card-body mx-auto">
                        <a type="button" href="<?= base_url('/');?>" class="btn btn-info text-white"> Back To Home </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>