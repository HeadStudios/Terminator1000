let table = base.getTable("SMS");
let view = table.getView("All");
let query = await view.selectRecordsAsync({fields: ["Contact","Shortlink","URL","LinkID","Image"]});

var json_payload = [];

let action = await input.buttonsAsync(
    'What would you like to do?',
    [
        
        {label: 'Create Shortlinks', value: 'linkcreator', variant: 'primary'},
        {label: 'Update Link Clicks', value: 'linkupdater', variant: 'secondary' }
        
    ],
);
action_injection = {
    'action': action
};
json_payload.push(action_injection);

let individual_injection = {};


for (let record of query.records) {

    let name = record.getCellValueAsString("Contact");
    let shortlink = record.getCellValueAsString("Shortlink");
    let URL = record.getCellValueAsString("URL");
    let linkID = record.getCellValueAsString("LinkID");
    let imageURL = record.getCellValue("Image");

    individual_injection = {
        'ID': record.id,
        'Name': name,
        'URL': URL,
        'Shortlink' : shortlink,
        'LinkID' : linkID,
        'image' : imageURL[0]['url']
    };

    json_payload.push(individual_injection);
}




console.log(JSON.stringify(json_payload));

throw new Error('Check stringify')

let response = await remoteFetchAsync('http://147.182.192.192/speech.php', {
    method: 'POST',
    body: JSON.stringify(json_payload),
    headers: {
        'Content-Type': 'application/json',
        'Authorization' : 'Basic d2h5d29udHlvdWNvbm5lY3Q6Y2N1WSAxWWhkIDdsTmkgMzdWSSB5MVlyIDYySEs='
    },
    });

    let body = await response.json();

    
    console.log("The length of body is: " + body.length);
    console.log(JSON.stringify(body));

    switch(body[0]['action']) {
    case 'linkcreator':
    console.log("I'm within the switch statement");
    delete body[0];
    console.log(JSON.stringify(body));
    for (var key in body) {
        console.log("We are in loop number " + key);
        RecordID = body[key].recordID;
        console.log("Record ID is: " + RecordID);
        ShortLink = body[key].shortURL;
        console.log("Shortlink is :" + ShortLink);
        LinkID = body[key].linkID;
        console.log("LinkID is: " + LinkID);
        Clicks = body[key].clicks;
        await table.updateRecordAsync(RecordID, {
            "LinkID": LinkID,
            "Shortlink": ShortLink
            //"Clicks": Clicks

        });       
      }
      break;
    }

    console.log("If you see this we have made it home Master Wayne");

    console.log(JSON.stringify(body));