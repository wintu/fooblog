<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use File;
use Session;
use App\Posts;

class AdminController extends Controller
{
    public function __construct() {
      $this->middleware('logincheck');
    }

    public function index() {
      $query = Posts::query();
      $posts = $query->orderBy('id','desc')->paginate(10);
      return view('admin.index')->with('posts',$posts);
    }

    public function createPage() {
      return view('admin.create_page');
    }

    public function create() {
      $file = Request::file('upload');
      $fileName = $file->getClientOriginalName();
      $allowExt = ['jpeg', 'png', 'jpg'];
      if (!in_array(File::extension($fileName), $allowExt)){
        Session::flash('flash_message', 'アップロードされたファイルが不正です。');
        return back();
      }
      $post = new Posts();
      $post->title = Request::input('title');
      $post->body = Request::input('body');
      $post->img_name = $fileName;
      $post->save();
      $file->move('media', $fileName);
      return redirect('/admin');
    }

    public function delete($id) {
      $post = Posts::find($id);
      $post->delete();
      Session::flash('flash_message', '記事が削除されました。');
      return back();
    }

    public function editPage($id) {
      $post = Posts::find($id);
      return view('admin.edit_page')->with('post',$post);
    }

    public function edit() {
      $post = Posts::find(Request::input('id'));
      $post->title = Request::input('title');
      $post->body = Request::input('body');
      if (!empty(Request::file('upload'))) {
        $file = Request::file('upload');
        $fileName = $file->getClientOriginalName();
        $allowExt = ['jpeg', 'png', 'jpg'];
        if (!in_array(File::extension($fileName), $allowExt)){
          Session::flash('flash_message', 'アップロードされたファイルが不正です。');
          return back();
        }
        $file->move('media', $fileName);
        $post->img_name = $fileName;
      }
      $post->save();
      return redirect('/admin');
    }
}
