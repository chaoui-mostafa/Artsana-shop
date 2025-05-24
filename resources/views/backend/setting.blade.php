@extends('backend.layouts.master')

@section('main-content')

<!-- Add Tailwind CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<!-- Add custom styles -->
<style>
    .file-input-label {
        transition: all 0.3s ease;
    }
    .file-input-label:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .note-editor.note-frame {
        border: 1px solid #e2e8f0 !important;
        border-radius: 0.375rem !important;
    }
    .note-editor.note-frame .note-statusbar {
        background-color: #f8fafc !important;
        border-top: 1px solid #e2e8f0 !important;
    }
</style>

<div class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 px-6 py-4">
            <h2 class="text-xl font-semibold text-white">Edit Settings</h2>
        </div>

        <div class="p-6">
            <form method="post" action="{{route('settings.update')}}" class="space-y-6">
                @csrf

                <!-- Short Description -->
                <div class="space-y-2">
                    <label for="short_des" class="block text-sm font-medium text-gray-700">
                        Short Description <span class="text-red-500">*</span>
                    </label>
                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                              id="quote" name="short_des" rows="3">{{$data->short_des}}</textarea>
                    @error('short_des')
                        <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="space-y-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">
                        Description <span class="text-red-500">*</span>
                    </label>
                    <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                              id="description" name="description" rows="5">{!! $data['description'] !!}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <!-- Logo Upload -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">
                        Logo <span class="text-red-500">*</span>
                    </label>
                    <div class="flex items-center space-x-4">
                        <label id="lfm1" data-input="thumbnail1" data-preview="holder1"
                               class="file-input-label cursor-pointer bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md inline-flex items-center">
                            <i class="fas fa-image mr-2"></i> Choose Logo
                        </label>
                        <input id="thumbnail1" class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                               type="text" name="logo" value="{{$data->logo}}" readonly>
                    </div>
                    <div id="holder1" class="mt-3">
                        @if(!empty($data['logo']))
                            <img src="{{$data['logo']}}" class="h-20 object-contain border rounded-md p-1">
                        @endif
                    </div>
                    @error('logo')
                        <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <!-- Photo Upload -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">
                        Photo <span class="text-red-500">*</span>
                    </label>
                    <div class="flex items-center space-x-4">
                        <label id="lfm" data-input="thumbnail" data-preview="holder"
                               class="file-input-label cursor-pointer bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md inline-flex items-center">
                            <i class="fas fa-image mr-2"></i> Choose Photo
                        </label>
                        <input id="thumbnail" class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                               type="text" name="photo" value="{{$data->photo}}" readonly>
                    </div>
                    <div id="holder" class="mt-3">
                        @if(!empty($data['photo']))
                            <img src="{{$data['photo']}}" class="h-20 object-contain border rounded-md p-1">
                        @endif
                    </div>
                    @error('photo')
                        <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <!-- Address -->
                <div class="space-y-2">
                    <label for="address" class="block text-sm font-medium text-gray-700">
                        Address <span class="text-red-500">*</span>
                    </label>
                    <input type="text" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                           name="address" required value="{{$data->address}}">
                    @error('address')
                        <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                           name="email" required value="{{$data->email}}">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <!-- Phone -->
                <div class="space-y-2">
                    <label for="phone" class="block text-sm font-medium text-gray-700">
                        Phone Number <span class="text-red-500">*</span>
                    </label>
                    <input type="text" class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                           name="phone" required value="{{$data->phone}}">
                    @error('phone')
                        <p class="mt-1 text-sm text-red-600">{{$message}}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-300">
                        Update Settings
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Summernote CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css">
<!-- Bootstrap Select CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

@push('scripts')
<!-- Laravel Filemanager -->
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- Bootstrap Select JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');

    $(document).ready(function() {
        $('#quote').summernote({
            placeholder: "Write short description...",
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $('#description').summernote({
            placeholder: "Write detailed description...",
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endpush

@endsection
