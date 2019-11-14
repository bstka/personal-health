<?php
/*

 ______     __     ______     ______   ______     __  __     ______
/\  == \   /\ \   /\  ___\   /\__  _\ /\  __ \   /\ \/ /    /\  __ \
\ \  __<   \ \ \  \ \___  \  \/_/\ \/ \ \  __ \  \ \  _"-.  \ \  __ \
 \ \_____\  \ \_\  \/\_____\    \ \_\  \ \_\ \_\  \ \_\ \_\  \ \_\ \_\
  \/_____/   \/_/   \/_____/     \/_/   \/_/\/_/   \/_/\/_/   \/_/\/_/

    https://github.com/BisTaka
    https://duniacoder.com
    https://bistaka.github.com



*/
namespace App\Http\Controllers;

use App\Tips;
use App\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDataController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.absen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'tensi' => 'required|numeric|regex:/^[0-9]+$/',
            'tensi2' => 'required|numeric|regex:/^[0-9]+$/',
            'berat_badan' => 'required|numeric|regex:/^[0-9]+$/',
            'tinggi_badan' => 'required|numeric|regex:/^[0-9]+$/',
        ],
        [
            'tensi.required' => 'Tekanan Sistolik Diperlukan',
            'tensi.numeric' => 'Tekanan Harus Berupa Angka',
            'tensi2.required' => 'Tekanan Diastolik Diperlukan',
            'tensi2.numeric' => 'Tekanan Harus Berupa Angka',
            'berat_badan.required' => 'Berat Badan Diperlukan',
            'berat_badan.numeric' => 'Berat Badan Harus Berupa Angka',
            'tinggi_badan.required' => 'Tinggi Badan Diperlukan',
            'tinggi_badan.numeric' => 'Tinggi Badan Harus Berupa Angka',
        ]
        );

        $check = Auth::check();
        if ($check) {
            $userid = Auth::user()->id;
            $data = UserData::create([
                'user_id' => $userid,
                'tensi' => $validated['tensi'],
                'tensi2' => $validated['tensi2'],
                'berat_badan' => $validated['berat_badan'],
                'tinggi_badan' => $validated['tinggi_badan'],
            ]);

            if (! empty($data)) {
                return redirect('/dashboard')->with('success', 'Makasih Udah Absen!');
            }
            return redirect('/dashboard')->with('error', 'Error Nih kwkwkwk');
        }
        return redirect()->route('login')->with('error', 'Silahkan Login Terlebih Dahulu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = Auth::user()->id;
        //ambil data menurut user yang login
        $userdata = UserData::where('user_id', $user_id)->latest()->first();
        //menampilkan tips secara acak \/
        $tips = Tips::inRandomOrder()->first();
        //menampilkan riwayat
        $riwayat = UserData::where('user_id', $user_id)->latest()->take(7)->get();

        return view('test.dashboard', compact('userdata','tips','riwayat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function edit(UserData $userData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserData $userData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserData $userData)
    {
        //
    }
}
