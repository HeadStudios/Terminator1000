/* 
This is a proof of concept of firstly looping through a table's view and populating a column for each
row based on the value of another column (just created a new column called 'LoopDeLoop' for this purpose).

*/
let SMStable = base.getTable("SMS");
let view = SMStable.getView("All");
let query = await view.selectRecordsAsync({fields: ["Contact","Contact"]});

console.log(query.records);

// query for every record in "People"
let table = base.getTable("SMS");
let view = table.getView("All");
let query = await view.selectRecordsAsync({fields: ["Contact","URL"]});

var json_payload = [];

let individual_injection = {};


for (let record of query.records) {

    let name = record.getCellValueAsString("Contact");
    let URL = record.getCellValueAsString("URL");

    individual_injection = {
        'ID': record.id,
        'Name': name,
        'URL': URL
    };

    json_payload.push(individual_injection);
}

console.log(JSON.stringify(json_payload));

let response = await remoteFetchAsync('http://147.182.192.192/speech.php', {
    method: 'POST',
    body: JSON.stringify(json_payload),
    headers: {
        'Content-Type': 'application/json',
        'Authorization' : 'Basic d2h5d29udHlvdWNvbm5lY3Q6Y2N1WSAxWWhkIDdsTmkgMzdWSSB5MVlyIDYySEs='
    },
    });

    let body = await response.json();
    console.log(body);

    for (let i = 0; i < body.length; i++) {
        RecordID = body[i].recordID;
        ShortLink = body[i].shortURL;
        LinkID = body[i].linkID;
        await table.updateRecordAsync(RecordID, {
            "LinkID": LinkID,
            "Shortlink": ShortLink
        });       
      }

    console.log("If you see this we have made it home Master Wayne");

    console.log(JSON.stringify(body));


console.log(query);

//console.log(query);

// print ID & "Priority" from each record:
for (let record of query.records) {

    /* 
    This function will pass the permalink and have a shortlink returned, in the future ideally it would be good
    to pass an array based on query and have it processed... however I'm not sure how to do this right now
    so I will do it the old fashioned way. 
    */

    let permalink = record.getCellValue("Permalink");
    let contact = record.getCellValueAsString("Contact");
    contactns = contact.replace(/ /g,''); // this removes empty spaces from contact, renamed to contactns in case JS acts weird if I keep it the same name, which it probably won't

    const data = { contact: contactns, permalink: permalink };

    console.log(JSON.stringify(data));

    let response = await remoteFetchAsync('https://staging2.conveyancingqld.com/pickandchoose.php', {
    method: 'POST',
    body: JSON.stringify(data),
    headers: {
        'Content-Type': 'application/json',
        'Authorization' : 'Basic d2h5d29udHlvdWNvbm5lY3Q6Y2N1WSAxWWhkIDdsTmkgMzdWSSB5MVlyIDYySEs='
    },
    });

    let body = await response.json();
    console.log(body);

    SMStable.updateRecordAsync(record, {
    "Short Link": body.shortlink
})        


}