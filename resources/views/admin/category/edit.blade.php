<?php
use App\Models\Category;

/**
 * @var Category $category
 */
?>
@extends('admin.layouts.default')

@section('title', 'Edit Category')

@section('content')

    <!-- begin::App Content Header -->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Edit category</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $category->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--end::App Content Header-->



    <!--begin::App Content-->
    <!--end::Container-->

    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">

                <div class="col-md-12">

                    <div class="card card-warning card-outline mb-4">
                        <!-- begin::Header -->
                        <div class="card-header">
                            <div class="card-title">Edit Category: <strong>{{ $category->title }}</strong></div>
                        </div>
                        <!-- end::Header -->

                        <!-- begin::Form -->
                        <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-2 col-form-label">Category name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $category->title }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="meta_desc" class="col-sm-2 col-form-label">META Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="meta_desc" class="form-control" id="meta_desc" value="{{ $category->meta_desc }}">
                                    </div>
                                </div>

                            </div>
                            <!-- begin::Footer -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Save</button>
                                {{--  <button type="submit" class="btn float-end">Cancel</button> --}}
                            </div>
                            <!-- end::Footer -->
                        </form>
                        <!-- end::Form -->
                    </div>

                </div>

            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->

@endsection

