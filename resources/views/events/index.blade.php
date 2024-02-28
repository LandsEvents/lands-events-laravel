<h1>Events</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }} <br> <br>
    </div>
@endif

@foreach ($events as $event)
    <h2>{{ $event->name }}</h2>
    <form action="{{ route('events.destroy', $event->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    {{ $event->begin_date }}
    {{ $event->end_date }}
    {{ $event->time }}
   <p>{{ $event->description }}</p>
    <p>{{ $event->category }}</p>
    <p>{{ $event->location }}</p>
    {{ $event->price }}
@endforeach
