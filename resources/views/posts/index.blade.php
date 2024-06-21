<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Index</title>
<style>
  body{padding:60px;
  }
  .card-title{
    font-size: 30px;
    font-weight: bold;
  }
  .row{
    margin-top:20px;
  }
  .context{
    word-break: break-all; 
     width:20%;            
  }
</style>
</head>
<body>
<div class="container">
 <a href="{{ route('posts.create') }}"><button class="btn btn-primary">Create</button></a> 
  <div class="row">
    <div class="col-md-12">
      <div class="card"> 
        <div class="card-header">
          <div class="card-title">Post List</div>
        </div>
      <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Context</th>
            <th>Is Published</th>
            <th>Created Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          
        @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td class="context">{{ $post->content }}</td>
                    <td>{{ $post->is_published ? 'Published' : 'Unpublished' }}</td>
                    <td>{{ $post->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="display: inline-block;">
                         @csrf   @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
      </table>
      </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>