@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-sm-4">
        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="productCoverImage">Cover Image</label>
                    <input type="file" name="cover_image" class="form-control-file" id="productCoverImage">
                </div>
    </div>
    
        <div class="form-row mt-3">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Title</label>
                <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Post Title Goes here...">
            </div>
            
                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    @if($categories)
                    <select id="category" class="form-control" name="category_id">
                        <option selected>No Category Selected</option>
                        @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
            </div>
            
        <div class="form-group col-md-12">
            <label for="description">Post Body:</label>
            <textarea class="form-control" rows="5" id="description" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Publish</button>
    </form>
</div>
</div>

@endsection