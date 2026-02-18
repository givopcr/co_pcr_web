<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KunjunganListController extends Controller
{
    /**
     * Display a listing of the kunjungan with pagination.
     */
    public function index(Request $request)
    {
        // Gunakan scope yang sudah ada di model
        $kunjungans = Kunjungan::orderBy('created_at', 'desc')
            ->paginate(10);
        
        // Data untuk tampilan
        $data = [
            'nama_kampus' => 'Politeknik Caltex Riau',
            'slogan' => 'Unggul, Mandiri, dan Berdaya Saing Global',
            'logo' => 'assets/logo_pcr.png',
            'kunjungans' => $kunjungans
        ];
        
        return view('kunjungan-list', $data);
    }

    /**
     * Filter kunjungan berdasarkan status (menggunakan scope dari model)
     */
    public function filter(Request $request, $status)
    {
        $query = Kunjungan::orderBy('created_at', 'desc');
        
        // Gunakan scope berdasarkan status
        if ($status == 'pending') {
            $query->pending();
        } elseif ($status == 'diterima') {
            $query->diterima();
        } elseif ($status == 'ditolak') {
            $query->where('status', 'ditolak');
        }

        $kunjungans = $query->paginate(10)->withQueryString();

        $data = [
            'nama_kampus' => 'Politeknik Caltex Riau',
            'slogan' => 'Unggul, Mandiri, dan Berdaya Saing Global',
            'logo' => 'assets/logo_pcr.png',
            'kunjungans' => $kunjungans,
            'activeFilter' => $status
        ];

        return view('kunjungan-list', $data);
    }

    public function search(Request $request)
    {
        $keyword = $request->get('q');

        $kunjungans = Kunjungan::where('nama', 'like', "%{$keyword}%")
            ->orWhere('institusi', 'like', "%{$keyword}%")
            ->orWhere('email', 'like', "%{$keyword}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10)
            ->withQueryString();

        $data = [
            'nama_kampus' => 'Politeknik Caltex Riau',
            'slogan' => 'Unggul, Mandiri, dan Berdaya Saing Global',
            'logo' => 'assets/logo_pcr.png',
            'kunjungans' => $kunjungans,
            'keyword' => $keyword
        ];

        return view('kunjungan-list', $data);
    }
    
    public function hapusFoto($id)
    {
        $kunjungan = Kunjungan::findOrFail($id);
        
        if ($kunjungan->foto) {
            // Hapus file dari storage
            Storage::disk('public')->delete($kunjungan->foto);
            
            // Update database (set foto menjadi null)
            $kunjungan->update(['foto' => null]);
            
            return response()->json([
                'success' => true,
                'message' => 'Foto berhasil dihapus'
            ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Foto tidak ditemukan'
        ]);
    }
}