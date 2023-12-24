<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing 1',
                    'description' => 'This is the first listing.'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing 2',
                    'description' => 'This is the second listing.'
                ]
            ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach ($listings as $listing) {
                if ($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }