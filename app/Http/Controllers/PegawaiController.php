<?php
namespace App\Http\Controllers;
 
use App\Models\Pegawai;
// use App\Models\Pegawai;
use Illuminate\Http\Request;
class PegawaiController extends Controller {
        public function index()
        {
        $pegawais = Pegawai::latest()->paginate(5);
        return view('pegawais.index',compact('pegawais'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $pegawai = new Pegawai();
            $path = $pegawai->create();
            return $path;
        // return view('pegawais.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'nohp' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
        ]);
        
        Pegawai::create($request->all());
        
        return redirect()->route('pegawais.index')
            ->with('success','Pegawai created successfully.');
        }
        
        /**
         * Display the specified resource.
         *
         * @param\App\Pegawai $pegawai
         * @return \Illuminate\Http\Response
         */
        public function show(Pegawai $pegawai)
        {
        return view('pegawais.show',compact('pegawai'));
        }
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Pegawai $pegawai
         * @return \Illuminate\Http\Response
         */
        public function edit(Pegawai $pegawai)
        {
        return view('pegawais.edit',compact('pegawai'));
        }
        
        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Pegawai $pegawai
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Pegawai $pegawai)
        {
            $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'nohp' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            
        ]);
        
        $pegawai->update($request->all());
        
        return redirect()->route('pegawais.index')
        ->with('success','Pegawai updated successfully');

        }
        
        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Pegawai $pegawai
         * @return \Illuminate\Http\Response
         */
        public function destroy(Pegawai $pegawai)
        {
        $pegawai->delete();
        
        return redirect()->route('pegawais.index')
        ->with('success','Pegawai deleted successfully');
 } 
}