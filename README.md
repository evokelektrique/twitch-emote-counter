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
                (27210)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;263820&#x2F;4" height="30" />
                <b>PepeLaugh</b>
                (5525)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_e02650251d204198923de93a0c62f5f5&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>PotFriend</b>
                (5217)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_03a9c93e6fb440298e4aefdac0c94ff3&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenLOL</b>
                (3881)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60477a2f306b602acc599abf&#x2F;3x" height="30" />
                <b>LULE</b>
                (3643)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;128054&#x2F;4" height="30" />
                <b>OMEGALUL</b>
                (3542)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_0cb16abc3c994004b7aa536ad350d5a1&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenKUKLE</b>
                (2005)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;355231&#x2F;4" height="30" />
                <b>forsenGOW</b>
                (1731)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;145947&#x2F;4" height="30" />
                <b>FeelsOkayMan</b>
                (1549)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;167431&#x2F;4" height="30" />
                <b>monkaOMEGA</b>
                (1445)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;227992&#x2F;4" height="30" />
                <b>Pepepains</b>
                (1295)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;120232&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>TriHard</b>
                (1195)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;566ca1a365dbbdab32ec055b&#x2F;3x" height="30" />
                <b>AngelThump</b>
                (1188)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;115996&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenH</b>
                (1178)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;566c9fc265dbbdab32ec053b&#x2F;3x" height="30" />
                <b>FeelsBadMan</b>
                (1087)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;231552&#x2F;4" height="30" />
                <b>PepeHands</b>
                (1067)
            </td>
        </tr>
    </table>
</div>

<p align="center">
    <i>Most used emotes of the day in <a href="https://twitch.tv/forsen">Forsen</a>'s chat, Last updated at Sunday, 6 March, 07:08 CET</i>
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
