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
                (23945)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;263820&#x2F;4" height="30" />
                <b>PepeLaugh</b>
                (5513)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_e02650251d204198923de93a0c62f5f5&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>PotFriend</b>
                (5132)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;128054&#x2F;4" height="30" />
                <b>OMEGALUL</b>
                (3528)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60477a2f306b602acc599abf&#x2F;3x" height="30" />
                <b>LULE</b>
                (3299)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_0cb16abc3c994004b7aa536ad350d5a1&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenKUKLE</b>
                (1977)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;355231&#x2F;4" height="30" />
                <b>forsenGOW</b>
                (1728)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;145947&#x2F;4" height="30" />
                <b>FeelsOkayMan</b>
                (1475)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;167431&#x2F;4" height="30" />
                <b>monkaOMEGA</b>
                (1401)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;566ca1a365dbbdab32ec055b&#x2F;3x" height="30" />
                <b>AngelThump</b>
                (1188)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;231552&#x2F;4" height="30" />
                <b>PepeHands</b>
                (1047)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;566c9fc265dbbdab32ec053b&#x2F;3x" height="30" />
                <b>FeelsBadMan</b>
                (949)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;56e9f494fff3cc5c35e5287e&#x2F;3x" height="30" />
                <b>monkaS</b>
                (855)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.frankerfacez.com&#x2F;emote&#x2F;586401&#x2F;4" height="30" />
                <b>amongE</b>
                (649)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;cdn.betterttv.net&#x2F;emote&#x2F;60651e09a407570b72f28e03&#x2F;3x" height="30" />
                <b>forsenInsane</b>
                (636)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;1290325&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>MaxLOL</b>
                (578)
            </td>
        </tr>
    </table>
</div>

<p align="center">
    <i>Most used emotes of the day in <a href="https://twitch.tv/forsen">Forsen</a>'s chat, Last updated at Sunday, 6 March, 01:28 CET</i>
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
