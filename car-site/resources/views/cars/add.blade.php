<x-layout title="Add a new car">
    <h1 style="text-align: center; font-size: 24px; margin-bottom: 20px;">Add a New Car</h1>

    <div class="form-container">
        <form method="POST" action="/cars">
            @csrf
            <div>
                <label for="owner">Owner:</label>
                <input type="text" id="owner" name="owner" placeholder="Enter employee name" />
            </div>
            <div>
                <label for="lot">Allotted Parking Number:</label>
                <input type="text" id="lot" name="lot" placeholder="Enter allotted Parking Number" />
            </div>
            <div>
                <label for="make">Make:</label>
                <input type="text" id="make" name="make" placeholder="Enter car make" />
            </div>
            <div>
                <label for="model">Model:</label>
                <input type="text" id="model" name="model" placeholder="Enter car model" />
            </div>
            <div>
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" placeholder="Enter car year" />
            </div>
            <div>
                <label for="registration">Registration number:</label>
                <input type="text" id="registration" name="registration" placeholder="Enter car registration" />
            </div>

            <div>
                <button type="submit">Add the Car</button>
            </div>
        </form>
    </div>
</x-layout>
