<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonsController extends Controller{
    //admin pages
    public function getAll() {
        return view('admin.salons', ['items' => Salon::all()]);
    }

    public function addForm() {
        return view('admin.salons-add');
    }

    public function add(Request $request) {
        $salon = new Salon();
        $salon->name = $request->input('name');
        $salon->mashine_name = $request->input('mashineName');
        $salon->address = $request->input('address');
        $salon->save();

        return redirect()->route('admin-all-salons')->with('success', 'Успішно додано!');
    }

    public function edit($id) {
        return view('admin.salons-edit', ['item' => Salon::find($id)]);
    }

    public function update($id, Request $request) {
        $salon = Salon::find($id);
        $salon->name = $request->input('name');
        $salon->mashine_name = $request->input('mashineName');
        $salon->address = $request->input('address');
        $salon->save();

        return redirect()->route('admin-all-salons')->with('success', 'Збережено!');
    }

    public function remove($id) {
        $salon = Salon::find($id)->delete();

        return redirect()->route('admin-all-salons')->with('success', 'Видалено!');
    }
}
