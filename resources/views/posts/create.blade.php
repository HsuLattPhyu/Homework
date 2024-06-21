<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>create</title>
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
            <div class="card-title">Post List</div>
          </div>
          <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" class="custom-form" novalidate>
            @csrf
              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="name@example.com">
                @error('title')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                
              </div>
              <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
                @error('title')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="is_published" name="is_published">
                <label class="form-check-label" for="is_published">Published</label>
              </div>
              <div class="bs clearfix">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">back</a>
                <button type="submit" class="btn btn-primary float-end" name="create">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>