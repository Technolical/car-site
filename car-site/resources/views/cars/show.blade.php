<x-layout title="Owner car details">
    <div style="max-width: 500px; margin: 50px auto; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; font-size: 28px; margin-bottom: 20px; color: #333;">{{$car->owner}}</h1>

        <p class="show-car"><strong>Allotted Parking Number:</strong> {{$car->lot}}</p>
        <p class="show-car"><strong>Make:</strong> {{$car->make}}</p>
        <p class="show-car"><strong>Model:</strong> {{$car->model}}</p>
        <p class="show-car"><strong>Year:</strong> {{$car->year}}</p>
        <p class="show-car"><strong>Registration Number:</strong> {{$car->registration}}</p>


        <div style="margin-top: 20px; display: flex; justify-content: space-between;">
            <a href="/cars/{{$car->id}}/edit" style="text-decoration: none;">
                <button class="button-show-edit">
                    ✏️ Edit
                </button>
            </a>

            <form method="POST" action="/cars" style="margin: 0;">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$car->id}}">
                <button type="submit" class="button-show-delete">
                    🗑️ Delete
                </button>
            </form>
        </div>
    </div>
</x-layout>
