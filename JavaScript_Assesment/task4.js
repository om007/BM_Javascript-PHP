//QUESTION 4. Create a very simple two way binding feature
const simpleBinding = function(event) {
    const elements = document.querySelectorAll("." + event.currentTarget.className);
    //Looping over the InpitBinding class elements
    elements.forEach(element => {
        element.value = event.currentTarget.value;
    });
}