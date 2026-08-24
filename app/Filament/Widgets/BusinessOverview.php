<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Expense;
use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BusinessOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalSales = Booking::sum('selling_price');
        $totalVendorCost = Booking::sum('cost_price');
        $grossProfit = $totalSales - $totalVendorCost;

        // মোট অফিস খরচ
        $totalExpense = Expense::sum('amount');
        
        // নিট প্রফিট (গ্রস প্রফিট - অফিস খরচ)
        $netProfit = $grossProfit - $totalExpense;

        $totalClientPaid = Transaction::where('type', 'client_payment')->sum('amount');
        $clientDue = $totalSales - $totalClientPaid;

        return [
            Stat::make('Total Sales', number_format($totalSales, 2) . ' BDT')
                ->description('Total booked selling amount')
                ->color('primary')
                ->icon('heroicon-o-banknotes'),

            Stat::make('Net Profit', number_format($netProfit, 2) . ' BDT')
                ->description('Gross Profit - Office Expenses (' . number_format($totalExpense, 2) . ' BDT)')
                ->color($netProfit >= 0 ? 'success' : 'danger')
                ->icon('heroicon-o-arrow-trending-up'),

            Stat::make('Total Client Due', number_format($clientDue, 2) . ' BDT')
                ->description('Pending receivables from clients')
                ->color('warning')
                ->icon('heroicon-o-clock'),
        ];
    }
}