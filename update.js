const Mustache = require('mustache');
const fs = require('fs');
const MUSTACHE_TEMPLATE = './README.mustache';

const data = {
    name: "Test",
    date: new Date().toLocaleDateString('en-GB', {
        weekday: 'long',
        month: 'long',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        timeZoneName: 'short',
        timeZone: 'America/New_York',
    })
};

fs.readFile(MUSTACHE_TEMPLATE, (err, result) =>  {
    if (err) throw err;
    const output = Mustache.render(result.toString(), data);
    fs.writeFileSync('README.md', output);
});
