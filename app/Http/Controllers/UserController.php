<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\User;
use Carbon\Carbon;
use Dompdf\Dompdf;

class UserController extends Controller
{
    public function __construct()
    {

        $this->User = new User();
    }

    public function index()
    {
        $data = [
            'user' => User::all()
        ];
        return view('user.v_user', $data);
    }

    public function detail($id)
    {
        $data = [
            'user' => User::find($id)
        ];
        return view('user.v_detailuser', $data);
    }

    public function insert(Request $request)
    {
        $request->validate = ([
            'name' => 'required|min:5|max:255',
            'level' => 'required',
            'email' => 'required|email:dns',
            'address' => 'required',
            'phone' => 'required|min:10|max:15',
            'password' => 'min:5|max:255',
        ]);
        // $user = User::where('id', '=', $id)->first();
        // $user->id = $request['id'];
        // $user->name = $request['name'];
        // $user->level = $request['level'];
        // $user->email = $request['email'];
        // $user->address = $request['address'];
        // $user->phone = $request['phone'];
        // $user->password = bcrypt($request['password']);
        // $user->created_at = Carbon::now()->toDateTImeString();
        // $user->updated_at = Carbon::now()->toDateTimeString();
        // $user->save();

        $user = User::create(request(['name', 'level', 'email', 'address', 'phone', 'password']));


        // $this->UserModel->addData($data);
        return redirect()->route('user')->with('pesan', 'Data Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $data = [
            'user' => User::find($id),
        ];
        return view('user.v_edituser', $data);
    }

    public function update(Request $request, $id)
    {
        // validation
        $request->validate = ([
            'name' => 'required|min:5|max:255',
            'level' => 'required',
            'email' => 'required|email:dns',
            'address' => 'required',
            'phone' => 'required|min:10|max:15',
            'password' => 'min:5|max:255'
        ]);
        $user = User::where('id', '=', $id)->first();
        $user->name = $request['name'];
        $user->level = $request['level'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->phone = $request['phone'];
        $user->password = $request['password'];
        $user->save();
        return redirect()->route('user')->with('pesan', 'Data Berhasil Di Update');
    }

    public function add()
    {
        return view('user.v_adduser');
    }

    public function delete($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('user')->with('pesan', 'Data Berhasil Di Hapus');
    }

    public function cetaklaporanuser()
    {
        $data = [
            'user' => User::all()
        ];
        return view('user.v_cetaklaporanuser', $data);
    }

    public function downloadlaporanuser()
    {
        $data = [
            'user' => User::all()
        ];
        $html = view('user.downloadlaporanuser', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'Potrait');
        $dompdf->render();
        $dompdf->stream('Download-Laporan-User.pdf');
    }
    public function printlaporanuser()
    {
        $data = [
            'user' => User::all()
        ];
        return view('user.printlaporanuser', $data);
    }
}
