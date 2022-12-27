<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Bagito;
use App\Models\Category;
use App\Models\Kota;
use App\Models\Posts;
use App\Models\Provinsi;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class MenuController extends Controller
{
    public function edittampilan() 
    {
        $users = Users::all();
        return view ('ubahtampilan.index',compact('users'));
    }
    public function edit_profil($id, Request $request)
    {
        $input = $request->all();
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');

            if($image->isValid()){
                $image_name = $image->getClientOriginalName();
                $input['imagename'] = $image_name;

                $destinationPath = 'thumbnail';
                // $imge = Image::make($image->getRealPath());
                // $imge->resize(300, 300, function ($constraint) {
                //     $constraint->aspectRatio();
                // })->save($destinationPath.'/'.$input['imagename']);
                
                
                // $image_name = $image->getClientOriginalName();
                // $upload_path = 'gambarUpload/artikel';
                // $image->move($upload_path, $image_name);
                // $input['gambar'] = $image_name;
                
                $img = $_POST['bases'];
                if($img == null){
                    // $image_name = $image->getClientOriginalName();
                    $upload_path = 'gambarUpload';
                    $image->move($upload_path, $image_name);
                    $input['gambar'] = $image_name;
                }else{
    				$img = str_replace('data:image/png;base64,', '', $img);
    				$img = str_replace(' ', '+', $img);
    				$data = base64_decode($img);
    				$name = uniqid() . '.png';
    				$file = "gambarUpload" .$name;
    				file_put_contents($file, $data);
    
    				$input['gambar'] = $name;
                }
            }
        }
        $users = Users::findOrFail($id);
        $kategori = Category::all();
        $provinsi = Provinsi::all();
        // $url = URL::signedRoute();
        return view('ubahtampilan.edit',compact('users', 'kategori', 'provinsi'));
    }
    public function updateprofiles($id, Request $request)
    {
        $input = $request->all();
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');

            if($image->isValid()){
                $image_name = $image->getClientOriginalName();
                $input['imagename'] = $image_name;

                $destinationPath = 'thumbnail';
                // $imge = Image::make($image->getRealPath());
                // $imge->resize(300, 300, function ($constraint) {
                //     $constraint->aspectRatio();
                // })->save($destinationPath.'/'.$input['imagename']);
                
                
                // $image_name = $image->getClientOriginalName();
                // $upload_path = 'gambarUpload/artikel';
                // $image->move($upload_path, $image_name);
                // $input['gambar'] = $image_name;
                
                $img = $_POST['bases'];
                if($img == null){
                    // $image_name = $image->getClientOriginalName();
                    $upload_path = 'gambarUpload';
                    $image->move($upload_path, $image_name);
                    $input['gambar'] = $image_name;
                }else{
    				$img = str_replace('data:image/png;base64,', '', $img);
    				$img = str_replace(' ', '+', $img);
    				$data = base64_decode($img);
    				$name = uniqid() . '.png';
    				$file = "gambarUpload" .$name;
    				file_put_contents($file, $data);
    
    				$input['gambar'] = $name;
                }
            }
        }
        $usr = Users::findOrFail($id);
        $usr->username = $request->username;
        $usr->name = $request->name;
        $usr->lokasi = $request->lokasi;
        $usr->url = $request->url;
        $usr->biografi = $request->biografi;
        $usr->gambar = $request->gambar;

        $usr->save();
        return redirect('/editprofil');
    }

    public function buatlink(Request $request){
        $input = $request->all();
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');

            if($image->isValid()){
                $image_name = $image->getClientOriginalName();
                $input['imagename'] = $image_name;

                $destinationPath = 'thumbnail';
                $img = $_POST['bases'];
                if($img == null){
                    // $image_name = $image->getClientOriginalName();
                    $upload_path = 'gambarUpload/artikel';
                    $image->move($upload_path, $image_name);
                    $input['gambar'] = $image_name;
                }else{
    				$img = str_replace('data:image/png;base64,', '', $img);
    				$img = str_replace(' ', '+', $img);
    				$data = base64_decode($img);
    				$name = uniqid() . '.png';
    				$file = "gambarUpload/artikel" .$name;
    				file_put_contents($file, $data);
    
    				$input['gambar'] = $name;
                }
            }
        }
        $request->validate([
            'judul_link' => 'required',  
        ]);
        $post = Posts::create([
            'judul_link' => $request->judul_link,
            'nomor' => $request->nomor,
            'generate_link' => $request->generate_link,
            'email' => $request->email,
            'username' => $request->username,
        ]);
        $post->save();
        return back();
    }

    public function judul(Request $request){
        $input = $request->all();
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');

            if($image->isValid()){
                $image_name = $image->getClientOriginalName();
                $input['imagename'] = $image_name;

                $destinationPath = 'thumbnail';
                // $imge = Image::make($image->getRealPath());
                // $imge->resize(300, 300, function ($constraint) {
                //     $constraint->aspectRatio();
                // })->save($destinationPath.'/'.$input['imagename']);
                
                
                // $image_name = $image->getClientOriginalName();
                // $upload_path = 'gambarUpload/artikel';
                // $image->move($upload_path, $image_name);
                // $input['gambar'] = $image_name;
                
                $img = $_POST['bases'];
                if($img == null){
                    // $image_name = $image->getClientOriginalName();
                    $upload_path = 'gambarUpload/artikel';
                    $image->move($upload_path, $image_name);
                    $input['gambar'] = $image_name;
                }else{
    				$img = str_replace('data:image/png;base64,', '', $img);
    				$img = str_replace(' ', '+', $img);
    				$data = base64_decode($img);
    				$name = uniqid() . '.png';
    				$file = "gambarUpload/artikel/" .$name;
    				file_put_contents($file, $data);
    
    				$input['gambar'] = $name;
                }
            }
        }
        $request->validate([
            'title' => 'required',  
        ]);

        $judul = Posts::create([
            'title' => $request->title,
        ]);
        $judul->save();
        return redirect('/editprofil/{editprofil}/edit');
    }

    public function add_artikel(Request $request){
        
        $input = $request->all();
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');

            if($image->isValid()){
                $image_name = $image->getClientOriginalName();
                $input['imagename'] = $image_name;

                $destinationPath = 'thumbnail';
                $img = $_POST['bases'];
                if($img == null){
                    // $image_name = $image->getClientOriginalName();
                    $upload_path = 'gambarUpload/artikel';
                    $image->move($upload_path, $image_name);
                    $input['gambar'] = $image_name;
                }else{
    				$img = str_replace('data:image/png;base64,', '', $img);
    				$img = str_replace(' ', '+', $img);
    				$data = base64_decode($img);
    				$name = uniqid() . '.png';
    				$file = "gambarUpload/artikel" .$name;
    				file_put_contents($file, $data);
    
    				$input['gambar'] = $name;
                }
            }
        }
        
        $request->validate([
            'judul_artikel' => 'required', 
            'generate_artikel' => 'required', 
            'isi_artikel' => 'required',  
        ]);
        $artikel = Artikel::create([
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'deskripsi_artikel' => $request->deskripsi_artikel,
            'gambar_artikel' => $request->gambar_artikel,
            'generate_artikel' => $request->generate_artikel
        ]);
        $artikel->save();
        return redirect('ubahtampilan.edit');

    }

    public function storelink(){

    }

    public function galang(){
        $category = Category::get();
    }
    public function buat_galang(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');

            if($image->isValid()){
                $image_name = $image->getClientOriginalName();
                $input['imagename'] = $image_name;

                $destinationPath = 'thumbnail';
                // $imge = Image::make($image->getRealPath());
                // $imge->resize(300, 300, function ($constraint) {
                //     $constraint->aspectRatio();
                // })->save($destinationPath.'/'.$input['imagename']);
                
                
                // $image_name = $image->getClientOriginalName();
                // $upload_path = 'gambarUpload/artikel';
                // $image->move($upload_path, $image_name);
                // $input['gambar'] = $image_name;
                
                $img = $_POST['bases'];
                if($img == null){
                    // $image_name = $image->getClientOriginalName();
                    $upload_path = 'gambarUpload';
                    $image->move($upload_path, $image_name);
                    $input['gambar'] = $image_name;
                }else{
    				$img = str_replace('data:image/png;base64,', '', $img);
    				$img = str_replace(' ', '+', $img);
    				$data = base64_decode($img);
    				$name = uniqid() . '.png';
    				$file = "gambarUpload" .$name;
    				file_put_contents($file, $data);
    
    				$input['gambar'] = $name;
                }
            }
        }
        $request->validate([
            'title' => 'required', 
            'deskripsi' => 'required', 
            'artikel' => 'required', 
            'id_category' => 'required', 
        ]);

        $post = Posts::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'artikel' => $request->artikel,
            'id_category' => $request->id_category,
            'end_date' => $request->end_date,
            'rincian' => $request->rincian,
            'gambar' => $request->gambar,
        ]);
        $post->save();
        // Posts::create($input);
        // return redirect('ubahtampilan.edit'); 

        return redirect('/editprofil/{editprofil}/edit');
    }
    // public function buat_galang(Request $request){
    //     // dd($request);
    //     $input = $request->all();
    //     if($request->hasFile('gambar')){
    //         $image = $request->file('gambar');
    
    //         if($image->isValid()){
    //             $image_name = $image->getClientOriginalName();
    //             $input['imagename'] = $image_name;
    
    //             $destinationPath = 'thumbnail';
    //             // $imge = Image::make($image->getRealPath());
    //             // $imge->resize(300, 300, function ($constraint) {
    //             //     $constraint->aspectRatio();
    //             // })->save($destinationPath.'/'.$input['imagename']);
                
                
    //             // $image_name = $image->getClientOriginalName();
    //             // $upload_path = 'gambarUpload/artikel';
    //             // $image->move($upload_path, $image_name);
    //             // $input['gambar'] = $image_name;
                
    //             $img = $_POST['bases'];
    //             if($img == null){
    //                 // $image_name = $image->getClientOriginalName();
    //                 $upload_path = 'gambarUpload';
    //                 $image->move($upload_path, $image_name);
    //                 $input['gambar'] = $image_name;
    //             }else{
    //                 $img = str_replace('data:image/png;base64,', '', $img);
    //                 $img = str_replace(' ', '+', $img);
    //                 $data = base64_decode($img);
    //                 $name = uniqid() . '.png';
    //                 $file = "gambarUpload/" .$name;
    //                 file_put_contents($file, $data);
    
    //                 $input['gambar'] = $name;
    //             }
    //         }
    //     }
        
    //     if($request->hasFile('rincian')){
    //         $image = $request->file('rincian');
    
    //         if($image->isValid()){
    //             $image_name = $image->getClientOriginalName();
    //             $upload_path = 'gambarUpload';
    //             $image->move($upload_path, $image_name);
    //             // $request->rincian = $image_name;
    //             $input['rincian'] = $image_name;
    //         }
    //     }
    
    //     $detail=$request->artikel;

    //     // dd($detail);

    //     $dom = new \DOMDocument();
    //     libxml_use_internal_errors(true);
    //     libxml_use_internal_errors(false);
    //     $dom->loadHTML(mb_convert_encoding($detail, 'HTML-ENTITIES', "UTF-8"));
    //     // $dom->loadHtml(mb_convert_encoding($detail, 'HTML-ENTITIES', "UTF-8"));
    //     print $dom->saveHTML($dom->documentElement) . PHP_EOL . PHP_EOL;
    //     $images = $dom->getelementsbytagname('img');

    //     foreach($images as $k => $img){
    //         $data = $img->getattribute('src');
    
    //         list($type, $data) = explode(';', $data);
    //         list(, $data)      = explode(',', $data);
    
    //         $data = base64_decode($data);
    //         $image_name= time().$k.'.png';
    //         $path = '/home/akhmad/public_html/upload/'. $image_name;
    
    //         file_put_contents($path, $data);
    
    //         $img->removeattribute('src');
    //         $img->setattribute('src', '/upload/'.$image_name);
    //     }
    
    //     $detail = $dom->savehtml();
    //     $input['artikel'] = $detail;
    //     $input['id_category'] = preg_replace("/[^0-9]/", "", $request->id_category);
    //     // $input['id_disclaimer'] = 1;
    
    
    
    //     $request->validate([
    //         'title' => 'required', 
    //         'deskripsi' => 'required', 
    //         'artikel' => 'required', 
    //         'id_category' => 'required', 
    //     ]); 
    //     $post = new Posts([
    //         'title' => $request->title,
    //         'deskripsi' => $request->deskripsi,
    //         'artikel' => $request->artikel,
    //         'id_category' => $request->id_category,
    //         'end_date' => $request->end_date,
    //         'rincian' => $request->rincian,
    //         'gambar' => $request->gambar,
    //     ]);
    //     $post->save();
    //     Posts::create($input);
    //     Session::flash('sukses','Galangdana berhasil dibuat ');
    //     return redirect('ubahtampilan.edit'); 
    // }

    public function cek_prof(){
        $data = Provinsi::all();
        return $data;
    }

    public function cek_kab( Request $request){
        $provinsi_id = $_GET['id_prov'];
        $data = Kota::where('province_id', $provinsi_id)->get();
        return $data;
    }

    public function analitic() 
    {
        return view('analisis.index');
    }
    public function link(Request $request) 
    {
        // DB::table('bagito')->increment('views');
        // $bagitoViews = DB::table('bagito')->limit(1)->get();
        $links = Bagito::latest()->get();
        return view('bagito.index', compact('links'));
    }
    public function user() 
    {
        return view('akun.index');
    }
    public function qrcode(){
        return view('ubahtampilan.qrcode');
    }
}
