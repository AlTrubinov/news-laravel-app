@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="hero">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero__content text-center">
                                <div class="hero__content-tag">
                                    <h3>PHP - Laravel</h3>
                                </div>
                                <h2>Новостной блог</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($articles as $article)
                    <div class="col-6 pb-3">
                        <div class="card">
                            <img src="{{$article->img}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->title}}</h5>
                                <p class="card-text">{{$article->getBodyPreview()}}</p>
                                <p>{{$article->createdAtForHumans()}}</p>
                                <a href="#" class="btn btn-primary">Подробнее</a>
                                <div class="mt-3">
                                    <span class="badge bg-primary">{{$article->state->likes}} <i class="far fa-thumbs-up"></i></span>
                                    <span class="badge bg-danger">{{$article->state->views}} <i class="far fa-eye"></i></span>
                                </div>
                                <div class="mt-4">
                                    Теги:
                                    @foreach ($article->tags as $tag)
                                        <a href="#" class="badge bg-danger">{{$tag->label}}</a>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>            
        </div>
    </div>
</div>
@endsection
