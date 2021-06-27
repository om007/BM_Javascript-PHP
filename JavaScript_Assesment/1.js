//JavaScript Assessment for BM Nepal

// QUESTION: 1. Use any Javascript design pattern to create a simple dom based library(similar to Jquery) which will be able to perform following tasks:

// A. Function to change class name of DOM element
const changeClassName = function (elementName, oldClass, newClass) {
    //elementName can be #id, .class or tag
    const elements = document.querySelectorAll(elementName);

    elements.forEach(element => {
        element.classList.replace(oldClass, newClass);
    })
}

//Usage
changeClassName('#XMLResponse', 'OldClass', 'NewClass');

//B. Get datasets from dom elements
const getDataset = function (elementName) {
    //elementName can be #id, .class or tag
    const elements = document.querySelectorAll(elementName);

    var dataSets = []
    elements.forEach(element => {
        dataSets.push(element.dataSet);
    })

    return dataSets;
}

//C. Inject new dom element
const injectElement = function (parentElement, htmlTemplate) {
    //parentElement can be #id, .class or tag
    var targetElement = document.querySelector(parentElement);

    let newDOM = document.createElement('div');
    newDOM.innerHTML = htmlTemplate;

    targetElement.appendChild(newDOM);
}

//D. Make both ajax and get request
const getDataFromAJAXRequest = function (resource, callback) {
    const request = new XMLHttpRequest();
    request.addEventListener('readystatechange', () => {
        if (request.readyState === 4 && request.status === 200) {
            callback(undefined, request.responseText) //callback(error, data)
        } else if (request.readyState === 4) {
            //This block is called if none of above conditions are met
            callback("Error! Counld't fetch data!", undefined) //callback(error, data)
        }
    })

    request.open('GET', resource);
    request.send();
}

const dataURL = "http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml";
//Usage
console.log("AJAX Request:")
getDataFromAJAXRequest(dataURL, (err, data) => {
    if (err) {
        console.log(err)
    } else {
        console.log(data)
        document.getElementById("XMLResponse").innerHTML = data;
    }
});


// E. Get and set values from input box/checkbox/select dropdown
//Input elemet
const inputElement = document.getElementById('name')
inputElement.value = "Om Prakash Shah";
console.log("Name: ", inputElement.value);

//Checkbox
const checkboxElement = document.getElementById('web')
checkboxElement.checked = true;

//Dropdown
const dropdownElement = document.getElementById('techList')
dropdownElement.value = "PHP"
console.log("Favourite: ", dropdownElement.value);


