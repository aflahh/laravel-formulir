<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function formulir()
    {
        return view('formulir');
    }
    public function submit(Request $request)
    {
        $messagesError = [
            'required' => 'Wajib diisi!',
            'min' => 'Minimal :min karakter!',
            'max' => 'Maksimal :max karakter!',
            'numeric' => 'Masukkan nilai angka!',
            'between' => 'Nilai antara 2.50 - 99.99!',
            'email' => 'Gunakan email yang valid!',
            'PhotoInput.max' => 'Maksimal ukuran 2MB!',
            'image' => 'Masukkan file gambar!',
            'mimes' => 'Masukkan file dengan ekstensi yang sesuai!'
        ];

        $this->validate($request, [
            'FNameInput' => 'required|min:5',
            'LNameInput' => 'required|min:5',
            'EmailInput' => 'required|email',
            'DepInput' => 'required',
            'ScoreInput' => 'required|numeric|between:2.50,99.99',
            'PhotoInput' => 'required|image|mimes:png,jpeg,jpg|max:2048'
        ], $messagesError);

        $request->Photo = $request->PhotoInput->store('images', 'public');
        session()->flash('success', 'Data Berhasil Di Input');
        
        return view('submit', ['data' => $request]);
    }
}
