let WPtable = base.getTable("SMS");
// Prompt the user to pick a record 
// If this script is run from a button field, this will use the button's record instead.
let record = await input.recordAsync('Select a record to use', WPtable);

let imageURL = record.getCellValue("Image");

console.log(imageURL[0]['url']);