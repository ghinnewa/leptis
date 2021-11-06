<?php

namespace App\Http\Controllers;
use App\Models\Topic as ModelsTopic;
use App\Models\Topic   ;
use App\Models\Course   ;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index(){
        $svg=".svg";
        

        $topics=Topic::all();
        return (view('ndt_topic',[
            'topics'=> $topics->where('section','1'),
            'fullname'=>$svg
        ]));
    }
    public function indexdash(){
      

        $courses=Course::all();
        return (view('dashindex',[
            'courses'=> $courses
        
        ]));
    }
    public function index2(){
        $svg=".svg";
        

        $topics=Topic::all();
        return (view('CC_topic',[
            'topics'=> $topics->where('section','2'),
            'fullname'=>$svg
        ]));
    }
 public function courses(Topic $topic){
     
     $x=$topic->courses;
    return( view('CCcourses',[
        'courses'=>$x,

    ]));

 }
 public function course(Course $course){
     
     
    return( view('ndtcourse',[
        'course'=>$course,

    ]));

 }
 public function delete(Course $course){
     
     
  $course->delete();
  return redirect()->back();

 }
 public function add(Request $course){
     $c= new Course;
     $c->title=$course->title;
     $c->about=$course->about;
     $c->content=$course->content;
     $c->topic_id=$course->topic_id;
     $c->save();
    
     return redirect()->back();

 }
}
