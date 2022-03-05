<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Helper;

class TwitchListen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'twitch:listen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Listen to Twitch chat';

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
        $pass = env("OAUTH_TOKEN");
        $user = env("NICKNAME");
        $channel = env("CHANNEL_NAME");

        $address = "wss://irc-ws.chat.twitch.tv:443";
        while(true) {
            echo "Reconnected\n";
            $client = new \WebSocket\Client($address, ['timeout' => 3600]);
            $client->text("PASS oauth:$pass");
            $client->text("NICK $user");
            $client->text("JOIN #$channel");

            LOG::info("Connected to $address");

            while (true) {
                try {
                    $message = $client->receive();
                    $message = $this->modify_socket_message($channel, $message);
                    if($message) {
                        $parsed = Helper::parse(trim($message));
                        $emotes = Helper::count_emotes($parsed);

                        if($emotes) {
                            if(\App::environment() === "local") {
                                print_r($emotes);
                            }

                            Helper::update_emotes($emotes);
                        }
                    }
                    $client->ping("PING");

                  } catch (\WebSocket\ConnectionException $e) {
                    if($e->getCode() === 0) {
                        $client->close();
                        echo "Closing connection\n";
                        break;
                    } else {
                        echo "Error: ".$e->getMessage() . "\n";
                    }
                }
            }

            sleep(1);
        }

        return 0;
    }

    private function modify_socket_message(string $channel, string $message = null) {
        if(!$message) {
            return null;
        }

        $array = explode("PRIVMSG #$channel :", $message);

        if(count($array) === 1) {
            return null;
        }

        return $array[1];
    }
}
