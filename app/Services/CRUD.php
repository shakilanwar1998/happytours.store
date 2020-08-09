<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CRUD extends Controller
{
    public $model;
    public $form_data = [];

    public function getIndex(){
      $this->init();
      $this->data['results'] = $this->model->all();
      return view('admin.layouts.index',$this->data);
    }

    public function getDelete($id){
      $this->init();
      $this->model->find($id)->delete();
      return redirect()->back();
    }

    public function getAdd(){
      $this->init();
      $this->data['form_data'] = $this->form_data;
      return view('admin.layouts.add_form',$this->data);
    }

    public function create(Request $request){
      $this->init();
      $form_data = $request->all();
      $insert_data = [];
      foreach ($this->form_data as $key => $value) {
        $insert_data[$value['name']] = $form_data[$value['name']];
      }
      $this->model->create($insert_data);
      return redirect(str_replace('add/save','',url()->current()));
    }

    public function update($id,Request $request){
      $this->init();
      $form_data = $request->all();
      $insert_data = [];
      foreach ($this->form_data as $key => $value) {
        $insert_data[$value['name']] = $form_data[$value['name']];
      }
      $this->model->find($id)->update($insert_data);
      return redirect(str_replace('edit/'.$id.'/save','',url()->current()));
    }

    public function getEdit($id){
      $this->init();
      $this->data['result'] = $this->model->find($id)->toArray();
      $this->data['form_data'] = $this->form_data;
      return view('admin.layouts.edit_form',$this->data);
    }
}
