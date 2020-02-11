<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;
use Auth;
use PDF;

class ShowController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show', 'downloadPDF']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::latest()->paginate(3);

        return view('shows.index', compact('shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shows.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'venue' => 'required',
            'date' => 'required'
        ]);

        $user_id = Auth::user()->id;

        Show::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'price' => $request['price'],
            'venue' => $request['venue'],
            'date' => $request['date'],
            'user_id' => $user_id
        ]);

        return redirect('shows')->with('success', 'Show Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Show::findOrFail($id);
        return view('shows.show', compact('show'));
    }

    public function downloadPDF($id){
        $show = Show::findOrFail($id);
        $pdf = PDF::loadView('shows.pdf', compact('show'));

        return $pdf->download('showticket.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Show::findOrFail($id);
        return view('shows.edit', compact('show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'venue' => 'required',
            'date' => 'required'
        ]);

        $user_id = Auth::user()->id;
        $show = Show::findOrFail($id);

        $show->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'price' => $request['price'],
            'venue' => $request['venue'],
            'date' => $request['date'],
            'user_id' => $user_id
        ]);

        return redirect('shows')->with('success', 'Show Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Show::findOrFail($id);

        $show->delete();

        return redirect('shows')->with('success', 'show deleted successfully');
    }

    

    
}
