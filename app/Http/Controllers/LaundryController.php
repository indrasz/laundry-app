<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Laundry;
use Illuminate\Http\Request;
use App\Http\Requests\LaundryRequest;
use Yajra\DataTables\Facades\DataTables;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laundry = Laundry::orderBy('created_at', 'asc')->paginate(10);
        return view('pages.laundry.index', compact('laundry'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.laundry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaundryRequest $request)
    {
        $data = $request->all();
        Laundry::create($data);

        toast()->success('Save has been success');
        return redirect()->route('dashboard.laundry.index');
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
    public function edit(Laundry $laundry)
    {
        return view('pages.laundry.edit', compact('laundry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LaundryRequest $request, Laundry $laundry)
    {
        $data = $request->all();

        $laundry->update($data);

        toast()->success('Update data has been success');
        return redirect()->route('dashboard.laundry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laundry = Laundry::findorFail($id);
        $laundry->delete();
        toast()->success('Delete has been success');
        return redirect()->route('dashboard.laundry.index');
    }
}
