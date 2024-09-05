<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function readJsonFile($jsonPath)
    {
        // Read the file contents
        $jsonContent = file_get_contents($jsonPath);

        // Decode the JSON data
        $data = json_decode($jsonContent, true); // `true` converts JSON into an associative array, remove it to get an object

        // Now you can use $data as needed
        return $data;
    }


    public function index(){
        return view('index');
    }


    public function project(){
        $jsonPath = storage_path('data/projects.json');
        $data = $this->readJsonFile($jsonPath);

        return view('projects', [ 'projects' => $data ]);
    }


    public function project_view(Request $request, $project_name){
        $jsonPath = storage_path('data/projects.json');
        $data = $this->readJsonFile($jsonPath);

        $project = null;
        foreach ($data as $sec => $proj) {
            if (array_key_exists($project_name, $proj)){
                $project = $proj[$project_name];
            }
        }

        if($project != null){
            // dd($project);
            return view('project-details', [ 'project' => $project ]);
        }else{
            abort(404, "Not Found");
        }


    }


    public function experience(){
        $jsonPath = storage_path('data/experience.json');
        $data = $this->readJsonFile($jsonPath);

        return view('experiences', ['experiences' => $data]);
    }


    public function skills(){
        $jsonPath = storage_path('data/skills.json');
        $data = $this->readJsonFile($jsonPath);

        return view('skills', ['skills' => $data]);
    }
}
