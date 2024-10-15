import { select2 } from "../components/dropdown.js";

export default (editor, plugin) => {
    const variableArray = [];
    let options = "";
    variables.forEach((variable) => {
        options += `<option class="dropdown-item" placeholder="${variable.placeholder}" data-key="${variable.key}" value="${variable.name}">${variable.name}</option>`;
    });
    
    const select2Content = select2(options);

    const container = document.createElement("div");
    container.id = "select-container";
    container.style.position = "absolute";
    container.style.zIndex = "9999";

    let mouseX = 0;
    let mouseY = 0;

    document.addEventListener("mousemove", (event) => {
        mouseX = event.clientX;
        mouseY = event.clientY;
    });

    editor.on("component:deselected", () => {
        container.remove();
    });

    $(document).ready(function () {
        $(".js-example-basic-multiple").select2();
    });

    editor.on("component:selected", (component) => {
       
        const selected = editor.getSelected();
        const el = selected?.view?.el;

        if (selected === null || !el) return;

        if (component.get("type") !== "text") return;

        let caretPosition = 0;
        el.setAttribute("contenteditable", "true");

        el.addEventListener("keydown", (event) => {
            if (event.key === "{") {
                caretPosition = getCaretPosition(el);

                container.style.left = `${mouseX}px`;
                container.style.top = `${mouseY}px`;
                container.innerHTML = select2Content;
                document.body.appendChild(container);

                const variableSelector =
                    document.getElementById("variableSelector");
                variableSelector.addEventListener(
                    "change",
                    (event) => {
                        const selectedValue = event.target.value;
                        var selectedOption =
                            event.target.options[event.target.selectedIndex];
                        var selectedName = selectedOption.getAttribute("value");

                        var selectedKey =
                            selectedOption.getAttribute("data-key");
                        
                        var variablePlaceholder = selectedOption.getAttribute("placeholder");
                        addVariable( selectedKey,selectedName,variablePlaceholder, variableArray);
                        console.log(variableArray);

                        localStorage.setItem(
                            "variable_keys",
                            JSON.stringify(variableArray)
                        );
                        
                        var elText = el.textContent || "";

                        var newContent = replaceAt(
                            elText,
                            caretPosition,
                            selectedValue,
                            selectedKey
                        );
                        el.textContent = newContent;
                        selected.components().reset([newContent]);
                        container.remove();
                    },
                    { once: true }
                );
            }
        });
    });
};

function getCaretPosition(el) {
    let caretOffset = 0;
    const doc = el.ownerDocument || el.document;
    const win = doc.defaultView || doc.parentWindow;
    const sel = win.getSelection();

    if (sel.rangeCount > 0) {
        const range = sel.getRangeAt(0);
        const preCaretRange = range.cloneRange();
        preCaretRange.selectNodeContents(el);
        preCaretRange.setEnd(range.endContainer, range.endOffset);
        caretOffset = preCaretRange.toString().length;
    }
    return caretOffset;
}

function replaceAt(text, index, replacement) {
    return text.substring(0, index) + replacement + text.substring(index + 1);
}

function addVariable(variable, variableName,variablePlaceholder, variableArray) {
    const variableObject = {
        placeholder: variablePlaceholder,
        name: variableName,  
        key: variable         
    };
    variableArray.push(variableObject);  // Đẩy đối tượng này vào mảng
}
function generateJSON(variableArray) {
    const jsonObject = variableArray.reduce((acc, variable, index) => {
        acc[`${index + 1}`] = variable;
        return acc;
    }, {});
    return JSON.stringify(jsonObject);
}
