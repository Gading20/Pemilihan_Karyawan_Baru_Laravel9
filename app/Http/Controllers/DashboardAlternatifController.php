<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class DashboardAlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('job.alternatif', [
            'alternatifs' => Alternatif::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $validateData = $request->validate([
            'nama' => 'required|max:50',
            'usia' => 'required',
            'pengalaman_kerja' => 'required',
            'ipk' => 'required',
            'kesediaan_gaji' => 'required',
            'jumlah_sertifikat' => 'required',
        ]);

        Alternatif::create($validateData);
        return redirect('/dashboard/alternatifs')->with('success', 'New Listening has ben added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatif $alternatif)
    {
        return view('job.edit', [
            'alternatif' => $alternatif
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternatif $alternatif)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:50',
            'usia' => 'required',
            'pengalaman_kerja' => 'required',
            'ipk' => 'required',
            'kesediaan_gaji' => 'required',
            'jumlah_sertifikat' => 'required',
        ]);

        Alternatif::where('id', $alternatif->id)
                    ->update($validateData);
        return redirect('/dashboard/alternatifs')->with('success', 'New Listening has ben added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatif $alternatif)
    {
        Alternatif::destroy($alternatif->id);

        return redirect('/dashboard/alternatifs')->with('success', 'New Listening has ben added');
    }
}
