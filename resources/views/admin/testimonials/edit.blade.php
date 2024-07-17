@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('edit testimonial')}}</h1>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">{{ __('name') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('name') }}" name="name" value="{{ old('name',$testimonial->name) }}" />
                    </div>
                    <div class="form-group">
                        <label for="job_tittle">{{ __('job_tittle') }}</label>
                        <input type="text" class="form-control" id="job_tittle" placeholder="{{ __('job_tittle') }}" name="job_tittle" value="{{ old('job_tittle',$testimonial->jod_tittle) }}" />
                    </div>
                    <div class="form-group">
                        <label for="message">{{ __('message') }}</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows=6>{{ old('message',$testimonial->message) }}></textarea>
                    </div>
                    <div class="form-group">
                        <label for="photo">{{ __('photo') }}</label>
                        <input type="file" class="form-control" id="photo" placeholder="{{ __('photo') }}" name="photo" value="{{ old('photo') }}" />
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </form>
            </div>
    

    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
@endpush