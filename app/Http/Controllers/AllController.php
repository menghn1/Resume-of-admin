<?php


namespace App\Http\Controllers;


use App\Models\OneSelf;
use App\Models\Project;
use App\Models\Record;
use App\Models\Skill;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function self_info(){
        $model = new OneSelf();
        return $model->all();
    }

    public function work_list(){
        $model = new WorkExperience();
        return $model->all();
    }

    public function project_list(){
        $model = new Project();
        return $model->all();
    }

    public function skill_list(){
        $model = new Skill();
        return $model->all();
    }

    public function record_list(){
        $model = new Record();
        return $model->all();
    }

    public function record_add(Request $request){
        $data = $request->input();
        if (!isset($data["name"])||!isset($data["sex"])||!isset($data["photo"])){
            return "缺少参数";
        }
        $model = new Record();
        return $model->create($data);
    }
}
