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
                        <h2 class="card-title text-center my-3">Formulir</h2>
                        <form action="/submit" method="post" enctype="multipart/form-data" class="mt-5">
                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="FNameInput" class="form-label">Nama Depan</label>
                                    <input type="text" class="form-control" name="FNameInput"
                                        value="{{ old('FNameInput') }}">
                                    @error('FNameInput')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="LNameInput" class="form-label">Nama Belakang</label>
                                    <input type="text" class="form-control" name="LNameInput"
                                        value="{{ old('LNameInput') }}">
                                    @error('LNameInput')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="EmailInput" class="form-label">Alamat Email</label>
                                <input type="text" class="form-control" name="EmailInput"
                                    value="{{ old('EmailInput') }}">
                                @error('EmailInput')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="DepInput" class="form-label">Departemen</label>
                                <select name="DepInput" class="form-select">
                                    <option value="Teknik Informatika" selected>Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ScoreInput" class="form-label">Nilai Tes</label>
                                <input type="text" class="form-control" name="ScoreInput"
                                    value="{{ old('ScoreInput') }}">
                                @error('ScoreInput')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="PhotoInput" class="form-label">Foto KTM (png,jpeg,jpg)</label>
                                <input type="file" class="form-control" name="PhotoInput"
                                    value="{{ old('PhotoInput') }}">
                                @error('PhotoInput')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>
