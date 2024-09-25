import { dropdown, formSelect, handleChangeSelect, select2 } from "../components/dropdown.js"; // Giả định dropdown trả về HTML hợp lệ
import { emailVariables } from "../emailAttributes.js";
export default (editor, plugin) => {
    let options = '';
    emailVariables.forEach(variable => {
        options += `<option id ="variableSelector" class="dropdown-item"  value="${variable.key}">${variable.key}</option>`;
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

    let isKeydownBound = false;

    // Hàm chèn nội dung vào vị trí con trỏ
   

    editor.on("component:selected", (event) => {
        const selected = editor.getSelected();
        const selectedHtml = selected.toHTML();
        if (!isKeydownBound) {
            document.addEventListener("keydown", function (event) {
                if (event.key === "{") {
                    console.log("Mouse position:", mouseX, mouseY);

                    // Đặt vị trí của container chứa select2 tại vị trí con trỏ chuột
                    container.style.left = `${mouseX}px`;
                    container.style.top = `${mouseY}px`;

                    // Chèn nội dung select2 vào container
                    container.innerHTML = select2Content;

                    // Append container vào body
                    document.body.appendChild(container);

                    // Kiểm tra xem phần tử dropdown có được khởi tạo đúng không
                    const variableSelector = document.getElementById("variableSelector");
                    if (variableSelector) {
                        console.log("Variable Selector Found");
                        // Gán sự kiện change cho dropdown
                        handleChangeSelect(selectedHtml);
                    } else {
                        console.log("Variable Selector Not Found");
                    }
                }
            });

            isKeydownBound = true; // Đảm bảo rằng sự kiện keydown chỉ được gắn một lần
        }
    });

    // Xóa container khi component không được chọn
    editor.on("component:deselected", (event) => {
        container.remove();
    });
};