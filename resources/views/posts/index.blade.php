@section("title","posts")
<x-layout>
  <main class="container">
    <div class="row">
      <div class="col-md-8">
        @foreach ($posts as $post)
        <div class="blog-post mb-3">
          <h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">{{$post->title}}</a></h2>
          <p class="blog-post-meta">بقلم <a href="posts/{{ $post->id }}">{{ $post->author }}</a> {{
            Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
        </div>
        @endforeach
        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="#">تدوينات أقدم</a>
          <a class="btn btn-outline-secondary rounded-pill disabled">تدوينات أحدث</a>
        </nav>

      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4>مبادئ التسويق الإلكتروني</h4>
            <p>يمكنك الان شراء كتاب مبادئ التسويق بخصم 50% أدخل عنوان بريدك الالكتروني لتصلك التفاصيل</p>
            <form action="/mail" method="Post">
              @csrf
              <div class="form-group ">
                <input type="email" id="email" class="form-control" name="email">
                @error('email')
                <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-2 ">إرسال</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </main>
</x-layout>