<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
use App\Maker;

class IndexController extends Controller
{
    public function Index()
    {
    	$medicines = Medicine::select()->get();
        return view("index")->with(["medicines"=>$medicines]);
    }

    public function ShowCategory($rubric)
    {
        $rubrics = Apteka::select(['id','title','image'])->where('rubrics',$rubric)->get();
        return view("rubrika")->with(["news"=>$rubrics,"rubric"=>$rubric]);
    }

    public function ShowId($id)
    {
        $news = Apteka::select(['id','title','image'])->where('id',$id)->first();
        return view("statya")->with(["news"=>$news]);
    }

    public function New()
    {
        return view("add");
    }

    public function AddNews(Request $r)
    {
        $this->validate($r,['title' => 'required', 'image' => 'required']);
        $data=$r->all();
        $apteka=new Apteka();
        $apteka->fill($data);
        $apteka->save();
        return redirect('/');
    }

    public function DeleteNews($id)
    {
        $id = Apteka::select()->where('id',$id)->first();
        $id->delete();
        return redirect('/');
    }
}
