<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FileService as File;

class CRUD extends Controller
{
    public $model;
    public $sub_module = null;
    public $form = [];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(){
      $this->init();
      $this->data['results'] = $this->model->all();
      $this->data['sub_module'] = $this->sub_module;
      return view('admin.layouts.index',$this->data);
    }

    public function getDelete($id){
      $this->init();
      $this->model->find($id)->delete();
      return redirect()->back();
    }

    public function getAdd(){
      $this->init();
      $this->data['form'] = $this->form;
      return view('admin.layouts.add_form',$this->data);
    }

    public function create(Request $request){
      $this->init();
      $form_data = $request->all();
      $insert_data = [];
      foreach ($this->form as $key => $value) {
        if(in_array($value['type'],['file','upload'])){
          $files = [];
          foreach($form_data[$value['name']] as $file_data){
            $file = new File($file_data);
            $path = $file->upload();
            $files[] = $path;
          }
          $insert_data[$value['name']] = json_encode($files);
        }
        else{
          $insert_data[$value['name']] = $form_data[$value['name']];
        }
      }
      $this->model->create($insert_data);
      return redirect(str_replace('add/save','',url()->current()));
    }

    public function update($id,Request $request){
      $this->init();
      $form_data = $request->all();
      $insert_data = [];
      foreach ($this->form as $key => $value) {
        $insert_data[$value['name']] = $form_data[$value['name']];
      }
      $this->model->find($id)->update($insert_data);
      return redirect(str_replace('edit/'.$id.'/save','',url()->current()));
    }

    public function getEdit($id){
      $this->init();
      $this->data['result'] = $this->model->find($id)->toArray();
      $this->data['form'] = $this->form;
      return view('admin.layouts.edit_form',$this->data);
    }
}
