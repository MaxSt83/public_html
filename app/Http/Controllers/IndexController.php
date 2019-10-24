<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $message;
	protected $header;	
	
	public function __construct()
	{
		$this->header = 'Hello world';
		$this->message = 'This is template';
		
	}
    public function index()
    {
        $articles= Article::select(['id', 'title', 'text'])->get();
		//dump($articles);
		
		return view('index')->with(['message'=>$this->message, 
									'header' =>$this->header,
									'articles' => $articles
									]);
    }

	public function show($id)
    {
		$article = Article::select(['id', 'title','text'])->where('id', $id)->first();
		
		return view('article-content')->with(['message'=>$this->message, 
									'header' =>$this->header,
									'article' => $article
									]);
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
