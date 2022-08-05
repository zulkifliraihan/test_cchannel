<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Influencer;
use App\Notifications\BlastEmail;

class BlastCampaign extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lemon:blast-new-campaign';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Blast Email';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $user = Influencer::take(50)->get();
        $user = Influencer::all();

        $i = 0;
        foreach ($user as $value) { 
            $i++;
            
            $value->notify(new BlastEmail($i));
        }
        
        $i = 0;
        return 0;
    }
}
