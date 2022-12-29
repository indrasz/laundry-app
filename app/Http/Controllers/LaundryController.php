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
        if (request()->ajax()) {
            $query = Laundry::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '

                    <div class="flex gap-5">

                        <a class="inline-block border border-gray-700 bg-gray-700 text-gray-700 rounded-md px-2 py-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline mr-3"
                            href="' . route('dashboard.laundry.edit',  $item->id) . '">
                            Edit
                        </a>

                        <form class="inline-block mx-4" action="' . route('dashboard.laundry.destroy', $item->id) . '" method="POST">
                            <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline show_confirm">
                                Hapus
                            </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>

                    </div>

                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        $laundry = Laundry::orderBy('created_at', 'asc')->paginate(15);
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
