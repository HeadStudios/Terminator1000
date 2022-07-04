let table = base.getTable("SMS");
let view = table.getView("Kosta");

let json_response = '{"action": "linkcreator", "data": [{"id": "recpuidwtkoxhyylo", "name": "kosta kondratenko", "url": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/", "shortlink": "", "linkid": "lnk_1lhi_2rcwr8", "mobile": ["0412 826 569"], "path": "kostas-terminator", "displayname": "kosta", "originalurl": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/? Fname=kosta", "secureshorturl": "https: \/\/showme. Headstudios. Com. Au\/kostas-terminator"}, {"id": "rec2nv7qklwu5jmbv", "name": "kostya kondratenko", "url": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/", "shortlink": "", "linkid": "lnk_1lhi_2rcwr9", "mobile": ["+61412 826 569"], "path": "kostyas-terminator", "displayname": "kostya", "originalurl": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/? Fname=kostya", "secureshorturl": "https: \/\/showme. Headstudios. Com. Au\/kostyas-terminator"}, {"id": "recheks3mmpdtznve", "name": "konstantin kondratenko", "url": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/", "shortlink": "", "linkid": "lnk_1lhi_2rcwra", "mobile": ["4128 265 69"], "path": "konstantins-terminator", "displayname": "konstantin", "originalurl": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/? Fname=konstantin", "secureshorturl": "https: \/\/showme. Headstudios. Com. Au\/konstantins-terminator"}]}';

let body = JSON.parse(json_response);

console.log(body);

console.log(body['action']);

let data = body['data'];

switch(body['action']) {
    case 'linkcreator':
        for (var key in data) {
            let RecordID = data[key]['id'];
            let LinkID = data[key]['linkid'];
            let ShortLink = data[key]['secureshorturl'];
            console.log("Record ID is: ");
            console.log(data[key]['id']);
            RecordID = 'recheks3mmpdtznve';
            console.log("Key is: " + key);
            await table.updateRecordAsync(RecordID, {
                //"LinkID": LinkID,
                "Shortlink" : "Loyalty",
                //"Shortlink": ShortLink
            }); 
        }
        break;
} */