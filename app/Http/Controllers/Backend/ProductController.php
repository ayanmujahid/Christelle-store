<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\FileRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    protected $fileRepo;

    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepo = $fileRepo;
    }

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.product-management.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product-management.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:500',
            'long_description' => 'nullable|string',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'main_image' => 'nullable|image',
            'gallery.*' => 'nullable|image',
        ]);

        $product = Product::create($request->only([
            'name', 'short_description', 'long_description', 'price', 'discounted_price'
        ]));

        // Handle files
        if ($request->hasFile('main_image')) {
            $this->fileRepo->upload($request->file('main_image'), $product, 'main_image');
        }

        if ($request->hasFile('gallery')) {
            $this->fileRepo->uploadMultiple($request->file('gallery'), $product, 'gallery');
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.product-management.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.product-management.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:500',
            'long_description' => 'nullable|string',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'main_image' => 'nullable|image',
            'gallery.*' => 'nullable|image',
        ]);

        $product->update($request->only([
            'name', 'short_description', 'long_description', 'price', 'discounted_price'
        ]));

        // Update main image
        if ($request->hasFile('main_image')) {
            $this->fileRepo->deleteAll($product, 'main_image');
            $this->fileRepo->upload($request->file('main_image'), $product, 'main_image');
        }

        // Add gallery images
        if ($request->hasFile('gallery')) {
            $this->fileRepo->uploadMultiple($request->file('gallery'), $product, 'gallery');
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $this->fileRepo->deleteAll($product); // delete all related files
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
