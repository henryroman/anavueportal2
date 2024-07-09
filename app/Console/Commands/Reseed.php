<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class Reseed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'image:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reseeds the image folders';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        File::copy(storage_path('app/public/items-seed/img1.jpg'), storage_path('app/public/items/img1.jpg'));
        File::copy(storage_path('app/public/items-seed/img2.jpg'), storage_path('app/public/items/img2.jpg'));
        File::copy(storage_path('app/public/items-seed/img3.jpg'), storage_path('app/public/items/img3.jpg'));
        File::copy(storage_path('app/public/avatars-seed/profile-picture-1.jpg'), storage_path('app/public/avatars/profile-picture-1.jpg'));
        File::copy(storage_path('app/public/avatars-seed/profile-picture-2.jpg'), storage_path('app/public/avatars/profile-picture-2.jpg'));
        File::copy(storage_path('app/public/avatars-seed/profile-picture-7.jpg'), storage_path('app/public/avatars/profile-picture-7.jpg'));
    }
}
