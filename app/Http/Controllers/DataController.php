<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\DataModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataController extends Controller
{
    protected $conn;
    
    public function __construct()
    {
        $db = DB::connection('mysql');;
        $this->conn = $db;
    }
    public function tambah()
    {
        return view('view_1.add_data');
    }
    public function AddData(Request $request)
    {
        $validateData = strlen($request->nomor_telepon);
        if($validateData == 12)
        {
            $model = $this->conn->table('tb_data')->insert(
            [
                'nim' => $request->nim,
                'nama_lengkap' => $request->nama_lengkap,
                'kota_asal' => $request->kota_asal,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nama_ortu' => $request->nama_ortu,
                'alamat_ortu' => $request->alamat_ortu,
                'kodepos' => $request->kodepos,
                'nomor_telepon' => $request->nomor_telepon,
                'status' => $request->status   
            ]
            );
            return redirect('view');
        }
        else
        {
            return redirect('view')->with('alert', 'Gagal');
        }
    }
    public function index(){
        $model = $this->conn->table('tb_data')->get();
        return view('view_1.view',['model' => $model]);
    }
    public function getById(Request $request){
        $model = $this->conn->table('tb_data')->where('id',$request->id)->get();
        $data['data']= $model;
        return view('view_1.edit',$data);
    }   
    public function DeleteById($id)
    {
        $model = $this->conn->table('tb_data')->where('id',$id)->delete();
        return redirect('view');
    }
    public function UpdateById(Request $request,$id)
    {
        $model = $this->conn->table('tb_data')->where('id',$id)->update(
            [
                'nim' => $request->nim,
                'nama_lengkap' => $request->nama_lengkap,
                'kota_asal' => $request->kota_asal,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nama_ortu' => $request->nama_ortu,
                'alamat_ortu' => $request->alamat_ortu,
                'kodepos' => $request->kodepos,
                'nomor_telepon' => $request->nomor_telepon,
                'status' => $request->status
            ]
            );
        return redirect('view');

    }
}