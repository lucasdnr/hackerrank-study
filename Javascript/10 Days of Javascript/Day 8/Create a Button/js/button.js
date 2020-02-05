/* Create a button element */
var clickMeButton = document.createElement('button');

/* Set the button's text label */
clickMeButton.innerHTML = '0';

/* Set the button's id */
clickMeButton.id = 'btn';

/* Set the button's style class */
clickMeButton.className = 'button';

/* Add the button to the page */
document.body.appendChild(clickMeButton);

clickMeButton.onclick = function() {
    clickMeButton.innerHTML++;
}