<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bank;
use App\Models\Goal;
use App\Models\User;
use App\Models\Budget;
use App\Models\Report;
use App\Models\Account;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\ReportCategory;
use Illuminate\Database\Seeder;
use App\Models\IncomeTransaction;
use App\Models\ExpenseTransaction;
use App\Models\TransactionCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        $transactionCategories = ['娯楽費', '食費', '給与', 'ボーナス', '住宅費', '教育費', '交通費', '通信費', '医療費', '保険費', '貯蓄'];
        foreach ($transactionCategories as $category) {
            TransactionCategory::create([
                'name' => $category,
            ]);
        }
        Transaction::factory(100)->create();
        $reportCategories = ['収入', '支出', '貯蓄', '予算', '目標', '口座', '支払い', 'レポート', '銀行'];
        foreach ($reportCategories as $category) {
            ReportCategory::create([
                'name' => $category,
            ]);
        }
        Report::factory(10)->create();
        Budget::factory(5)->create();
        $banks = ['ユニティバンク', 'ゴールドクレスト銀行', 'ブルーサファイア銀行', 'シルバーリーフバンク', 'マジェスティックファイナンス', 'エンパイアトラスト銀行',
                  'ロイヤルガード銀行', 'ドラゴンウィングバンク', 'グリーンホライズンバンク', 'フェニックスキャピタル銀行'];
        foreach ($banks as $bank) {
            Bank::create([
                'name' => $bank,
            ]);
        }
        Account::factory(10)->create();
        $payments = ['cash', 'credit', 'debit', 'ewallet'];
        foreach ($payments as $payment) {
            Payment::create([
                'method' => $payment,
            ]);
        }
        ExpenseTransaction::factory(10)->create();
        IncomeTransaction::factory(10)->create();
        Goal::factory()->create();
    }
}
