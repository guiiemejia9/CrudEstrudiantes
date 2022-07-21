@extends('layouts.app')

@section('content')

    <form class="w-50 mx-auto mt-5 pt-5" action="{{route('category-create')}}" method="POST">
        @csrf
        <h3 class="text-center my-1">Registro Categorias</h3>
        @include('messeges.messages')


        <div class="form-group">
            <label for="name">Descripción</label>
            <input type="text" class="form-control {{$errors->has('description')? 'is-invalid':''}}" name="description" id="description"
                   value="{{isset($category->description)?$category->description:old('description') }}">


        </div>




        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>


@endsection
