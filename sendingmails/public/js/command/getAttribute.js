import { dropdown, formSelect, select2 } from "../components/dropdown.js"; // Giả định dropdown trả về HTML hợp lệ
import { emailVariables } from "../emailAttributes.js";

export default (editor, plugin) => {
    let options = "";
    emailVariables.forEach((variable) => {
        options += `<option class="dropdown-item" value="${variable.key}">${variable.key}</option>`;
    });

    // Sử dụng hàm dropdown để tạo nội dung select2
    const select2Content = select2(options);

    // Tạo container để chứa select2
    let container = document.createElement("div");
    container.id = "select-container";
    container.style.position = "absolute";
    container.style.zIndex = "9999";

    // Biến lưu trữ vị trí chuột hiện tại
    let mouseX = 0;
    let mouseY = 0;

    // Theo dõi vị trí con trỏ chuột để hiển thị dropdown tại vị trí này
    document.addEventListener("mousemove", (event) => {
        mouseX = event.clientX;
        mouseY = event.clientY;
    });

    editor.on("component:selected", (component) => {
        const selected = editor.getSelected();
        if (selected) {
            const el = selected.view.el;
            document.addEventListener("keydown", function (event) {
                if (event.key === "{") {
                    container.style.left = `${mouseX}px`;
                    container.style.top = `${mouseY}px`;

                    container.innerHTML = select2Content;

                    document.body.appendChild(container);

                    const variableSelector =
                        document.getElementById("variableSelector");
                    if (variableSelector) {
                        console.log("Variable Selector Found");
                        variableSelector.addEventListener("change", (event) => {
                            var selectedValue = event.target.value;

                            let currentContent = el.textContent;

                            var firstIndex = currentContent.indexOf("{");
                            var startSelection = currentContent.slice(
                                0,
                                firstIndex
                            );
                            var endSelection = currentContent.slice(
                                firstIndex + 1
                            );

                            if (firstIndex !== -1) {
                                var newContent =
                                    startSelection +
                                    selectedValue +
                                    endSelection;

                                el.textContent = newContent;
                                editor.onReady(async function () {
                                    console.log("Editor Ready");
                                    
                                    var body = editor.getHtml();
                                    console.log(body);
                                });                               
                                console.log("Updated Content:", el.textContent);
                            }
                          
                            console.log(el.textContent);
                            container.remove();
                           
                        });
                       
                    } else {
                        console.log("Variable Selector Not Found");
                    }
                }
            });
        }
    });

    editor.on("component:deselected", (event) => {
        container.remove();
    });
};
