<!-- resources/views/jams/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Jam</title>
</head>
<body>
    <h2>Create Jam</h2>
    <form action="{{ route('jams.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="jenis_waktu">Jenis Waktu:</label>
            <select name="jenis_waktu" id="jenis_waktu" required>
                <option value="jam">Jam</option>
                <option value="hari">Hari</option>
            </select>
        </div>
        <div id="jam_field">
            <label for="jam">Jam:</label>
            <input type="number" id="jam" name="jam" min="0" max="23" required>
        </div>
        <div id="hari_field" style="display: none;">
            <label for="hari">Hari:</label>
            <input type="number" id="hari" name="hari" min="0" required>
        </div>
        <button type="submit">Submit</button>
    </form>

    <script>
        document.getElementById('jenis_waktu').addEventListener('change', function() {
            if (this.value === 'jam') {
                document.getElementById('jam_field').style.display = 'block';
                document.getElementById('hari_field').style.display = 'none';
            } else {
                document.getElementById('jam_field').style.display = 'none';
                document.getElementById('hari_field').style.display = 'block';
            }
        });
    </script>
</body>
</html>
