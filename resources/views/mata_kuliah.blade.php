@extends('welcome')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container color_post">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
            <h1>Mata Kuliah</h1>
            {{-- <a href="/posts/create">Create New Projects</a> --}}
            @if(count($posts)>0)
                @foreach ($posts as $post)
                    <div class="well">
                        <h3>{{$post->mata_kuliah}}</h3>
                        <h5>
                            Keminatan: {{$post->keminatan}}
                        </h5>
                        <small>
                            Alasan: {{$post->alasan}}
                        </small>
                    </div>
                @endforeach
            @else
                <h3>Tidak ada data.</h3>
            @endif
            Halaman : {{ $posts->currentPage() }} <br>
            Jumlah Data : {{ $posts->total() }} <br>
            Data Per Halaman : {{ $posts->perPage() }} <br>
            <div class="d-flex">
                {{ $posts->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection