let table = base.getTable("SMS");
let view = await input.viewAsync("Pick a view", "SMS");
let query = await view.selectRecordsAsync({fields: ["Contact","Mobile"]});

action_injection = {
    'action': 'smssender'
};

var json_payload = [];
let individual_injection = {};
json_payload.push(action_injection);


for (let record of query.records) {

    let name = record.getCellValueAsString("Contact");
    let mobile = record.getCellValueAsString("Mobile");

    individual_injection = {
        'ID': record.id,
        'Contact': name,
        'Mobile': mobile
    };

    json_payload.push(individual_injection);
}

console.log(json_payload);

let response = await remoteFetchAsync('http://147.182.192.192/speech.php', {
    method: 'POST',
    body: JSON.stringify(json_payload)
    });

    
let json = await response.json();
//let json_string = '[{"ID":"recpuIDwtkOxhYyLO","Name":"Kosta Kondratenko","URL":"https:\/\/headstudios.com.au\/for_you\/sales-terminator-army-generator\/","Shortlink":"https:\/\/showme.headstudios.com.au\/kostas-terminator","LinkID":"lnk_1LHi_2mHMTF","Mobile":["0412 826 569"],"Status":"Sent"},{"ID":"rec2nv7qKlwU5jmbV","Name":"Kostya Kondratenko","URL":"https:\/\/headstudios.com.au\/for_you\/sales-terminator-army-generator\/","Shortlink":"https:\/\/showme.headstudios.com.au\/kostyas-terminator","LinkID":"lnk_1LHi_2mHMTG","Mobile":["+61412 826 569"],"Status":"Sent"},{"ID":"recHeks3mMpdTZnvE","Name":"Konstantin Kondratenko","URL":"https:\/\/headstudios.com.au\/for_you\/sales-terminator-army-generator\/","Shortlink":"https:\/\/showme.headstudios.com.au\/konstantins-terminator","LinkID":"lnk_1LHi_2mHMTH","Mobile":["4128 265 69"],"Status":"Sent"}]';
//let json = JSON.parse(json_string);
for (var key in json) {
    //let recordID = key['ID'];
    let recordID = json[key]['ID'];
    let status = json[key]['Status'];
    if(!status) { status = ""; }
    console.log("Stat is: ");
    console.log(status);
    console.log("You see 3 of these?");
    console.log(recordID);
    await table.updateRecordAsync(recordID, {
        //"LinkID": LinkID,
        //"Shortlink": ShortLink
        "Status": { name: status }

    });    

}















console.log(JSON.stringify(json_payload));

throw new Error("Check the async");

let response = await remoteFetchAsync('http://147.182.192.192/speech.php', {
    method: 'POST',
    body: JSON.stringify(json_payload)
    });

    let body = await response.json();

    
    console.log("The length of body is: " + body.length);
    console.log(JSON.stringify(body));

    for (var key in body) {
        console.log("We are in loop number " + key);
        RecordID = body[key].ID;
        console.log("Record ID is: " + RecordID);
        //ShortLink = body[key].shortURL;
        //console.log("Shortlink is :" + ShortLink);
        //LinkID = body[key].linkID;
        //console.log("LinkID is: " + LinkID);
        Clicks = body[key].clicks;
        await table.updateRecordAsync(RecordID, {
            //"LinkID": LinkID,
            //"Shortlink": ShortLink
            "Clicks": Clicks

        });       
      }
      
      throw new Error('Check if clicks are updated');

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