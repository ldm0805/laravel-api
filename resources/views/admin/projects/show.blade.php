@extends('layouts.admin')
@inject('utils', 'App\Utils\Utils')
@section('content')
    <div class="show">
        <div class="row">
            <div class="col-12">
                <div class="mb-4">
                    <a href="{{route('admin.projects.index')}}" class="btnblue">
                        Torna all'elenco
                    </a>
                </div>
                <div class="d-flex justify-content-center gap-2">
                    <h4>Titolo progetto: {{$project->title}}.</h4>
                </div>
            </div>
            <div class="col-12">
                <div class="my-3">
                    {!! $utils->displayImage($project->cover_image, $project->title) !!}
                </div>
                <p>
                    <strong>
                        Slug:
                    </strong>
                    {{$project->slug}}
                </p>
                <p>
                    <strong>
                        Contenuto:
                    </strong>
                    {{$project->content}}
                </p>
                <p>
                    <strong>
                        Tags:
                    </strong>
                    @forelse($project->tags as $tag)
                    {{$tag->name}}
                    @empty
                    Nessun tag associato al post
                    @endforelse
                </p>
                <p>
                    <strong>
                        Tipo:
                    </strong>
                    {{$project->type ? $project->type->name : 'senza categoria'}}
                </p>
            </div>
        </div>
    </div>
@endsection