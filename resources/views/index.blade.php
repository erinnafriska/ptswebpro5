<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Siswa</title>
    <!-- Erinna Friska Tyas Damayanti (xi ipa 1) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>CRUD tabel siswa</h1>
        <br>
        <a href="siswa/create" class="btn btn-primary">Tambah Siswa</a>
        <table class="table table-bordered table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Siswa</th>
                    <th>Gender</th>
                    <th>Edit | Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $no => $item)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $item->siswa }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>
                        <form action="{{ route('siswa.destroy', $item->id) }}" onsubmit="return confirm('Apakah anda yakin?')" method="POST">
                            {{-- <a class="btn btn-info" href="{{ route('siswa.show', $item->id }}">Show</a> --}}
                            <a class="btn btn-primary" href="{{ route('siswa.edit', $item->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>