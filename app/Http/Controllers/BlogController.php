<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Image;
use App\Category;
use Auth;
use App\User;
use Session;
class BlogController extends Controller
{

    protected $limit =3;
     protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath =  $this->uploadPath =base_path() . '/public/img';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $blogs=Blog::latestFirst()
            ->filter(request('term'))
            ->paginate($this->limit);
              $categories=Category::all();
        return view('blog.index',compact('blogs','categories'));
    }

    public function blogs()
    {
        //
           $blogs = Blog::orderBy('id', 'desc')->get();
        return view('blog.index-blog',compact('blogs'));
    }


      public function category(Category $category)
    {
        $categoryName = $category->name;

        $blogs = $category->blogs()
                          ->latestFirst()
                          ->simplePaginate($this->limit);

           $categories=Category::all();
        return view('blog.index',compact('blogs','categories'));
    }
    public function search()
    {

        $blogs = Blog::with('blog')
            ->latestFirst()
            ->paginate($this->limit);
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create(Blog $blog)
    {
        return view('blog.create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = $this->handleRequest($request);
         $request->user()->blogs()->create($data);
        return redirect('blgs')->with('message', 'Your post was created successfully!');
    }

     private function handleRequest($request){
                   $data = $request->all();
                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $fileNameToStore  = rand() . '.' . $image->getClientOriginalExtension();
                    $destination = $this->uploadPath;
                    $successUploaded = $image->move($destination,$fileNameToStore);
                     if ($successUploaded)
                    {
                        $extension = $image->getClientOriginalExtension();
                        $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}",   $fileNameToStore);
                        Image::make($destination . '/' .   $fileNameToStore)
                            ->resize(100, 100)
                            ->save($destination . '/' . $thumbnail);
                    }

                    $data['image'] =  $fileNameToStore;
                 }
                return $data;
            }
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //

          $categories=Category::all();
           $blogs = Blog::orderBy('id', 'desc')->get();
        return view('blog.show',compact('blog','categories','blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
        return view("blog.edit", compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Blog $blog)
    {
        //  try {
        // $blog = Blog::findOrFail($id);
        $oldImage = $blog->image;
        $defaultImage ='default.png';
        $data=$this->handleRequest($request);
        $blog->update($data);

        if (($oldImage !== $blog->image && $oldImage !== $defaultImage)) {
            $this->removeImage($oldImage);
        }
    //  } catch (\Exception $e) {
    //         Session::flash('error',"Please this are the only images supported Jpg,png,jpg");
    //         return redirect()->route('backend.blogs.index');
    //     }
        return redirect()->route('blgs')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        try{
              $blog =  Blog::findOrFail($id);
               $defaultImage ='default.png';
               $blog->delete();

           if ($blog->image !== $defaultImage) {

             $this->removeImage($blog->image);

           }

     } catch (\Exception $e) {

            Session::flash('error',"Something wen't wrong! Please try again");
            return redirect()->route('blgs');
        }
        return redirect()->route('blgs')->with('success', 'blog deleted successfully');
    }

     private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = $this->uploadPath . '/' . $image;
            if ( file_exists($imagePath) ) unlink($imagePath);

        }
    }
}
