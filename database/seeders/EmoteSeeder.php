<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Emote;
use Carbon\Carbon;

class EmoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emotes = [];
        $username = env("CHANNEL_NAME");

        // Authenticate into Twitch
        $twitch = new \POGGERS\Twitch(base_path());

        // Get User info
        $user = \POGGERS\User::get($username);
        $user_id = $user[0]["id"];

        // List of Twitch Channel Emotes
        $channel = new \POGGERS\EmoteProviders\ChannelEmotes;
        $channel_emotes = $channel->list($user_id);
        $emotes = array_merge($emotes, $this->modify($channel_emotes, "channel"));

        // List of Twitch Global Emotes
        $global = new \POGGERS\EmoteProviders\GlobalEmotes;
        $global_emotes = $global->list();
        $emotes = array_merge($emotes, $this->modify($global_emotes, "global"));

        // List BTTV emotes of a channel
        $bttv = new \POGGERS\EmoteProviders\BTTV;
        $bttv_emotes = $bttv->list($user_id);
        $emotes = array_merge($emotes, $this->modify($bttv_emotes, "bttv"));

        // List FFZ emotes of a channel
        $ffz = new \POGGERS\EmoteProviders\FFZ;
        $ffz_emotes = $ffz->list($user_id);
        $emotes = array_merge($emotes, $this->modify($ffz_emotes, "ffz"));

        $duplicates = 0;

        foreach($emotes as $emote) {
            $exists = Emote::where([['name', '=', $emote['name']]])->exists();
            if(!$exists) {
                Emote::insert($emote);
            } else {
                $duplicates += 1;
            }
        }

        echo "(" . (count($emotes) - $duplicates) . ") emotes added and ($duplicates) duplicates found.\n";
    }

    public function modify(array $emotes, string $source): array {
        $result = [];

        foreach($emotes as $emote) {
            $result[] = [
                "name" => $emote["name"],
                "source" => $source,
                "urls" => implode(',', $emote["urls"]),
                "usage" => 0,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ];
        }

        return $result;
    }
}
