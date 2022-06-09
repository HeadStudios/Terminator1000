/* 
This is to test if we can send a big ass JSON array from AirTable table to a PHP endpoint and return.. 
let's play! 
*/

let SMStable = base.getTable("Click Tracker");
let view = SMStable.getView("All");
let query = await view.selectRecordsAsync({fields: ["Shortlink","Name", "Status"]});
console.log(query.records);


var json_injection = [];

let table_peace = {
    'Name': 'John Connor',
    'Badge Number': 343242, 
    'Department': 'Botany Bay'
};

json_injection.push();

console.log(json_injection);

var json_payload = [];

let individual_injection = {};


for (let record of query.records) {

    let shortlink = record.getCellValueAsString("Shortlink");
    let name = record.getCellValueAsString("Name");

    individual_injection = {
        'ID': record.id,
        'Name': name,
        'Shortlink': shortlink
    };

    json_payload.push(individual_injection);


/*    console.log(`
**${record.id}**
${record.getCellValueAsString("Description")}
`); */
}

console.log("Moment of truth is coming.. the final payload!");
console.log(json_payload);

let randomRecord = 'recrdC25dnvZIivLm';

await SMStable.updateRecordAsync(randomRecord, {
    "Name": "I feel you",
})
