import { insertVariableAtCaret } from "../emailAttributes.js";

export const dropdown = (options) => {
    return `
    <div class="dropdown"  >
      <button id ="variableSelector"  class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Email Attributes
      </button>
      <div   class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        ${options}
      </div>
    </div>
    `;
};

export const select2 = (options) => {
    return `<select id ="variableSelector" class="js-example-basic-single form-control" name="variable">
    ${options}
</select>`;
};

export const formSelect = (options) => {
    return`<select id ="variableSelector" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
    ${options}
</select>`
};



export function handleChangeSelect(selected, mouseX, mouseY) {
    const select = document.getElementById("variableSelector");
    select.addEventListener("change", (event) => {
        const selectedValue = select.options[select.selectedIndex];
        const selector = selectedValue.value;
         
        
        console.log("Selected:", selector, selectedValue);
    })
}