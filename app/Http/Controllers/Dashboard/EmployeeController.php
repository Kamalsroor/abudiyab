<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Employee;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\EmployeeRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EmployeeController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * EmployeeController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Employee::class, 'employee');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::filter()->paginate();

        return view('dashboard.accounts.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.accounts.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\EmployeeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EmployeeRequest $request)
    {

        $employee = Employee::create($request->allWithHashedPassword());

        $employee->setType($request->type);

        if ($request->user()->isAdmin()) {
            $employee->syncPermissions($request->input('permissions', []));
            $employee->assignRole($request->input('role',[]));
        }

        $employee->addAllMediaFromTokens();

        flash(trans('employees.messages.created'));

        return redirect()->route('dashboard.employees.show', $employee);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('dashboard.accounts.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('dashboard.accounts.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\EmployeeRequest $request
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->allWithHashedPassword());

        $employee->setType($request->type);

        if ($request->user()->isAdmin()) {
            $employee->syncPermissions($request->input('permissions', []));
            $employee->syncRoles($request->input('role' , []));
        }

        $employee->addAllMediaFromTokens();

        flash(trans('employees.messages.updated'));

        return redirect()->route('dashboard.employees.show', $employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Employee $employee
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        flash(trans('employees.messages.deleted'));

        return redirect()->route('dashboard.employees.index');
    }
}
