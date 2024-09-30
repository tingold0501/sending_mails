import {
    dropdown,
    formSelect,
    select2,
} from "../components/dropdown.js"; // Giả định dropdown trả về HTML hợp lệ
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

    // Khi một thành phần được chọn
    editor.on("component:selected", (component) => {
        const selected = editor.getSelected();
        if (selected) {
            const el = selected.view.el;
            document.addEventListener(
                "keydown",
                function (event) {
                    if (event.key === "{") {
                        // Đặt vị trí của container chứa select2 tại vị trí con trỏ chuột
                        container.style.left = `${mouseX}px`;
                        container.style.top = `${mouseY}px`;

                        // Chèn nội dung select2 vào container
                        container.innerHTML = select2Content;

                        // Append container vào body
                        document.body.appendChild(container);

                        // Gán sự kiện change cho dropdown
                        const variableSelector = document.getElementById("variableSelector");
                        if (variableSelector) {
                            console.log("Variable Selector Found");
                            // Khi người dùng chọn một biến từ dropdown
                            variableSelector.addEventListener("change", (event) => {
                                const selectedValue = event.target.value; // Biến đã chọn

                                // 1. Lấy nội dung hiện tại của thành phần
                                let currentContent = el.textContent;

                                // 2. Tìm vị trí của dấu `{` đầu tiên trong nội dung
                                const firstIndex = currentContent.indexOf("{");

                                // 3. Nếu tìm thấy dấu `{`, thay thế nó bằng biến đã chọn
                                if (firstIndex !== -1) {
                                    // Tạo nội dung mới bằng cách thay dấu `{` bằng biến đã chọn
                                    const newContent =
                                        currentContent.substring(0, firstIndex) +
                                        selectedValue +
                                        currentContent.substring(firstIndex + 1); // Bỏ qua dấu `{`

                                    // 4. Cập nhật nội dung của thành phần
                                    el.textContent = newContent;

                                    console.log("Updated Content:", newContent);
                                }

                                // Loại bỏ dropdown sau khi chọn biến
                                container.remove();
                            });
                        } else {
                            console.log("Variable Selector Not Found");
                        }
                    }
                },
            );
        }
    });

    // Xóa container khi component không được chọn
    editor.on("component:deselected", (event) => {
        container.remove();
    });
};