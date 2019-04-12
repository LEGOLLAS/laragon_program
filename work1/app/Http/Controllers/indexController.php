<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work1;

class indexController extends Controller{

  public function index(){
    $postData = Work1::orderby('id','asc')->paginate(10);
    return view ('main.main', array('postData'=>$postData));
  }

  public function create(){
    return view ('register.register');
  }

  public function show(Request $request){
    $id = $request->get('id');
    $postData = Work1::find($id);
    return view ('detailPage.detailPage', array('choiceData'=>$postData));
  }
  public function store(Request $request){
    $id = null;
    $postData = $request->all();
    $resource = Work1::findOrNew($id);
    $resource->fill($postData);
    $resource->save();
    return redirect('/');
  }
  public function edit(Request $request){
    $id = $request->input('id');
    $postData = Work1::find($id);
    return view('edit.edit', array('postData'=>$postData));
  }
  public function update(Request $request){
    $id = $request->get('id');
    $postData = $request->all();
    $resource = Work1::findOrNew($id);
    $resource->fill($postData);
    $resource->save();
    return redirect('/');
  }
}
