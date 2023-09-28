<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Doctors\DoctorRepositryInterface;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    private $doctors;
  
    public function __construct(DoctorRepositryInterface $doctors)
    {
        $this->doctors = $doctors;
    }
 
    public function index()
    {
        return $this->doctors->index();
    }

    
    public function create()
    {
        return $this->doctors->create();
    }

   
    public function store(Request $request)
    {
        return $this->doctors->store($request);
        
    }
    
    
    public function show($id)
    {
        return $this->doctors->show($id);
        
    }

   
    public function edit($id)
    {
        return $this->doctors->edit($id);
    }

  
    public function update(Request $request)
    {
        return $this->doctors->update($request);

    }

    
    public function destroy(Request $request)
    {
        return $this->doctors->destroy($request);
    }
    public function update_password(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        return $this->doctors->update_password($request);
    }

    public function update_status(Request $request)
    {
        $this->validate($request, [
            'status' => 'required|in:0,1',
        ]);
        return $this->doctors->update_status($request);
    }
}
