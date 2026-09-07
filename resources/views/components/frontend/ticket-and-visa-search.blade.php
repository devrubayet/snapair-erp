<section class="w-full bg-gray-100 py-12 px-4 min-h-screen">
    <div class="max-w-6xl mx-auto">
        <!-- Main Form Container -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 sm:p-8 relative mt-8">

            <!-- Top Floating Tabs -->
            <div id="top-tabs"
                class="absolute -top-7 left-1/2 -translate-x-1/2 bg-white rounded-2xl shadow-lg border border-gray-100 px-3 py-2 flex items-center space-x-1 sm:space-x-4 z-20 max-w-[95%] overflow-x-auto">
                <button type="button" data-tab="flights"
                    class="tab-btn flex flex-col items-center text-gray-500 hover:text-red-600 font-medium text-xs py-1.5 px-3 hover:bg-gray-50 rounded-xl transition-all whitespace-nowrap">
                    <svg class="w-5 h-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                    Flights
                </button>
                <button type="button" data-tab="holidays"
                    class="tab-btn flex flex-col items-center text-gray-500 hover:text-red-600 font-medium text-xs py-1.5 px-3 hover:bg-gray-50 rounded-xl transition-all whitespace-nowrap">
                    <svg class="w-5 h-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.5a2.5 2.5 0 002.5-2.5V8.065" />
                    </svg>
                    Holidays
                </button>
                <button type="button" data-tab="visa"
                    class="tab-btn flex flex-col items-center text-gray-500 hover:text-red-600 font-medium text-xs py-1.5 px-3 hover:bg-gray-50 rounded-xl transition-all whitespace-nowrap">
                    <svg class="w-5 h-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Visa
                </button>
                <!-- Default Active Tab: Xclusive Fares -->
                <button type="button" data-tab="xclusive"
                    class="tab-btn active flex flex-col items-center text-red-600 font-semibold text-xs py-1.5 px-3 bg-red-50 rounded-xl transition-all whitespace-nowrap">
                    <svg class="w-5 h-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    Xclusive Fares
                </button>
                <button type="button" data-tab="umrah"
                    class="tab-btn flex flex-col items-center text-gray-500 hover:text-red-600 font-medium text-xs py-1.5 px-3 hover:bg-gray-50 rounded-xl transition-all whitespace-nowrap">
                    <svg class="w-5 h-5 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Umrah
                </button>
            </div>

            <!-- Default Search Form View (Hidden on initial load) -->
            <div id="search-form-view" class="pt-4 hidden">
                <form id="flight-search-form">
                    <!-- Radio Options -->
                    <div class="flex flex-wrap items-center gap-6 text-sm font-medium text-gray-700 mb-6">
                        <label class="flex items-center space-x-2 cursor-pointer select-none">
                            <input type="radio" name="trip_type" value="one_way" checked
                                class="accent-red-600 w-4 h-4 cursor-pointer">
                            <span class="radio-label text-red-600 font-semibold">One Way</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer select-none">
                            <input type="radio" name="trip_type" value="round_trip"
                                class="accent-red-600 w-4 h-4 cursor-pointer">
                            <span class="radio-label">Round Trip</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer select-none">
                            <input type="radio" name="trip_type" value="multi_city"
                                class="accent-red-600 w-4 h-4 cursor-pointer">
                            <span class="radio-label">Multi City</span>
                        </label>
                    </div>

                    <!-- Main Search Inputs Grid -->
                    <div
                        class="grid grid-cols-1 lg:grid-cols-12 border border-gray-200 rounded-2xl overflow-hidden mb-6 bg-white divide-y lg:divide-y-0 lg:divide-x divide-gray-200 shadow-sm">
                        <!-- From & To Section -->
                        <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 relative p-4 bg-white">
                            <div class="pr-0 sm:pr-4 rounded-xl p-2 transition-colors hover:bg-gray-50">
                                <label
                                    class="text-xs text-gray-400 font-medium block mb-0.5 cursor-pointer">From</label>
                                <input type="text" id="from-city" value="Dhaka - DAC"
                                    class="font-bold text-gray-900 text-base leading-snug w-full bg-transparent focus:outline-none border-b border-transparent focus:border-red-500">
                                <input type="text" id="from-airport" value="Hazrat Shahjalal Intl Airport"
                                    class="text-xs text-gray-500 truncate block w-full bg-transparent focus:outline-none">
                            </div>

                            <button type="button" id="swap-btn"
                                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-white border border-gray-200 rounded-full flex items-center justify-center text-gray-600 shadow-md hover:border-red-600 hover:text-red-600 hover:rotate-180 transition-all z-10 my-auto">
                                ⇄
                            </button>

                            <div class="pl-0 sm:pl-6 pt-3 sm:pt-0 rounded-xl p-2 transition-colors hover:bg-gray-50">
                                <label class="text-xs text-gray-400 font-medium block mb-0.5 cursor-pointer">To</label>
                                <input type="text" id="to-city" placeholder="Enter airport or city"
                                    value="Cox's Bazar - CXB"
                                    class="font-semibold text-gray-800 placeholder-gray-400 text-base leading-snug w-full bg-transparent focus:outline-none border-b border-transparent focus:border-red-500">
                                <input type="text" id="to-airport" placeholder="Tap to add Destination"
                                    value="Cox's Bazar Airport"
                                    class="text-xs text-gray-500 block w-full bg-transparent focus:outline-none">
                            </div>
                        </div>

                        <!-- Departure & Return -->
                        <div class="lg:col-span-4 grid grid-cols-2 p-4 bg-white divide-x divide-gray-100">
                            <div class="pr-3 rounded-xl p-2 transition-colors hover:bg-gray-50">
                                <label
                                    class="text-xs text-gray-400 font-medium block mb-0.5 cursor-pointer">Departure</label>
                                <input type="date" id="departure-date"
                                    class="font-bold text-gray-900 text-sm bg-transparent focus:outline-none w-full cursor-pointer">
                            </div>
                            <div id="return-box"
                                class="pl-3 rounded-xl p-2 transition-colors hover:bg-gray-50 opacity-50">
                                <label
                                    class="text-xs text-gray-400 font-medium block mb-0.5 cursor-pointer">Return</label>
                                <input type="date" id="return-date" disabled
                                    class="font-bold text-gray-900 text-sm bg-transparent focus:outline-none w-full cursor-not-allowed">
                            </div>
                        </div>

                        <!-- Traveller & Class -->
                        <div class="lg:col-span-3 p-4 bg-white rounded-xl transition-colors hover:bg-gray-50">
                            <label class="text-xs text-gray-400 font-medium block mb-0.5">Traveller & Class</label>
                            <select id="passenger-count"
                                class="font-bold text-gray-900 text-sm bg-transparent focus:outline-none w-full cursor-pointer">
                                <option value="1">1 Person</option>
                                <option value="2">2 Persons</option>
                            </select>
                            <select id="cabin-class"
                                class="text-xs text-gray-500 block w-full bg-transparent focus:outline-none cursor-pointer mt-1">
                                <option value="Economy">Economy</option>
                                <option value="Business">Business</option>
                            </select>
                        </div>
                    </div>

                    <!-- Bottom Filter Row -->
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                        <div class="w-full md:w-1/2">
                            <label class="text-xs font-semibold text-gray-600 block mb-1">Preferred Airlines</label>
                            <input type="text" id="preferred-airlines" placeholder="Example: TK, VQ, BG"
                                class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500/20 focus:border-red-500 transition-all">
                        </div>

                        <div>
                            <label class="text-xs font-semibold text-gray-600 block mb-1">Select Fare Type</label>
                            <div id="fare-types" class="inline-flex space-x-2">
                                <button type="button" data-fare="regular"
                                    class="fare-btn active px-5 py-2 rounded-xl text-xs font-semibold border border-red-600 text-red-600 bg-red-50/50 transition-colors">
                                    Regular Fares
                                </button>
                                <button type="button" data-fare="student"
                                    class="fare-btn px-5 py-2 rounded-xl text-xs font-semibold border border-gray-200 text-gray-600 hover:border-gray-300 hover:bg-gray-50 transition-colors">
                                    Student Fares
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 z-10">
                        <button type="submit"
                            class="px-10 py-3.5 bg-red-600 hover:bg-red-700 active:bg-red-800 text-white font-bold text-base rounded-full shadow-lg hover:shadow-xl transition-all inline-flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <!-- Xclusive Fares View (Visible by default) -->
            <div id="xclusive-fares-view" class="pt-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Xclusive Fares</h2>
                <div id="fares-container"
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 p-4 w-full">
                    <!-- Dynamic cards will land here -->
                    <p class="text-gray-400 col-span-full text-center py-6">Loading fares...</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    // Global Blade variables definition
    const BASE_URL = "{{ asset('') }}";
    const FAVICON_PATH = "{{ !empty($settings->favicon) ? asset('storage/' . ltrim($settings->favicon, '/')) : '' }}";

    document.addEventListener('DOMContentLoaded', () => {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const searchFormView = document.getElementById('search-form-view');
        const xclusiveFaresView = document.getElementById('xclusive-fares-view');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // 1. Reset Active States for Tabs
                tabButtons.forEach(b => {
                    b.classList.remove('text-red-600', 'bg-red-50', 'font-semibold',
                        'active');
                    b.classList.add('text-gray-500', 'font-medium');
                });

                // 2. Set Selected Tab Active
                btn.classList.remove('text-gray-500', 'font-medium');
                btn.classList.add('text-red-600', 'bg-red-50', 'font-semibold', 'active');

                // 3. Toggle View Content
                const tabName = btn.getAttribute('data-tab');
                if (tabName === 'xclusive') {
                    searchFormView.classList.add('hidden');
                    xclusiveFaresView.classList.remove('hidden');
                } else {
                    xclusiveFaresView.classList.add('hidden');
                    searchFormView.classList.remove('hidden');
                }
            });
        });

        // Fetch fares on load
        fetchFares();
    });

    function fetchFares() {
        fetch("{{ route('xclusive.fares') }}", {
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "Accept": "application/json"
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                const container = document.getElementById('fares-container');
                container.innerHTML = ''; // Clear loading text

                if (!data || data.length === 0) {
                    container.innerHTML = `
                <div class="col-span-full flex flex-col items-center justify-center py-8 text-center w-full">
                    <lottie-player 
                        src="{{ asset('img/flight_not_found.json') }}" 
                        background="transparent" 
                        speed="1" 
                        style="width: 250px; height: 250px;" 
                        loop 
                        autoplay>
                    </lottie-player>
                    <p class="text-gray-500 font-medium -mt-2">No fares available right now.</p>
                </div>
            `;
                    return;
                }

                let cardsHTML = '';
                data.forEach(fare => {
                    cardsHTML += createTicketCard(fare);
                });

                container.innerHTML = cardsHTML;
            })
            .catch(error => {
                console.error('Error fetching fares:', error);
                document.getElementById('fares-container').innerHTML =
                    '<p class="text-red-500 col-span-full text-center py-6">Failed to load fares. Please try again later.</p>';
            });
    }

    function formatTime(timeString) {
        if (!timeString) return '';
        if (timeString.includes('AM') || timeString.includes('PM')) return timeString;

        const parts = timeString.split(':');
        if (parts.length < 2) return timeString;

        let hours = parseInt(parts[0], 10);
        const minutes = parts[1];
        const ampm = hours >= 12 ? 'PM' : 'AM';

        hours = hours % 12;
        hours = hours ? hours : 12;
        const formattedHours = hours < 10 ? '0' + hours : hours;

        return `${formattedHours}:${minutes} ${ampm}`;
    }

    function createTicketCard(fare) {
        const airlineName = fare.airline ? (fare.airline.name || 'Airline') : 'Airline';

        // Get image path safely
        const logoPath = fare.airline ? (fare.airline.logo || fare.airline.image || '') : '';

        // Format storage URL correctly
        let logoUrl = '';
        if (logoPath) {
            const cleanPath = logoPath.startsWith('/') ? logoPath.substring(1) : logoPath;
            const finalPath = cleanPath.startsWith('storage/') ? cleanPath : `storage/${cleanPath}`;
            logoUrl = `${BASE_URL}${finalPath}`;
        }

        const departureDate = fare.departure_date ?
            new Date(fare.departure_date).toLocaleDateString('en-GB', {
                day: '2-digit',
                month: 'short',
                year: 'numeric'
            }) : '';

        const arrivalDate = fare.arrival_date ?
            new Date(fare.arrival_date).toLocaleDateString('en-GB', {
                day: '2-digit',
                month: 'short',
                year: 'numeric'
            }) : '';

        const departureTimeFormatted = formatTime(fare.departure_time);
        const arrivalTimeFormatted = formatTime(fare.arrival_time);

        return `
    <div class="w-full flex justify-center p-2 [perspective:1000px]">
        <!-- Main Card Container -->
        <div class="group relative min-h-[160px] h-auto w-full max-w-[420px] sm:max-w-[480px] flex text-[#2d2d2d] bg-white rounded-2xl transition-all duration-300 ease-[cubic-bezier(0.175,0.885,0.32,1.25)] z-10 overflow-hidden box-border hover:-translate-y-2.5 [animation:animation-card_10s_infinite] hover:[animation-play-state:paused]">
            
            <!-- Left Barcode/SVG (Fixed: Visible on both Desktop & Mobile) -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 150" fill="black" class="block shrink-0 z-[2] w-[45px] sm:w-[60px] h-auto">
                <path d="M44 138V136.967H20V138H44Z"></path>
                <path d="M44 13.0328V12H20V13.0328H44Z"></path>
                <path d="M44 14.0656V13.5492H20V14.0656H44Z"></path>
                <path d="M44 15.6148V15.0984H20V15.6148H44Z"></path>
                <path d="M44 18.1967V17.6803H20V18.1967H44Z"></path>
                <path d="M44 20.2623V19.2295H20V20.2623H44Z"></path>
                <path d="M44 22.8443V22.3279H20V22.8443H44Z"></path>
                <path d="M44 23.877V23.3607H20V23.877H44Z"></path>
                <path d="M44 26.9754V24.9098H20V26.9754H44Z"></path>
                <path d="M44 28.0082V27.4918H20V28.0082H44Z"></path>
                <path d="M44 29.5574V29.041H20V29.5574H44Z"></path>
                <path d="M44 32.6557V30.5902H20V32.6557H44Z"></path>
                <path d="M44 33.6885V33.1721H20V33.6885H44Z"></path>
                <path d="M44 35.2376V34.7213H20V35.2376H44Z"></path>
                <path d="M44 36.2705V35.7541H20V36.2705H44Z"></path>
                <path d="M44 39.3689V37.3033H20V39.3689H44Z"></path>
                <path d="M44 40.918V40.4015H20V40.918H44Z"></path>
                <path d="M44 43.5001V41.4345H20V43.5001H44Z"></path>
                <path d="M44 45.0492V44.5327H20V45.0492H44Z"></path>
                <path d="M44 47.631V46.0819H20V47.631H44Z"></path>
                <path d="M44 49.1804V48.664H20V49.1804H44Z"></path>
                <path d="M44 51.2458V50.2131H20V51.2458H44Z"></path>
                <path d="M44 52.2787V51.7622H20V52.2787H44Z"></path>
                <path d="M44 54.3443V52.7952H20V54.3443H44Z"></path>
                <path d="M44 56.4099V55.377H20V56.4099H44Z"></path>
                <path d="M44 57.959V57.4426H20V57.959H44Z"></path>
                <path d="M44 60.0247V58.4753H20V60.0247H44Z"></path>
                <path d="M44 62.09V61.0573H20V62.09H44Z"></path>
                <path d="M44 63.6394V63.123H20V63.6394H44Z"></path>
                <path d="M44 66.7377V64.6721H20V66.7377H44Z"></path>
                <path d="M44 68.2868V67.7704H20V68.2868H44Z"></path>
                <path d="M44 69.3198V68.8033H20V69.3198H44Z"></path>
                <path d="M44 72.4181V71.3851H20V72.4181H44Z"></path>
                <path d="M44 73.4508V72.9345H20V73.4508H44Z"></path>
                <path d="M44 76.5493V74.4837H20V76.5493H44Z"></path>
                <path d="M44 77.5819V77.0655H20V77.5819H44Z"></path>
                <path d="M44 79.1311V78.6146H20V79.1311H44Z"></path>
                <path d="M44 80.6802V80.164H20V80.6802H44Z"></path>
                <path d="M44 82.2294V81.1967H20V82.2294H44Z"></path>
                <path d="M44 83.7788V83.2623H20V83.7788H44Z"></path>
                <path d="M44 86.3606V85.8441H20V86.3606H44Z"></path>
                <path d="M44 87.9097V87.3935H20V87.9097H44Z"></path>
                <path d="M44 91.0083V88.9427H20V91.0083H44Z"></path>
                <path d="M44 92.041V91.5245H20V92.041H44Z"></path>
                <path d="M44 94.623V92.5574H20V94.623H44Z"></path>
                <path d="M44 96.1722V95.6557H20V96.1722H44Z"></path>
                <path d="M44 97.7213V97.2048H20V97.7213H44Z"></path>
                <path d="M44 99.2704V98.2378H20V99.2704H44Z"></path>
                <path d="M44 100.82V100.303H20V100.82H44Z"></path>
                <path d="M44 103.402V102.885H20V103.402H44Z"></path>
                <path d="M44 105.467V104.434H20V105.467H44Z"></path>
                <path d="M44 108.049V106.5H20V108.049H44Z"></path>
                <path d="M44 109.082V108.566H20V109.082H44Z"></path>
                <path d="M44 112.18V111.148H20V112.18H44Z"></path>
                <path d="M44 113.213V112.697H20V113.213H44Z"></path>
                <path d="M44 114.762V114.246H20V114.762H44Z"></path>
                <path d="M44 118.377V116.311H20V118.377H44Z"></path>
                <path d="M44 119.41V118.893H20V119.41H44Z"></path>
                <path d="M44 120.442V119.926H20V120.442H44Z"></path>
                <path d="M44 122.508V120.959H20V122.508H44Z"></path>
                <path d="M44 124.574V123.541H20V124.574H44Z"></path>
                <path d="M44 127.672V125.607H20V127.672H44Z"></path>
                <path d="M44 128.705V128.188H20V128.705H44Z"></path>
                <path d="M44 130.254V129.738H20V130.254H44Z"></path>
                <path d="M44 132.32V131.287H20V132.32H44Z"></path>
                <path d="M44 135.418V133.869H20V135.418H44Z"></path>
                <path d="M44 136.451V135.934H20V136.451H44Z"></path>
            </svg>

            <!-- Separator with Circles -->
            <div class="relative w-3 sm:w-4 h-full flex flex-col items-center justify-center z-10 shrink-0">
                <span class="relative flex h-full border-l-2 border-dashed border-[#e8e8e8] 
                    after:content-[''] after:absolute after:-top-2 after:left-1/2 after:-translate-x-1/2 after:w-3.5 after:h-3.5 sm:after:w-4 sm:after:h-4 after:rounded-full after:bg-gray-100 
                    before:content-[''] before:absolute before:-bottom-2 before:left-1/2 before:-translate-x-1/2 before:w-3.5 before:h-3.5 sm:before:w-4 sm:before:h-4 before:rounded-full before:bg-gray-100">
                </span>
            </div>

            <!-- Content Area + Shimmer overlays -->
            <div class="relative flex justify-between w-full h-full flex-grow min-w-0 
                after:content-[''] after:absolute after:top-0 after:right-0 after:bg-gradient-to-r after:from-transparent after:to-black/15 after:translate-x-[250px] after:scale-150 after:blur-[10px] after:w-[250px] after:h-full after:pointer-events-none after:[animation:shadow-card_10s_infinite] group-hover:after:[animation-play-state:paused]
                before:content-[''] before:absolute before:top-0 before:-left-[100px] before:bg-gradient-to-r before:from-transparent before:via-white/80 before:to-transparent before:-translate-x-[100px] before:scale-150 before:rotate-[20deg] before:w-[80px] before:h-full before:pointer-events-none before:z-10 before:[animation:light-card_10s_infinite] group-hover:before:[animation-play-state:paused]">
                
                <div class="flex flex-col justify-between w-full p-2.5 sm:p-3 pl-1.5 sm:pl-2 gap-1.5 min-w-0">
                    <!-- Destination Row -->
                    <div class="flex items-center justify-between w-full gap-1">
                        <div class="flex flex-col min-w-0">
                            <p class="text-[9px] sm:text-[10px] leading-tight text-[#aeaeae] truncate">${departureDate}</p>
                            <p class="font-bold text-xs sm:text-sm text-[#2d2d2d] leading-tight">${fare.origin_code || ''}</p>
                            <p class="text-[9px] sm:text-[10px] leading-[11px] flex items-center gap-0.5 text-[#2d2d2d]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 1024 1024" class="shrink-0">
                                    <path fill="currentColor" d="M768 256H353.6a32 32 0 1 1 0-64H800a32 32 0 0 1 32 32v448a32 32 0 0 1-64 0z"></path>
                                    <path fill="currentColor" d="M777.344 201.344a32 32 0 0 1 45.312 45.312l-544 544a32 32 0 0 1-45.312-45.312z"></path>
                                </svg>
                                <span class="truncate">${departureTimeFormatted}</span>
                            </p>
                        </div>
                        
                        <div class="flex flex-col items-center shrink-0 px-1">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="none" stroke="#aeaeae" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m18 8l4 4l-4 4M2 12h20"></path>
                            </svg>
                        </div>

                        <div class="flex flex-col text-right min-w-0">
                            <p class="text-[9px] sm:text-[10px] leading-tight text-[#aeaeae] truncate">${arrivalDate}</p>
                            <p class="font-bold text-xs sm:text-sm text-[#2d2d2d] leading-tight">${fare.destination_code || ''}</p>
                            <p class="text-[9px] sm:text-[10px] leading-[11px] flex items-center justify-end gap-0.5 text-[#2d2d2d]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 1024 1024" class="shrink-0">
                                    <path fill="currentColor" d="M352 768a32 32 0 1 0 0 64h448a32 32 0 0 0 32-32V352a32 32 0 0 0-64 0v416z"></path>
                                    <path fill="currentColor" d="M777.344 822.656a32 32 0 0 0 45.312-45.312l-544-544a32 32 0 0 0-45.312 45.312z"></path>
                                </svg>
                                <span class="truncate">${arrivalTimeFormatted}</span>
                            </p>
                        </div>
                    </div>

                    <div class="w-full border-b border-[#e8e8e8] my-0.5"></div>

                    <!-- Details Row -->
                    <div class="w-full flex flex-col gap-1.5">
                        <div class="w-full flex justify-between gap-1">
                            <div class="text-[10px] sm:text-xs leading-3 min-w-0">
                                <p class="text-[#aeaeae] text-[9px] sm:text-[10px]">Transit</p>
                                <p class="font-semibold text-[#212121] truncate">${fare.stops > 0 ? fare.stops + ' Stop' : 'Non Stop'}</p>
                            </div>
                            <div class="text-[10px] sm:text-xs leading-3 text-right min-w-0">
                                <p class="text-[#aeaeae] text-[9px] sm:text-[10px]">Duration</p>
                                <p class="font-semibold text-[#212121] truncate">${fare.duration ? fare.duration + ' hrs' : 'N/A'}</p>
                            </div>
                        </div>
                        <div class="w-full flex justify-between gap-1">
                            <div class="text-[10px] sm:text-xs leading-3 min-w-0">
                                <p class="text-[#aeaeae] text-[9px] sm:text-[10px]">Price</p>
                                <p class="font-bold text-emerald-600 truncate">${fare.currency || 'USD'} ${fare.price || 0}</p>
                            </div>
                            <div class="text-[10px] sm:text-xs leading-3 text-right min-w-0">
                                <p class="text-[#aeaeae] text-[9px] sm:text-[10px]">Seat left</p>
                                <p class="font-semibold text-[#212121] truncate">${fare.available_seats || 0}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Animated Color Icon Strip -->
                <div class="w-10 sm:w-12 p-2 sm:p-3 flex flex-col items-center justify-between shrink-0 z-[2] [animation:color-card_10s_infinite] group-hover:[animation-play-state:paused]">
                    <div class="w-6 h-6 sm:w-7 sm:h-7 flex items-center justify-center overflow-hidden text-white">
                        ${logoUrl ? `<img src="${logoUrl}" alt="${airlineName}" class="max-w-full max-h-full object-contain"/>` : ''}
                    </div>
                    <div class="w-4 h-4 sm:w-5 sm:h-5 flex items-center justify-center overflow-hidden text-white">
                        ${FAVICON_PATH ? `<img src="${FAVICON_PATH}" alt="Favicon" class="max-w-full max-h-full object-contain">` : ''}
                    </div>
                </div>

            </div>
        </div>
    </div>`;
    }
</script>
