<form  action="/posts/{{$post->id}}/comments" method="POST">
  @csrf
    <div class="mb-3">
      <label for="name" class="form-label">الإسم</label>
      <input name="name"  class="form-control" id="name" >
      @error('name')
      <div class="alert alert-danger mt-1">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">نص التعليق</label>
        <textarea  name="body" class="form-control" id="body" rows="3"></textarea>
        @error('body')
        <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">إرسال</button>
  </form>