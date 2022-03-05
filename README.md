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
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;684692&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenL</b>
                (643)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;1171397&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenK</b>
                (352)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_e02650251d204198923de93a0c62f5f5&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>PotFriend</b>
                (160)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60477a2f306b602acc599abf&#x2F;3x" height="30" />
                <b>LULE</b>
                (93)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_4c39207000564711868f3196cc0a8748&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>PoroSad</b>
                (91)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;1565958&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenPosture1</b>
                (76)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;261450&#x2F;4" height="30" />
                <b>AYAYA</b>
                (68)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;521050&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenE</b>
                (58)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;300799759&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenBB</b>
                (55)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;266564&#x2F;4" height="30" />
                <b>MaN</b>
                (55)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;586401&#x2F;4" height="30" />
                <b>amongE</b>
                (50)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60651e09a407570b72f28e03&#x2F;3x" height="30" />
                <b>forsenInsane</b>
                (47)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;609f34e167644f1d67e86619&#x2F;3x" height="30" />
                <b>forsenJAM</b>
                (40)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;145947&#x2F;4" height="30" />
                <b>FeelsOkayMan</b>
                (37)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;684688&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenKek</b>
                (36)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;5e76d399d6581c3724c0f0b8&#x2F;3x" height="30" />
                <b>cvMask</b>
                (33)
            </td>
        </tr>
    </table>
</div>

<p align="center">
    <i>Most used emotes of the day in <a href="twitch.tv/forsen">Forsen</a>'s chat, Last updated at Saturday, 5 March, 14:43 CET</i>
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
