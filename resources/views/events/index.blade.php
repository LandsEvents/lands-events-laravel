<h1>Events</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }} <br> <br>
    </div>
@endif

@foreach ($events as $event)

    <img src="{{asset('storage/' . $event->image) }}" alt="image" style="width: 300px; height: 300px;">
    <h2>{{ $event->name }}</h2>

    <a href="{{ route('events.edit', $event->id) }}">Bewerken</a>

    <form action="{{ route('events.destroy', $event->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    {{ $event->begin_date }}
    {{ $event->end_date }}
   <p>{{ $event->description }}</p>
    <p>{{ $event->category }}</p>
    <p>{{ $event->location }}</p>
    {{ $event->price }}
@endforeach
