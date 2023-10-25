<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Validation\Rule;
class SiswaController extends Controller
{
    public function index(){
        $dataSiswa = Siswa::all();
        return view("siswa.index", ['siswa' => $dataSiswa]);
    }

    public function create(){
        return view('siswa.create');
    }

    public function store(Request $request){
        // $siswa = new Siswa;
        // $siswa->name = $request->input('name');
        // $siswa->nis = $request->input('nis');
        // $siswa->jenis_kelamin = $request->input('jenis_kelamin');
        // $siswa->tempat_lahir = $request->input('tempat_lahir');
        // $siswa->tanggal_lahir = $request->input('tanggal_lahir');
        // $siswa->alamat = $request->input('alamat');
        // $siswa->no_telp = $request->input('no_telp');
        // $siswa->save();

        $valindasi = $request->validate([
            "name" => "required",
            "nis" => "required|numeric|unique:siswas",
            "jenis_kelamin" => "required|in:P,L",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required|date",
            "alamat" => "required",
            "no_telp" => "required|numeric",
        ],[
            "name.required" => "Name kudu di isi euy",
            "nis.required" => "Nis kudu di isi euy",
            "jenis_kelamin.required" => "Jenis kelamin kudu di isi euy",
            "tempat_lahir.required" => "Tempat Lahir kudu di isi euy",
            "tanggal_lahir.required" => "Tanggal Lahir kudu di isi euy",
            "alamat.required" => "Alamat kudu di isi euy",
            "no_telp.required" => "No Hp kudu di isi euy"
        ]);

        Siswa::create($valindasi);

        toast('Data Berhasil Ditambah', 'success')->position('top')->timerProgressBar();
        return redirect('/siswa');
    }

    public function delete(Siswa $Siswa){
        Siswa::destroy($Siswa->id);
        toast('Data Berhasil Dihapus', 'success')->position('top')->timerProgressBar();
        return back();
    }

    public function edit(Request $request,Siswa $Siswa){
        return view("siswa.edit",["siswa" => $Siswa]);
    }

    public function update(Request $request, string $id){

        $Siswa = Siswa::FindorFail($id);

        // $request->validate(Siswa::$rules);

        $valindasi = $request->validate([
            "name" => "required",
            "nis" => [
                "required",
                Rule::unique('siswas')->ignore($id),
                "numeric"
            ],
            "jenis_kelamin" => "required|in:P,L",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required|date",
            "alamat" => "required",
            "no_telp" => "required|numeric",
        ],[
            "name.required" => "Name kudu di isi euy",
            "nis.required" => "Nis kudu di isi euy",
            "nis.numeric" => "Nis haru numeric",
            "tempat_lahir.required" => "Tempat Lahir kudu di isi euy",
            "alamat.required" => "Alamat kudu di isi euy",
            "no_telp.required" => "No Hp kudu di isi euy"
        ]);

        Siswa::where("id",$Siswa->id)->update($valindasi);

        toast('Data Berhasil Diubah', 'success')->position('top')->timerProgressBar();
        return redirect('/siswa');
    }

}
