<?php

namespace App\Http\Controllers;

use App\Models\JenisOutput;
use Illuminate\Http\Request;
use App\Models\JenisOutputKey;
use App\Http\Requests\JenisOutputRequest;

class JenisOutputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.master-jenis-output.index', [
            'jenis_output' => JenisOutput::with('jenisOutputKey')->get(),
            'jenis_output_key' => JenisOutputKey::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JenisOutputRequest $request)
    {
        JenisOutput::create([
            'jenis_output_key_id' => $request->jenis_output_key_id,
            'name' => $request->name,
        ]);
        return redirect()
            ->route('jenis-output.index')
            ->with('success', 'Jenis Output berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisOutput $jenisOutput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisOutput $jenisOutput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JenisOutputRequest $request, $id)
    {
        JenisOutput::where('id', $id)->update([
            'jenis_output_key_id' => $request->jenis_output_key_id,
            'name' => $request->name,
        ]);

        return redirect()
            ->route('jenis-output.index')
            ->with('success', 'Jenis Output berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JenisOutput::findOrFail($id)->delete();

        return redirect()
            ->route('jenis-output.index')
            ->with('success', 'Jenis Output berhasil dihapus!');
    }
}
