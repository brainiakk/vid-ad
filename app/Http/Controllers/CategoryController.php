<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function topics()
    {
        $topics = Category::whereNotNull('parent_id')->get();
        return view('admin.categories.topics', compact(['topics']));
    }

    public function createTopic()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.categories.create-topic', compact(['categories']));
    }
    
    public function saveTopic(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->back()->with('Success', 'Topic Created Successfully.');
    }

    public function topicEdit($id)
    {
        $categories = Category::whereNull('parent_id')->get();
        $topic = Category::find($id);
        return view('admin.categories.edit-topic', compact(['categories','topic']));

    }

    public function updateTopic(Request $request)
    {
        $topicSave = Category::find($request->id);
        $topicSave->name = $request->name;
        $topicSave->parent_id = $request->parent_id;
        $topicSave->slug = Str::slug($request->name);
        if ($topicSave->save()) {
            return redirect()->back()->with('Success', 'Topic Updated Successfully.');
        } else {
            return redirect()->back()->with('Error', 'Unable to update topic at this moment.');
        }
    }

    public function topicDelete($id)
    {
        $topic = Category::find($id);
        if ($topic->delete()) {
            return redirect()->back()->with('Success', 'Topic Deleted Successfully.');
        } else {
            return redirect()->back()->with('Error', 'Unable to delete topic at this moment.');
        }
    }

    public function makeCategory($id)
    {
        Category::where('id', $id)->update(['parent_id' => null]);
        $topics = Category::whereNotNull('parent_id')->get();
        return view('admin.categories.topics', compact(['topics']));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.categories.index', compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();
        return redirect()->back()->with('Success', 'Category Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // return $category;

        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $categorySave = Category::find($category->id);
        $categorySave->name = $request->name;
        $categorySave->slug = Str::slug($request->name);
        if ($categorySave->save()) {
            return redirect()->back()->with('Success', 'Category Updated Successfully.');
        } else {
            return redirect()->back()->with('Error', 'Unable to update category at this moment.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return redirect()->back()->with('Success', 'Category Deleted Successfully.');
        } else {
            return redirect()->back()->with('Error', 'Unable to delete category at this moment.');
        }
    }
}
