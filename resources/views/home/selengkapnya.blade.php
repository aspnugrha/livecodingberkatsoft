@extends('layout.main2')


@section('container')
    
<div class="container">
    
    <div class="row">
        <div class="col-lg-12">
            <h2>{{ $title_halaman }}</h2>
            
            <section class="section">
                <div class="container">
                    <article class="row mb-4">
                        <div class="col-lg-10 mx-auto mb-4">
                            <h1 class="h2 mb-3">{{ $data['title'] }}</h1>
                            <ul class="list-inline post-meta mb-3">
                                
                                <li class="list-inline-item">Date : {{ date('d F Y', strtotime($data['release_date'])) }}</li>
                                
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="post-slider">
                                <img src="https://api.themoviedb.org/3/movie/{{ $data['id'] }}/images?api_key=c17663909b650175249435dbafa389c1&language=en-US{{ $data['poster_path'] }}" class="img-fluid" alt="post-thumb">
                            </div>
                        </div>
                        <div class="col-lg-10 mx-auto">
                            <div class="content">
                                {{ $data['overview'] }}
                            </div>
                        </div>
                    </article>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection