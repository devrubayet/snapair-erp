<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Money Receipt - {{ $transaction->transaction_number }}</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .receipt-box {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 2px solid #333;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .details {
            margin-top: 20px;
        }

        .details table {
            width: 100%;
        }

        .amount-box {
            margin-top: 30px;
            border: 1px solid #000;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="receipt-box">
        <div class="header">
            <h1>Money Receipt</h1>
            <div class="company-title" style="display: flex; align-items: center; gap: 10px;">
                        <img src="{{ public_path('storage/' . ($settings?->favicon ?? '')) }}"
                            style="width: 50px; height: auto; display: inline-block; vertical-align: middle;"
                            alt="{{ $settings?->site_name ?? 'Logo' }}" />
                        <span
                            style="font-size: 40px; font-weight: bold; display: inline-block; vertical-align: middle;">{{ $settings?->site_name ?? 'Logo' }}</span>
                    </div>
        </div>
        <div class="details">
            <p><b>Receipt No:</b> {{ $transaction->transaction_number }}</p>
            <p><b>Date:</b> {{ $transaction->transaction_date }}</p>
            <p><b>Received From:</b> {{ $transaction->client->name }}</p>
            <p><b>Against Booking:</b> {{ $transaction->booking->booking_reference }}</p>
        </div>
        <div class="amount-box">
            Amount Received: {{ number_format($transaction->amount, 2) }} BDT
        </div>
        <br>
        <p style="text-align: right; margin-top: 50px;"><b>Authorized Signatory</b></p>
    </div>
</body>

</html>
