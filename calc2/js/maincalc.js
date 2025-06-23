let expression = '';

document.addEventListener('DOMContentLoaded', function () {
    const resultField = document.getElementById('main_value');
    const buttons = document.querySelectorAll('.calc-btn');
    const clearBtn = document.getElementById('clear-btn');
    const backspaceBtn = document.getElementById('backspace-btn');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const value = button.value;
            if (value === '=') {
                calculate();
            } else {
                expression += value;
                resultField.value = expression;
            }
        });
    });

    clearBtn.addEventListener('click', () => {
        expression = '';
        resultField.value = '';
    });

    backspaceBtn.addEventListener('click', () => {
        expression = expression.slice(0, -1);  // remove last character
        resultField.value = expression;
    });
});

function calculate() {
    console.log("Calculate triggered!");
    fetch("includes/calchandler.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "expression=" + encodeURIComponent(expression)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then(data => {
        document.getElementById('main_value').value = data;
        expression = data;
    })
    .catch(error => {
        console.error("Error during fetch:", error);
    });
}


