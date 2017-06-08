<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Appointment::all());
    }

    public function getById(Appointment $appointment)
    {
        return response()->json($appointment);
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
            'date' => 'required',
            'company_name' => 'required',
            'company_street' => 'required',
            'company_house' => 'required',
            'company_postal' => 'required',
            'company_locality' => 'required',
            'company_url' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required',
            'contact_salutation' => 'required',
            'contact_name' => 'required'
        ]);

        return response()->json(Appointment::create($request->all()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $this->validate($request, [
            'date' => 'required',
            'company_name' => 'required',
            'company_street' => 'required',
            'company_house' => 'required',
            'company_postal' => 'required',
            'company_locality' => 'required',
            'company_url' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required',
            'contact_salutation' => 'required',
            'contact_name' => 'required'
        ]);

        return response()->json($appointment->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        return response()->json($appointment->delete());
    }
}
