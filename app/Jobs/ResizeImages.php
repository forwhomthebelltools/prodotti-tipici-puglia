<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Folklore\Image\Facades\Image;

class ResizeImages implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $img_url;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($img_url)
    {
        $this->img_url=$img_url;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //RESIZING IMAGE
        //absolute path
        $path = public_path($this->img_url);

        $new_image = Image::make($path,
            [
                'width' => 300,
                'height' => 200,
                'crop' => true,

            ]);

        //save again the new resized image on the same path
        $new_image->save($path);
    }
}
