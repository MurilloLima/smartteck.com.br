@extends('admin.layouts.app')
@section('title', 'Endereço')

@section('content')
    <div class="content-wrapper" style="min-height: 234px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Endereço</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item" class="btn btn-default" data-toggle="modal"
                                data-target="#modal-default"><a href="#">Cadastrar</a></li>
                            {{-- <li class="breadcrumb-item active">Fixed Layout</li> --}}
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session('msg'))
                            <div class="alert alert-success text-center">
                                {{ session('msg') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('endereco.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="customFile">Endereço</label>
                                        <div class="custom-file">
                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                            <input type="text" name="text" value="{{ $data->text }}" required
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Atualizar</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
