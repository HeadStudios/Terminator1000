// Update a record in the Tasks table

let json_response = '{"action": "linkcreator", "data": [{"id": "recpuidwtkoxhyylo", "name": "kosta kondratenko", "url": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/", "shortlink": "", "linkid": "lnk_1lhi_2rcwr8", "mobile": ["0412 826 569"], "path": "kostas-terminator", "displayname": "kosta", "originalurl": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/? Fname=kosta", "secureshorturl": "https: \/\/showme. Headstudios. Com. Au\/kostas-terminator"}, {"id": "rec2nv7qklwu5jmbv", "name": "kostya kondratenko", "url": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/", "shortlink": "", "linkid": "lnk_1lhi_2rcwr9", "mobile": ["+61412 826 569"], "path": "kostyas-terminator", "displayname": "kostya", "originalurl": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/? Fname=kostya", "secureshorturl": "https: \/\/showme. Headstudios. Com. Au\/kostyas-terminator"}, {"id": "recheks3mmpdtznve", "name": "konstantin kondratenko", "url": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/", "shortlink": "", "linkid": "lnk_1lhi_2rcwra", "mobile": ["4128 265 69"], "path": "konstantins-terminator", "displayname": "konstantin", "originalurl": "https: \/\/headstudios. Com. Au\/for_you\/sales-terminator-army-generator\/? Fname=konstantin", "secureshorturl": "https: \/\/showme. Headstudios. Com. Au\/konstantins-terminator"}]}';
let body = JSON.parse(json_response);
let table = base.getTable("SMS");
let view = table.getView("Kosta");
let query = await view.selectRecordsAsync({fields: ["LinkID"]});

//let recordId = query.records[0].id;
await table.updateRecordAsync('recpuidwtkoxhyylo', {
    "LinkID": "Hello bexley",
});
console.log("Updated a record!");
