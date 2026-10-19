<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * landing page final
     */
    public function index()
    {
        return view('welcome', [
            'products' => Product::latest()->take(3)->get(),
            'galleries' => Gallery::latest()->take(6)->get(),
            'news' => News::latest()->take(3)->get(),
        ]);
    }

    /**
     * cimpany profile
     */
    public function profile()
    {
        return view('public.profile.index');
    }

    /**
     * public gallery list min
     */
    public function galleryIndex()
    {
        $galleries = Gallery::latest()->get();
        return view('public.gallery.index', compact('galleries'));
    }

    /**
     * public gallery 
     */
    public function galleryShow(Gallery $gallery)
    {
        return view('public.gallery.show', compact('gallery'));
    }

    /**
     * public news index
     */
    public function newsIndex()
    {
        $news = News::latest()->get();
        return view('public.news.index', compact('news'));
    }

    /**
     * public news dedciated
     */
    public function newsShow(News $news)
    {
        return view('public.news.show', compact('news'));
    }

    /**
     * public product index
     */
    public function productIndex()
    {
        $products = Product::latest()->get();
        return view('public.product.index', compact('products'));
    }

    /**
     * public product dedicated
     */
    public function productShow(Product $product)
    {
        return view('public.product.show', compact('product'));
    }

    /**
     * public contact page war is over
     */
    public function contact()
    {
        return view('public.contact.index');
    }
}
