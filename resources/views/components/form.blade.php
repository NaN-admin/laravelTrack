<form action="/posts" method="Post">
    @csrf
    <div class="form-group">
        <label for="title">عنوان المقالة</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title ?? ""}}">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @endError
    </div>
    <div class="form-group">
        <label for="body">نص المقالة</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body ?? ""}}</textarea>
        @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
        @endError
    </div>
    <div class="form-group">
        <label for="author">الكاتب</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ $post->author ?? ""}}">
        @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
        @endError
    </div>
    