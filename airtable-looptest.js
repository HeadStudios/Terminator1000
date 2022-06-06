/* 
This is a proof of concept of firstly looping through a table's view and populating a column for each
row based on the value of another column (just created a new column called 'LoopDeLoop' for this purpose).

*/
let WPtable = base.getTable("New WP");
let view = WPtable.getView("All");
let query = await view.selectRecordsAsync({fields: ["Title", "Name", "Contact", "Content"]});
console.log(query);

// print ID & "Priority" from each record:
for (let record of query.records) {
    console.log(`
**${record.id}**
${record.getCellValueAsString("Contact")}
`);
let contactShine = record.getCellValueAsString("Contact");
let titleShine = record.getCellValueAsString("Name");
let totalShine = contactShine + ' ' + titleShine;
WPtable.updateRecordAsync(record, {
    'Shortlink': totalShine
})
}

