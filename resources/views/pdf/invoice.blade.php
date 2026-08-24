<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice - {{ $booking->booking_reference }}</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
            line-height: 1.5;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
        }

        .header-table,
        .details-table {
            width: 100%;
            border-collapse: collapse;
        }

        .header-table td {
            vertical-align: top;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            color: #1a202c;
        }

        .heading {
            background: #f4f4f5;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
        }

        .heading td,
        .item td {
            padding: 10px;
            text-align: left;
        }

        .item {
            border-bottom: 1px solid #eee;
        }

        .total-row td {
            padding: 8px 10px;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table class="header-table">
            <tr>
                <td>
                    <div class="company-title" style="display: flex; align-items: center; gap: 10px;">
                        <img src="{{ public_path('storage/' . ($settings?->favicon ?? '')) }}"
                            style="width: 50px; height: auto; display: inline-block; vertical-align: middle;"
                            alt="{{ $settings?->site_name ?? 'Logo' }}" />
                        <span
                            style="font-size: 40px; font-weight: bold; display: inline-block; vertical-align: middle;">{{ $settings?->site_name ?? 'Logo' }}</span>
                    </div>
                    <p>{{ $settings->address_line ?? '' }}<br>Phone: {{ $settings->phone_primary ?? '' }}</p>
                </td>
                <td style="text-align: right;">
                    <h3>INVOICE</h3>
                    <p><b>Ref:</b> {{ $booking->booking_reference }}<br>
                        <b>Date:</b> {{ now()->format('d M, Y') }}
                    </p>
                </td>
            </tr>
        </table>

        <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">

        <table class="header-table">
            <tr>
                <td>
                    <b>Billed To:</b><br>
                    {{ $booking->client?->name }}<br>
                    {{ $booking->client?->phone }}
                </td>
            </tr>
        </table>

        <br>

        <table class="details-table">
            <tr class="heading">
                <td>Service Description</td>
                <td style="text-align: right;">Amount</td>
            </tr>
            <tr class="item">
                <td>{{ ucfirst($booking->service_type ?? 'Travel Service') }} Booking</td>
                <td style="text-align: right;">{{ number_format($booking->selling_price, 2) }} BDT</td>
            </tr>
            <tr class="total-row">
                <td>Total Amount:</td>
                <td>{{ number_format($booking->selling_price, 2) }} BDT</td>
            </tr>
            <tr class="total-row" style="color: green;">
                <td>Paid Amount:</td>
                <td>{{ number_format($totalPaid, 2) }} BDT</td>
            </tr>
            <tr class="total-row" style="color: red;">
                <td>Due Amount:</td>
                <td>{{ number_format($due, 2) }} BDT</td>
            </tr>
        </table>
    </div>
</body>

</html>
