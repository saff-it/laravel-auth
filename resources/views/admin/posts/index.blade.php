@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{$post -> id}}</th>
                <td>
                    <a href="{{ route('posts.show', $post -> id) }}">
                        {{$post -> title}}
                    </a>
                    
                </td>
                <td>{{$post -> price}}</td>
                <td>{{$post -> sale_date}}</td>
                <td>{{$post -> type}}</td>
                <td><button> <a href="{{route('posts.edit', $post->id)}}"> Edit</a></button></td>
                <td>
                  <form class="delete-item" action="{{route('posts.destroy', $post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                  </form>
                </td>             
              
            </tr>
        @endforeach
    </tbody>
  </table>
</section>

@endsection