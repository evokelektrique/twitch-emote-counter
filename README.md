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
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;81249&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>SeriousSloth</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;304412445&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenSmug</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;81248&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>OSFrog</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;696755&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenRedSonic</b>
                (0)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;81103&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>OhMyDog</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;1271995&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenDab</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;74510&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>KappaClaus</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;emotesv2_2f9a36844b054423833c817b5f8d4225&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenPls</b>
                (0)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;70433&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>KappaRoss</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;36535&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenSS</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;68856&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>MingLee</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;300799759&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenBB</b>
                (0)
            </td>
        </tr>
        <tr>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;64138&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>SeemsGood</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;302827735&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenE3</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;62836&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>twitchRaid</b>
                (0)
            </td>
            <td>
                <img src="https:&#x2F;&#x2F;static-cdn.jtvnw.net&#x2F;emoticons&#x2F;v2&#x2F;173378&#x2F;static&#x2F;light&#x2F;3.0" height="30" />
                <b>forsenGASM</b>
                (0)
            </td>
        </tr>
    </table>
</div>

<p align="center">
    <i>Most used emotes of the day in <a href="https://twitch.tv/forsen">Forsen</a>'s chat, Last updated at Sunday, 20 March, 13:09 CET</i>
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
