const axios = require('axios');
const fs = require('fs');
const mustache = require('mustache');

const mustache_template = './README.mustache';
const base_url = "https://evoke.nitro-cpanel.xyz";
const url = base_url + "/api/top/16";
const data = {};
const time = new Date().toLocaleDateString('en-GB', {
    weekday: 'long',
    month: 'long',
    day: 'numeric',
    hour: 'numeric',
    minute: 'numeric',
    timeZoneName: 'short',
    timeZone: 'Europe/Stockholm',
});

function chunk(array, size) {
    const results = [];

    while(array.length) {
        results.push(array.splice(0, size));
    }

    return results;
}

async function generate_readme() {
    let response = await axios.get(url);

    data.time = time;
    response = response.data;

    Array.from(response).forEach((emote, i) => {
        let url = emote.urls.split(",")[0];
        if(url.startsWith("//")) {
            url = "https:" + url;
        }
        response[i].url = url;
    });

    const emotes = chunk(response, 4);
    data.emotes = emotes;

    fs.readFile(mustache_template, (err, result) =>  {
        if (err) throw err;
        const output = mustache.render(result.toString(), data);
        fs.writeFileSync('README.md', output);
    });
}

generate_readme();
