<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTS Programming Web 5</title>
    <!-- Erinna Friska Tyas Damayanti (XI IPA 1) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1> Edit Siswa</h1>
        <div>
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <input type="text" name="siswas" class="form-control" value="{{ $siswa->siswa}}" placeholder="Nama Siswa">
                </div>
                <div class="mb-2">
                    <input type="text" name="gender" class="form-control" value="{{ $siswa->gender}}" placeholder="Jenis Kelamin">
                </div>
                <div class="mb-2">
                    <input type="reset" class="btn btn-secondary"> &nbsp; <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>

<!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>