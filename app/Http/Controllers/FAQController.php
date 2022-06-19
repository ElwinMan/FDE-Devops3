<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Faq;

class FAQController
{
    public function index()
    {
        return view('faq.index', [
            'faqs' => Faq::all()
        ]);
    }

    public function show()
    {
        return view('faq.index', [
            'faqs' => Faq::all()
        ]);
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store(Request $request)
    {
        Faq::create($this->validateArticle($request));

        return redirect(route('faq.index'));
    }

    public function edit(Faq $faq)
    {
        return view('faq.edit', compact('faq'));
    }

    public function update(Faq $faq, Request $request)
    {
        $faq->update($this->validateArticle($request));

        return redirect(route('faq.index'));
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect(route('faq.index'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    protected function validateArticle(Request $request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => ''
        ]);
    }
}