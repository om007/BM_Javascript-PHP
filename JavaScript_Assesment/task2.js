//QUESTION: 2. Make 3 POST requests at the same time which needs to be resolved all at the same time.
console.log("Make Multiple POSTRequest:")
const makeMultiplePOSTRequest = async function () {

    const allReponses = await Promise.all([
        fetch(dataURL, { method: 'POST', cache: 'no-cache', headers: { 'content-type': 'application/json' } }),
        fetch(dataURL, { method: 'POST', cache: 'no-cache', headers: { 'content-type': 'application/json' } }),
        fetch(dataURL, { method: 'POST', cache: 'no-cache', headers: { 'content-type': 'application/json' } })
    ]);
    //Returns array of promise responses
    return allReponses;
}

//Usage
makeMultiplePOSTRequest()
    .then(responses => {
        console.log("Success: ");
        responses.forEach(response => console.log(response.json()));
    })
    .catch(err => console.log("Failed: ", err));
