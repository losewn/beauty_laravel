<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller{
    //admin pages
    public function getAll() {
        return view('admin.services', ['items' => Service::all()]);
    }

    public function addForm() {
        $salons = new Salon();
        $salons = $salons->all();
        return view('admin.services-add', ['items' => $salons]);
    }

    public function add(Request $request) {
        $services = new Service();
        $services->name = $request->input('name');
        $services->mashine_name = $request->input('mashineName');
        $services->salon = $request->input('salon');
        $services->save();

        return redirect()->route('admin-all-services')->with('success', 'Успішно додано!');
    }

    public function edit($id) {
        $salons = new Salon();
        $salons = $salons->all();
        return view('admin.services-edit', [
            'item' => Service::find($id),
            'salons' => $salons
            ]);
    }

    public function update($id, Request $request) {
        $services = Service::find($id);
        $services->name = $request->input('name');
        $services->mashine_name = $request->input('mashineName');
        $services->salon = $request->input('salon');
        $services->save();

        return redirect()->route('admin-all-services')->with('success', 'Збережено!');
    }

    public function remove($id) {
        $services = Service::find($id)->delete();

        return redirect()->route('admin-all-services')->with('success', 'Видалено!');
    }
}
