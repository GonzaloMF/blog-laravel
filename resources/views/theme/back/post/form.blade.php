<div class="col-sm-9">
  <h1>Create Post</h1>
  <form action="/submit-post" method="post" class="form-center">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="slug">Slug:</label>
      <input type="text" class="form-control" id="slug" name="slug">
    </div>
    <div class="form-group">
      <label for="category">Category:</label>
      <input type="text" class="form-control" id="category" name="category">
    </div>
    <div class="form-group">
      <label for="tags">Tags:</label>
      <input type="text" class="form-control" id="tags" name="tags">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
      <label for="body">Body:</label>
      <textarea class="form-control" id="body" name="body"></textarea>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
