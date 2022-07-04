let table = base.getTable("Campaign");
let view = table.getView("Video Audit Campaign");
let query = await view.selectRecordsAsync({fields: ["Image"]});
let imageUrl = '';
for (let record of query.records) {
    console.log("We here");
    let imageURL = record.getCellValue("Image");
    imageUrl = imageURL[0]['url'];
    
    
}
console.log(imageUrl);