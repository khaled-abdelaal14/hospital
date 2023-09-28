<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionsRequest;
use App\Interfaces\Sections\SectionRepositoryInterface;
use Illuminate\Http\Request;

class SectionController extends Controller
{
  
    private $sections;
  
    public function __construct(SectionRepositoryInterface $sections)
    {
        $this->sections = $sections;
    }
 

    public function index()
    {
        return $this->sections->index();
    }

  
    public function create()
    {
        //
    }

   
    public function store(SectionsRequest $request)
    {
        return $this->sections->store($request);
    }

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }


    public function update(SectionsRequest $request)
    {
        return $this->sections->update($request);

    }

 
    public function destroy(Request $request)
    {
        return $this->sections->destroy($request);

    }
}
