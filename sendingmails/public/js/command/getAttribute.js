import {
    dropdown,
    formSelect,
    select2,
} from "../components/dropdown.js"; // Giả định dropdown trả về HTML hợp lệ
import { emailVariables } from "../emailAttributes.js";
import handleChangeEmailAttr from "../options/handleChangeEmailAttr.js";
export default (editor, plugin) => {
    let options = "";
    emailVariables.forEach((variable) => {
        options += `<option  class="dropdown-item"  value="${variable.key}">${variable.key}</option>`;
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

    // Theo dõi vị trí con trỏ chuột
    document.addEventListener("mousemove", (event) => {
        mouseX = event.clientX;
        mouseY = event.clientY;
    });

    // Hàm chèn nội dung vào vị trí con trỏ

    editor.on("component:selected", (event) => {
        var selected = editor.getSelected();
        if (selected) {
            const oldValue = selected.view.el.textContent;
            document.addEventListener("keydown", function (event) {
                if (event.key === "{") {
                    // Đặt vị trí của container chứa select2 tại vị trí con trỏ chuột
                    container.style.left = `${mouseX}px`;
                    container.style.top = `${mouseY}px`;

                    // Chèn nội dung select2 vào container
                    container.innerHTML = select2Content;

                    // Append container vào body
                    document.body.appendChild(container);

                    // Kiểm tra xem phần tử dropdown có được khởi tạo đúng không
                    const variableSelector =
                        document.getElementById("variableSelector");
                    if (variableSelector) {
                        console.log("Variable Selector Found");
                        // Gán sự kiện change cho dropdown
                        handleChangeEmailAttr(selected,oldValue,mouseX,container);
                    } else {
                        console.log("Variable Selector Not Found");
                    }
                }
            });
            console.log(selected);
        }
    });

    // Xóa container khi component không được chọn
    editor.on("component:deselected", (event) => {
        container.remove();
    });
};
