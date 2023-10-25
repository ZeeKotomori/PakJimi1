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
        <h1 class="text-2xl text-slate-200 font-semibold">Buat Data siswa</h1>
    </nav> 
    <div class="`">
        <form class="flex flex-col p-20 gap-4" method="POST" action="/siswa/store">
        <a class="flex" href="/siswa"><img src="/svg/arrow-left.svg" alt="">kembali</a>
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label><br>
                <input type="text" value="{{ @old('name') }}" name="name" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="name" >
                @error("name")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="nis">Nis:</label><br>
                <input name="nis" value="{{ @old('nis') }}" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="nis" required></input>
                @error("nis")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label><br>
                <input name="tempat_lahir" value="{{ @old('tempat_lahir') }}" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="tempat_Lahir" required>
                @error("tempat_lahir")
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label><br>
                <input name="alamat" value="{{ @old('alamat') }}" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="Alamat" required>
                @error("alamat")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_telp">No Telphone:</label><br>
                <input name="no_telp" value="{{ @old('no_telp') }}" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="no_telp" required>
                @error("no_telp")
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" value="{{ @old('tanggal_lahir') }}" name="tanggal_lahir" class="form-control p-2 w-full bg-slate-500/10 rounded-md" id="tanggal_Lahir" required>
                @error("tanggal_Lahir")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group gap-2 ">
                <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                <div class="p-2 w-full bg-slate-500/10 rounded-md flex gap-5">
                    <div class="flex">
                        <input type="radio" class="form-control" name="jenis_kelamin" id="P" value="P" required> <label for="P">Perempuan</label>
                    </div>
                    <div class="flex">
                        <input type="radio" class="form-control" name="jenis_kelamin" id="L" value="L" required> <label for="L">Laki-laki</label>
                    </div>
                </div>
            </div>
            <button class="bg-primary rounded p-1 px-2 font-semibold text-slate-200" type="submit" class="btn btn-primary">Simpan</button>
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
    </div>
</body>
</html>
