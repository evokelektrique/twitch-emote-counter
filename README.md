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
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;521050&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenE</b>
                (39178)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_2f9a36844b054423833c817b5f8d4225&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenPls</b>
                (4400)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;566c9fc265dbbdab32ec053b&#x2F;3x" height="30" />
                <b>FeelsBadMan</b>
                (3227)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60477a2f306b602acc599abf&#x2F;3x" height="30" />
                <b>LULE</b>
                (3221)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;128054&#x2F;4" height="30" />
                <b>OMEGALUL</b>
                (2749)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;300799759&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenBB</b>
                (2302)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_4c39207000564711868f3196cc0a8748&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>PoroSad</b>
                (2263)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60f0edec8ed8b373e42231b2&#x2F;3x" height="30" />
                <b>forsenLaughingAtYou</b>
                (2090)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;56e9f494fff3cc5c35e5287e&#x2F;3x" height="30" />
                <b>monkaS</b>
                (1882)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_d53274249a594003ac3bd598a94df7c0&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenDespair</b>
                (1482)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;555555584&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>&lt;3</b>
                (1447)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;536927&#x2F;4" height="30" />
                <b>FeelsDankMan</b>
                (1171)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;119959&#x2F;4" height="30" />
                <b>MegaLUL</b>
                (1080)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;1290325&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>MaxLOL</b>
                (1025)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;373609&#x2F;4" height="30" />
                <b>forsenComfy</b>
                (957)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_e02650251d204198923de93a0c62f5f5&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>PotFriend</b>
                (897)
            </td>
        </tr>
    </table>
</div>

<p align="center">
    <i>Most used emotes of the day in <a href="https://twitch.tv/forsen">Forsen</a>'s chat, Last updated at Thursday, 10 March, 13:11 CET</i>
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
