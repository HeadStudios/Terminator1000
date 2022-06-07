/* 
This is a proof of concept of looping through a view and getting the LinkID and then getting the number 
of human clicks on that link ID - I will make some clicks just to be sure and in the future I will try
to move to gettin ga whole array and then executing it on the server side. 
*/
let SMStable = base.getTable("SMS Track");
let view = SMStable.getView("All");
let query = await view.selectRecordsAsync({fields: ["Permalink","Contact", "LinkID"]});


for (let record of query.records) {

    let linkid = record.getCellValueAsString("LinkID");

    const data = { linkid : linkid };

    console.log(JSON.stringify(data));

    let response = await remoteFetchAsync('https://staging2.conveyancingqld.com/link_stats.php', {
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
    "Clicks": body.total_clicks
})        


}