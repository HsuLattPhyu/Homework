<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>View Post</title>
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
                    <div class="card-title">Post Details</div>
                </div>
                <div class="card-body">
                    
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <p id="title" class="form-control-static">{{ $post->title }}</p>
                        </div>
                        <div class="form-group">
                            <label for="is_published">{{ $post->is_published ? 'Published' : 'Unpublished' }}</label>&nbsp;At:&nbsp;
                            {{ $post->created_at->format('d-m-Y') }}
                            <p id="is_published" class="form-control-static"></p>
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <p id="content" class="form-control-static">{{ $post->content }}</p>
                        </div>
          
                  
                        <div class="clearfix">
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    
                       
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
