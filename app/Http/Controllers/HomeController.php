<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Landing page.
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
     * Company profile (about) page.
     */
    public function profile()
    {
        return view('public.profile.index');
    }

    /**
     * Public gallery listing.
     */
    public function galleryIndex()
    {
        $galleries = Gallery::latest()->get();
        return view('public.gallery.index', compact('galleries'));
    }

    /**
     * Public gallery detail.
     */
    public function galleryShow(Gallery $gallery)
    {
        return view('public.gallery.show', compact('gallery'));
    }

    /**
     * Public news listing.
     */
    public function newsIndex()
    {
        $news = News::latest()->get();
        return view('public.news.index', compact('news'));
    }

    /**
     * Public news detail.
     */
    public function newsShow(News $news)
    {
        return view('public.news.show', compact('news'));
    }

    /**
     * Public product listing.
     */
    public function productIndex()
    {
        $products = Product::latest()->get();
        return view('public.product.index', compact('products'));
    }

    /**
     * Public product detail.
     */
    public function productShow(Product $product)
    {
        return view('public.product.show', compact('product'));
    }

    /**
     * Public contact page.
     */
    public function contact()
    {
        return view('public.contact.index');
    }
}
