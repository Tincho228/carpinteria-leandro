<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LinkRequest;
use App\Models\Link;

class LinkController extends Controller
{
  
    public function index()
    {
        $links = Link::all();
        return view('admin.links.index',compact('links'));
    }

    
    public function create()
    {
        return view('admin.links.create');
    }

    
    public function store(LinkRequest $request)
    {
        //Storage link in database
        $link = Link::create($request->all());       
        return redirect()->route('admin.links.edit', $link)->with('info', 'El link se ha creado con exito');
    }

    public function show(Link $link)
    {
        return view('admin.link.show',compact('link'));
    }

    
    public function edit(Link $link)
    {
        return view('admin.links.edit', compact('link'));
    }

    
    public function update(LinkRequest $request,Link $link)
    {
        $link->update($request->all());
        return redirect()->route('admin.links.edit', $link)->with('info', 'El link se ha actualizado con exito');
    }

    public function destroy(Link $link)
    {
        //
    }
}
