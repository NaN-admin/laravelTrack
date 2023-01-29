<x-layout>
    <div class="container">
        <form action="/posts/{{ $post->id }}/" method="Post">
            @method('PATCH')
            <x-form :post="$post" />
            <button type="submit" class="btn btn-primary m-1">تعديل</button>
        </form>
    </div>
</x-layout>