  <!--Header-->
  @extends('layouts.main')
  @section('content')
  <!--Main Area-->
  <main>

    <div class="main-body">
      <!--Card Body-->
      <div class="trending">
        <div class="row my-2">
          <div class="col-md-5">
            <div class="trending-card">
            <a href="read.html"><img src="{{asset('storage/cover_image/'.$tech->cover_image)}}" alt="" class="container-fluid"
                  height="200"></a>
              <div class="title">
                <a href="read.html">
                  @if($tech)
                <h5 class="ml-5 px-4 pt-3">{{$tech->title}}</h5>
                <p class="ml-5 px-4 text-">{{str_limit($tech->body,150)}}</p>
                  @endif
                </a>
              </div>
              <div class=" ml-5">
              <a class="ml-4 text-secondary">Zander Nethercutt in {{$lifeStyle->category->name}}</a>
              </div>
              <p class="ml-5"><small class="ml-4">july 26 . 6 mins</small></p>
            </div>
          </div>

          <div class="col-md-3">
            @if($posts)
            @foreach($posts->chunk(1) as $postChunk)
            @foreach($postChunk as $post)
            <div class="news-card d-flex">
              <div class="img mr-3">
                <img src="{{asset('storage/cover_image/'.$post->cover_image)}}" alt="" width="200" height="100">
              </div>
              <div class="news-title text-capitalize">
                <a href="read.html"><h6>{{str_limit($post->title,150)}}</h6></a>
              <p>Eric Ravenscraft in {{$post->category->name}}</p>
                <p></p><small>{{date_format($post->created_at,'F')}} . {{date_format($post->created_at,'i')}} mins</small></p>
              </div>
            </div>
            @endforeach
            @endforeach
            @endif
            
          </div>

          <div class="col-md-4">
            @if($lifeStyle)
            <div class="trending-card">
            <a href="read.html"><img src="{{asset('storage/cover_image/'.$lifeStyle->cover_image)}}" alt="" class="container-fluid"
                  height="200"></a>
              <div class="title">
                <a href="read.html">
                <h5 class="ml-5 px-4 pt-3">{{$lifeStyle->title}}</h5>
                <p class="ml-5 px-4 text-">{{str_limit($lifeStyle->body,150)}}</p>
                </a>
              </div>
              <div class=" ml-5">
                <a class="ml-4 text-secondary">Zander Nethercutt in {{$lifeStyle->category->name}}</a>
              </div>
            <p class="ml-5"><small class="ml-4">{{date_format($lifeStyle->created_at,'F')}} . {{date_format($lifeStyle->created_at,'i')}} mins</small></p>
            </div>
            @endif
          </div>
        </div>

        <p class="text-right"><a href="#">SEE ALL FEATUREd ></a></p>
        <hr>
      </div>
    </div>
  </main>
    
@endsection    