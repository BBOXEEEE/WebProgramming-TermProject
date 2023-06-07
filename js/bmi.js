document.addEventListener("DOMContentLoaded", function() {
    const calcButton = document.querySelector(".calc");
    calcButton.addEventListener("click", function() {
        const heightInput = document.querySelector("input[name='height']");
        const weightInput = document.querySelector("input[name='weight']");
        const heightValue = heightInput.value.trim();
        const weightValue = weightInput.value.trim();

        if(heightValue === "" || weightValue === "") return;

        const height = parseFloat(heightValue) / 100;
        const weight = parseFloat(weightValue);

        if (!isNaN(height) && !isNaN(weight) && height > 0 && weight > 0) {
            const bmi = weight / (height * height);
            const range = document.createElement("p");
            let rangeText = "";
            if(bmi < 18.5) {
                rangeText = "  저체중";
                range.style.color = 'blue';
            } else if(bmi < 23) {
                rangeText = "  정상";
                range.style.color = "green";
            } else if(bmi < 25) {
                rangeText = "  과체중";
                range.style.color = "orange";
            } else {
                rangeText = "  비만";
                range.style.color = "red";
            }
            range.textContent = rangeText;
            range.style.fontWeight = "500";

            const resultContainer = document.createElement("div");
            resultContainer.classList.add("result");
            const firstColumn = document.createElement("div");
            const secondColumn = document.createElement("div");
            const thirdColumn = document.createElement("div");
            firstColumn.textContent = "키: " + (height*100) + " cm";
            secondColumn.textContent = "몸무게: " + weight + " kg";
            thirdColumn.textContent = "BMI 지수: " + bmi.toFixed(2) + "  ";
            thirdColumn.appendChild(range);

            resultContainer.appendChild(firstColumn);
            resultContainer.appendChild(secondColumn);
            resultContainer.appendChild(thirdColumn);

            const content = document.querySelector(".content");
            const prevResult = content.querySelector(".result");
            if(prevResult){
                content.removeChild(prevResult);
            }
            content.appendChild(resultContainer);
        }
    });
});