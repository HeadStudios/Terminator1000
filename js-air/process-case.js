let table = base.getTable("SMS");
let view = table.getView("Kosta");

let json_response = '{"action":"linkcreator","data":[{"ID":"recpuIDwtkOxhYyLO","Name":"Kosta  Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/kostas-terminator","LinkID":"lnk_1LHi_2rd9RB","Mobile":["0412 826 569"],"path":"kostas-terminator","displayName":"Kosta","originalURL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/?fname=Kosta","secureShortURL":"https://showme.headstudios.com.au/kostas-terminator"},{"ID":"rec2nv7qKlwU5jmbV","Name":"Kostya Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/kostyas-terminator","LinkID":"lnk_1LHi_2rd9RC","Mobile":["+61412 826 569"],"path":"kostyas-terminator","displayName":"Kostya","originalURL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/?fname=Kostya","secureShortURL":"https://showme.headstudios.com.au/kostyas-terminator"},{"ID":"recHeks3mMpdTZnvE","Name":"Konstantin Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/konstantins-terminator","LinkID":"lnk_1LHi_2rd9RD","Mobile":["4128 265 69"],"path":"konstantins-terminator","displayName":"Konstantin","originalURL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/?fname=Konstantin","secureShortURL":"https://showme.headstudios.com.au/konstantins-terminator"}]}';

let body = JSON.parse(json_response);

console.log(body);

console.log(body['action']);

let data = body['data'];

switch(body['action']) {
    case 'linkcreator':
        for (var key in data) {
            let RecordID = data[key]['ID'];
            let LinkID = data[key]['LinkID'];
            let ShortLink = data[key]['secureShortURL'];
            console.log("Record ID is: ");
            console.log(data[key]['ID']);
            await table.updateRecordAsync(RecordID, {
                "LinkID": LinkID,
                "Shortlink" : ShortLink
                //"Shortlink": ShortLink
            }); 
        }
        break;
} 