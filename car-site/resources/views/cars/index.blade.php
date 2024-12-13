<x-layout title="List the cars">
    <h1>Staff Car – Parking</h1>
    <ul class="car-list">
        @foreach ($cars as $car)
            <li>
                <a href="/cars/{{$car->id}}">
                    {{$car->owner}}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
