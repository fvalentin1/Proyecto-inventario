<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->subtitle = $request->subtitle;
        $news->body = $request->body;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageData = base64_encode(file_get_contents($image->getRealPath()));
            $news->image = $imageData;
        } else {
            // Imagen por defecto en escala de grises
            $defaultImagePath = public_path('images/default.jpg');
            $news->image = base64_encode(file_get_contents($defaultImagePath));
        }

        $news->save();

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }


    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $news->title = $request->title;
        $news->subtitle = $request->subtitle;
        $news->body = $request->body;

        if ($request->has('remove_image') && $request->remove_image) {
            // Remover la imagen actual y asignar la imagen por defecto
            $defaultImagePath = public_path('images/default.png');
            if (file_exists($defaultImagePath)) {
                $news->image = base64_encode(file_get_contents($defaultImagePath));
            } else {
                $news->image = null; // Opción alternativa si no existe la imagen predeterminada
            }
        } elseif ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageData = base64_encode(file_get_contents($image->getRealPath()));
            $news->image = $imageData;
        }

        $news->save();

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }


    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
