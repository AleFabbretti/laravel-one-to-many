@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>Crea progetto</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="my-4">
            <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo progetto</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Inserisci il titolo del progetto" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Cliente</label>
                    <input type="text" class="form-control" id="company" name="company"
                        placeholder="Inserisci il cliente" value="{{ old('company') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="10"
                        placeholder="inserisci la descrizione">{{ old('description') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Immagine</label>
                    <input type="file" class="form-control" name="cover_image" value="{{ old('cover_image') }}">
                </div>
                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
@endsection
