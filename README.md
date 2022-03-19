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
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;56e9f494fff3cc5c35e5287e&#x2F;3x" height="30" />
                <b>monkaS</b>
                (4552)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;120232&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>TriHard</b>
                (2554)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;566c9fde65dbbdab32ec053e&#x2F;3x" height="30" />
                <b>FeelsGoodMan</b>
                (2410)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;61fed4db06fd6a9f5be380bb&#x2F;3x" height="30" />
                <b>forsenCoomer</b>
                (1412)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;177866&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenS</b>
                (1348)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;167431&#x2F;4" height="30" />
                <b>monkaOMEGA</b>
                (1279)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60477a2f306b602acc599abf&#x2F;3x" height="30" />
                <b>LULE</b>
                (1124)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;864205&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>TombRaid</b>
                (1090)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_0cb16abc3c994004b7aa536ad350d5a1&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenKUKLE</b>
                (953)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_7c5d25facc384c47963d25a5057a0b40&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>KEKHeim</b>
                (850)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;128054&#x2F;4" height="30" />
                <b>OMEGALUL</b>
                (734)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;555555584&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>&lt;3</b>
                (686)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;521050&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenE</b>
                (575)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;84608&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>cmonBruh</b>
                (519)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60651e09a407570b72f28e03&#x2F;3x" height="30" />
                <b>forsenInsane</b>
                (460)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;566c9fc265dbbdab32ec053b&#x2F;3x" height="30" />
                <b>FeelsBadMan</b>
                (419)
            </td>
        </tr>
    </table>
</div>

<p align="center">
    <i>Most used emotes of the day in <a href="https://twitch.tv/forsen">Forsen</a>'s chat, Last updated at Saturday, 19 March, 01:26 CET</i>
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
