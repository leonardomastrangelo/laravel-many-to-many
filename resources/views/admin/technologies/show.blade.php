@extends('layouts.app')
@section('content')
    <section id="projects-show">
        <h1 class="display-1">{{$technology->name}}</h1>

        <div class="text-center mb-5">
            <h2 class="fs-1 text-uppercase">Operations</h2>
            <a class="btn btn-primary" href="{{route('admin.technologies.edit', $technology->slug)}}">Edit</a>
            <form class="d-inline-block" action="{{route('admin.technologies.destroy', $technology->slug)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-center" type="submit" data-item-title="{{$technology->name}}">
                    <i class="fa-solid fa-trash"></i>
                </button>

                {{-- modal_delete --}}
                @include('partials.modal_delete')
            </form>
        </div>
        
    </section>
@endsection