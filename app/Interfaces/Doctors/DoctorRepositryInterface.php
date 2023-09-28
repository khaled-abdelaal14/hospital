<?php
namespace App\Interfaces\Doctors;

interface DoctorRepositryInterface
{
     // get All Sections
     public function index();

     public function create();

     // store Sections
     public function store($request);
 
     // Update Sections
     public function update($request);
 
     // destroy Sections
     public function destroy($request);
     public function edit($id);
     public function show($id);


       // update_password
    public function update_password($request);

    // update_status
    public function update_status($request);

   
}