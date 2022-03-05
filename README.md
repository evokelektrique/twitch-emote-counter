<div align="center">
    <p><b>Twitch Emote Counter</b></p>
    <small>Simply get stats of your chat</small>
</div>

<br>
<br>

<div align="center">
    <table>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_4c39207000564711868f3196cc0a8748&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>PoroSad</b>
                (16243)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;263820&#x2F;4" height="30" />
                <b>PepeLaugh</b>
                (9459)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60f0edec8ed8b373e42231b2&#x2F;3x" height="30" />
                <b>forsenLaughingAtYou</b>
                (4034)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;566c9fde65dbbdab32ec053e&#x2F;3x" height="30" />
                <b>FeelsGoodMan</b>
                (3463)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;61fed98406fd6a9f5be381b1&#x2F;3x" height="30" />
                <b>ForsenLookingAtYou</b>
                (3298)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;555981336ba1901877765555&#x2F;3x" height="30" />
                <b>haHAA</b>
                (2625)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60477a2f306b602acc599abf&#x2F;3x" height="30" />
                <b>LULE</b>
                (2537)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;120232&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>TriHard</b>
                (2314)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;145947&#x2F;4" height="30" />
                <b>FeelsOkayMan</b>
                (2085)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;261450&#x2F;4" height="30" />
                <b>AYAYA</b>
                (1698)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;566ca06065dbbdab32ec054e&#x2F;3x" height="30" />
                <b>NaM</b>
                (1228)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;84608&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>cmonBruh</b>
                (1148)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;128054&#x2F;4" height="30" />
                <b>OMEGALUL</b>
                (1056)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;684692&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenL</b>
                (728)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;58765&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>NotLikeThis</b>
                (670)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;115234&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>BatChest</b>
                (613)
            </td>
        </tr>
    </table>
</div>

<p align="center">
    <i>Most used emotes of the day in <a href="https://twitch.tv/forsen">Forsen</a>'s chat, Last updated at Saturday, 5 March, 19:06 CET</i>
</p>

## Installation

An easy step-by-step tutorial for installing the app is described below:

1. clone the repo into your desired destination `git clone https://github.com/evokelektrique/twitch-emote-counter/` and navigate into the folder
2. Install the required PHP packages with `composer install`
3. Fill out the environment variables in `.env`, make sure the `CLIENT_ID`, `OAUTH_TOKEN`, `CHANNEL_NAME`, `TIMEZONE`, `NICKNAME` options are filled properly
4. Migrate the database by running the `php artisan migrate` command
5. Run the twitch chat listener `php artisan twitch:listen`

<b>Additional steps for production deployment: (skip this on your local machine)</b>

6. Setup task scheduler cron job `* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1`

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request
