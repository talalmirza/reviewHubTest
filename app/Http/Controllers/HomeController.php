<?php

namespace App\Http\Controllers;

use App\Category;
use App\Review;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $reviews = Review::latest()->get();
        $subreviews = Review::latest()->whereIn('reviewer_id', [2,5,6])->get();
        $tags = Tag::all();
//        $tags_id = DB::table('review_tag')
//            ->select('tag_id')
//            ->groupBy('tag_id')
//            ->orderBy(DB::raw('count(tag_id)'), 'desc')
//            ->take(5)
//            ->get();
//
//        $tag_name= DB::table('tags')->select('name')->whereIn('id', $tags_id->toArray())->get();


        return view('user.home',compact('reviews','categories','subreviews','tags'));
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
    public function show($id)
    {
        //
    }

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
