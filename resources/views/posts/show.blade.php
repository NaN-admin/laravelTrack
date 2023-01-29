@section("title",$post->title)
<x-layout>
  <x-post :post="$post" :comments="$comments" class="font-weight-bold" />
  <x-createComment :post="$post" />
  </div>
  <div class="col-md-4">
    <div class="position-sticky" style="top: 2rem;">
      <div class="p-4 mb-3 bg-light rounded">
        <h4>مبادئ التسويق الإلكتروني</h4>
        <p>يمكنك الان شراء كتاب مبادئ التسويق بخصم 50% أدخل عنوان بريدك الالكتروني لتصلك التفاصيل</p>
        <form action="/mail" method="Post">
          @csrf
          <div class="form-group">
            <input type="email" id="email" class="form-control" name="email">
          </div>
          <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-2 ">إرسال</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
  </main>
  </div>
</x-layout>