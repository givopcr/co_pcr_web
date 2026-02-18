<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller;

class KunjunganController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Data yang sama dengan HomeController untuk konsistensi tampilan
        $data = [
            'nama_kampus' => 'Politeknik Caltex Riau',
            'slogan' => 'Unggul, Mandiri, dan Berdaya Saing Global',
            'logo' => 'assets/logo_pcr.png'
        ];
        
        return view('kunjungan', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'institusi' => 'required|string|max:100',
            'nomor_telepon' => 'required|string|max:15|regex:/^[0-9]{10,15}$/',
            'jumlah_peserta' => 'required|integer|min:1|max:100',
            'tanggal_kunjungan' => 'required|date|after_or_equal:tomorrow',
            'tujuan_kunjungan' => 'required|string|max:500',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'persetujuan' => 'required|accepted',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'institusi.required' => 'Nama institusi wajib diisi.',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi.',
            'nomor_telepon.regex' => 'Format nomor telepon tidak valid. Gunakan 10-15 digit angka.',
            'jumlah_peserta.required' => 'Jumlah peserta wajib diisi.',
            'jumlah_peserta.min' => 'Jumlah peserta minimal 1 orang.',
            'jumlah_peserta.max' => 'Jumlah peserta maksimal 100 orang.',
            'tanggal_kunjungan.required' => 'Tanggal kunjungan wajib diisi.',
            'tanggal_kunjungan.after_or_equal' => 'Tanggal kunjungan harus besok atau setelahnya.',
            'tujuan_kunjungan.required' => 'Tujuan kunjungan wajib diisi.',
            'foto.required' => 'Foto dokumentasi wajib diupload.',
            'foto.image' => 'File harus berupa gambar.',
            'foto.mimes' => 'Format foto harus jpeg, png, atau jpg.',
            'foto.max' => 'Ukuran foto maksimal 2MB.',
            'persetujuan.required' => 'Anda harus menyetujui persyaratan.',
            'persetujuan.accepted' => 'Anda harus menyetujui persyaratan.',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->route('kunjungan.create')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan dalam pengisian form. Silakan periksa kembali.');
        }

        // Simpan data ke database
        try {
            $fotoPath = $request->file('foto')->store('foto-kunjungan', 'public');
            $kunjungan = Kunjungan::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'institusi' => $request->institusi,
                'nomor_telepon' => $request->nomor_telepon,
                'jumlah_peserta' => $request->jumlah_peserta,
                'tanggal_kunjungan' => $request->tanggal_kunjungan,
                'tujuan_kunjungan' => $request->tujuan_kunjungan,
                'foto' => $fotoPath,
                'status' => 'pending',
            ]);

            // Redirect dengan pesan sukses
            return redirect()->route('kunjungan.create')
                ->with('success', 'Pendaftaran kunjungan berhasil! ID Pendaftaran: K-' . str_pad($kunjungan->id, 5, '0', STR_PAD_LEFT) . '. Tim kami akan menghubungi Anda dalam waktu 1x24 jam.')
                ->with('registration_id', 'K-' . str_pad($kunjungan->id, 5, '0', STR_PAD_LEFT));

        } catch (\Exception $e) {
            \Log::error('Error menyimpan kunjungan: ' . $e->getMessage());
            
            return redirect()->route('kunjungan.create')
                ->with('error', 'Terjadi kesalahan sistem. Silakan coba lagi atau hubungi admin.')
                ->withInput();
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->create();
    }

    // ... metode lainnya tetap sama
}