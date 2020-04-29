@extends('home.user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach ($questions as $item)
            <div class="card">
                <div class="card-header text-right">
                    <p class=" d-inline">سوال شماره :{{ $loop->iteration }}</p>
                    <span class="badge  badge-success float-left ">{{ $item->mark }}: نمره </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-right card-text">{{ $item->question }}؟</p>
                        </div>
                        <div class="col-md-6">
                            @foreach ($item->options as $option)
                            <div class="form-check text-right">
                                <input class="form-check-input" type="radio" name="radios{{ $item->id }}"
                                    id="radios{{$option->id}}" value="{{ $option->id }}">
                                <label class="form-check-label pr-4" for="radios{{$option->id}}">
                                    {{ $option->answer }}
                                </label>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection




{{-- /*


$options = $item->options();

@foreach ($options as $option)

$option->answer;

*/ --}}
