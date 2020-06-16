<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Competitor;

use App\Http\Resources\API\CompetitorResource;
use App\Http\Resources\API\CompetitorListResource;

use App\Http\Requests\API\CompetitorRequest as Request;

class Competitors extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitors = Competitor::all();

        return CompetitorListResource::collection($competitors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $competitor = Competitor::create($data);

        return new CompetitorResource($competitor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Competitor $competitor)
    {
        return new CompetitorResource($competitor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competitor $competitor)
    {
        $data = $request->all();

        $competitor->fill($data)->save();

        return new CompetitorResource($competitor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
