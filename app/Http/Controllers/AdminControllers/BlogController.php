<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Core\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $Blog;

    public function __construct(BlogModel $blog)
    {
        $this->Blog = $blog;
    }

    public function index() {
        return view('admin.blog.index');
    }

    public function blog_ekle(Request $request) {
        return $this->Blog->blog_ekle($request);
    }

    public function blog_list() {
        $result = [];
        $result['data'] = $this->Blog->blog_list();

        return view('admin.blog.blog_list')->with('result',$result);
    }

    public function blog_delete(Request $request) {
       return $this->Blog->blog_delete($request);
    }

    public function blog_guncelle_page(Request $request) {
      $result = [];
      $result['blogid'] = $request->blogid;
      $result['blog_data'] = $this->Blog->blog_data($request);
      return view('admin.blog.blog_page_update')->with('result',$result);
    }

    public function blog_guncelle(Request $request) {
       return $this->Blog->blog_guncelle($request);
    }
}
