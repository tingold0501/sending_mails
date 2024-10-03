import { select2 } from "../components/dropdown.js";
import { emailVariables } from "../emailAttributes.js";

export default (editor, plugin) => {
    const variableArray = [];
    let options = "";
    emailVariables.forEach((variable) => {
        options += `<option class="dropdown-item" value="${variable.value}">${variable.value}</option>`;
    });

    let a = "";
    emailVariables.forEach((variable) => {
        a += `<option class="dropdown-item" value="${variable.value}">${variable.value}</option>`;
    });
    const select2Content = select2(options);
    // const select2Content = dropdown2(a);

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

                        const variableArr= addVariable(selectedValue, variableArray);
                        const variableJSON = generateJSON(variableArray);
                        console.log(variableArray);
                        console.log(generateJSON(variableArray));
                        

                        var elText = el.textContent || "";

                        var newContent = replaceAt(
                            elText,
                            caretPosition,
                            selectedValue
                        );

                        console.log(newContent);

                        el.textContent = newContent;
                        selected.components().reset([newContent]);
                        container.remove();

                        console.log(editor.getHtml());
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

function addVariable(variable, variableArray) {
    variableArray.push(variable);
}
function generateJSON(variableArray) {
    const jsonObject = variableArray.reduce((acc, variable, index) => {
        acc[`variable_${index + 1}`] = variable;
        return acc;
    }, {});

    return JSON.stringify(jsonObject);
}

function sendAttribute(data) {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
        else if (xhr.readyState === 4 && xhr.status === 422) {
            console.log(xhr.responseText);
        }
        const formData = new FormData();
        formData.append("variables", data);
        xhr.open("POST", urlApi + "email-template-store", true);
        xhr.send(formData);
    }
}
