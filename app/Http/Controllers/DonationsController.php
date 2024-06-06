<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Auth;

class DonationsController extends Controller
{
    public function index() : View
    {
        // Get all donations
        $donasis = Donasi::latest()->paginate(10);

        // Render view with donations
        return view('donasis.index', compact('donasis'));
    }

    public function mydonations() : View
    {
        // Get donations for the authenticated user
        $mydonasis = Donasi::where('user_id', Auth::id())->latest()->paginate(10);

        // Render view with user donations
        return view('mydonations', compact('mydonasis'));
    }

    public function create()
    {
        return view('createdonation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image', // Removed specific mimes validation
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();  
        $request->image->move(public_path('images'), $imageName);

        Donasi::create([
            'nama_donasi' => $request->title,
            'keterangan_donasi' => $request->description,
            'gambar' => $imageName,
            'user_id' => Auth::id(),
            'jumlah_uang' => 0, // Default value if needed
            'selesai' => 0, // Default value if needed
        ]);

        return redirect()->route('createdonation')->with('success', 'Donation created successfully.');
    }

    public function show($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('detaildonation', compact('donasi'));
    }

    public function edit($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('editmydonation', compact('donasi'));
    }

    public function update(Request $request, $id)
    {
        $donasi = Donasi::findOrFail($id);

        if ($request->has('status')) {
            $donasi->selesai = 1;
            $donasi->save();
            return redirect()->route('mydonations')->with('success', 'Donasi berhasil diakhiri.');
        }

        if ($request->has('delete')) {
            $donasi->delete();
            return redirect()->route('mydonations')->with('success', 'Donasi berhasil dihapus dan dana ditarik.');
        }

        return redirect()->route('mydonations')->with('error', 'Tidak ada tindakan yang dilakukan.');
    }

    public function donate(Request $request, $id)
    {
        $request->validate([
            'nominal' => 'required|numeric|min:1',
        ]);

        $donasi = Donasi::findOrFail($id);
        $donasi->jumlah_uang += $request->nominal;
        $donasi->save();

        return redirect()->route('donasis.show', $id)->with('success', 'Donasi berhasil ditambahkan.');
    }
}
