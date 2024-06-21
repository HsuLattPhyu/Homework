<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Post</title>
    <style>
        body { padding: 60px; }
        .card-title { font-size: 30px; font-weight: bold; }
        .row { margin-top: 20px; }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Post</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}">
                            @error('title')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea id="content" name="content" class="form-control" rows="5">{{ old('content', $post->content) }}</textarea>
                            @error('content')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="is_published" id="is_published" {{ old('is_published', $post->is_published) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_published">Published</label>
                        </div>
                        <div class="clearfix">
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
