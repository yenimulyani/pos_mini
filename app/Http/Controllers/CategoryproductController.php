<?php

namespace App\Http\Controllers;

use App\Models\Categoryproduct;
use Illuminate\Http\Request;

class CategoryproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryproduct = Categoryproduct::latest()->paginate(10);
        return view('admin.categoryproduct.index', compact('categoryproduct'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Categoryproduct $categoryproduct)
    {
        return view('admin.categoryproduct.create', compact('categoryproduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required|string|max:155',
            
        ]);

        $post = Categoryproduct::create([
           
            'kategori' => $request->kategori,
            
        ]);

        if ($post) {
            return redirect()
                ->route('categoryproduct.index')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoryproduct  $Categoryproduct
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryproduct $categoryproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoryproduct  $Categoryproduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryproduct = Categoryproduct::find($id);
        
        return view('admin.categoryproduct.edit', compact('categoryproduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoryproduct  $Categoryproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kategori' => 'required|string|max:155',
            
        ]);

        $post = Categoryproduct::findOrFail($id);

        $post->update([
            'kategori' => $request->kategori
            
        ]);

        if ($post) {
            return redirect()
                ->route('categoryproduct.index')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoryproduct  $Categoryproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoryproduct $categoryproduct)
    {
        $categoryproduct->delete();

        return redirect()->route('categoryproduct.index')->with('succes', 'Berhasil dihapus');
        Session::flash('msg', 'Data berhasil hapus');
    }
}
