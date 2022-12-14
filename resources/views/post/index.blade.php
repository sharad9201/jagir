@extends('layouts.app')
@section('content')
    {{-- <div class="modal-dialog modal-dialog-scrollable">
    <table border="1px">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Posted By</th>
            <th>Image</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post['title']}}</td>
            <td>{{$post['description']}}</td>
            <td>{{$post->user['name']}}</td>
            <td><img src="{{ asset('/uploads/images/' . $post->image) }}" alt="" width="150px"
                height="150px"></td>
            <td>@if (auth()->user()->isAdmin())
                <a href="{{route('posts.edit',$post->id)}}">Edit</a>
                
            @endif
            <a href="{{route('posts.apply',$post->id)}}">Apply</a>
            </td>
        @endforeach
    </table>
</div>   --}}



    <div class=" d-flex justify-content-around" ml-2 px-2>
        <div class="row d-flex justify-content-around">
        @foreach ($posts as $post)
            {{-- <div class="flex-row"> --}}
               

                    <div class="card mt-4" style="width: 20rem;">

                        <img class="card-img-top" src="{{ asset('storage/posts/' . $post->image) }}" alt="Card image cap" style="height: 14rem;">
                        <div class="card-body ">
                            <h5 class="card-title"> {{ $post['title'] }}</h5>
        
                            <p class="card-text"> {{ \Illuminate\Support\Str::words($post->description, 10) }} </p>
                            <a href="{{ route('posts.view_more', $post->id) }}" class="btn btn-primary">View more..</a>
                        </div>
                        
                    </div>
               
            {{-- </div> --}}
           
        @endforeach
    </div>
    </div>
@endsection
