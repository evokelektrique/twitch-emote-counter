<?php

namespace App;

use App\Models\Emote;

class Helper {

    /**
     * Split words and count the duplicates by given message
     *
     * @param  string $message
     * @return array
     */
    public static function parse(string $message): array {
        $array = explode(" ", $message);
        $words = array_count_values($array);

        return $words;
    }

    /**
     * Count emotes in the words
     *
     * @param  array $words
     * @return array
     */
    public static function count_emotes(array $words): array {
        $emotes = [];

        foreach($words as $word => $count) {
            $exists = Emote::where([["name", "=", $word]])->exists();
            if($exists) {
                $emotes[$word] = $count;
            }
        }

        return $emotes;
    }

    /**
     * Update the emotes usage
     *
     * @param  array $emotes
     * @return void
     */
    public static function update_emotes(array $emotes): void {
        foreach($emotes as $name => $count) {
            Emote::where("name", $name)->increment("usage", $count);
        }
    }
}
