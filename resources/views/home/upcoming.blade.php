@extends('layout.main2')


@section('container')
    
<div class="container">
    
    <div class="row">
        <div class="col-lg-12">
            <h2>{{ $title_halaman }}</h2>

            
            <section class="section-sm">
                <div class="container">
                    <div class="row">
                        
                        @foreach ($data['results'] as $item)
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <article class="mb-5">
                                    <img loading="lazy" src="images/post/post-3.jpg" class="img-fluid" alt="post-thumb">
                                    <h3 class="h5"><a class="post-title" href="">{{ $item['title'] }}</a></h3>
                                    <ul class="list-inline post-meta mb-2">
                                        
                                        <li class="list-inline-item">Date : {{ date('d F Y', strtotime($item['release_date'])) }}</li>
                                    </ul>
                                    <p>{{ (strlen($item['overview'])> 15) ? substr($item['overview'], 15).'...' : $item['overview'] }}</p>	<a href="/home/{{ $item['id'] }}" class="btn btn-outline-primary">Selengkapnya</a>
                                </article>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </section>
            

        </div>
    </div>

</div>

@endsection