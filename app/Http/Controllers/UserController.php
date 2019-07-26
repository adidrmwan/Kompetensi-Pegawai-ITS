<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

use App\User;
use App\Role;
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
        return view ('admin.setting.pegawai.index',[
            'all_employee' => $user->employee(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Role $role)
    {
        return view ('admin.setting.pegawai.create', [
            'roles' => $role->where('id','!=', '1')
                            ->where('id','!=', '3')
                            ->get()
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
        $user = Auth::user();
        $role_id = 2;
        $user = User::create([
            'name' => $data['name'],
            'nip' => $data['nip'],
            'jabatan' => $data['jabatan'],
            'tmt_jabatan' => $data['tmt_jabatan'],
            'unit_kerja' => $data['unit_kerja'],
            'kelas_jabatan' => $data['kelas_jabatan'],
            'nilai_jabatan' => $data['nilai_jabatan'],
            'email' => $data['nip'],
            'password' => Hash::make($data['password']),
        ]);

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
