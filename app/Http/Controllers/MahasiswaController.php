<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class MahasiswaController extends Controller
{
    public function index()
    {
        $halaman = 'home';
        $siswa = Mahasiswa::orderBy('nama')->paginate(5);

        return view('mahasiswa/home', compact('siswa', 'halaman'));
    }

    public function create()
    {
        $halaman = 'input';
        return view('mahasiswa/input', compact('halaman'));
    }

    public function store(Request $request)
    {
        try {
            $input = $request->all();

            $validator = Validator::make($input, [
                'id_jurusan' => 'required',
                'nim' => 'required|unique:mahasiswa,nim|size:14',
                'nama' => 'required|string',
                'tgl_lahir' => 'required|date',
            ]);
            if($validator->fails()){
                return redirect('input')->withErrors($validator);
            }
            Mahasiswa::create($input);
            Session::flash('flash_message', 'Data sudah berhasil di input');
            return redirect('/');

        } catch (\Exception $e){
           return $e->getMessage();
        }
    }
}
