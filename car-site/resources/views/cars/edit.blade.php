<x-layout title="Edit a car">
    <div class="form-container">
        <h1 class="form-title">
            Edit Details for {{$car->make}} {{$car->model}}
        </h1>

        <form action="{{ route('cars.update') }}" method="POST">
            @csrf
            @method('PATCH')

            <!-- Hidden field for car ID -->
            <input type="hidden" name="id" value="{{ $car->id }}">

            <div class="edit-form-group">
                <label for="owner">Owner:</label>
                <input type="text" id="owner" name="owner" value="{{ old('owner', $car->owner) }}" required>
            </div>

            <div class="edit-form-group">
                <label for="lot">Allotted Parking Number:</label>
                <input type="text" id="lot" name="lot" value="{{ old('lot', $car->lot) }}" required>
            </div>

            <div class="edit-form-group">
                <label for="make">Make:</label>
                <input type="text" id="make" name="make" value="{{ old('make', $car->make) }}" required>
            </div>

            <div class="edit-form-group">
                <label for="model">Model:</label>
                <input type="text" id="model" name="model" value="{{ old('model', $car->model) }}" required>
            </div>

            <div class="edit-form-group">
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" value="{{ old('year', $car->year) }}" required>
            </div>

            <div class="edit-form-group">
                <label for="registration">Registration Number:</label>
                <input type="text" id="registration" name="registration" value="{{ old('registration', $car->registration) }}" required>
            </div>

            <div class="form-actions">
                <button type="submit">Save Changes</button>
            </div>
        </form>
    </div>
</x-layout>
