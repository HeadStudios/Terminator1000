let table = base.getTable("SMS");
let view = await input.viewAsync("Pick a view", "SMS");
let query = await view.selectRecordsAsync({fields: ["Campaign"]});

for (let record of query.records) {
    console.log("Round and round we go");
    let campaign = record.selectLinkedRecordsFromCell("Campaign");
    console.log("And the linked is: ");
    console.log(campaign);
}



// the table containing record links, and the linked-to table
let rootTable = base.getTable("SMS");
let linkedTable = base.getTable("Campaign");
// the record with the links we want to summarize
// we need to create a 'recordId' input variable connected to a record trigger
//let config = input.config();
let config = await input.recordAsync("Pick a field, any field", rootTable);
let recordId = config.id;
console.log(config.id);

let rootQuery = await rootTable.selectRecordsAsync({fields: ['Campaign']});
let record = rootQuery.getRecord(recordId);
console.log('And the linked record is..');
console.log(record);

let linkedQuery = await linkedTable.selectRecordsAsync({fields: ['Status']});
let linkedRecords = (record.getCellValue("Tasks") || []).map((link) =>
    linkedQuery.getRecord(link.id)
// query the table and find our record according to its id:
let rootQuery = await rootTable.selectRecordsAsync({fields: ['Tasks']});
let record = rootQuery.getRecord(recordId);
// query for the linked records:
let linkedQuery = await linkedTable.selectRecordsAsync({fields: ['Status']});
let linkedRecords = (record.getCellValue("Tasks") || []).map((link) =>
    linkedQuery.getRecord(link.id)




    // the table containing record links, and the linked-to table
let rootTable = base.getTable("Projects");
let linkedTable = base.getTable("Tasks");
// the record with the links we want to summarize
// we need to create a 'recordId' input variable connected to a record trigger
let config = input.config();
let recordId = config.recordId;
// query the table and find our record according to its id:
let rootQuery = await rootTable.selectRecordsAsync({fields: ['Tasks']});
let record = rootQuery.getRecord(recordId);
// query for the linked records:
let linkedQuery = await linkedTable.selectRecordsAsync({fields: ['Status']});
let linkedRecords = (record.getCellValue("Tasks") || []).map((link) =>
    linkedQuery.getRecord(link.id)
);
// analyze linked records to produce summary:
let incompleteRecords = linkedRecords.filter(
    (linkedRecord) => linkedRecord.getCellValueAsString("Status") !== "Done"
);
let completedCount = linkedRecords.length - incompleteRecords.length;
let summary = `
${completedCount}/${linkedRecords.length} tasks completed!
Remaining tasks:
`;
for (let incomplete of incompleteRecords) {
    summary += `- ${incomplete.name} (${incomplete.getCellValueAsString(
        "Status"
    )})\n`;
}
console.log(summary);
// output the summary so it can be used in subsequent automation actions:
output.set("Summary", summary);