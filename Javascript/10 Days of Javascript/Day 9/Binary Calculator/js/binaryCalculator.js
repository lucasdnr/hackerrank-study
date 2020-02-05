let res = document.getElementById('res');

function clickButton(e) {
    let btn = e.target || e.srcElement;
    let action = document.getElementById(btn.id).innerHTML;
    switch (action) {
        case '0':
        case '1':
        case '+':
        case '-':
        case '*':
        case '/':
            res.innerHTML += action;
            break;
        case 'C':
            res.innerHTML = '';
            break;
        case '=':
            var expr = res.innerHTML;
            var nums = /(\d+)/g;
            //covert to decimals
            expr = expr.replace(nums, function (match) {
                return parseInt(match, 2);
            })
            //convert to binary
            res.innerHTML = Math.floor(eval(expr).toString(2));
            break;
        default:
            console.error('should not be executed');
            break;
    }
}

var buttons = document.getElementsByTagName('button');
for (let button of buttons) {
    button.onclick = clickButton;
}