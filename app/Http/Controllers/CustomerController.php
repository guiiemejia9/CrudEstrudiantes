<?php

namespace App\Http\Controllers;


use App\Http\Requests\createcustomerrequest;
use App\Http\Requests\updatecustomerrequest;
use App\Models\Customer;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Session;

class CustomerController extends Controller
{
    public function create()
    {

        $categorys = Category::all();
        return view("Customer.create", compact('categorys'));
    }

    public function index()
    {
        $customers = DB::table('customer')
            ->join('category','category.id_category','=', 'customer.category_id')
            ->select('customer.*','category.description as category_id')
            ->get();

        return view('customer.read', compact('customers'));
    }

    public function store(createcustomerrequest $request)
    {
        $data = $request->all();

        Customer::create([

            'name' => $data['name'],
            'adress' => $data['adress'],
            'phone_number' => $data['phone_number'],
            'category_id' => $data['category_id'],

        ]);
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('customer-visualize')->with('success', 'Registro realizado exitosamente');
    }

    public function delete($id)
    {
        Customer::find($id)->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->route('customer-visualize');

    }
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $categorys = Category::all();


        return view('Customer.edit', compact('customer','categorys'));

    }

    public function update(updatecustomerrequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->adress = $request->adress;
        $customer->phone_number = $request->phone_number;
        $customer->category_id = $request->category_id;

        $customer->save();
        Session::flash('update','Se ha actualizado correctamente');
        return redirect()->route('customer-visualize');
    }

}
