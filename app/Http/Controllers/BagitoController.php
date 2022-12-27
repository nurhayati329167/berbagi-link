<?php

namespace App\Http\Controllers;

use App\Models\Bagito;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class BagitoController extends Controller
{
    public function storeto(Request $request)
    {
        $request->validate([
            'link_to' => 'required|url', 
        ]);

        $links = Bagito::create([
            'judul_to' => $request->judul_to,
            'link_to' => $request->link_to,
            'generate' => Str::random(6),
        ]);
        $links->save();
        return redirect()->back();
    }

    public function destroyto($id)
	{
        $links = Bagito::findOrFail($id);
		$links->delete();
		return redirect('bagito');
	}

    // public function delete(Request $request)
    // {
    //     $ids = $request->ids;
    //     Bagito::whereIn('id',$ids)->delete();
    //     return response()->back();
        
    // }
    
    public function filter(Request $request){
        $dari = $request->dari;
        $sampai = $request->sampai;
        $links=Bagito::whereDate('created_at','>=',$dari)->whereDate('created_at', '<=',$sampai)->orderBy('created_at','desc')->get();
        return view('bagito.index', compact('links'));
    }
}