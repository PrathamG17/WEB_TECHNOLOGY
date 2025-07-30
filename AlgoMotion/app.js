let array = [];
const container = $("#arrayContainer");

$("#sortBtn").prop("disabled", false);
$("#resetBtn").prop("disabled", false);

$("#sortBtn").click(bubbleSort);
$("#resetBtn").click(generateBars);

function generateBars() {
    container.empty();
    array = [];
    for (let i = 0; i < 30; i++) {
        const value = Math.floor(Math.random() * 200) + 20;
        array.push(value);

        const label = $("<div></div>").text(value).css({
            textAlign: "center",
            fontSize: "12px",
            marginBottom: "4px"
        });

        const bar = $("<div></div>").css({
            height: `${value * 1.2}px`, // scaled height
            width: "24px",              // bigger width
            backgroundColor: "steelblue",
            margin: "0 2px"
        });

        const barWrapper = $("<div></div>").css({
            display: "flex",
            flexDirection: "column",
            alignItems: "center"
        });

        barWrapper.append(label).append(bar);
        container.append(barWrapper);
    }
}

//bubble sort 
async function bubbleSort() {
    const bars = $("#arrayContainer").children().map(function () {
        return $(this).children().eq(1); // bar element
    });

    for (let i = 0; i < array.length; i++) {
        for (let j = 0; j < array.length - i - 1; j++) {
            // Highlight bars being compared
            $(bars[j]).css("background-color", "red");
            $(bars[j + 1]).css("background-color", "red");

            await sleep(100); // pause for animation

            if (array[j] > array[j + 1]) {
                // Swap array values
                let temp = array[j];
                array[j] = array[j + 1];
                array[j + 1] = temp;

                // Swap bar heights
                $(bars[j]).css("height", `${array[j] * 1.2}px`);
                $(bars[j + 1]).css("height", `${array[j + 1] * 1.2}px`);

                // Swap labels
                $(bars[j].parent()).children().eq(0).text(array[j]);
                $(bars[j + 1].parent()).children().eq(0).text(array[j + 1]);
            }

            // Reset colors
            $(bars[j]).css("background-color", "steelblue");
            $(bars[j + 1]).css("background-color", "steelblue");
        }

        // Mark the sorted bar
        $(bars[array.length - i - 1]).css("background-color", "green");
    }
}


// Sleep function to delay execution
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
//user input code..
$("#loadUserArray").click(() => {
    const input = $("#userArrayInput").val();
    const values = input.split(",").map(num => parseInt(num.trim(), 10));
    if (values.every(num => !isNaN(num))) {
        array = values;
        generateBarsFromUser(array);
    } else {
        alert("Please enter only numbers separated by commas!");
    }
});

function generateBarsFromUser(userArray) {
    container.empty();
    array = userArray;

    userArray.forEach(value => {
        const label = $("<div></div>").text(value).css({
            textAlign: "center",
            fontSize: "12px",
            marginBottom: "4px"
        });

        const bar = $("<div></div>").css({
            height: `${value * 1.2}px`,
            width: "24px",
            backgroundColor: "steelblue",
            margin: "0 2px"
        });

        const barWrapper = $("<div></div>").css({
            display: "flex",
            flexDirection: "column",
            alignItems: "center"
        });

        barWrapper.append(label).append(bar);
        container.append(barWrapper);
    });
}
