<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $film = new Film;   
        // $film->nama = $request->nama;
        // $film->pencipta = $request->pencipta;
        // $film->negara = $request->negara;
        // $film->tanggal = $request->tanggal;
        // $film->save();

        // Film::create([
        //     'nama' => $request->nama,
        //     'pencipta' => $request->pencipta,
        //     'negara' => $request->negara,
        //     'tanggal' => $request->tanggal,
        // ]);

        $request->validate([
            'nama' => 'required',
            'pencipta' => 'required', 
            'negara' => 'required', 
            'tanggal' => 'required', 
        ]);

        Film::create($request->all());
        return redirect('/films')->with('status', 'Data Film Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('films.show', compact("film"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $request->validate([
            'nama' => 'required',
            'pencipta' => 'required', 
            'negara' => 'required', 
            'tanggal' => 'required', 
        ]);

        Film::where('id', $film->id)
            ->update([
                'nama' => $request->nama,
                'pencipta' => $request->pencipta,
                'negara' => $request->negara,
                'tanggal' => $request->tanggal
            ]);
        return redirect('/films')->with('status', 'Data Film Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        Film::destroy($film->id);
        return redirect('/films')->with('status', 'Data Film Berhasil Dihapus!');
    }
}
