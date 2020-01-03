@if (session('info'))
    <div class="container mx-auto">
        <div class="text-sm border border-t-8 rounded text-blue-700 border-blue-600 bg-blue-100 px-3 py-4 mb-5" role="alert">
            {{ session('info') }}
        </div>
    </div>
@endif
@if (session('success'))
    <div class="container mx-auto">
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-5" role="alert">
            {{ session('success') }}
        </div>
    </div>
@endif

@if (session('danger'))
    <div class="container mx-auto">
        <div class="text-sm border border-t-8 rounded text-red-700 border-red-600 bg-red-100 px-3 py-4 mb-5" role="alert">
            {{ session('danger') }}
        </div>
    </div>
@endif

@if (session('warning'))
    <div class="container mx-auto">
        <div class="text-sm border border-t-8 rounded text-yellow-700 border-yellow-600 bg-yellow-100 px-3 py-4 mb-5" role="alert">
            {{ session('warning') }}
        </div>
    </div>
@endif
