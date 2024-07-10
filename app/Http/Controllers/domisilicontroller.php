// app/Http/Controllers/DomisiliController.php

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domisili;

class DomisiliController extends Controller
{
    public function index()
    {
        $datas = Domisili::all();
        return view('domisili.index', compact('datas'));
    }

    public function create()
    {
        return view('domisili.create');
    }

    public function store(Request $request)
    {
        // Validasi request dan proses simpan data
        // ...

        return redirect()->route('domisili.index')->with('success', 'Data berhasil disimpan.');
    }
}
