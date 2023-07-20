<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQ;

class FAQseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faqs = [
            [
                'question' => 'What is the RFF real Funded Account?',
                'answer' => 'Once a trader receives the account we will connect them to our live broker and provide them with login details to a real 500$ to $10,000 trading account. No matter what, rest assured that any profits generated on the account will be paid out by us.'
            ],
            [
                'question' => 'How can I request my profits?',
                'answer' => 'Simply fill out the payout request form by going to official email support@realforexfunds.com and provide your perfect money account.'
            ],
            [
                'question' => 'Do I need a license to trade on a funded account?',
                'answer' => 'A license is not required for working with us.'
            ],
            [
                'question' => 'Can I trade from anywhere in the world irrespective of my nationality?',
                'answer' => 'We accept investors and traders from all over the world but we cannot accept customers from the United States (US). We are looking for traders and investors around the world who are at least 2 years. If you know how to trade, invest & proficiently and apply strict risk management, that is all we are looking for, if yous not an issue either. There is no other qualification required in order to get an instant funded account.'
            ],
            [
                'question' => 'Do you offer Leverage?',
                'answer' => 'Yes, we offer leverage to all our customers on all products ranging up to 1:100 for Major pairs on our Premium challenge accounts, much higher than all of our competitors.'
            ],
            [
                'question' => 'Do you offer Islamic accounts?',
                'answer' => 'Of course, these are priced slightly higher to take into account the swap fee features.'
            ],
            [
                'question' => 'How much percentage of profit can I keep?',
                'answer' => 'Every 30 days, the trader will receive a payout equivalent to 52%/26% of all the profits generated on the trading account.'
            ],
            [
                'question' => 'Who can be a Funded Trader?',
                'answer' => 'Anyone whose age is 18 or more can become a Funded Trader.'
            ],
            [
                'question' => 'Can I trade news?',
                'answer' => 'Yes, you can trade news.'
            ],
            [
                'question' => 'Do I need to close all my positions overnight or weekends?',
                'answer' => 'All traders must close their positions before the markets close for the weekend. If you don’t close your positions, we will suspend the account.'
            ],
            [
                'question' => 'Are there any monthly fees?',
                'answer' => 'There are no monthly fees on the Experienced & Advanced Trader programs. The program fee is a one-off charge.'
            ],
            [
                'question' => 'Can I take hedging positions?',
                'answer' => 'Trades can be executed in both directions on the same market at the same time.'
            ],
            [
                'question' => 'Do we refund fees?',
                'answer' => 'We refund fees once traders reach their 5th withdrawal. Starting Balance, Max. Daily Loss, Max. Overall Loss, Min. Trading Days, Trading Leverage, Refundable Fees.'
            ],
        ];
        FAQ::insert($faqs);
    }
}
