function openModal() {
    const modal = document.getElementById('modal');
    if (!modal) {
        console.error("Modal element not found!");
        return;
    }

    const referenceNumber = document.getElementById('reference_number').value.trim();
    const modalBody = document.getElementById('modalBody');
    const downloadBtn = document.getElementById('downloadBtn');

    if (!referenceNumber) {
        alert('Please enter a reference number first!');
        return;
    }

    // মডাল ওপেন করা এবং লোডিং দেখানো
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    
    if (modalBody) {
        modalBody.innerHTML = `<p class="text-center text-gray-500 py-4">Searching...</p>`;
    }
    if (downloadBtn) {
        downloadBtn.classList.add('hidden');
    }

    // ব্যাকএন্ডে রিকোয়েস্ট পাঠানো
    fetch(`/api/track-booking?reference_number=${referenceNumber}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const booking = data.booking;
                if (modalBody) {
                    modalBody.innerHTML = `
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Booking Details</h3>
                        <div class="space-y-2 text-gray-700 text-sm">
                            <p><strong>Reference:</strong> <span class="text-red-600 font-semibold">${booking.booking_reference}</span></p>
                            <p><strong>Client Name:</strong> ${booking.client ? booking.client.name : 'N/A'}</p>
                            <p><strong>Service Type:</strong> ${booking.service_type.toUpperCase()}</p>
                            <p><strong>Status:</strong> <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded font-bold">${booking.status}</span></p>
                        </div>
                    `;
                }
                // ইনভয়েস ডাউনলোড বাটন সচল করা চাইলে
                // if (downloadBtn) {
                //     downloadBtn.href = `/bookings/${booking.id}/invoice`;
                //     downloadBtn.classList.remove('hidden');
                // }
            } else {
                if (modalBody) {
                    modalBody.innerHTML = `
                        <p class="text-red-900 border font-medium border-red-950 rounded-xl p-3 bg-red-600 bg-opacity-10 text-center mb-2">
                            No Data Found
                        </p>
                    `;
                }
            }
        })
        .catch(error => {
            if (modalBody) {
                modalBody.innerHTML = `<p class="text-red-500 text-center">Something went wrong!</p>`;
            }
        });
}

function closeModal() {
    const modal = document.getElementById('modal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

window.openModal = openModal;
window.closeModal = closeModal;