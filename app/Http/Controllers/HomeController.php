<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\MyPost;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $blogs = DB::table('posts')->get();
        // $titles = DB::table('posts')->pluck('title');
        // $blogs = DB::table('posts')->where('user_id', 0)->get();
        // return view('home', ['blogs' => $blogs]);

        // DB::table('posts')->insert([
        //     'title' => 'Title 1',
        //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'status' => 1,
        //     'publish_date' => date('Y-m-d'),
        //     'user_id' => 2,
        //     ]
        // );
        // dd('Success');

        // DB::table('categories')->where('id', 3)->update([
        //     'name' => 'Education',
        // ]);
        // dd('success');

        // DB::table('posts')->where('id', 15)->delete();
        // DB::table('posts')->delete(13);
        // DB::table('posts')->delete();
        // dd('success');
        // return view('home', ['blogs' => $blogs]);

        // BASIC JOIN STATEMENT
        // return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')->get();
        // return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
        // ->select('categories.*')
        // ->get();

        // AGGREGATES
        /* 
        count()
        max()
        min()
        avg()
        sum()
        */
        // return DB::table('posts')->count();
        // return DB::table('posts')->max('views');
        // return DB::table('posts')->min('views');
        // return DB::table('posts')->sum('views');
        // return DB::table('posts')->avg('views');
        
        // return $posts = Post::all();// this line of code is similar with DB::table('posts')->get();
        // return $posts = MyPost::all();

        /* 
            RETRIEVING RECORDS VIA ELOQUENT MODELS
            1. Retrieving all data
            2. Retrieving single data
            3. Retrieving a single data or throw error
        */
            // 1.
            // return $posts = Post::all();

            // 2.
            // $post = Post::find(18);
            // return $post->title;//this will return only the title of post data with the id number of 18.

            // 3.
            // return $post = Post::findOrFail(19);//this will result to not found because id 19 is not existing in database

        //USING WHERE CONDITION IN ELOQUENT

            // return Post::where('views', '>', 100)->get();
            // return Post::where('views', '>', 100)->where('id', '=', 16)->get();//the same with && conditional statement
            // return Post::where('views', '>', 100)->orwhere('id', '=', 16)->get();//the same with || conditional statement

        //INSERTING OR SAVING DATA WITH ELOQUENT
            
            // $post = new Post();

            // $post->title = 'post 5';
            // $post->description = 'sample';
            // $post->status = 0;
            // $post->publish_date = date('Y-m-d');
            // $post->user_id = 3;
            // $post->category_id = 2;
            // $post->views = 200;

            // $post->save();
            // dd('add success');

        //UPDATING DATA WITH ELOQUENT

            // $post = Post::find(19);
            // $post = Post::where('id', 17)->first();
            // $post->description = 'This is the new description';
            // $post->title = "POST2";
            // $post->save();

            // dd('success');

        //DELETING DATA

            // $post = Post::where('id', 16)->first();
            // $post->delete();

            // Post::where('id', 16)->delete();
            // Post::find(20)->delete();
            // Post::findOrFail(20)->delete();

            // dd('successfully deleted');

        //MASS ASSIGNMENT

            // $post = Post::create([
            //     'title' => 'This is from mass assign',
            //     'description' => 'This is description for mass assign',
            //     'status' => 1,
            //     'publish_date' => date('Y-m-d'),
            //     'user_id' => 1,
            //     'category_id' => 2,
            //     'views' => 500
            // ]);

            // dd('success');
        
        // UPDATE DATA VIA MASS ASSIGNMENT
            
            // $post = Post::find(19)->update([
            //     'title' => 'The title has been updated',
            //     'description' => 'The description has been updated'
            // ]);
            // $post = Post::where('status', 1)->update([
            //     'title' => 'The title has been updated',
            //     'description' => 'The description has been updated'
            // ]);

            // dd('successfully updated');

        // SOFT DELETING
            // use SoftDeletes in your Post models and add softDeletes() columns on your database tables

            // return Post::all();
            //  Post::where('id', 17)->delete();

            //  dd('successfully deleted');

        // RETREIVING DELETED DATA

            // return Post::onlyTrashed()->get();

        // RESTORE A RECORD OR DELETING A RECORD PERMANENTLY
        
            // RESTORE A RECORD

            // Post::withTrashed()->find(21)->restore();
            // return Post::all();

            // DELETING A RECORD PERMANENTLY

            // Post::withTrashed()->find(17)->forceDelete();
            // dd('successfully deleted permanently');
            
        // FACTORIES
        //


        //ONE TO ONE RELATIONSHIP
            // $users = User::all();
            // return view('home', compact('users'));

        //ONE TO ONE INVERSE RELATIONSHIP
            // $addresses = Address::all();
            // return view('home', compact('addresses'));

        //ONE TO MANY RELATIONSHIP
            // $categories = Category::find(4)->posts;
            // return view('home', compact('categories'));

        //MANY TO MANY RELATIONSHIP
            // post - may have many tags
            // tag - may have many posts
            // pivot table

            // $post = Post::first();
            // $tag = Tag::first();
            // $post->tags()->attach($tag);
            
            // $post = Post::with('tags')->first();
            // $tag = Tag::first();
            // return $post;

            // $post = Post::with('tags')->first();
            // $tag = Tag::first();
            // $post->tags()->attach([3,4]);

            $posts = Post::with('tags')->get();
            $tag = Tag::first();
            return view('home', compact('posts'));
        }
}
