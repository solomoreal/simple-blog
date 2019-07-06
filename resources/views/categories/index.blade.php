 @extends('layouts.main') 
 @section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
                    @if($categories)
					@foreach ($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td>{{ $category->name }}</td>
					</tr>
                    @endforeach
                    @endif
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well">
            <form action="{{route('categories.store')}}" method="POST">
                @csrf
                <input type="text" name="name" class="form-control">
                <button type="submit" class="btn mt-2 btn-primary btn-block btn-h1-spacing">Create New Category</button>
            </form>
			</div>
		</div>
    </div>
    @endsection 
