<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

    <h1></h1>
    <div id="accordion">
    @foreach ($categories as $category)
            <div class="card">
                <div class="card-header" id="heading{{ $category->id }}">
                    <h5 class="m-0">
                        <button 
                            class="btn {{ (count($category->tasks)) ? 'btn-link' : '' }}" 
                            data-toggle="collapse" 
                            data-target="#collapse{{ $category->id }}" 
                            aria-expanded="true" 
                            aria-controls="collapseOne">{{ $category->name }} ({{ count($category->tasks) }})</button>
                    </h5>
                </div>
                @if (count($category->tasks))
                <div id="collapse{{ $category->id }}" class="collapse" aria-labelledby="heading{{ $category->id }}" data-parent="#accordion">
                    <div class="card-body" style="color: black">
                        <ol>
                            @foreach ($category->tasks as $childCategory)
                            <li>{{ $childCategory->name }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>
</div>

@endsection