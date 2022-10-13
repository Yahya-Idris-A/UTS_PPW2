@extends('welcome')

@section('content')
<div class="col-md-8 articles" id="site-content">
    <article class="posts">
        <h1>“UTS WEB 2 – Yahya Idris Abdurrahman</h1>
        <h2 class="title-post">Langkah-langkah menghubungkan project laravel dengan database</h2>
        <div class="meta-post">
            <span><i class="bi bi-person-circle"></i> Yahya Idris Abdurrahman</span>
            <span><i class="bi bi-calendar"></i> 13 Oktober 2022</span>
        </div>
        <div class="content">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">1. Membuat project laravel baru</li>
                <li class="list-group-item">2. Membuat controller</li>
                <li class="list-group-item">3. Membuat database</li>
                <li class="list-group-item">4. Mengatur file .env</li>
                <li class="list-group-item">5. Membuat model</li>
                <li class="list-group-item">6. Edit folder database/migrations/create_mata_kuliahs_table.php</li>
                <li class="list-group-item">7. Migrate</li>
            </ul>
        </div>
    </article>
</div>
@endsection