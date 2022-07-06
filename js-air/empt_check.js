let table = base.getTable("SMS");
let view = await input.viewAsync("Pick a view", "SMS");
let query = await view.selectRecordsAsync({fields: ["Contact","Mobile","Shortlink","URL","LinkID","Image","OG:Title","OG:Description"]});

let emptyError = 0;

var json_payload = [];

if(emptyError) { console.log("You should not be seeing this"); }

console.log(query);

for (let record of query.records) {

    try {
    
    //if(record.getCellValueAsString("Contact")) {
    let name = record.getCellValueAsString("Contact"); if(!name) { console.log("Name is a no go"); } //} else { throw "Name for " + record.id + " is empty"; }
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
}

    catch(err) {
        output.text("There were missing or incorrect values in your Campaign Source text - these are: " + err);
        output.text("Below is the table for reference");
        //output.table(individual_injection);
        
    }

    json_payload.push(individual_injection);

}


output.table(json_payload); 
