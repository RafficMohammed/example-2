<?php

namespace App\Http\Controllers;

use App\Models\Devcon;
use Illuminate\Http\Request;

class DevconController extends Controller
{
    public function index()
    {
        $dev =Devcon::all();
        return view('devcon',compact('dev'));
    }
    public function post(Request $request)
    {
        $dev=Devcon::create([
            'model' => $request->model,
            'relation' => $request->relation,
        ]);
        if($request->parent && $request->parent !== 'none')
        {
            $node = Devcon::find($request->parent);
            $node->appendNode($dev);

        }
        return redirect()->back();
    }

    public function view()
    {
        $dev=Devcon::all(['id','model','relation','_lft','_rgt','parent_id'])->toTree();
        return $dev;
    }
}
