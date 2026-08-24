<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Encoding" content="IE=edge">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 12px;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .header {
            width: 100%;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .header table {
            width: 100%;
        }

        .company-title {
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            color: #1a202c;
        }

        .statement-title {
            font-size: 16px;
            font-weight: bold;
            text-align: right;
            color: #4a5568;
        }

        .meta-section {
            width: 100%;
            margin-bottom: 20px;
        }

        .meta-section table {
            width: 100%;
        }

        .info-box {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 10px;
            border-radius: 4px;
        }

        .date-range-badge {
            display: inline-block;
            background-color: #edf2f7;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: bold;
            color: #2d3748;
        }

        .records-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .records-table th {
            background-color: #2d3748;
            color: #ffffff;
            text-align: left;
            padding: 8px;
            font-size: 11px;
            text-transform: uppercase;
        }

        .records-table td {
            border-bottom: 1px solid #e2e8f0;
            padding: 8px;
            font-size: 11px;
        }

        .records-table tr:nth-child(even) {
            background-color: #f7fafc;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .summary-section {
            width: 100%;
            margin-top: 10px;
        }

        .summary-table {
            width: 40%;
            float: right;
            border-collapse: collapse;
        }

        .summary-table td {
            padding: 6px 8px;
            border-bottom: 1px solid #e2e8f0;
        }

        .summary-table .total-row td {
            font-weight: bold;
            border-top: 2px solid #2d3748;
            border-bottom: 2px solid #2d3748;
            background-color: #f7fafc;
        }

        .clear {
            clear: both;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 10px;
            color: #a0aec0;
            border-top: 1px solid #e2e8f0;
            padding-top: 10px;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <div class="header">
        <table>
            <tr>
                <td>
                    <div class="company-title" style="display: flex; align-items: center; gap: 10px;">
                        <img src="{{ public_path('storage/' . ($settings?->favicon ?? '')) }}"
                            style="width: 50px; height: auto; display: inline-block; vertical-align: middle;"
                            alt="{{ $settings?->site_name ?? 'Logo' }}" />
                        <span
                            style="font-size: 40px; font-weight: bold; display: inline-block; vertical-align: middle;">{{ $settings?->site_name ?? 'Logo' }}</span>
                    </div>
                    <div>
                        <p>{{ $settings->address_line ?? '' }} <br> Phone: {{ $settings->phone_primary ?? '' }}</p>
                    </div>
                </td>
                <td class="text-right">
                    <div class="statement-title">{{ $title }}</div>
                    <div>Generated: {{ now()->format('d M, Y h:i A') }}</div>
                </td>
            </tr>
        </table>
    </div>

    <!-- Metadata Section (Entity Info & Date Range) -->
    <div class="meta-section">
        <table>
            <tr>
                <td width="55%" style="vertical-align: top;">
                    <div class="info-box">
                        <strong>Statement For:</strong><br>
                        <span style="font-size: 14px; font-weight: bold;">
                            {{ $entity->name ?? $entity->company_name }}
                        </span><br>
                        Phone: {{ $entity->phone ?? 'N/A' }}<br>
                        @if (!empty($entity->email))
                            Email: {{ $entity->email }}<br>
                        @endif
                        @if (!empty($entity->address))
                            Address: {{ $entity->address }}
                        @endif
                    </div>
                </td>
                <td width="5%"></td>
                <td width="40%" style="vertical-align: top;">
                    <div class="info-box text-right">
                        <strong>Filter Period:</strong><br>
                        @if (!empty($start_date) && !empty($end_date))
                            <span class="date-range-badge">
                                {{ \Carbon\Carbon::parse($start_date)->format('d M, Y') }}
                                &nbsp;to&nbsp;
                                {{ \Carbon\Carbon::parse($end_date)->format('d M, Y') }}
                            </span>
                        @else
                            <span class="date-range-badge">All Time Statement</span>
                        @endif
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- Ledger Table -->
    <table class="records-table">
        <thead>
            <tr>
                <th width="15%">Date</th>
                <th width="20%">Ref / Trx ID</th>
                <th width="35%">Particulars / Description</th>
                <th width="15%" class="text-right">Debit (BDT)</th>
                <th width="15%" class="text-right">Credit (BDT)</th>
            </tr>
        </thead>
        <tbody>
            @forelse($records as $record)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($record['date'])->format('d/m/Y') }}</td>
                    <td>{{ $record['ref'] }}</td>
                    <td>{{ $record['note'] }}</td>
                    <td class="text-right">
                        {{ $record['debit'] > 0 ? number_format($record['debit'], 2) : '-' }}
                    </td>
                    <td class="text-right">
                        {{ $record['credit'] > 0 ? number_format($record['credit'], 2) : '-' }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center" style="padding: 15px; color: #a0aec0;">
                        No transaction or booking found in the selected date range.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Summary Section -->
    <div class="summary-section">
        <table class="summary-table">
            <tr>
                <td><strong>Total Billed / Cost:</strong></td>
                <td class="text-right">{{ number_format($total_billed, 2) }} BDT</td>
            </tr>
            <tr>
                <td><strong>Total Paid:</strong></td>
                <td class="text-right" style="color: #2b6cb0;">{{ number_format($total_paid, 2) }} BDT</td>
            </tr>
            <tr class="total-row">
                <td><strong>Net Balance / Due:</strong></td>
                <td class="text-right" style="color: {{ $due_amount > 0 ? '#c53030' : '#2f855a' }};">
                    {{ number_format($due_amount, 2) }} BDT
                </td>
            </tr>
        </table>
        <div class="clear"></div>
    </div>

    <!-- Footer -->
    <div class="footer">
        This is a computer-generated statement and does not require a physical signature.
    </div>

</body>

</html>
