<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

use App\User as Model;

use App\User;
use App\Role;
use App\Rumpun;
use App\Models\Jabatan;
use Illuminate\Support\Facades\Auth;

use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    public function index(User $user)
    {
        $all_user = User::join('jabatans', 'jabatans.id', '=', 'users.jabatan_sekarang')
                    ->join('rumpuns', 'rumpuns.id', '=', 'jabatans.rumpun_id')
                    ->where('users.id', '!=', '1')
                    ->where('users.id', '!=', '3')
                    ->select('users.*', 'jabatans.nama','jabatans.kelas','jabatans.nilai','rumpuns.deskripsi')
                    ->get();

        // dd($all_user);  
         
        return view ('admin.setting.pegawai.index',compact('all_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Role $role)
    {
        return view('admin.setting.pegawai.create', [
            'title' => 'Pegawai',
            'rumpuns' => Rumpun::all(),
            'jabatans' => Jabatan::all(),
            'roles' => $role->where('id','!=', '1')
                            ->where('id','!=', '3')
                            ->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        // $user = Auth::user();

        $role_id = 2;
        // $model->create([
        //     'name' => request()->name,
        //     'nip' => request()->nip,
        //     'jabatan_sekarang' => request()->jabatan_sekarang,
        //     'jabatan_impian' => request()->jabatan_impian,
        //     'tmt_jabatan' => request()->tmt_jabatan,
        //     'masa_kerja' => request()->masa_kerja,
        //     'email' => request()->nip,
        //     'password' => Hash::make(request()->password),
        // ]);
        $user = User::create([
            'name' => $data['name'],
            'nip' => $data['nip'],
            'jabatan_sekarang' => $data['jabatan_sekarang'],
            'jabatan_impian' => $data['jabatan_impian'],
            'tmt_jabatan' => $data['tmt_jabatan'],
            'masa_kerja' => $data['masa_kerja'],
            'email' => $data['nip'],
            'password' => Hash::make($data['password']),
        ]);
        // dd($user);
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user['id'],
        ]);

        return redirect()->route('admin-tambah-pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model $model,$id)
    {

        // $user = User::find($id);
        // $jabatans = Jabatan::all();
        // $rumpuns = Rumpun::all();
        // // dd($user);
        // return view('admin.setting.pegawai.edit', compact('user','jabatans','rumpuns'));

        return view('admin.setting.pegawai.edit', [
            'users' => User::all(),
            'jabatans' => Jabatan::all(),
            'rumpuns' => Rumpun::all(),
            'value' => $model->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Model $model, $id)
    {
        $model = $model->find($id);
        $model->update([
            'name' => request()->name,
            'nip' => request()->nip,
            'jabatan_sekarang' => request()->jabatan_sekarang,
            'jabatan_impian' => request()->jabatan_impian, 
            'masa_kerja' => request()->masa_kerja,
        ]);


        return redirect()->route('admin-tambah-pegawai.index')->with('success','Jenis sertifikat berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function register(Request $request)
    // {

    //     event(new Registered($user = $this->createUser($request->all())));

    //     return redirect()->route('admin.setting.pegawai.index');
    // }

    // public function createUser($data)
    // {
    //     $user = User::create([
    //         'name' => $data['name'],
    //         'nip' => $data['nip'],
    //         'jabatan' => $data['jabatan'],
    //         'tmt_jabatan' => $data['tmt_jabatan'],
    //         'unit_kerja' => $data['unit_kerja'],
    //         'kelas_jabatan' => $data['kelas_jabatan'],
    //         'nilai_jabatan' => $data['nilai_jabatan'],
    //         'email' => $data['nip'],
    //         'password' => Hash::make($data['password']),
    //     ]);

    //     DB::table('role_user')->insert([
    //         'role_id' => $data['role'],
    //         'user_id' => $user['id'],
    //     ]);

    //     return $user;
    // }
}
