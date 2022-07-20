@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Galeria principal de imagenes</h1>
@stop

@section('content')

@if (session()->has('success'))
    
<div id="alert-success-container" class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session()->get('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($errors->any())
<div id="alert-error-container" class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ implode('', $errors->all(':message')) }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Agregar una nueva imagen</h2>
            <hr class="my-4">

            {{-- Add new Image --}}
            <div class="row mb-5">

                <div class="col-6">
                    <form method="POST" action="{{ route('admin.image.save') }}" class="mb-4" enctype="multipart/form-data">
                        @csrf
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image" data-browse="Elegir">Seleccionar Archivo</label>
                            {{-- <span class="text-small small text-muted">De Click o Arrastre una imagen aqui</span> --}}
                        </div>

                        <div class="mt-5">
                            <button id="addNewImageBtn" class="btn btn-primary disabled">Añadir Nueva Imagen</button>
                        </div>
                    </form>
                </div>

                <div class="col-6 d-none" id="image-preview-container">
                    <img id="imageHolder" class="rounded img-thumbnail img-fluid" src="" alt="Image Preview" style="height: 255px;
                    width: 100%;
                    object-fit: cover;">
                    <span class="small text-muted">Previsualización*</span>
                </div>

            </div>

            {{-- Gallery --}}

            <div class="row">
                <h2 class="card-title">Galeria</h2>
                <hr class="my-4">
            </div>

            <div class="row">
                @foreach ($images as $image)
            
                    <div class="col-md-4 mb-2 px-3 banner-image">
                        <img class="rounded img-fluid thumbnail-image-size" src="/storage/{{ $image->image_src }}" alt="{{ $image->image_alt }}">
                        <a href="{{ route('admin.image.delete' , ['image_id'=>$image->id]) }}">
                            <span class="erase-img" title="Eliminar imagen">&times;</span>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>

        .thumbnail-image-size {
            height: 133px;
            width: 100%;
            object-fit: cover;
        }
        .erase-img {
            opacity: 0;
            transition: opacity .5s ease-in-out;
            position: absolute;
            z-index: 9999;
            top: 10px;
            right: 30px;
            background: red;
            color: #ffffff;
            width: 2.2rem;
            line-height: 2.2rem;
            font-size: 2rem;
            text-align: center;
            border-radius: 15%;
            cursor: pointer;
        }
        .erase-img:hover {
            background: rgb(201, 0, 0);
        }

        .erase-img:active {
            background: rgb(255, 37, 37);
        }

        .banner-image:hover .erase-img {
            opacity: 1;
        }
    </style>
@stop

@section('js')
    <script> 

    // Autoclose Alert
    setTimeout(() => {
        $('#alert-success-container').alert('close')
    }, 3000);

    
    const imagePreviewContainer = document.getElementById('image-preview-container');
    // Hero Preview Image
    document.getElementById('image').addEventListener('change', function(){
        loadPreviewImage('image','imageHolder');
        imagePreviewContainer.classList.remove('d-none');
        document.getElementById('addNewImageBtn').classList.remove('disabled');
    })

    // Add Card Preview Image
    // document.getElementById('image_create').addEventListener('change', function(){
    //     previewBackgroundImage('image_create','image_create_container');
    // })

    function loadPreviewImage(imageSource, imageHolder){
        const file = document.getElementById(imageSource).files[0];
        const imgSrc = URL.createObjectURL(file);

        const imagePlaceHolder = document.getElementById(imageHolder);

        imagePlaceHolder.setAttribute('src', imgSrc);
    }
    
    function loadBackgroundPreviewImage( imageSource, imageHolder){

        const file = document.getElementById(inputSource).files[0];

        const imgSrc = URL.createObjectURL(file);

        const imagePlaceHolder = document.getElementById(imageHolder);

        imagePlaceHolder.setAttribute('style', 'background: url('+imgSrc+'); background-size: cover');
    }
    </script>
@stop