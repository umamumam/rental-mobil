<!-- resources/views/jams/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jam</title>
</head>
<body>
    <h2>Daftar Jam</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Waktu</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jams as $jam)
            <tr>
                <td>{{ $jam->nama }}</td>
                <td>{{ $jam->jenis_waktu }}</td>
                <td>
                    @if($jam->jenis_waktu === 'jam')
                        {{ $jam->jam }} Jam
                    @else
                        {{ $jam->hari }} Hari
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
