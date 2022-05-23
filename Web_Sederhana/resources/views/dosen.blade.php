{{-- @include('layout.header',['title' => 'Product']) --}}
{{-- @include('layout.header',['title' => 'Product', 'dataA' => 'NilaiA','datab'=>'NilaiB']) --}}
{{-- @include('layout.footer') --}}
@extends('layout.master')
@section('title','Product')
@section('menuProduct','active')
    @section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Product</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($dosen as $val)
                    <li class="list-group-item">{{$val}}</li>
                    @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
    @endsection