<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RentCreateRequest;
use App\Http\Requests\RentUpdateRequest;

use App\Repositories\RentRepository;

class RentController extends Controller
{
    protected $rentRepository;

    protected $nbrPerPage = 10;

    public function __construct(RentRepository $rentRepository)
    {
        $this->rentRepository = $rentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = $this->rentRepository->getPaginate($this->nbrPerPage);
        $links = $rents->render();

        return view('administration.rent.index', compact('rents', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.rent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rent = $this->rentRepository->store( $request->all());

        return redirect('administration/rents')->withOk("La location ". $rent->name . " a été créé.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rent = $this->rentRepository->getById( $id);

        return view('administration.rent.show', compact('rent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rent = $this->rentRepository->getById($id);

        return view('administration.rent.edit', compact('rent'));
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
        $this->rentRepository->update($id, $request->all());
        
        return redirect('administration/rents')->withOk("La location " . $request->input('name') . " a été modifié.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->rentRepository->destroy($id);

        return back();
    }
}
