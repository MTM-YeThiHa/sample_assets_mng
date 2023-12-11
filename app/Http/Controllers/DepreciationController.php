<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Depreciation;

class DepreciationController extends Controller
{
    public function index()
    {
        $depreciation = Depreciation::all();
        return Inertia::render('Depreciation/index');
    }

    public function create()
    {
        return Inertia::render('Depreciation/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'serial_number' => 'string',
            'assets_class' => 'string',
            'assets_name' => 'string',
            'units' => 'string',
            'acquisition_date' => 'string',
            'acquisition_cost' => 'string',
            'deduct' => 'string',
            'net_cost' => 'string',
            'dep_percent' => 'string',
            'dep_month' => 'string',
            'opening_date' => 'string',
            'written_off_acc_date' => 'string',
            'written_off_expense' => 'string',
            'net_book_value' => 'string',
            'remark' => 'string',
        ]);

        $depreciation = Depreciation::create($request->all());
        dd('success');
        // return redirect()->route('depreciation.index')->with('success', 'Depreciation created successfully.');

    }
}
