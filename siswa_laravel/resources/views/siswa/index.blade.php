<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <main class="flex flex-col h-screen">
    <nav class="px-6 py-4 bg-primary flex items-center gap-4">
      <img src="/img/PPLG_LOGO.png" class="w-16 h-16" alt="">
      <h1 class="text-2xl text-slate-200 font-semibold">List Data</h1>
    </nav>
    <section class="flex flex-col items-center justify-center gap-3 h-screen">    
          <table class="pt-5 border-l-4 border-primary">
            <thead>
                <tr class="text-center text-xl">
                    <th class="px-2">Nama</th>
                    <th class="px-2">NIS</th>
                    <th class="px-2">Jenis Kelamin</th>
                    <th class="px-2">Tempat Lahir</th>
                    <th class="px-2">Tanggal Lahir</th>
                    <th class="px-2"> Alamat</th>
                    <th class="px-2">No. Tlp</th>
                    <th class="px-2" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody class="py-3">
                @foreach($siswa as $data)
                <tr class="text-center text-xl">
                    <td class="px-2 py-1">{{ $data->name }}</td>
                    <td class="px-2 py-1">{{ $data->nis }}</td>
                    <td class="px-2 py-1">{{ $data->jenis_kelamin }}</td>
                    <td class="px-2 py-1">{{ $data->tempat_lahir }}</td>
                    <td class="px-2 py-1">{{ $data->tanggal_lahir }}</td>
                    <td class="px-2 py-1">{{ $data->alamat }}</td>
                    <td class="px-2 py-1">{{ $data->no_telp }}</td>
                    <td class="px-2 py-1">
                      <form class="flex" action="{{ route('siswa.delete' , $data->id)}}" id="myForm{{ $data->id }}">
                        @csrf
                        @method('DELETE')
                        <button onclick="openConfirm({{ $data->id }}); return false;"><img class="bg-red-600 ruunded-md p-1 rounded" src="/svg/trash-2.svg" alt=""></button>
                    </form>  
                  </td>
                    <td class="px-2 py-1"><a href="/siswa/edit/{{ $data->id }}"><img class="bg-primary rounded-md p-1" src="/svg/edit-3.svg" alt=""></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button class="bg-primary rounded p-1 px-2"><a class="font-semibold text-slate-200" href="/siswa/create">tambah data</a></button>
      </section>
      <div id="confirmationDelete" class="hidden fixed top-0 left-0 w-full h-screen bg-gray-800/50 flex items-center justify-center gap-10">
        <div class="bg-white w-96 p-5 rounded-md">
          <p class="text-xl font-medium mb-8">Yakin mau di hapus mas?</p>
          <div class="mt-4 flex gap-4 justify-end">
            <button onclick="submitDelete()" class="py-2 px-4 bg-red-600 rounded-md">Hapus Aja</button>
            <button onclick="closeConfrim()" class="py-2 px-4 bg-primary rounded-md">Gajadi</button>
          </div>
        </div>
      </div>
    </main>
    @include('sweetalert::alert')
    <script>
      function openConfirm(data){
        id = data 
        document.getElementById('confirmationDelete').classList.remove('hidden');
      }
      function closeConfrim(){
        document.getElementById('confirmationDelete').classList.add('hidden');
      }
      function submitDelete(){
        document.getElementById(`myForm${id}`).submit();
        closeConfrim();
      } 
    </script>
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