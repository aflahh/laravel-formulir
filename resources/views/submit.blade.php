<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title text-center my-3">Data</h2>
                        <table class="table table-bordered table-striped mt-5">
                            <tr>
                                <td class="table-primary col-3">Nama Depan</td>
                                <td>{{ $data->FNameInput }}</td>
                            </tr>
                            <tr>
                                <td class="table-primary col-3">Nama Belakang</td>
                                <td>{{ $data->LNameInput }}</td>
                            </tr>
                            <tr>
                                <td class="table-primary col-3">Alamat Email</td>
                                <td>{{ $data->EmailInput }}</td>
                            </tr>
                            <tr>
                                <td class="table-primary col-3">Departemen</td>
                                <td>{{ $data->DepInput }}</td>
                            </tr>
                            <tr>
                                <td class="table-primary col-3">Nilai Tes</td>
                                <td>{{ $data->ScoreInput }}</td>
                            </tr>
                            <tr>
                                <td class="table-primary col-3">Foto KTM</td>
                                <td><img class="img-fluid" src="{{ asset('storage/'.$data->Photo) }}"></td>
                            </tr>
                        </table>
                        <a href="/formulir" class="btn btn-primary mt-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>
