<?php

namespace Database\Seeders;

use App\Models\Camera;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = File::get(storage_path('app/cameras-defb.csv'));
        $lines = explode(PHP_EOL, $csv);
        if ($lines[0] === 'Camera;Latitude;Longitude') {
            array_shift($lines);
        }

        $cameras = [];
        foreach ($lines as $line) {
            $parts = str_getcsv($line, ';');

            if (count($parts) !== 3) {
                continue;
            }
            if (
                !preg_match('/^(UTR-CM)-(\d+)[-\s](.+)$/', $parts[0], $matches)
            ) {
                continue;
            }
            if (!is_numeric($parts[1]) || !is_numeric($parts[2])) {
                continue;
            }

            $cameras[] = [
                'number' => $matches[2],
                'area' => $matches[1],
                'name' => $matches[3],
                'latitude' => $parts[1],
                'longitude' => $parts[2]
            ];
        }
        Camera::upsert($cameras, ['number']);
    }
}
