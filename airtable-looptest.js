/* 
This is a proof of concept of firstly looping through a table's view and populating a column for each
row based on the value of another column (just created a new column called 'LoopDeLoop' for this purpose).

*/
let SMStable = base.getTable("SMS Track");
let view = SMStable.getView("All");
let query = await view.selectRecordsAsync({fields: ["Permalink","Contact"]});

//console.log(query);

// print ID & "Priority" from each record:
for (let record of query.records) {

    /* 
    This function will pass the permalink and have a shortlink returned, in the future ideally it would be good
    to pass an array based on query and have it processed... however I'm not sure how to do this right now
    so I will do it the old fashioned way. 
    */

    let permalink = record.getCellValue("Permalink");
    let contact = record.getCellValueAsString("Contact");
    contactns = contact.replace(/ /g,''); // this removes empty spaces from contact, renamed to contactns in case JS acts weird if I keep it the same name, which it probably won't

    const data = { contact: contactns, permalink: permalink };

    console.log(JSON.stringify(data));

    let response = await remoteFetchAsync('https://staging2.conveyancingqld.com/pickandchoose.php', {
    method: 'POST',
    body: JSON.stringify(data),
    headers: {
        'Content-Type': 'application/json',
        'Authorization' : 'Basic d2h5d29udHlvdWNvbm5lY3Q6Y2N1WSAxWWhkIDdsTmkgMzdWSSB5MVlyIDYySEs='
    },
    });

    let body = await response.json();
    console.log(body);

    SMStable.updateRecordAsync(record, {
    "Short Link": body.shortlink
})        


}