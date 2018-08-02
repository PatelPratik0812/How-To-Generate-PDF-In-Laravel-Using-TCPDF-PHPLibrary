<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use App\Http\Requests;
use App\Post;
use App\Register;
use PDF;
use DB;

class PDFController extends Controller
{
    public function index()
    {
            return view('reg'); 
    }
    //simple generate pdf 
    public function samplePDF()
    {
        $html_content='<h1>Hello</h1>';
        
        PDF::SetTitle('Sample PDF');
        PDF::AddPage();
        PDF::writeHTML($html_content,true,false,true,false,'');
        PDF::Output('SamplePDF.pdf');
    }
    //Directy generate pdf in .then click on link download pdf  file is downloded
    public function downloadPDF()
    {
        $html_content='<h1>Hello</h1>';
        PDF::SetTitle('Sample PDF');
        PDF::AddPage();
        PDF::writeHTML($html_content,true,false,true,false,'');
        PDF::Output(public_path(uniqid().'_SamplePDF.pdf'),'D');
    }
    ///HTML to generate pdf in laravel .fetch record from mysql databse
    public function HtmlToPDF()
    {
         
        PDF::SetFont('dejavusans', '', 10);
        PDF::SetTitle('Sample PDF');
        PDF::AddPage();
       
       
        $registers= DB::select('select * from register');
        $view=View('view',['register'=>$registers]);
        $html_content= $view->render();
        PDF::writeHTML($html_content,true,false,true,false,'');     
        PDF::Output('_SamplePDF.pdf');

     }



     public function create(Request $request)
     {
         //Mongo DB Insert Code
         //return view('reg');
       /* $username=$request->input('username');
        $email=$request->input('email');
        $mobile_no=$request->input('mobile_no');
        $education=$request->input('education');
        $country=$request->input('country');

        $data=array('username'=>$username,'email'=>$email,'mobile_no'=>$mobile_no,'education'=>$education,'country'=>$country);
        DB::insert('register')->insert($data);   
        echo "Record Successfully Inserted...";*/
        /*************************************Mysql Insert Code *****************************************/
        $post=new Post;
        $post->username=$request['username'];
        $post->email=$request['email'];
        $post->mobile_no=$request['mobile_no'];
        $post->education=$request['education'];
        $post->country=$request['country'];
        $post->save();
       /************************************Mysql End*****************************************/
       }
       
       public function EmployeeData()
       {
           //return view('show');
        $register= DB::select('select * from register');
        return view('show',['register'=>$register]);   
       }

}




       
       