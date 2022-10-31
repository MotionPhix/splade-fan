<?php

namespace App\Tables;

use App\Models\Customer;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class Customers extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Customer::with('company')->get();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id'])
            // ->column('first_name', sortable: true)
            // ->column('last_name', sortable: true)
            ->column(
                label: 'Contact',
                sortable: true
            )
            ->column(
                key: 'phone.mobile',
                label: 'Mobile Phone',
            )
            ->column(
                key: 'email.address',
                label: 'Email address',
            )
            ->column(
                key: 'company.name',
                label: 'Organisation',
                sortable: true
            )
            ->column(label: 'Actions');

            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction()
            // ->export()
    }
}
