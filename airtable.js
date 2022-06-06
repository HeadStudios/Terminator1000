/* 
This is code for creating the new custom post type after the button is pressed for the first time.
At the moment there is no functionality for update. This file was called airtable.js however I will
have multiple AirTable js scripts in the GitHub repository. 
*/


let WPtable = base.getTable("New WP");
// Prompt the user to pick a record 
// If this script is run from a button field, this will use the button's record instead.
let record = await input.recordAsync('Select a record to use', WPtable);

let blogTitle = record.getCellValue("Title");
let wpContent = record.getCellValue("Content");
let c_name = record.getCellValue("Name"); // had to change to c_name because Visual Studio code was saying name is deprecated just in case I'm using a namespace
let bannerhead = record.getCellValue("Bannerhead");
let headline = record.getCellValue("Headline");
let subheadline = record.getCellValue("Subheadline");
let cta_text = record.getCellValue("CTA Text");
let cta_link = record.getCellValue("CTA Link");
let short_path = record.getCellValue("Short Path"); // this is what's at the end of the shortlink created e.g bit.ly/short-path-is-here


const data = { title: blogTitle, name: c_name, function: 1, excerpt: 'The short version', content: wpContent, bannerhead: bannerhead, headline: headline, subheadline: subheadline, cta_text: cta_text, cta_link: cta_link, short_path: short_path };

console.log(JSON.stringify(data));

let response = await remoteFetchAsync('https://staging2.conveyancingqld.com/the_vision.php', {
    method: 'POST',
    body: JSON.stringify(data),
    headers: {
        'Content-Type': 'application/json',
        'Authorization' : 'Basic d2h5d29udHlvdWNvbm5lY3Q6Y2N1WSAxWWhkIDdsTmkgMzdWSSB5MVlyIDYySEs='
    },
});

let body = await response.json();
console.log(body);

WPtable.updateRecordAsync(record, {
    "Permalink": body.url,
    "Shortlink": body.shortlink
})        






