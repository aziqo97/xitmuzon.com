<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryModel;
use App\Models\MusicModel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('admin');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createcat()
    {
        return view('createcat');
    }
    public function createcatstore(Request $request)
    {
        $product = CategoryModel::create([
        'name' => $request->category,
            ]);
        return redirect('/admin');
    }
    public function createmusic()
    {
        $category = DB::table('category')->get();
        return view('createmusic', ['category' => $category]);
    }
    public function createmusicstore(Request $request)
    {
              if($request->hasFile('photo')){

            //Storage::delete('/public/avatars/'.$user->avatar);

            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/music-files',$fileNameToStore);

        }


        $product = MusicModel::create([
        'name' => $request->name,
        'artist' => $request->artist,
        'category' => $request->bolim,
        'file' =>  $fileNameToStore ?? null,
            ]);
        return redirect('/admin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         return view('destroymusic');
    }
}
