<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FAQ') }}
        </h2>
    </x-slot>

    <div id="page" class="container">
        <h1>Update FAQ</h1>

        <form method="POST" action="/faq/{{ $faq->id }}">
            @csrf
            @method('put')

            <div class="field">
                <label class="label" for="question">Question</label>

                <div class="control">
                    <input class="input" type="text" name="question" id="question" value="{{ $faq->question }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>

                <div class="control">
                    <textarea class="textarea" name="answer" id="answer">{{ $faq->answer }}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="link">Link</label>

                <div class="control">
                    <textarea class="input" name="link" id="link">{{ $faq->link }}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form method="POST" action="/faq/{{ $faq->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

    </div>
</x-app-layout>