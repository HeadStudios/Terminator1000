let table = base.getTable("SMS");
let view = await input.viewAsync("Pick a view", "SMS");
let query = await view.selectRecordsAsync({fields: ["Contact","Mobile","Shortlink","URL","LinkID","Image","OG:Title","OG:Description"]});

var json_payload = [];

let action = await input.buttonsAsync(
    'What would you like to do?',
    [
        
        {label: 'Create Shortlinks', value: 'linkcreator', variant: 'primary'},
        {label: 'Update Link Clicks', value: 'linkupdater', variant: 'secondary' },
        {label: 'Send SMS', value: 'smssender', variant: 'secondary' }
        
    ],
);
action_injection = {
    'action': action
};
//json_payload.push(action_injection);


let individual_injection = {};


for (let record of query.records) {

    let name = record.getCellValueAsString("Contact");
    let shortlink = record.getCellValueAsString("Shortlink");
    let URL = record.getCellValueAsString("URL");
    let linkID = record.getCellValueAsString("LinkID");
    let imageURL = record.getCellValue("Image");
    let mobile = record.getCellValue("Mobile");
    let og_title = record.getCellValue("OG:Title");
    let og_description = record.getCellValue("OG:Description");

    individual_injection = {
        'ID': record.id,
        'Name': name,
        'URL': URL,
        'Shortlink' : shortlink,
        'LinkID' : linkID,
        'Mobile' : mobile,
        'Og_Title' : og_title,
        "Og_Description" : og_description,
        'image' : imageURL[0].url //['url']
    };

    json_payload.push(individual_injection);
}

let json_data = json_payload;
//json_payload['action'] = action;

//let json = [['action', action],[ 'data', json_payload]];
let json = {'action': action, 'data': json_payload };
//let json_records = JSON.stringify(json_payload);

//console.log(JSON.stringify(json_payload));
console.log(JSON.stringify(json));

console.log(json['data'][2]['image']);



throw new Error("Check the stats");

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

    let data = body['data'];
    action = body['action'];

    switch(action) {
    case 'linkcreator':
        console.log("We are in link creator");
         console.log(JSON.stringify(body));
        for (var key in data) {
            console.log("We are in loop number " + key);
            RecordID = data[key].ID;
            console.log("Record ID is: " + RecordID);
            ShortLink = data[key].secureShortURL;
            console.log("Shortlink is :" + ShortLink);
            LinkID = data[key].LinkID;
            console.log("LinkID is: " + LinkID);
            //Clicks = data[key].clicks;
            await table.updateRecordAsync(RecordID, {
                "LinkID": LinkID,
                "Shortlink": ShortLink,

            });       
        }
      break;
      case 'linkupdater':
        console.log("We are in link updater");
        console.log(JSON.stringify(body));
        for (var key in data) {
            console.log("We are in loop number " + key);
            RecordID = data[key].ID;
            console.log("Record ID is: " + RecordID);
            ShortLink = data[key].secureShortURL;
            console.log("Shortlink is :" + ShortLink);
            LinkID = data[key].LinkID;
            console.log("LinkID is: " + LinkID);
            //Clicks = data[key].clicks;
            await table.updateRecordAsync(RecordID, {
                "LinkID": LinkID,
                "Shortlink": ShortLink,

            });       
        }
    }

    console.log("If you see this we have made it home Master Wayne");

    console.log(JSON.stringify(body));