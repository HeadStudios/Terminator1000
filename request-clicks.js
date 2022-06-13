/* 
This code is to get the returned JSON data of links that were clicked and update the record ID's
*/
let ClickTable = base.getTable("Click Tracker");
let view = ClickTable.getView("All");

let query = await view.selectRecordsAsync({fields: ["Shortlink"]});
//console.log(query.records);

const data = query.records;

let response = await remoteFetchAsync('https://staging2.conveyancingqld.com/link-updater.php', {
    method: 'POST',
    body: JSON.stringify(data),
    headers: {
        'Content-Type': 'application/json',
        'Authorization' : 'Basic d2h5d29udHlvdWNvbm5lY3Q6Y2N1WSAxWWhkIDdsTmkgMzdWSSB5MVlyIDYySEs='
    },
    });

    let body = await response.json();

    for (const [key, value] of Object.entries(body)) {
        console.log(`${key}: ${value}`);
        console.log(value.id);
        console.log(value.name);
        console.log(value.clicks);
        ClickTable.updateRecordAsync(value.id, {
            "Clicks": value.clicks
        })  
      }
    console.log(body);
