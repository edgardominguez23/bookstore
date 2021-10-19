<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Support\Facades\DB;

class BookChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $book = DB::select('select * from books order by sold desc limit 10');

        return Chartisan::build()
            ->labels([$book[0]->title, $book[1]->title, $book[2]->title, $book[3]->title, $book[4]->title, $book[5]->title, $book[6]->title, $book[7]->title, $book[8]->title, $book[9]->title])
            ->dataset('Sample', [$book[0]->sold, $book[1]->sold, $book[2]->sold,$book[3]->sold, $book[4]->sold, $book[5]->sold,  $book[6]->sold, $book[7]->sold,$book[8]->sold, $book[9]->sold]);
    }
}