<div class="tracking-card bg-white w-full shadow-2xl shadow-red-100 rounded-md px-10 pb-10 pt-5">
    <div class="relative isolate">
        <p class="md:text-3xl text-lg text-red-700 font-bold mb-4">
            Retrieve Your Passport here
        </p>
        <label for="reference_number" class="font-medium text-gray-700">Reference Number</label>

        <form class="flex flex-col md:flex-row gap-4 mt-2" onsubmit="return false;" action="">
            <!-- Input -->
            <div class="input-group flex flex-col w-full md:w-5/6">
                <input class="w-full border border-red-950 bg-red-50 rounded-md px-4 py-3 outline-red-900" type="text" id="reference_number"
                    name="reference_number" placeholder="Enter Your Reference Number" />
            </div>

            <!-- Button -->
            <div class="input-group md:w-1/6">
                <input onclick="openModal()"
                    class="w-full h-full border rounded-md bg-red-600 px-3 py-2 text-white text-xl font-bold cursor-pointer hover:bg-red-900 transition"
                    type="button" value="Track" />
            </div>
        </form>
    </div>
</div>