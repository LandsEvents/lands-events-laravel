<h1>Images</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }} <br> <br>
    </div>
@endif

@foreach ($images as $image)

    <img src="{{asset('storage/' . $image->image) }}" alt="image" style="width: 300px; height: 300px;">
    <h2>{{ $image->image_title }}</h2>

    <a href="{{ route('images.edit', $image->id) }}">Bewerken</a>

    <form action="{{ route('images.destroy', $image->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
        {{ $image->begin_date }}
        {{ $image->end_date }}
        <p>{{ $image->description }}</p>
        <p>{{ $image->category }}</p>
        <p>{{ $image->location }}</p>
    {{ $image->price }}
@endforeach
