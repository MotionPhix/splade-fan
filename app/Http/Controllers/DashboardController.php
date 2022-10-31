<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $companies = Company::latest()->take(8)->get();
        $last_project = Project::orderByDesc('created_at')->first();
        $last_contact = Customer::orderByDesc('created_at')->first();
        $last_company = Company::latest()->first();
        $last_task = Task::latest()->first();

        $collected_data = [
            [
                'title' => 'Projects',
                'icon' => '',
                'created_at' => $last_project?->created_at,
                'increment' => Project::count(),
                'growth_percent' => Project::count() / 100
            ],
            [
                'title' => 'Contacts',
                'icon' => '',
                'created_at' => $last_contact?->created_at,
                'increment' => Customer::count(),
                'growth_percent' => Customer::count() / 100
            ],
            [
                'title' => 'Companies',
                'icon' => '',
                'created_at' => $last_company?->created_at,
                'increment' => Company::count(),
                'growth_percent' => Company::count() / 100
            ],
            [
                'title' => 'Tasks',
                'icon' => '',
                'created_at' => $last_task?->created_at,
                'increment' => Task::count(),
                'growth_percent' => Task::count() / 100
            ]
        ];
        
        return view('dashboard.index', [
            'companies' => $companies,
            'infographs' => $collected_data
        ]);
    }
}
