<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use App\Tables\Customers;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

use function PHPUnit\Framework\isNull;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Customer::with('company')->get());

        return view('customers.index', [
            'customers' => Customers::class,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(Company::get()->isEmpty()) return Toast::title('Oops!')
        //         ->warning('You need to create at least one organisation to add a customer')
        //         ->autoDismiss(5);

        return view('customers.create', [
            'companies' => Company::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|filled',
            'last_name' => 'required|string|filled',
            'company_id' => 'required|integer|filled',
            'phone' => 'required|phone:MW,ZM,mobile',
            'address' => 'nullable|email|unique:emails',
        ]);

        $customer = Customer::create($data);

        $customer->phone()->save(\App\Models\Phone::make([
            'mobile' => $request->phone
        ]));

        $customer->email()->save(\App\Models\Email::make([
            'address' =>$request->address
        ]));

        Toast::title('Hooray!')
        ->success('Customer created')
        ->autoDismiss(5);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $contact = $customer->with('phone', 'email')->find($customer->id);

        return view('customers.edit', [
            'customer' => $contact,
            'companies' => Company::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'first_name' => 'required|string|filled',
            'last_name' => 'required|string|filled',
            'company_id' => 'required|integer|filled',
            'phone' => 'required|phone:MW,ZM,mobile',
            'email' => 'nullable|email',
        ]);

        $customer->update($data);

        $customer->phone()->updateOrCreate(
            ['mobile' => $customer->phone->mobile],
            ['mobile' => $request->phone]
        );

        $customer->email()->updateOrCreate(
            ['address' => $customer->email->address],
            ['address' => $request->address]
        );

        Toast::title('Awesome!')
        ->success('Contact was updated')
        ->autoDismiss(5);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {

        $customer->phone()->delete();

        $customer->email()->delete();

        $customer->delete();

        Toast::title('Awesome!')
        ->success('Customer was updated')
        ->autoDismiss(5);

        return redirect()->back();
    }
}
