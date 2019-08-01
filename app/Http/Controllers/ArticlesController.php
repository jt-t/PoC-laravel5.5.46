<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$articles = Article::all();
		return $articles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$article = new Article;
		// $request$B$K(Bform$B$+$i$N%G!<%?$,3JG<$5$l$F$$$k$N$G!"0J2<$N$h$&$K$=$l$>$lBeF~$9$k(B
		$article->title = $request->title;
		$article->body = $request->body;
		// $BJ]B8(B
		$article->save();
		// $BJ]B88e(B $B0lMw%Z!<%8$X%j%@%$%l%/%H(B
		return redirect('api/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$article = Article::find($id);
		// view$B$K%G!<%?$rEO$9(B
		return $article;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
        //
    // }

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
		  // id$B$r85$K%l%3!<%I$r8!:w$7$F(B$article$B$KBeF~(B
		$article = Article::find($id);
		// edit$B$GJT=8$5$l$?%G!<%?$r(B$article$B$K$=$l$>$lBeF~$9$k(B
		$article->title = $request->title;
		$article->body = $request->body;
		// $BJ]B8(B
		$article->save();
		// $B>\:Y%Z!<%8$X%j%@%$%l%/%H(B
		return redirect("api/articles/".$id);
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
		// id$B$r85$K%l%3!<%I$r8!:w(B
		$article = Article::find($id);
		// $B:o=|(B
		$article->delete();
		// $B0lMw$K%j%@%$%l%/%H(B
		return redirect('api/articles');
    }
}
