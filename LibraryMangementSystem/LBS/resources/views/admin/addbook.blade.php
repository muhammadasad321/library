@extends('admin.layout')

@section('admin.addbook')

<div class="card">
  <div class="card-body">

    <h5 class="card-title">Add Book</h5>

    <!-- Vertical Form -->
    <form class="row g-3" id="uploadForm" enctype="multipart/form-data" action="{{ url('admin/bookstore') }}" method="post">
      @csrf
      <div class="col-12">
        <label for="inputTitle" class="form-label">Book Title</label>
        <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Enter Book title" required>
      </div>
      
      <div class="col-12">
        <label class="col-sm-2 col-form-label">Select Category</label>
        <div class="col-sm-12">
          <select class="form-select" name="category_id" aria-label="Default select example" required>
            <option selected>Select book category</option>
            @foreach($CategoryList as $data)
            <option value="{{$data->id}}">{{$data->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-12">
        <label class="col-sm-2 col-form-label">Select Author</label>
        <div class="col-sm-12">
          <select class="form-select" name="author_id" aria-label="Default select example" required>
            <option selected>Select book author</option>
            @foreach($AuthorList as $data)
            <option value="{{$data->id}}">{{$data->author }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-6">
        <label for="inputPrice" class="form-label">Book Price</label>
        <input type="text" class="form-control" name="price" id="inputPrice" placeholder="Enter Book price" required>
      </div>
      <div class="col-6">
        <label for="inputQuantity" class="form-label">Book Quantity</label>
        <input type="text" class="form-control" name="quantity" id="inputQuantity" placeholder="Enter Book quantity" required>
      </div>

      <div class="col-12">
        <label for="inputImage" class="form-label">Main Image</label>
        <input type="file" class="form-control" id="inputImage" name="image" required accept="image/*">
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Enter Book Description</h5>

          <!-- TinyMCE Editor -->
          <textarea class="tinymce-editor" name="description" required>

</textarea><!-- End TinyMCE Editor -->

        </div>
      </div>

      <div class="text-left">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form><!-- Vertical Form -->
  </div>
</div>

@endsection
