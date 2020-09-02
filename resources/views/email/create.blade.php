@extends('layouts.admin')
        <link rel="stylesheet" type="text/css" href="{{ url('/css/create.css') }}" />
@section('conteudo')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content">
                    <div class="create nexa-bold">{{ __('Adição de emails') }}</div>
                    <hr>

                    <div class="">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('email.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right nexa-light">{{ __('Título') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="body" class="col-md-4 col-form-label text-md-right nexa-light">{{ __('Corpo') }}</label>

                                <div class="col-md-6">
                                    <textarea name="body" id="body"></textarea>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row anexo">
                                <label for="attachment" class="col-md-4 col-form-label text-md-right nexa-light">{{ __('Anexo') }}</label>
                                <input id="attachment" data-input="false" type="file" class="form-control col-md-8 @error('attachment') is-invalid @enderror" name="attachment" value="{{ old('attachment') }}"  autocomplete="attachment" autofocus>
                            </div>

                            <div class="form-group row button-row">
                                <div class="col-md-6 offset-md-8 button">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Adicionar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
