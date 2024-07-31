<?php

namespace Modules\Customer\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Modules\Customer\Actions\CustomerCreateAction;
use Modules\Customer\Actions\CustomerDeleteAction;
use Modules\Customer\Actions\CustomerIndexAction;
use Modules\Customer\Actions\CustomerShowAction;
use Modules\Customer\Actions\CustomerUpdateAction;
use Modules\Customer\DTO\CreateCustomerActionDTO;
use Modules\Customer\Requests\CustomerV1Request;
use Modules\Customer\Resource\CustomerV1Resource;

class CustomerV1Controller extends Controller
{
    use ApiResponses;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->ok('Customer fetched successfully', app(CustomerIndexAction::class)->execute($request->all()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerV1Request $request)
    {
        return new CustomerV1Resource(app(CustomerCreateAction::class)->execute(new CreateCustomerActionDTO($request->all())));

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return new CustomerV1Resource(app(CustomerShowAction::class)->execute($id));
    }

    public function update(CustomerV1Request $request,$id)
    {

//        Customer::findOrFail($id);
//        $request->validate([
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', ],
//            'phone_number' => ['nullable', 'digits:10', 'integer'],
//            'address' => ['required', 'string', 'max:255'],
//        ]);

//        Customer::updateOrCreate([
//            'name' => $request->input('name'),
//            'email' => $request->input('email'),
//            'phone_number' => $request->input('phone_number'),
//            'address' => $request->input('address')
//        ]);

//        dd($request->all());

        $customer = app(CustomerUpdateAction::class)->execute($id, new CreateCustomerActionDTO($request->all()));

        return new CustomerV1Resource($customer);
    }

    public function destroy($id)
    {
        app(CustomerDeleteAction::class)->execute($id);
        return $this->ok('Customer deleted successfully');
    }
}
