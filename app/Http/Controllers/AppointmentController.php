<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentAddRequest;
use App\Models\Appointment;
use App\Models\Salon;
use App\Models\Service;

class AppointmentController extends Controller {
    //user pages
    public function submit(AppointmentAddRequest $request) {
        $appointment = new Appointment();
        $appointment->name = $request->input('name');
        $appointment->phone = $request->input('phone');
        $appointment->salon = $request->input('salon');
        $appointment->service = $request->input('service');
        $appointment->datetime = $request->input('dateAppointment').' '. $request->input('timeAppointment');
        $appointment->save();

        return redirect()->route('index')->with('success', 'Ви успішно записались');
    }

    public function index(){
        $salons = new Salon();
        $salons = $salons->all();

        $services = new Service();
        $services = $services->all();

        return view('index', [
            'salons' => $salons,
            'services' => $services,
            ]);
    }

    //admin pages
    public function getAll() {
        $salons = new Salon();
        $salons = $salons->all();

        $services = new Service();
        $services = $services->all();

        return view('admin.appointment', [
            'items' => Appointment::all(),
            'salons' => $salons,
            'services' => $services
            ]);
    }

    public function edit($id) {
        $salons = new Salon();
        $salons = $salons->all();

        $services = new Service();
        $services = $services->all();

        return view('admin.appointment-edit', [
            'item' => Appointment::find($id),
            'salons' => $salons,
            'services' => $services
        ]);
    }

    public function update($id, AppointmentAddRequest $request) {
        $appointment = Appointment::find($id);
        $appointment->name = $request->input('name');
        $appointment->phone = $request->input('phone');
        $appointment->salon = $request->input('salon');
        $appointment->service = $request->input('service');
        $appointment->datetime = $request->input('dateAppointment').' '. $request->input('timeAppointment');
        $appointment->save();

        return redirect()->route('admin-all-appointment')->with('success', 'Збережено!');
    }

    public function remove($id) {
        $appointment = Appointment::find($id)->delete();
        return redirect()->route('admin-all-appointment')->with('success', 'Видалено!');
    }
}
