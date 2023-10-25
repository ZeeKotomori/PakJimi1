<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <nav class="px-6 py-4 bg-primary flex items-center gap-4">
      <img src="/img/PPLG_LOGO.png" class="w-16 h-16" alt="">
      <h1 class="text-2xl text-slate-200 font-semibold">Ubah Data siswa</h1>
    </nav>
    <form class="flex flex-col p-20 gap-4" method="POST" action="/siswa/update/{{ $siswa->id }}">
        <a class="flex" href="/siswa"><img src="/svg/arrow-left.svg" alt="">kembali</a>
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" value="{{ $siswa->name }}" name="name" class="form-control p-2 form-controlpx-2 w-full bg-slate-500/10 rounded-md" id="name" required>
            @error("name")
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="nis">Nis:</label>
            <input name="nis" value="{{ $siswa->nis }}" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="Nis" required></input>
            @error("nis")
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label><br>
            <input name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="Tempat_Lahir" required>
            @error("tempat_lahir")
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input name="alamat" value="{{ $siswa->alamat }}" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="Alamat" required>
            @error("alamat")
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="no_telp">No Telphone:</label>
            <input name="no_telp" value="{{ $siswa->no_telp }}" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="no_telp" required>
            @error("no_telp")
            <p>{{ $message }}</p>
            @enderror
        </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label><br>
                <input type="date" value="{{ $siswa->tanggal_lahir }}" name="tanggal_lahir" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="Tanggal_Lahir" required>
                @error("tanggal_lahir")
                    <p>{{ $message }}</p>
                @enderror
            </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label><br>
            <div class="flex gap-5 p-2 w-full bg-slate-500/10 rounded-md">
                <div class="flex">
                    <input type="radio" class="form-control" name="jenis_kelamin"id="Jenis_Kelamin" value="P" required {{ $siswa->jenis_kelamin === "P" ? "checked" : "" }}>perempuan <br>
                </div>
                <div class="flex">
                    <input type="radio" class="form-control" name="jenis_kelamin" id="Jenis_Kelamin" value="L" required {{ $siswa->jenis_kelamin === "L" ? "checked" : "" }}>lakilaki
                </div>
            </div>
            @error("jenis_kelamin")
                <p>{{ $massage }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-primary rounded p-1 px-2 text-slate-200">Simpan</button>
    </form>
    <script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
            primary: '#00C54F',
          }
        }
      }
    }
  </script>
</body>
</html>
