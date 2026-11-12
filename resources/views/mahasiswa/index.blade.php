<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { display: flex; gap: 30px; }
        .form-box { width: 35%; background: #f4f4f4; padding: 20px; border-radius: 8px; }
        .table-box { width: 65%; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #007bff; color: white; }
        .form-group { margin-bottom: 12px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 4px; }
        .form-group input, .form-group textarea, .form-group select { width: 100%; padding: 8px; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; padding: 10px 15px; cursor: pointer; border-radius: 4px; }
        .alert { color: green; font-weight: bold; }
        .error { color: red; font-size: 12px; }
    </style>
</head>
<body>
    <h2>Kelola Data Mahasiswa</h2>
    @if(session('success'))
        <p class="alert">{{ session('success') }}</p>
    @endif

    <div class="container">
        <!-- Form Input Mahasiswa -->
        <div class="form-box">
            <h3>Tambah Mahasiswa</h3>
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>NIM:</label>
                    <input type="text" name="nim" value="{{ old('nim') }}">
                    @error('nim') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa:</label>
                    <input type="text" name="nama" value="{{ old('nama') }}">
                    @error('nama') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Program Studi:</label>
                    <input type="text" name="prodi" value="{{ old('prodi') }}">
                    @error('prodi') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea name="alamat">{{ old('alamat') }}</textarea>
                    @error('alamat') <span class="error">{{ $message }}</span> @enderror
                </div>
                <button type="submit">Simpan Mahasiswa</button>
            </form>
        </div>

        <!-- Tabel Data Mahasiswa -->
        <div class="table-box">
            <h3>Daftar Mahasiswa</h3>
            <table>
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Tgl Lahir</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mahasiswa as $item)
                        <tr>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->prodi }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->alamat }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="text-align:center;">Belum ada data mahasiswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>